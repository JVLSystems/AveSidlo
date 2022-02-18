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
 * @ORM\Entity
 * @ORM\Table(name="`enum__mj`")
 */
class EnumMj extends AbstractEntity
{
    use TId;

    /** @const */
    public const CODE_MONTH = 'MONTH';


    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $code;



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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

}