<?php

declare(strict_types=1);

namespace App\FrontModule\Forms;


use App\Forms\FormFactory;
use App\Model\Exception\Runtime\AuthenticationException;
use Nette\Application\UI\Form;
use Nette\Security\User;
use Nette\SmartObject;

final class LoginFormFactory
{
	use SmartObject;

	private FormFactory $factory;

    private User $user;


    /**
     * @param FormFactory $factory
     * @param User $user
     */
    public function __construct(FormFactory $factory, User $user)
	{
		$this->factory = $factory;
        $this->user = $user;
	}


    /**
     * @param callable $onSuccess
     * @param callable $onError
     * @return Form
     */
    public function create(callable $onSuccess, callable $onError): Form
	{
		$form = $this->factory->create();
		$form->addEmail('email', 'E-mail:')
			->setRequired('Zadajte váš e-mail');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím, zadajte heslo.');

		$form->addSubmit('submit');

        $form->onError[] = function (Form $form) use ($onError): void {
            $onError($form);
        };

		$form->onSuccess[] = function (Form $form, \stdClass $values) use ($onSuccess): void {
            try {
                $this->user->login($values->email, $values->password);
            } catch (AuthenticationException $e) {
                $form->addError('Zadaný e-mail alebo heslo neexistuje, alebo váš účet nie je aktivovaný!');
                return;
            }

            $onSuccess();
		};

		return $form;
	}
}
