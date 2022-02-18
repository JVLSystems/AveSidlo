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
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\EnumStateRepository")
 * @ORM\Table(name="`enum__state`")
 * @ORM\HasLifecycleCallbacks
 */
class EnumState extends AbstractEntity
{
    use TId;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE, unique=false)
     */
    private $name;

    /**
     * @var Company[]|null
     * @ORM\OneToMany(targetEntity="Company", mappedBy="state")
     */
    private $companies;



    public function __construct(string $name)
    {
        $this->name = $name;
        $this->companies = new ArrayCollection();
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
     * @return Company[]|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }

}