<?php

declare(strict_types=1);

namespace App\FrontModule\Presenters;


use App\FrontModule\Forms\ForgetPasswordFormFactory;
use App\FrontModule\Forms\LoginFormFactory;
use App\Presenters\BasePresenter;
use Nette\Application\UI\Form;

final class LoginPresenter extends BasePresenter
{
    /** @var LoginFormFactory @inject */
    public $loginFormFactory;

    /** @var ForgetPasswordFormFactory @inject */
    public $forgetPasswordFormFactory;


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentLoginForm(): Form
    {
        return $this->loginFormFactory->create(function () {
            $this->redirect(':Client:Homepage:default');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        });
    }


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentForgetPasswordForm(): Form
    {
        return $this->forgetPasswordFormFactory->create(function () {
            $this->redirect(':Client:Homepage:default');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        });
    }

}
