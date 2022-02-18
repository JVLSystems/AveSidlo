<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use App\Model\Utils\DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\InvoiceRepository")
 * @ORM\Table(name="`invoice`")
 * @ORM\HasLifecycleCallbacks
 */
class Invoice extends AbstractEntity
{
    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    /** @const */
    public const IS_PAID = true,
                IS_NOT_PAID = false;


    /** @const */
    public const DUE_DATE_MODIFY_DEFAULT = '14 days';

    /** @const */
    public const DEFAULT_SS_SYMBOL = '0308';


    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE, unique=true)
     */
    private $number;

    /**
     * @var Supplier|null
     * @ORM\ManyToOne(targetEntity="Supplier")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

    /**
     * @var Company|null
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="purchaser_id", referencedColumnName="id")
     */
    private $purchaser;

    /**
     * @var EnumTypePayment|null
     * @ORM\ManyToOne(targetEntity="EnumTypePayment")
     * @ORM\JoinColumn(name="type_payment_id", referencedColumnName="id")
     */
    private $typePayment;

    /**
     * @var EnumBankAccount|null
     * @ORM\ManyToOne(targetEntity="EnumBankAccount")
     * @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     */
    private $bankAccount;

    /**
     * @var EnumVat|null
     * @ORM\ManyToOne(targetEntity="EnumVat")
     * @ORM\JoinColumn(name="vat_id", referencedColumnName="id")
     */
    private $vat;

    /**
     * @var User|null
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime", nullable=FALSE)
     */
    private $issueDateAt;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime", nullable=FALSE)
     */
    private $dueDateAt;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=TRUE)
     */
    private $vs;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=TRUE)
     */
    private $ss;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=TRUE)
     */
    private $note;

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
     * @var bool
     * @ORM\Column(type="boolean", nullable=FALSE)
     */
    private $isPaid;

    /**
     * @var DateTime|null
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $paidDateAt;

    /**
     * @var InvoiceItem[]|null
     * @ORM\OneToMany(targetEntity="InvoiceItem", mappedBy="invoice")
     */
    private $items;




    /**
     * @param string $ico
     */
    public function __construct(string $number)
    {
        $this->number = $number;
        $this->isPaid = self::IS_NOT_PAID;
        $this->items = new ArrayCollection();
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
     * @return Supplier|null
     */
    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    /**
     * @param Supplier|null $supplier
     */
    public function setSupplier(?Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    /**
     * @return Company|null
     */
    public function getPurchaser(): ?Company
    {
        return $this->purchaser;
    }

    /**
     * @param Company|null $purchaser
     */
    public function setPurchaser(?Company $purchaser): void
    {
        $this->purchaser = $purchaser;
    }

    /**
     * @return EnumTypePayment|null
     */
    public function getTypePayment(): ?EnumTypePayment
    {
        return $this->typePayment;
    }

    /**
     * @param EnumTypePayment|null $typePayment
     */
    public function setTypePayment(?EnumTypePayment $typePayment): void
    {
        $this->typePayment = $typePayment;
    }

    /**
     * @return EnumBankAccount|null
     */
    public function getBankAccount(): ?EnumBankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param EnumBankAccount|null $bankAccount
     */
    public function setBankAccount(?EnumBankAccount $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
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
     * @return DateTime
     */
    public function getIssueDateAt(): DateTime
    {
        return $this->issueDateAt;
    }

    /**
     * @param DateTime $issueDateAt
     */
    public function setIssueDateAt(DateTime $issueDateAt): void
    {
        $this->issueDateAt = $issueDateAt;
    }

    /**
     * @return DateTime
     */
    public function getDueDateAt(): DateTime
    {
        return $this->dueDateAt;
    }

    /**
     * @param DateTime $dueDateAt
     */
    public function setDueDateAt(DateTime $dueDateAt): void
    {
        $this->dueDateAt = $dueDateAt;
    }

    /**
     * @return string|null
     */
    public function getVs(): ?string
    {
        return $this->vs;
    }

    /**
     * @param string|null $vs
     */
    public function setVs(?string $vs): void
    {
        $this->vs = $vs;
    }

    /**
     * @return string|null
     */
    public function getSs(): ?string
    {
        return $this->ss;
    }

    /**
     * @param string|null $ss
     */
    public function setSs(?string $ss): void
    {
        $this->ss = $ss;
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
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->isPaid;
    }

    /**
     * @param bool $isPaid
     */
    public function setIsPaid(bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * @return DateTime|null
     */
    public function getPaidDateAt(): ?DateTime
    {
        return $this->paidDateAt;
    }

    /**
     * @param DateTime|null $paidDateAt
     */
    public function setPaidDateAt(?DateTime $paidDateAt): void
    {
        $this->paidDateAt = $paidDateAt;
    }

    /**
     * @return InvoiceItem[]|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param InvoiceItem[]|null $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
    }


    /********************  HELPERS  ********************/

    public function paid()
    {
        $this->isPaid = Invoice::IS_PAID;
    }

    /** @ORM\PreUpdate */
    public function preUpdate()
    {
        $this->updatedAt = new DateTime();
    }

}