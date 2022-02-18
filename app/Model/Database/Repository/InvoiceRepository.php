<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumBankAccount;
use App\Model\Database\Entity\EnumTypePayment;
use App\Model\Database\Entity\EnumVat;
use App\Model\Database\Entity\Invoice;
use App\Model\Database\Entity\Supplier;
use App\Model\Database\Entity\User;
use App\Model\Utils\DateTime;
use Nette\Utils\Random;

/**
 * @method Invoice|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Invoice|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Invoice[] findAll()
 * @method Invoice[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Invoice>
 */
class InvoiceRepository extends AbstractRepository
{

    /**
     * @param Company $company
     * @param User $user
     * @param string $note
     * @param float $price
     * @return Invoice
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function add(Company $company, User $user, string $note, float $price): Invoice
    {
        $number         = $this->createNumber();
        $nowDate        = new DateTime();
        $vs             = Random::generate(10, '0-9');
        $vat            = $this->_em->getRepository(EnumVat::class)->getDefaultVat();
        $priceWithVat   = $price * (1 + ($vat->getPercentage() / 100));

        $invoice = new Invoice($number);
        $invoice->setSupplier($this->getDefaultSupplier());
        $invoice->setPurchaser($company);
        $invoice->setTypePayment($this->getDefaultTypePayment());
        $invoice->setBankAccount($this->getDefaultBankAccount());
        $invoice->setVat($vat);
        $invoice->setUser($user);
        $invoice->setIssueDateAt($nowDate);
        $invoice->setDueDateAt($nowDate->modify('+' . Invoice::DUE_DATE_MODIFY_DEFAULT));
        $invoice->setVs($vs);
        $invoice->setSs(Invoice::DEFAULT_SS_SYMBOL);
        $invoice->setNote($note);
        $invoice->setPriceWithoutVat($price);
        $invoice->setPriceWithVat($priceWithVat);

        $this->_em->persist($invoice);
        $this->_em->flush();

        return $invoice;
    }


    /**
     * @return EnumBankAccount
     */
    public function getDefaultBankAccount(): EnumBankAccount
    {
        return $this->_em->getRepository(EnumBankAccount::class)->findOneBy(['code' => '7500'], ['id' => 'ASC']);
    }


    /**
     * @return Supplier
     */
    public function getDefaultSupplier(): Supplier
    {
        return $this->_em->getRepository(Supplier::class)->findOneBy(['ico' => '50897233']);
    }


    /**
     * @return EnumTypePayment
     */
    public function getDefaultTypePayment(): EnumTypePayment
    {
        return $this->_em->getRepository(EnumTypePayment::class)->find(1);
    }


    /**
     * @return string
     */
    public function createNumber(): string
    {
        while(1) {
            $number = 'I-' . Random::generate(10, '0-9A-Z');
            $invoice = $this->_em->getRepository(Invoice::class)->findOneBy(['number' => $number]);

            if (!$invoice) break;
        }

        return $number;
    }

}