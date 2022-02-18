<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumCity;
use App\Model\Database\Entity\EnumState;
use App\Model\Database\Entity\EnumZip;
use App\Model\Database\Entity\Supplier;

/**
 * @method Supplier|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Supplier|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Supplier[] findAll()
 * @method Supplier[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Supplier>
 */
class SupplierRepository extends AbstractRepository
{

}