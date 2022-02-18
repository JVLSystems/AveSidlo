<?php

declare(strict_types=1);

namespace App\ClientModule\Presenters;


use App\ClientModule\Forms\CompanyFormFactory;
use App\Model\Database\Entity\Company;
use Krehak\SkFirmy\Fields\BusinessId;
use Krehak\SkFirmy\SkFirmy;
use Nette\Application\BadRequestException;
use Nette\Application\UI\Form;
use Ublaboo\DataGrid\DataGrid;

final class CompanyPresenter extends SecuredPresenter
{
    /** @var CompanyFormFactory @inject */
    public $companyFormFactory;


    /**
     * @param $id
     * @throws BadRequestException
     */
    public function actionEdit($id)
    {
        $company = $this->entityManager->getRepository(Company::class)->find($id);
        if (!$company) {
            throw new BadRequestException();
        }

        $this->template->company = $company;
    }


    /**
     * @param $ico
     */
    public function handleSearch($ico)
    {
        $skCompany = new SkFirmy();
        $results = $skCompany->find(new BusinessId($ico))->getResults();

        if (isset($results[0])) {
            $this->sendJson($results[0]);
        }

        $this->sendJson([]);
    }

    public function handleGetData($id)
    {
        /** @var Company $company */
        $company = $this->entityManager->getRepository(Company::class)->find($id);
        if (!$company) {
            throw new BadRequestException();
        }

        $this->sendJson($company->toForm());
    }


    /**
     * @param $id
     */
    public function handleDelete($id)
    {

    }


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentCompanyForm(): Form
    {
        if ($this->getParameter('id')) {
            $company = $this->entityManager->getRepository(Company::class)->find($this->getParameter('id'));
            $this->companyFormFactory->setCompany($company);
        }

        $form = $this->companyFormFactory->create(function () {
            $this->flashMessage('Spoločnosť bola úspešne vytvorená, do e-mailu sme Vám zaslali platobné podmienky.', 'success');
            $this->redirect('this');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        });
        return $form;
    }


    /**
     * @return DataGrid
     */
    public function createComponentCompanyGrid(): DataGrid
    {
        $grid = new DataGrid();
        $grid->setDataSource($this->entityManager->getCompanyRepository()->getDataSource($this->getLoginUser()));
        $grid->setTemplateFile(__DIR__ . '/templates/Company/grids/custom_datagrid_template.latte');
        $grid->setTranslator($this->getDataGridTranslator());
        /*$grid->addGroupButtonAction('Zmazať vybrané')->onClick[] = [$this, 'deleteCompanies'];
        $grid->addGroupButtonAction('Uhradiť vybrané')->onClick[] = [$this, 'deleteCompanies'];*/
        $grid->setDefaultSort(['id' => 'DESC']);
        $grid->setMultiSortEnabled();
        $grid->setDefaultPerPage(20);
        $grid->setOuterFilterRendering();

        //$grid->addColumnText('id', 'ID');

        $grid->addColumnText('name', 'Názov spoločnosti')
            ->setTemplate(__DIR__ . '/templates/Company/grids/name_column.latte')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('ico', 'IČO')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('dic', 'DIČ')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('icdph', 'IČDPH')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('street', 'Adresa')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('isPaid', 'Uhradené')
            ->setTemplate(__DIR__ . '/templates/Company/grids/isPaid_column.latte')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('isMain', 'Fakturačná spoločnosť')
            ->setTemplate(__DIR__ . '/templates/Company/grids/isMain_column.latte')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnDateTime('paymentAt', 'Doba úhrady')
            ->setAlign('left');

        $grid->addColumnDateTime('action', '')
            ->setTemplate(__DIR__ . '/templates/Company/grids/action_column.latte');

        //$grid->addColumnText('action', 'Akcie');

        /****** GLOBAL ******/



        return $grid;
    }

}
