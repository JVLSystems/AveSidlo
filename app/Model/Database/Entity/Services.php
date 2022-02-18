<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TId;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\ServiceRepository")
 * @ORM\Table(name="`services`")
 * @ORM\HasLifecycleCallbacks
 */
class Services extends AbstractEntity
{
    use TId;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var EnumVat|null
     * @ORM\ManyToOne(targetEntity="EnumVat")
     * @ORM\JoinColumn(name="vat_id", referencedColumnName="id")
     */
    private $vat;

    /**
     * @var float|null
     * @ORM\Column(type="float", nullable=TRUE)
     */
    private $priceWithoutVat;

    /**
     * @var float|null
     * @ORM\Column(type="float", nullable=TRUE)
     */
    private $priceWithVat;



    public function __construct(string $name)
    {
        $this->name = $name;
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
     * @return float|null
     */
    public function getPriceWithoutVat(): ?float
    {
        return $this->priceWithoutVat;
    }

    /**
     * @param float|null $priceWithoutVat
     */
    public function setPriceWithoutVat(?float $priceWithoutVat): void
    {
        $this->priceWithoutVat = $priceWithoutVat;
    }

    /**
     * @return float|null
     */
    public function getPriceWithVat(): ?float
    {
        return $this->priceWithVat;
    }

    /**
     * @param float|null $priceWithVat
     */
    public function setPriceWithVat(?float $priceWithVat): void
    {
        $this->priceWithVat = $priceWithVat;
    }

}