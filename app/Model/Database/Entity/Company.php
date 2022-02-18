<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\CompanyRepository")
 * @ORM\Table(name="`company`")
 * @ORM\HasLifecycleCallbacks
 */
class Company extends AbstractEntity
{
    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    public const STATUS_FRESH = 1;
    public const STATUS_ACTIVATED = 2;
    public const STATUS_BLOCKED = 3;

    public const STATUS = [self::STATUS_FRESH, self::STATUS_BLOCKED, self::STATUS_ACTIVATED];

    public const IS_PAID = 1;
    public const IS_NOT_PAID = 0;

    /** @const */
    public const IS_MAIN = true,
                IS_NOT_MAIN = false;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE, unique=false)
     */
    private $name;

    /**
     * @var User|null
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=FALSE, unique=TRUE)
     */
    private $ico;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=TRUE)
     */
    private $dic;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=TRUE)
     */
    private $icdph;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    private $street;

    /**
     * @var EnumCity|null
     * @ORM\ManyToOne(targetEntity="EnumCity")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @var EnumZip|null
     * @ORM\ManyToOne(targetEntity="EnumZip")
     * @ORM\JoinColumn(name="zip_id", referencedColumnName="id")
     */
    private $zip;

    /**
     * @var EnumState|null
     * @ORM\ManyToOne(targetEntity="EnumState")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    private $state;

    /**
     * @var \DateTime|NULL
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $paymentAt;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=TRUE)
     */
    private $isPaid;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=TRUE)
     */
    private $isMain;

    /**
     * @var int
     * @ORM\Column(type="integer", length=10, nullable=FALSE)
     */
    private $status;



    /**
     * @param string $ico
     */
    public function __construct(string $ico)
    {
        $this->ico = $ico;
        $this->status = self::STATUS_FRESH;
        $this->isPaid = self::IS_NOT_PAID;
        $this->isMain = self::IS_NOT_MAIN;
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
     * @return string
     */
    public function getIco(): string
    {
        return $this->ico;
    }

    /**
     * @param string $ico
     */
    public function setIco(string $ico): void
    {
        $this->ico = $ico;
    }

    /**
     * @return string
     */
    public function getDic(): string
    {
        return $this->dic;
    }

    /**
     * @param string $dic
     */
    public function setDic(string $dic): void
    {
        $this->dic = $dic;
    }

    /**
     * @return string
     */
    public function getIcdph(): string
    {
        return $this->icdph;
    }

    /**
     * @param string $icdph
     */
    public function setIcdph(string $icdph): void
    {
        $this->icdph = $icdph;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return EnumCity|null
     */
    public function getCity(): ?EnumCity
    {
        return $this->city;
    }

    /**
     * @param EnumCity|null $city
     */
    public function setCity(?EnumCity $city): void
    {
        $this->city = $city;
    }

    /**
     * @return EnumZip|null
     */
    public function getZip(): ?EnumZip
    {
        return $this->zip;
    }

    /**
     * @param EnumZip|null $zip
     */
    public function setZip(?EnumZip $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return EnumState|null
     */
    public function getState(): ?EnumState
    {
        return $this->state;
    }

    /**
     * @param EnumState|null $state
     */
    public function setState(?EnumState $state): void
    {
        $this->state = $state;
    }

    /**
     * @return \DateTime|NULL
     */
    public function getPaymentAt(): ?\DateTime
    {
        return $this->paymentAt;
    }

    /**
     * @param \DateTime|NULL $paymentAt
     */
    public function setPaymentAt(?\DateTime $paymentAt): void
    {
        $this->paymentAt = $paymentAt;
    }


    /**
     * @return bool
     */
    public function getIsPaid():? bool
    {
        return $this->isPaid;
    }

    /**
     * @param string $street
     */
    public function setIsPaid(bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * @param bool $isMain
     */
    public function setIsMain(bool $isMain): void
    {
        $this->isMain = $isMain;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        if (!in_array($status, self::STATUS)) {
            throw new InvalidArgumentException(sprintf('Unsupported status %s', $status));
        }

        $this->status = $status;
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


    // ******************************* HELPER METHODS *************************************

    /**
     * @return void
     */
    public function block(): void
    {
        $this->state = self::STATUS_BLOCKED;
    }


    /**
     * @return void
     */
    public function activate(): void
    {
        $this->state = self::STATUS_ACTIVATED;
    }


    /**
     * @return void
     */
    public function isActivated(): bool
    {
        return $this->state === self::STATUS_ACTIVATED;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->isPaid === self::IS_PAID;
    }

    /**
     * @return bool
     */
    public function isMain(): bool
    {
        return $this->isMain === self::IS_MAIN;
    }


    /**
     * @return void
     */
    public function paid(): void
    {
        $this->isPaid = self::IS_PAID;
    }

    /**
     * @return void
     */
    public function main(): void
    {
        $this->isMain = self::IS_MAIN;
    }


    /**
     * @return array
     */
    public function toForm(): array
    {
        return [
            'ico' => $this->ico,
            'dic' => $this->dic,
            'icdph' => $this->icdph,
            'name' => $this->name,
            'street' => $this->street,
            'city' => $this->city ? $this->city->getName() : '',
            'state' => $this->state ? $this->state->getId() : '',
            'zip' => $this->zip ? $this->zip->getName() : ''
        ];
    }

}