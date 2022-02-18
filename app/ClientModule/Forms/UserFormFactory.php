<?php

declare(strict_types=1);

namespace App\ClientModule\Forms;


use App\Forms\FormFactory;
use App\Model\Database\Entity\User;
use App\Model\Database\EntityManager;
use Nette\Application\UI\Form;
use Nette\SmartObject;

final class UserFormFactory
{
    use SmartObject;

    private FormFactory $factory;

    private User $user;

    private EntityManager $entityManager;


    /**
     * @param FormFactory $factory
     * @param User $user
     */
    public function __construct(FormFactory $factory, EntityManager $entityManager)
    {
        $this->factory = $factory;
        $this->entityManager = $entityManager;
    }


    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }


    /**
     * @param callable $onSuccess
     * @param callable $onError
     * @param array|null $values
     * @return Form
     */
    public function create(callable $onSuccess, callable $onError): Form
    {
        $form = $this->factory->create();

        $form->addText('name', 'Meno:')->setRequired('Vyplňte vaše meno!');
        $form->addEmail('email', 'E-mail:');
        $form->addText('phone', 'Telefón:')->setRequired('Vyplňte Váš telefón!');

        $form->addSubmit('submit');

        if ($this->user) {
            $form->setDefaults($this->user->toForm());
        }

        $form->onError[] = function (Form $form) use ($onError): void {
            $onError($form);
        };

        $form->onSuccess[] = function (Form $form, \stdClass $values) use ($onSuccess): void {
            $this->entityManager->getRepository(User::class)->update($values, $this->user);

            $onSuccess();
        };

        return $form;
    }
}
