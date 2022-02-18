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
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\OrderRepository")
 * @ORM\Table(name="`order`")
 * @ORM\HasLifecycleCallbacks
 */
class Order extends AbstractEntity
{
    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    /**
     * @var User|null
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Company|null
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /**
     * @var Invoice|null
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     */
    private $invoice;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $number;

    /**
     * @var EnumVat|null
     * @ORM\ManyToOne(targetEntity="EnumVat")
     * @ORM\JoinColumn(name="vat_id", referencedColumnName="id")
     */
    private $vat;

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
     * @var string|null
     * @ORM\Column(type="text", nullable=TRUE)
     */
    private $note;

    /**
     * @var OrderItem[]|null
     * @ORM\OneToMany(targetEntity="OrderItem", mappedBy="order")
     */
    private $items;



    public function __construct(string $number)
    {
        $this->number = $number;
        $this->items = new ArrayCollection();
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Company|null
     */
    public function getCompany(): ?Company
    {
        return $this->company;
    }

    /**
     * @param Company|null $company
     */
    public function setCompany(?Company $company): void
    {
        $this->company = $company;
    }

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
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
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
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return OrderItem[]|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param OrderItem[]|null $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
    }

    /**********  HELPERS  **********/

    /** @ORM\PreUpdate */
    public function preUpdate()
    {
        $this->updatedAt = new DateTime();
    }

}