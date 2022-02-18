<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\EnumVat;

/**
 * @method EnumVat|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method EnumVat|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method EnumVat[] findAll()
 * @method EnumVat[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<EnumVat>
 */
class EnumVatRepository extends AbstractRepository
{
    /** @const */
    const DEFAULT_VAT = 20;


    /**
     * @return EnumVat
     */
    public function getDefaultVat(): EnumVat
    {
        return $this->_em->getRepository(EnumVat::class)->findOneBy(['percentage' => self::DEFAULT_VAT]);
    }

}