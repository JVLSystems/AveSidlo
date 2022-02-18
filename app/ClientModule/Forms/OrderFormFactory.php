<?php

declare(strict_types=1);

namespace App\ClientModule\Forms;


use App\Forms\FormFactory;
use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\Order;
use App\Model\Database\Entity\Services;
use App\Model\Database\Entity\User;
use App\Model\Database\EntityManager;
use Nette\Application\UI\Form;
use Nette\SmartObject;

final class OrderFormFactory
{
    use SmartObject;

    private FormFactory $factory;

    private EntityManager $entityManager;

    /** @var Order|null */
    private $order;


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
     * @param Order $order
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
    }


    /**
     * @param callable $onSuccess
     * @param callable $onError
     * @param array|null $values
     * @return Form
     */
    public function create(callable $onSuccess, callable $onError, User $loginUser): Form
    {
        $form = $this->factory->create();

        $form->addSelect('services', null, ['' => 'vyberte...'] + $this->entityManager->getRepository(Services::class)->findPairs('id', 'name'))
            ->setRequired('Vyberte službu!');

        $form->addSelect('companies', null, ['' => 'vyberte...'] + $this->entityManager->getRepository(Company::class)->findPairs('id', 'name', ['user' => $loginUser]))
            ->setRequired(FALSE);

        $form->addText('period')
            ->setDefaultValue(12)
            ->setHtmlType('number')
            ->setRequired(FALSE);

        $form->addTextArea('note')
            ->setRequired(FALSE);

        $form->addCheckbox('accept')
            ->setRequired('Musíte súhlasiť s obchodnými podmienkami!')
            ->addRule(Form::EQUAL, 'Musíte súhlasiť s obchodnými podmienkami!', $form['accept']);

        $form->addSubmit('submit')
            ->setValidationScope([$form['services'], $form['accept']]);

        $form->onError[] = function (Form $form) use ($onError): void {
            $onError($form);
        };

        $form->onSuccess[] = function (Form $form, \stdClass $values) use ($onSuccess, $loginUser): void {
            $this->entityManager->getRepository(Order::class)->addOrder(
                $values->services,
                $loginUser,
                (isset($values->companies) ? (int) $values->companies : NULL),
                (isset($values->period) ? (int) $values->period : NULL),
                (isset($values->note) ? $values->note : NULL)
            );

            $onSuccess();
        };

        return $form;
    }
}
