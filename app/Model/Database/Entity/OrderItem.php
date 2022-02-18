<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use App\Model\Utils\DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Nette\Security\SimpleIdentity;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\OrderItemRepository")
 * @ORM\Table(name="`order_items`")
 * @ORM\HasLifecycleCallbacks
 */
class OrderItem extends AbstractEntity
{
    use TId;

    /**
     * @var Order|null
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="items")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order;

    /**
     * @var EnumMj|null
     * @ORM\ManyToOne(targetEntity="EnumMj")
     * @ORM\JoinColumn(name="mj_id", referencedColumnName="id")
     */
    private $mj;

    /**
     * @var Services|null
     * @ORM\ManyToOne(targetEntity="Services")
     * @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     */
    private $service;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $priceWithoutVat;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $priceWithVat;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $quantity;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $priceMjWithoutVat;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $priceMjWithVat;



    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * @param Order|null $order
     */
    public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return EnumMj|null
     */
    public function getMj(): ?EnumMj
    {
        return $this->mj;
    }

    /**
     * @param EnumMj|null $mj
     */
    public function setMj(?EnumMj $mj): void
    {
        $this->mj = $mj;
    }

    /**
     * @return Services|null
     */
    public function getService(): ?Services
    {
        return $this->service;
    }

    /**
     * @param Services|null $service
     */
    public function setService(?Services $service): void
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPriceWithoutVat(): float
    {
        return $this->priceWithoutVat;
    }

    /**
     * @param float $priceWithoutVat
     */
    public function setPriceWithoutVat(float $priceWithoutVat): void
    {
        $this->priceWithoutVat = $priceWithoutVat;
    }

    /**
     * @return float
     */
    public function getPriceWithVat(): float
    {
        return $this->priceWithVat;
    }

    /**
     * @param float $priceWithVat
     */
    public function setPriceWithVat(float $priceWithVat): void
    {
        $this->priceWithVat = $priceWithVat;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPriceMjWithoutVat(): float
    {
        return $this->priceMjWithoutVat;
    }

    /**
     * @param float $priceMjWithoutVat
     */
    public function setPriceMjWithoutVat(float $priceMjWithoutVat): void
    {
        $this->priceMjWithoutVat = $priceMjWithoutVat;
    }

    /**
     * @return float
     */
    public function getPriceMjWithVat(): float
    {
        return $this->priceMjWithVat;
    }

    /**
     * @param float $priceMjWithVat
     */
    public function setPriceMjWithVat(float $priceMjWithVat): void
    {
        $this->priceMjWithVat = $priceMjWithVat;
    }

}