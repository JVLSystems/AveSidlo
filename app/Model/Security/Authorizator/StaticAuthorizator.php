<?php declare(strict_types = 1);

namespace App\Model\Security\Authorizator;

use App\Model\Database\Entity\User;
use Nette\Security\Permission;

final class StaticAuthorizator extends Permission
{

    /**
     * Create ACL
     */
    public function __construct()
    {
        $this->addRoles();
        $this->addResources();
        $this->addPermissions();
    }

    /**
     * Setup roles
     */
    protected function addRoles(): void
    {
        $this->addRole(User::ROLE_ADMIN);
    }

    /**
     * Setup resources
     */
    protected function addResources(): void
    {
        $this->addResource('Client:Homepage');
    }

    /**
     * Setup ACL
     */
    protected function addPermissions(): void
    {
        $this->allow(User::ROLE_ADMIN, [
            'Client:Homepage',
        ]);
    }

}