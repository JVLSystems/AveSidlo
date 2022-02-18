<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping;

/**
 * @method User|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method User|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method User[] findAll()
 * @method User[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<User>
 */
class UserRepository extends AbstractRepository
{

    /**
     * @param string $email
     * @return User|null
     */
    public function findOneByEmail(string $email): ?User
    {
        return $this->findOneBy(['email' => $email]);
    }


    /**
     * @param string $name
     * @param string $email
     * @param string $passwordHash
     * @return User|null
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function add(string $name, string $email, string $passwordHash):? User
    {
        $user = new User($name, $email, $passwordHash);

        $this->_em->persist($user);
        $this->_em->flush();

        return $user;
    }


    /**
     * @param \stdClass $data
     * @param User $user
     * @return User
     */
    public function update(\stdClass $data, User $user): User
    {
        $user->setName($data->name);
        $user->setPhone($data->phone);

        $this->_em->persist($user);
        $this->_em->flush();

        return $user;
    }

}