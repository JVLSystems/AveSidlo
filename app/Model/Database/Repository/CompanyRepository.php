<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumCity;
use App\Model\Database\Entity\EnumState;
use App\Model\Database\Entity\EnumZip;
use App\Model\Database\Entity\User;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Company|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Company|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Company[] findAll()
 * @method Company[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Company>
 */
class CompanyRepository extends AbstractRepository
{

    /**
     * @param User $user
     * @return QueryBuilder
     */
    public function getDataSource(User $user): QueryBuilder
    {
        return $this->_em->getRepository(Company::class)
            ->createQueryBuilder('c')
            ->where('c.user = :user')
            ->setParameter('user', $user);
    }


    /**
     * @param \stdClass $values
     * @param Company|null $c
     * @return Company
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function addOrEdit(\stdClass $values, Company $c = null): Company
    {
        $company = $c ? : new Company($values->ico);
        $company->setName($values->name);
        $company->setDic($values->dic);
        $company->setIcdph($values->icdph);
        $company->setStreet($values->address);
        $company->setCity($this->saveCity($values->city));
        $company->setState($this->_em->getRepository(EnumState::class)->find($values->states));
        $company->setZip($this->saveZip($values->zip));

        $this->_em->persist($company);
        $this->_em->flush();

        return $company;
    }


    /**
     * @param string $city
     * @return EnumCity
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveCity(string $city): EnumCity
    {
        $c = $this->_em->getRepository(EnumCity::class)->findOneBy(['name' => trim($city)]);
        if (!$c) {
            $c = new EnumCity($city);
            $this->_em->persist($c);
            $this->_em->flush();
        }

        return $c;
    }


    /**
     * @param string $zip
     * @return EnumZip
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveZip(string $zip): EnumZip
    {
        $z = $this->_em->getRepository(EnumZip::class)->findOneBy(['name' => trim($zip)]);
        if (!$z) {
            $z = new EnumZip($zip);
            $this->_em->persist($z);
            $this->_em->flush();
        }

        return $z;
    }

}