<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Company;
use App\Model\Database\Entity\EnumCity;
use App\Model\Database\Entity\EnumState;
use App\Model\Database\Entity\EnumZip;
use App\Model\Database\Entity\Invoice;
use App\Model\Database\Entity\InvoiceItem;
use App\Model\Database\Entity\Supplier;

/**
 * @method InvoiceItem|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method InvoiceItem|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method InvoiceItem[] findAll()
 * @method InvoiceItem[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<InvoiceItem>
 */
class InvoiceItemRepository extends AbstractRepository
{

}