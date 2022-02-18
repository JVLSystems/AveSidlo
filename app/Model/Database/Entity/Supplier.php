<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\SupplierRepository")
 * @ORM\Table(name="`supplier`")
 * @ORM\HasLifecycleCallbacks
 */
class Supplier extends AbstractEntity
{
    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    /** @const */
    public const IS_ACTIVE = true,
                IS_NOT_ACTIVE = false;


    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=FALSE, unique=TRUE)
     */
    private $ico;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=50, nullable=TRUE)
     */
    private $dic;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=50, nullable=TRUE)
     */
    private $icdph;

    /**
     * @var string|null
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
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $active;



    /**
     * @param string $ico
     */
    public function __construct(string $ico)
    {
        $this->ico = $ico;
        $this->activate();
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
     * @return string|null
     */
    public function getDic(): ?string
    {
        return $this->dic;
    }

    /**
     * @param string|null $dic
     */
    public function setDic(?string $dic): void
    {
        $this->dic = $dic;
    }

    /**
     * @return string|null
     */
    public function getIcdph(): ?string
    {
        return $this->icdph;
    }

    /**
     * @param string|null $icdph
     */
    public function setIcdph(?string $icdph): void
    {
        $this->icdph = $icdph;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     */
    public function setStreet(?string $street): void
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
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }


    /*********************** HELPERS **********************/


    public function activate()
    {
        $this->active = Supplier::IS_ACTIVE;
    }

}