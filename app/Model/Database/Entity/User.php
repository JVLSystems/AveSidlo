<?php

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use App\Model\Exception\Logic\InvalidArgumentException;
use App\Model\Utils\DateTime;
use Doctrine\ORM\Mapping as ORM;
use Nette\Security\SimpleIdentity;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\UserRepository")
 * @ORM\Table(name="`user`")
 * @ORM\HasLifecycleCallbacks
 */
class User extends AbstractEntity
{
    public const ROLE_ADMIN = 'admin';
    public const ROLE_USER = 'user';

    public const STATE_FRESH = 1;
    public const STATE_ACTIVATED = 2;
    public const STATE_BLOCKED = 3;

    public const STATES = [self::STATE_FRESH, self::STATE_BLOCKED, self::STATE_ACTIVATED];

    public const ROLES = [
        self::ROLE_USER => 'Užívateľ',
        self::ROLE_ADMIN => 'Administrátor'
    ];

    use TId;
    use TCreatedAt;
    use TUpdatedAt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE, unique=false)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE, unique=TRUE)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    private $phone;

    /**
     * @var int
     * @ORM\Column(type="integer", length=10, nullable=FALSE)
     */
    private $state;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=FALSE)
     */
    private $role;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=TRUE)
     */
    private $accessToken;

    /**
     * @var DateTime|NULL
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $accessTokenAt;

    /**
     * @var DateTime|NULL
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $lastLoggedAt;


    public function __construct(string $name, string $email,  string $passwordHash)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $passwordHash;

        $this->role = self::ROLE_USER;
        $this->state = self::STATE_FRESH;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPhone():? string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state): void
    {
        if (!in_array($state, self::STATES)) {
            throw new InvalidArgumentException(sprintf('Unsupported state %s', $state));
        }

        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return DateTime|NULL
     */
    public function getLastLoggedAt(): ?DateTime
    {
        return $this->lastLoggedAt;
    }

    /**
     * @param DateTime|NULL $lastLoggedAt
     */
    public function setLastLoggedAt(?DateTime $lastLoggedAt): void
    {
        $this->lastLoggedAt = $lastLoggedAt;
    }

    /**
     * @return string|null
     */
    public function getAccessToken():? string
    {
        return $this->accessToken;
    }

    /**
     * @param string|null $accessToken
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return DateTime|NULL
     */
    public function getAccessTokenAt(): ?DateTime
    {
        return $this->accessTokenAt;
    }

    /**
     * @param DateTime|NULL $accessTokenAt
     */
    public function setAccessTokenAt(?DateTime $accessTokenAt): void
    {
        $this->accessTokenAt = $accessTokenAt;
    }


    // ******************************* HELPER METHODS *************************************

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        $expName = explode(" ", $this->name);
        return isset($expName[0]) ? $expName[0] : '';
    }


    /**
     * @return string|void
     */
    public function getFirstLetterFromName()
    {
        $split = str_split($this->getFirstName());
        if (!isset($split[0])) return ;

        return strtoupper($split[0]);
    }


    /**
     * @return string
     */
    public function toRole(): string
    {
        return self::ROLES[$this->role];
    }


    /**
     * @return void
     */
    public function changeLoggedAt(): void
    {
        $this->lastLoggedAt = new DateTime();
    }


    /**
     * @return void
     */
    public function block(): void
    {
        $this->state = self::STATE_BLOCKED;
    }


    /**
     * @return void
     */
    public function activate(): void
    {
        $this->state = self::STATE_ACTIVATED;
    }


    /**
     * @return void
     */
    public function isActivated(): bool
    {
        return $this->state === self::STATE_ACTIVATED;
    }


    /**
     * @return SimpleIdentity
     */
    public function toIdentity(): SimpleIdentity
    {
        return new SimpleIdentity($this->getId(), [$this->role], [
            'email' => $this->email,
            'name' => $this->name
        ]);
    }


    /**
     * @return array
     */
    public function toForm(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ];
    }

}