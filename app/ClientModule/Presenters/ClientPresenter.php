<?php

declare(strict_types=1);

namespace App\ClientModule\Presenters;


use App\ClientModule\Forms\UserFormFactory;
use Nette\Application\UI\Form;

final class ClientPresenter extends SecuredPresenter
{
    /** @var UserFormFactory @inject */
    public $userFormFactory;


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentUserForm(): Form
    {
        $this->userFormFactory->setUser($this->getLoginUser());

        $form = $this->userFormFactory->create(function () {
            $this->flashMessage('Váš účet bol aktualizovaný!', 'success');
            $this->redirect('this');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        });
        return $form;
    }

}
