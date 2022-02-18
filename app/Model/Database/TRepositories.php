<?php declare(strict_types = 1);

namespace App\Model\Database;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumVat;
use App\Model\Database\Entity\Order;
use App\Model\Database\Entity\User;
use App\Model\Database\Repository\CompanyRepository;
use App\Model\Database\Repository\EnumVatRepository;
use App\Model\Database\Repository\OrderRepository;
use App\Model\Database\Repository\UserRepository;

/**
 * @mixin EntityManager
 */
trait TRepositories
{

    /**
     * @return UserRepository
     */
    public function getUserRepository(): UserRepository
    {
        return $this->getRepository(User::class);
    }

    /**
     * @return CompanyRepository
     */
    public function getCompanyRepository(): CompanyRepository
    {
        return $this->getRepository(Company::class);
    }


    /**
     * @return EnumVatRepository
     */
    public function getVatRepository(): EnumVatRepository
    {
        return $this->getRepository(EnumVat::class);
    }

    /**
     * @return OrderRepository
     */
    public function getOrderRepository(): OrderRepository
    {
        return $this->getRepository(Order::class);
    }

}