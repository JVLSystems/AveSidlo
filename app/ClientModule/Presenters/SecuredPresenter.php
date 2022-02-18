<?php

namespace App\ClientModule\Presenters;

use App\Presenters\BasePresenter;

class SecuredPresenter extends BasePresenter
{
    public function startup()
    {
        parent::startup();
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect(':Front:Login:default');
        }
    }

}