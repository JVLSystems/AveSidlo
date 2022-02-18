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
 * @ORM\Table(name="`enum__bank_accounts`")
 */
class EnumBankAccount extends AbstractEntity
{
    use TId;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $iban;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $swift;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    private $bankNumber;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    private $bankCode;




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
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getSwift(): string
    {
        return $this->swift;
    }

    /**
     * @param string $swift
     */
    public function setSwift(string $swift): void
    {
        $this->swift = $swift;
    }

    /**
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }

    /**
     * @param string|null $bankNumber
     */
    public function setBankNumber(?string $bankNumber): void
    {
        $this->bankNumber = $bankNumber;
    }

    /**
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * @param string|null $bankCode
     */
    public function setBankCode(?string $bankCode): void
    {
        $this->bankCode = $bankCode;
    }

}