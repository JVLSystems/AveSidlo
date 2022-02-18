<?php

declare(strict_types=1);

namespace App\FrontModule\Presenters;


use App\FrontModule\Forms\RegisterFormFactory;
use App\Presenters\BasePresenter;
use Nette\Application\UI\Form;

final class RegisterPresenter extends BasePresenter
{
    /** @var RegisterFormFactory @inject */
    public $registerFormFactory;


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentRegisterForm(): Form
    {
        return $this->registerFormFactory->create(function () {
            $this->flashMessage('Registrácia prebehla úspešne, pre úspešne dokončenie registrácie, prosím skontrolujte svoj e-mail.', 'success');
            $this->redirect('this');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        });
    }

}
