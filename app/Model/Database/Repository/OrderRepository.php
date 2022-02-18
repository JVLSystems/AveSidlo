<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumMj;
use App\Model\Database\Entity\Order;
use App\Model\Database\Entity\OrderItem;
use App\Model\Database\Entity\Services;
use App\Model\Database\Entity\User;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\QueryBuilder;
use Nette\Utils\Random;

/**
 * @method Order|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Order|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Order[] findAll()
 * @method Order[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Order>
 */
class OrderRepository extends AbstractRepository
{

    /**
     * @param User $user
     * @return QueryBuilder
     */
    public function getDataSource(User $user): QueryBuilder
    {
        return $this->_em->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->where('o.user = :user')
            ->setParameter('user', $user);
    }


    /**
     * @param string $service
     * @param User $user
     * @param string|null $company
     * @param int|null $period
     * @param string|null $note
     * @return Order
     * @throws NoResultException
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function addOrder(int $service, User $user, ?int $company, ?int $period, ?string $note): Order
    {
        $number = $this->createNumber();

        /** @var Services $service */
        $service = $this->_em->getRepository(Services::class)->find($service);
        if (!$service) throw new NoResultException();

        if ($company) {
            /** @var Company $c */
            $c = $this->_em->getRepository(Company::class)->find($company);
            if (!$c) throw new NoResultException();
        }



        $priceWithoutVat = $period ? (($service->getPriceWithoutVat() ?? 0) * $period) : ($service->getPriceWithoutVat() ?? 0);
        $priceWithVat = $period ? (($service->getPriceWithVat() ?? 0) * $period) : ($service->getPriceWithVat() ?? 0);

        $order = new Order($number);
        $order->setUser($user);
        $order->setVat($service->getVat());
        $order->setNumber($number);
        $order->setPriceWithoutVat($priceWithoutVat);
        $order->setPriceWithVat($priceWithVat);
        $order->setNote($note);

        $c = NULL;
        if ($company) {
            /** @var Company $c */
            $c = $this->_em->getRepository(Company::class)->find($company);
            if (!$c) throw new NoResultException();

            $order->setCompany($c);
        }

        $this->_em->persist($order);

        $orderItem = $this->_em->getRepository(OrderItem::class)->addItem(
            $order,
            $service,
            $this->_em->getRepository(EnumMj::class)->findOneBy(['code' => EnumMj::CODE_MONTH]),
            $service->getPriceWithoutVat(),
            ($c ? sprintf("%s - %s", $service->getName(), $c->getName()) : $service->getName()),
            $period
        );

        $this->_em->persist($orderItem);
        $this->_em->flush();

        return $order;
    }


    /**
     * @return string
     */
    public function createNumber(): string
    {
        while(1) {
            $number = Random::generate(10, '0-9A-Z');
            $order = $this->_em->getRepository(Order::class)->findOneBy(['number' => $number]);

            if (!$order) break;
        }

        return $number;
    }

}