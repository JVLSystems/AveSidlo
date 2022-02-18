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
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\EnumVatRepository")
 * @ORM\Table(name="`enum__vat`")
 * @ORM\HasLifecycleCallbacks
 */
class EnumVat extends AbstractEntity
{
    use TId;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=FALSE)
     */
    private $percentage;



    public function __construct(string $name)
    {
        $this->name = $name;
        $this->percentage = 0;
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
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     */
    public function setPercentage(float $percentage): void
    {
        $this->percentage = $percentage;
    }

}