<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use App\Model\Utils\DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\InvoiceItemRepository")
 * @ORM\Table(name="`invoice_item`")
 * @ORM\HasLifecycleCallbacks
 */
class InvoiceItem extends AbstractEntity
{
    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    /**
     * @var Invoice|null
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="items")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     */
    private $invoice;

    /**
     * @var EnumMj|null
     * @ORM\ManyToOne(targetEntity="EnumMj")
     * @ORM\JoinColumn(name="mj_id", referencedColumnName="id")
     */
    private $mj;

    /**
     * @var EnumVat|null
     * @ORM\ManyToOne(targetEntity="EnumVat")
     * @ORM\JoinColumn(name="vat_id", referencedColumnName="id")
     */
    private $vat;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=FALSE)
     */
    private $name;

    /**
     * @var float|null
     * @ORM\Column(type="float", nullable=TRUE)
     */
    private $priceMjWithoutVat;

    /**
     * @var float|null
     * @ORM\Column(type="float", nullable=TRUE)
     */
    private $priceMjWithVat;

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
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @param Invoice|null $invoice
     */
    public function setInvoice(?Invoice $invoice): void
    {
        $this->invoice = $invoice;
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
     * @return EnumVat|null
     */
    public function getVat(): ?EnumVat
    {
        return $this->vat;
    }

    /**
     * @param EnumVat|null $vat
     */
    public function setVat(?EnumVat $vat): void
    {
        $this->vat = $vat;
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
     * @return float|null
     */
    public function getPriceMjWithoutVat(): ?float
    {
        return $this->priceMjWithoutVat;
    }

    /**
     * @param float|null $priceMjWithoutVat
     */
    public function setPriceMjWithoutVat(?float $priceMjWithoutVat): void
    {
        $this->priceMjWithoutVat = $priceMjWithoutVat;
    }

    /**
     * @return float|null
     */
    public function getPriceMjWithVat(): ?float
    {
        return $this->priceMjWithVat;
    }

    /**
     * @param float|null $priceMjWithVat
     */
    public function setPriceMjWithVat(?float $priceMjWithVat): void
    {
        $this->priceMjWithVat = $priceMjWithVat;
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


    /**********  HELPERS  **********/

    /** @ORM\PreUpdate */
    public function preUpdate()
    {
        $this->updatedAt = new DateTime();
    }

}