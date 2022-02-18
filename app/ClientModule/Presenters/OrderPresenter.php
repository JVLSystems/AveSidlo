<?php

declare(strict_types=1);

namespace App\ClientModule\Presenters;



use App\ClientModule\Forms\OrderFormFactory;
use App\Model\Database\Entity\Order;
use Doctrine\ORM\QueryBuilder;
use Nette\Application\UI\Form;
use Ublaboo\DataGrid\DataGrid;

final class OrderPresenter extends SecuredPresenter
{
    /** @var OrderFormFactory @inject */
    public $orderFormFactory;


    /**
     * @return \Nette\Application\UI\Form
     */
    public function createComponentOrderForm(): Form
    {
        $form = $this->orderFormFactory->create(function () {
            $this->flashMessage('Objednávka bola úspešne odoslaná, v čo najkratšej dobe Vás budeme kontaktovať e-mailom.', 'success');
            $this->redirect('this');
        }, function ($form) {
            $this->invalidSubmit($form);
            $this->redirect('this');
        }, $this->getLoginUser());
        return $form;
    }


    /**
     * @return DataGrid
     */
    public function createComponentOrderGrid(): DataGrid
    {
        $grid = new DataGrid();
        $grid->setDataSource($this->entityManager->getOrderRepository()->getDataSource($this->getLoginUser()));
        $grid->setTemplateFile(__DIR__ . '/templates/Order/grids/custom_datagrid_template.latte');
        $grid->setTranslator($this->getDataGridTranslator());
        /*$grid->addGroupButtonAction('Zmazať vybrané')->onClick[] = [$this, 'deleteCompanies'];
        $grid->addGroupButtonAction('Uhradiť vybrané')->onClick[] = [$this, 'deleteCompanies'];*/
        $grid->setDefaultSort(['id' => 'DESC']);
        $grid->setMultiSortEnabled();
        $grid->setDefaultPerPage(20);
        $grid->setOuterFilterRendering();

        $grid->addColumnText('number', 'Číslo objednávky')
            ->setTemplate(__DIR__ . '/templates/Order/grids/number_column.latte')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnText('company', 'Spoločnosť')
            ->setTemplate(__DIR__ . '/templates/Order/grids/company_column.latte')
            ->setFilterText()
            ->setCondition(function (QueryBuilder $queryBuilder, string $value) {
                $queryBuilder->join('o.company', 'oc')
                    ->andWhere('oc.name LIKE :company')
                    ->setParameter('company', '%' . $value . '%');
            });

        $grid->addColumnNumber('priceWithVat', 'Cena s DPH')
            ->setSortable()
            ->setAlign('left')
            ->setRenderer(function (Order $order) {
                return sprintf("%s €", number_format($order->getPriceWithVat(), 2, ',', ''));
            })
            ->setFilterRange();

        $grid->addColumnText('createdAt', 'Vytvorená')
            ->setRenderer(function (Order $order) {
                return $order->getCreatedAt()->format('d.m.Y H:i');
            });



        return $grid;
    }


}
