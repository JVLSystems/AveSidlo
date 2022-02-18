<?php

namespace Nettrine\Proxy\__CG__\App\Model\Database\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \App\Model\Database\Entity\Company implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'name', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'user', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'ico', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'dic', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'icdph', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'street', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'city', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'zip', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'state', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'paymentAt', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'isPaid', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'isMain', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'status', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'id', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'name', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'user', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'ico', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'dic', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'icdph', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'street', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'city', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'zip', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'state', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'paymentAt', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'isPaid', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'isMain', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'status', '' . "\0" . 'App\\Model\\Database\\Entity\\Company' . "\0" . 'id', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Company $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getIco(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIco', []);

        return parent::getIco();
    }

    /**
     * {@inheritDoc}
     */
    public function setIco(string $ico): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIco', [$ico]);

        parent::setIco($ico);
    }

    /**
     * {@inheritDoc}
     */
    public function getDic(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDic', []);

        return parent::getDic();
    }

    /**
     * {@inheritDoc}
     */
    public function setDic(string $dic): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDic', [$dic]);

        parent::setDic($dic);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcdph(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcdph', []);

        return parent::getIcdph();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcdph(string $icdph): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcdph', [$icdph]);

        parent::setIcdph($icdph);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet(string $street): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?\App\Model\Database\Entity\EnumCity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?\App\Model\Database\Entity\EnumCity $city): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip(): ?\App\Model\Database\Entity\EnumZip
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', []);

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip(?\App\Model\Database\Entity\EnumZip $zip): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', [$zip]);

        parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getState(): ?\App\Model\Database\Entity\EnumState
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState(?\App\Model\Database\Entity\EnumState $state): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentAt', []);

        return parent::getPaymentAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentAt(?\DateTime $paymentAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentAt', [$paymentAt]);

        parent::setPaymentAt($paymentAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPaid(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPaid', []);

        return parent::getIsPaid();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPaid(bool $isPaid): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPaid', [$isPaid]);

        parent::setIsPaid($isPaid);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsMain(bool $isMain): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsMain', [$isMain]);

        parent::setIsMain($isMain);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $status): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Model\Database\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Model\Database\Entity\User $user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function block(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'block', []);

        parent::block();
    }

    /**
     * {@inheritDoc}
     */
    public function activate(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'activate', []);

        parent::activate();
    }

    /**
     * {@inheritDoc}
     */
    public function isActivated(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActivated', []);

        return parent::isActivated();
    }

    /**
     * {@inheritDoc}
     */
    public function isPaid(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPaid', []);

        return parent::isPaid();
    }

    /**
     * {@inheritDoc}
     */
    public function isMain(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMain', []);

        return parent::isMain();
    }

    /**
     * {@inheritDoc}
     */
    public function paid(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'paid', []);

        parent::paid();
    }

    /**
     * {@inheritDoc}
     */
    public function main(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'main', []);

        parent::main();
    }

    /**
     * {@inheritDoc}
     */
    public function toForm(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toForm', []);

        return parent::toForm();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', []);

        parent::setCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\App\Model\Utils\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', []);

        parent::setUpdatedAt();
    }

}
