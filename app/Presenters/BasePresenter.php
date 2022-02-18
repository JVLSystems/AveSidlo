<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\Database\Entity\User;
use App\Model\Database\EntityManager;
use App\Model\Utils\DateTime;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Ublaboo\DataGrid\Localization\SimpleTranslator;

abstract class BasePresenter extends Presenter
{
    /** @var EntityManager @inject */
    public $entityManager;


    /**
     * @return void
     */
    public function beforeRender()
    {
        parent::beforeRender();

        $this->template->now = new DateTime();
        $this->template->loginUser = $this->getLoginUser();
    }


    /**
     * @param Form $form
     */
    public function invalidSubmit(Form $form) {
        foreach ($form->getErrors() as $error) {
            $this->flashMessage($error, 'error');
        }
        $form->cleanErrors();
    }


    /**
     * @throws \Nette\Application\AbortException
     */
    public function handleLogout() {
        $this->getUser()->logout(true);
        $this->flashMessage('Odhlásenie bolo úspešné.', 'success');
        $this->redirect('this');
    }


    /**
     * @return User|null
     */
    public function getLoginUser():? User
    {
        if ($this->getUser()->isLoggedIn()) {
            return $this->entityManager->getUserRepository()->find($this->getUser()->getId());
        }

        return null;
    }


    /**
     * @return SimpleTranslator
     */
    public function getDataGridTranslator(): SimpleTranslator
    {
        return new SimpleTranslator([
            'ublaboo_datagrid.no_item_found_reset' => 'Žiadne položky neboli nájdené. Filter môžte vynulovať',
            'ublaboo_datagrid.no_item_found' => 'Žiadne položky neboli nájdené.',
            'ublaboo_datagrid.here' => 'tu',
            'ublaboo_datagrid.items' => 'Položky',
            'ublaboo_datagrid.all' => 'všetky',
            'ublaboo_datagrid.from' => 'z',
            'ublaboo_datagrid.reset_filter' => 'Resetovať filter',
            'ublaboo_datagrid.group_actions' => 'Hromadné akcie',
            'ublaboo_datagrid.show_all_columns' => 'Zobraziť všetky stĺpce',
            'ublaboo_datagrid.hide_column' => 'Skryť stĺpec',
            'ublaboo_datagrid.action' => 'Akcie',
            'ublaboo_datagrid.previous' => 'Predošlé',
            'ublaboo_datagrid.next' => 'Ďalšie',
            'ublaboo_datagrid.choose' => 'Vyberte',
            'ublaboo_datagrid.execute' => 'Vykonať',
            'ublaboo_datagrid.show_filter' => 'Zobraziť filter',
            'ublaboo_datagrid.per_page_submit' => 'Zmeniť',
        ]);
    }

}