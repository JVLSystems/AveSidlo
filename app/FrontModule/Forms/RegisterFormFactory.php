<?php

declare(strict_types=1);

namespace App\FrontModule\Forms;


use App\Forms\FormFactory;
use App\Model\Database\EntityManager;
use App\Model\Security\Passwords;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Nette\Application\UI\Form;
use Nette\SmartObject;

final class RegisterFormFactory
{
	use SmartObject;

	private const PASSWORD_MIN_LENGTH = 7;

	private FormFactory $factory;

    private Passwords $passwords;

    private EntityManager $entityManager;


    /**
     * @param FormFactory $factory
     * @param Passwords $passwords
     * @param EntityManager $entityManager
     */
    public function __construct(FormFactory $factory, Passwords $passwords, EntityManager $entityManager)
	{
		$this->factory = $factory;
        $this->passwords = $passwords;
        $this->entityManager = $entityManager;
	}


    /**
     * @param callable $onSuccess
     * @param callable $onError
     * @return Form
     */
    public function create(callable $onSuccess, callable $onError): Form
	{
		$form = $this->factory->create();
		$form->addText('name', 'Meno priezvisko:')
			->setRequired('Zadajte vaše meno a priezvisko');

		$form->addEmail('email', 'E-mail:')
			->setRequired('Zadajte váš e-mail');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím, zadajte heslo.')
			->addRule($form::MIN_LENGTH, sprintf("Minimálny počet znakov hesla je %d", self::PASSWORD_MIN_LENGTH), self::PASSWORD_MIN_LENGTH);

        $form->addPassword('password2', 'Heslo znova:')
            ->setRequired()
            ->addRule($form::EQUAL, 'Zadané heslá sa nezhodujú!', $form['password']);

		$form->addSubmit('submit');

        $form->onError[] = function (Form $form) use ($onError): void {
            $onError($form);
        };

		$form->onSuccess[] = function (Form $form, \stdClass $values) use ($onSuccess): void {
			try {
                $this->entityManager->getUserRepository()->add($values->name, $values->email, $this->passwords->hash($values->password));
			} catch (UniqueConstraintViolationException $e) {
				$form['email']->addError('Užívateľ so zadaným e-mailom už existuje!');
				return;
			}

			$onSuccess();
		};

		return $form;
	}
}
