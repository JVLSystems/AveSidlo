<?php declare(strict_types = 1);

namespace App\Model\Security\Authenticator;

use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\AuthenticationException;
use App\Model\Security\Passwords;
use Nette\Security\Authenticator;
use Nette\Security\IIdentity;

final class UserAuthenticator implements Authenticator
{
	/** @var EntityManager */
	protected $em;

	/** @var Passwords */
    protected $passwords;

	public function __construct(EntityManager $em, Passwords $passwords)
	{
		$this->em = $em;
		$this->passwords = $passwords;
	}

	/**
	 * @param string $username
	 * @param string $password
	 * @throws AuthenticationException
	 */
	public function authenticate(string $username, string $password): IIdentity
	{
		$user = $this->em->getUserRepository()->findOneBy(['email' => $username]);

		if (!$user) {
			throw new AuthenticationException('Nezadali ste správne údaje!', self::IDENTITY_NOT_FOUND);
		} elseif (!$user->isActivated()) {
			throw new AuthenticationException('Užívateľ nie je aktívny!', self::INVALID_CREDENTIAL);
		} elseif (!$this->passwords->verify($password, $user->getPassword())) {
			throw new AuthenticationException('Nezadali ste správne údaje!', self::INVALID_CREDENTIAL);
		}

		$user->changeLoggedAt();
		$this->em->flush();

		return $user->toIdentity();
	}

}