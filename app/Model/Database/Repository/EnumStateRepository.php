<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\EnumState;

/**
 * @method EnumState|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method EnumState|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method EnumState[] findAll()
 * @method EnumState[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<EnumState>
 */
class EnumStateRepository extends AbstractRepository
{

}