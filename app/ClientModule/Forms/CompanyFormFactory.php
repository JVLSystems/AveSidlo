<?php

declare(strict_types=1);

namespace App\ClientModule\Forms;


use App\Forms\FormFactory;
use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumState;
use App\Model\Database\EntityManager;
use Nette\Application\UI\Form;
use Nette\Security\User;
use Nette\SmartObject;

final class CompanyFormFactory
{
    use SmartObject;

    private FormFactory $factory;

    private EntityManager $entityManager;

    /** @var Company|null */
    private $company;


    /**
     * @param FormFactory $factory
     * @param EntityManager $entityManager
     */
    public function __construct(FormFactory $factory, EntityManager $entityManager)
    {
        $this->factory = $factory;
        $this->entityManager = $entityManager;
    }


    /**
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
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

        $form->addText('ico', 'IČO:')->setRequired('Zadajte IČO vašej spoločnosti');
        $form->addText('dic', 'DIČ:')->setRequired(false);
        $form->addText('icdph', 'IČDPH:')->setRequired(false);
        $form->addText('name', 'Názov:')->setRequired('Zadajte názov vašej spoločnosti');
        $form->addText('address', 'Adresa:')->setRequired('Zadajte adresu vašej spoločnosti');
        $form->addText('city', 'Mesto:')->setRequired('Zadajte mesto vašej spoločnosti');
        $form->addSelect('states', null, $this->entityManager->getRepository(EnumState::class)->findPairs('id', 'name'))->setRequired('Vyberte štát vašej spoločnosti');
        $form->addText('zip', 'PSČ:')->setRequired('Zadajte psč vašej spoločnosti');

        $form->addSubmit('submit');

        if ($this->company) {
            $form->setDefaults($this->company->toForm());
        }

        $form->onError[] = function (Form $form) use ($onError): void {
            $onError($form);
        };

        $form->onSuccess[] = function (Form $form, \stdClass $values) use ($onSuccess): void {
            $this->entityManager->getRepository(Company::class)->addOrEdit($values, $this->company);
            $onSuccess();
        };

        return $form;
    }
}
