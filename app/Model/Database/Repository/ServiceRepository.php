<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Services;

/**
 * @method Services|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Services|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Services[] findAll()
 * @method Services[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Services>
 */
class ServiceRepository extends AbstractRepository
{



}