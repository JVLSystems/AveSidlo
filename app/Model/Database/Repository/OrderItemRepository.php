<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\EnumMj;
use App\Model\Database\Entity\Order;
use App\Model\Database\Entity\OrderItem;
use App\Model\Database\Entity\Services;
use App\Model\Database\Entity\User;
use Doctrine\ORM\NoResultException;

/**
 * @method OrderItem|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method OrderItem|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method OrderItem[] findAll()
 * @method OrderItem[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<OrderItem>
 */
class OrderItemRepository extends AbstractRepository
{


    /**
     * @param Order $order
     * @param Services $service
     * @param EnumMj $mj
     * @param float $priceMjWithoutVat
     * @param float $priceWithoutVat
     * @param string|null $name
     * @param float|null $quantity
     * @return OrderItem
     */
    public function addItem(Order $order, Services $service, EnumMj $mj, float $priceMjWithoutVat, ?string $name, ?float $quantity): OrderItem
    {
        $quantity           = $quantity ?: 1;
        $vat                = $order->getVat() ? $order->getVat()->getPercentage() : 1;

        $priceMjWithVat     = $priceMjWithoutVat * (1 + ($vat / 100));
        $priceWithoutVat    = $priceMjWithoutVat * $quantity;
        $priceWithVat       = $priceWithoutVat * (1 + ($vat / 100));


        $item = new OrderItem(($name ?: $service->getName()));
        $item->setOrder($order);
        $item->setService($service);
        $item->setMj($mj);
        $item->setQuantity(($quantity ?: 0));
        $item->setPriceWithVat($priceWithVat);
        $item->setPriceWithoutVat($priceWithoutVat);
        $item->setPriceMjWithoutVat($priceMjWithoutVat);
        $item->setPriceMjWithVat($priceMjWithVat);

        return $item;
    }

}