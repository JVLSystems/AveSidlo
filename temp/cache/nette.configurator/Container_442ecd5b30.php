<?php
// source: /var/www/html/avesidlo/app/config/common.neon
// source: /var/www/html/avesidlo/app/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_442ecd5b30 extends Nette\DI\Container
{
	protected $tags = [
		'nette.inject' => [
			'application.1' => true,
			'application.10' => true,
			'application.11' => true,
			'application.12' => true,
			'application.13' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
			'application.7' => true,
			'application.8' => true,
			'application.9' => true,
			'nettrine.fixtures.loadDataFixturesCommand' => true,
		],
		'console.command' => [
			'nettrine.fixtures.loadDataFixturesCommand' => 'doctrine:fixtures:load',
			'nettrine.migrations.diffCommand' => 'migrations:diff',
			'nettrine.migrations.executeCommand' => 'migrations:execute',
			'nettrine.migrations.generateCommand' => 'migrations:generate',
			'nettrine.migrations.latestCommand' => 'migrations:latest',
			'nettrine.migrations.migrateCommand' => 'migrations:migrate',
			'nettrine.migrations.statusCommand' => 'migrations:status',
			'nettrine.migrations.upToDateCommand' => 'migrations:up-to-date',
			'nettrine.migrations.versionCommand' => 'migrations:version',
		],
		'nettrine.orm.annotation.driver' => ['nettrine.orm.annotations.annotationDriver' => true],
		'nettrine.orm.mapping.driver' => ['nettrine.orm.mappingDriver' => true],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'App\Model\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'App\Model\Security\SecurityUser' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Doctrine\Common\Annotations\Reader' => [
			0 => ['nettrine.annotations.reader'],
			2 => ['nettrine.annotations.delegatedReader'],
		],
		'Doctrine\Common\Annotations\AnnotationReader' => [2 => ['nettrine.annotations.delegatedReader']],
		'Doctrine\Common\Cache\Cache' => [['nettrine.cache.driver']],
		'Doctrine\Migrations\Configuration\Configuration' => [['nettrine.migrations.configuration']],
		'Nettrine\Migrations\ContainerAwareConfiguration' => [['nettrine.migrations.configuration']],
		'Doctrine\Migrations\Tools\Console\Command\AbstractCommand' => [
			2 => [
				'nettrine.migrations.diffCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Symfony\Component\Console\Command\Command' => [
			0 => ['nettrine.fixtures.loadDataFixturesCommand'],
			2 => [
				'nettrine.migrations.diffCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Doctrine\Migrations\Tools\Console\Command\DiffCommand' => [2 => ['nettrine.migrations.diffCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ExecuteCommand' => [2 => ['nettrine.migrations.executeCommand']],
		'Nettrine\Migrations\Command\FixedExecuteCommand' => [2 => ['nettrine.migrations.executeCommand']],
		'Doctrine\Migrations\Tools\Console\Command\GenerateCommand' => [2 => ['nettrine.migrations.generateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\LatestCommand' => [2 => ['nettrine.migrations.latestCommand']],
		'Doctrine\Migrations\Tools\Console\Command\MigrateCommand' => [2 => ['nettrine.migrations.migrateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\StatusCommand' => [2 => ['nettrine.migrations.statusCommand']],
		'Doctrine\Migrations\Tools\Console\Command\UpToDateCommand' => [2 => ['nettrine.migrations.upToDateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\VersionCommand' => [2 => ['nettrine.migrations.versionCommand']],
		'Symfony\Component\Console\Helper\Helper' => [2 => ['nettrine.migrations.configurationHelper']],
		'Symfony\Component\Console\Helper\HelperInterface' => [2 => ['nettrine.migrations.configurationHelper']],
		'Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelperInterface' => [
			2 => ['nettrine.migrations.configurationHelper'],
		],
		'Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper' => [
			2 => ['nettrine.migrations.configurationHelper'],
		],
		'Doctrine\Common\DataFixtures\Loader' => [['nettrine.fixtures.fixturesLoader']],
		'Nettrine\Fixtures\Loader\FixturesLoader' => [['nettrine.fixtures.fixturesLoader']],
		'Nettrine\Fixtures\Command\LoadDataFixturesCommand' => [['nettrine.fixtures.loadDataFixturesCommand']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['nettrine.dbal.logger']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['nettrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [0 => ['nettrine.orm.configuration'], 2 => ['nettrine.dbal.configuration']],
		'Doctrine\Common\EventManager' => [0 => ['nettrine.dbal.eventManager.debug'], 2 => ['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [2 => ['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\DebugEventManager' => [['nettrine.dbal.eventManager.debug']],
		'Nettrine\DBAL\ConnectionFactory' => [['nettrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Driver\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\DBAL\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\ORM\Configuration' => [['nettrine.orm.configuration']],
		'Doctrine\ORM\Mapping\EntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Nettrine\ORM\Mapping\ContainerEntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Nettrine\ORM\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\Decorator\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManager' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\EntityManagerInterface' => [['nettrine.orm.entityManagerDecorator']],
		'App\Model\Database\EntityManager' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\AbstractManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ConnectionRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Nettrine\ORM\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\Mapping\Driver\MappingDriver' => [
			0 => ['nettrine.orm.mappingDriver'],
			2 => [1 => 'nettrine.orm.annotations.annotationDriver'],
		],
		'Doctrine\Persistence\Mapping\Driver\MappingDriverChain' => [['nettrine.orm.mappingDriver']],
		'Doctrine\ORM\Cache\RegionsConfiguration' => [2 => ['nettrine.orm.cache.regions']],
		'Doctrine\ORM\Cache\CacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\DefaultCacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\CacheConfiguration' => [2 => ['nettrine.orm.cache.cacheConfiguration']],
		'Doctrine\Persistence\Mapping\Driver\AnnotationDriver' => [2 => ['nettrine.orm.annotations.annotationDriver']],
		'Doctrine\ORM\Mapping\Driver\AnnotationDriver' => [2 => ['nettrine.orm.annotations.annotationDriver']],
		'Ublaboo\Mailing\ILogger' => [['mailing.mailLogger']],
		'Ublaboo\Mailing\MailLogger' => [['mailing.mailLogger']],
		'Ublaboo\Mailing\MailFactory' => [['mailing.mailFactory']],
		'App\Forms\FormFactory' => [['01']],
		'App\FrontModule\Forms\RegisterFormFactory' => [['02']],
		'App\FrontModule\Forms\LoginFormFactory' => [['03']],
		'App\FrontModule\Forms\ForgetPasswordFormFactory' => [['04']],
		'App\ClientModule\Forms\CompanyFormFactory' => [['05']],
		'App\ClientModule\Forms\UserFormFactory' => [['06']],
		'App\ClientModule\Forms\OrderFormFactory' => [['07']],
		'Nette\Security\Authenticator' => [['security.authenticator']],
		'Nette\Security\IAuthenticator' => [['security.authenticator']],
		'App\Model\Security\Authenticator\UserAuthenticator' => [['security.authenticator']],
		'Nette\Security\Permission' => [['security.authorizator']],
		'Nette\Security\Authorizator' => [['security.authorizator']],
		'App\Model\Security\Authorizator\StaticAuthorizator' => [['security.authorizator']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'ArrayAccess' => [
			2 => [
				'router',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'App\Presenters\BasePresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
			],
		],
		'App\FrontModule\Presenters\HomepagePresenter' => [2 => ['application.1']],
		'App\FrontModule\Presenters\RegisterPresenter' => [2 => ['application.2']],
		'App\FrontModule\Presenters\PagePresenter' => [2 => ['application.3']],
		'App\FrontModule\Presenters\LoginPresenter' => [2 => ['application.4']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.5']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.6']],
		'App\ClientModule\Presenters\SecuredPresenter' => [
			2 => ['application.7', 'application.8', 'application.9', 'application.10', 'application.11'],
		],
		'App\ClientModule\Presenters\HomepagePresenter' => [2 => ['application.7']],
		'App\ClientModule\Presenters\OrderPresenter' => [2 => ['application.8']],
		'App\ClientModule\Presenters\ClientPresenter' => [2 => ['application.10']],
		'App\ClientModule\Presenters\CompanyPresenter' => [2 => ['application.11']],
		'NetteModule\ErrorPresenter' => [2 => ['application.12']],
		'NetteModule\MicroPresenter' => [2 => ['application.13']],
		'Nette\Forms\FormFactory' => [['forms.factory']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'appDir' => '/var/www/html/avesidlo/app',
			'wwwDir' => '/var/www/html/avesidlo/www',
			'vendorDir' => '/var/www/html/avesidlo/vendor',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => '/var/www/html/avesidlo/app/../temp',
		];
	}


	public function createService01(): App\Forms\FormFactory
	{
		return new App\Forms\FormFactory;
	}


	public function createService02(): App\FrontModule\Forms\RegisterFormFactory
	{
		return new App\FrontModule\Forms\RegisterFormFactory(
			$this->getService('01'),
			$this->getService('security.passwords'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
	}


	public function createService03(): App\FrontModule\Forms\LoginFormFactory
	{
		return new App\FrontModule\Forms\LoginFormFactory($this->getService('01'), $this->getService('security.user'));
	}


	public function createService04(): App\FrontModule\Forms\ForgetPasswordFormFactory
	{
		return new App\FrontModule\Forms\ForgetPasswordFormFactory($this->getService('01'), $this->getService('security.user'));
	}


	public function createService05(): App\ClientModule\Forms\CompanyFormFactory
	{
		return new App\ClientModule\Forms\CompanyFormFactory(
			$this->getService('01'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
	}


	public function createService06(): App\ClientModule\Forms\UserFormFactory
	{
		return new App\ClientModule\Forms\UserFormFactory(
			$this->getService('01'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
	}


	public function createService07(): App\ClientModule\Forms\OrderFormFactory
	{
		return new App\ClientModule\Forms\OrderFormFactory(
			$this->getService('01'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
	}


	public function createServiceApplication__1(): App\FrontModule\Presenters\HomepagePresenter
	{
		$service = new App\FrontModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): App\ClientModule\Presenters\ClientPresenter
	{
		$service = new App\ClientModule\Presenters\ClientPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->userFormFactory = $this->getService('06');
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): App\ClientModule\Presenters\CompanyPresenter
	{
		$service = new App\ClientModule\Presenters\CompanyPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->companyFormFactory = $this->getService('05');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__12(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__13(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__2(): App\FrontModule\Presenters\RegisterPresenter
	{
		$service = new App\FrontModule\Presenters\RegisterPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->registerFormFactory = $this->getService('02');
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\FrontModule\Presenters\PagePresenter
	{
		$service = new App\FrontModule\Presenters\PagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\FrontModule\Presenters\LoginPresenter
	{
		$service = new App\FrontModule\Presenters\LoginPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->loginFormFactory = $this->getService('03');
		$service->forgetPasswordFormFactory = $this->getService('04');
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__7(): App\ClientModule\Presenters\HomepagePresenter
	{
		$service = new App\ClientModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): App\ClientModule\Presenters\OrderPresenter
	{
		$service = new App\ClientModule\Presenters\OrderPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orderFormFactory = $this->getService('07');
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): App\ClientModule\Presenters\SecuredPresenter
	{
		$service = new App\ClientModule\Presenters\SecuredPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->entityManager = $this->getService('nettrine.orm.entityManagerDecorator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/html/avesidlo/app/../temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/var/www/html/avesidlo/app/../temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/avesidlo/app/../temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Container_442ecd5b30
	{
		return $this;
	}


	public function createServiceForms__factory(): Nette\Forms\FormFactory
	{
		return new Nette\Forms\FormFactory($this->getService('http.request'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_442ecd5b30 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/avesidlo/app/../temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceMailing__mailFactory(): Ublaboo\Mailing\MailFactory
	{
		return new Ublaboo\Mailing\MailFactory(
			'both',
			'/var/www/html/avesidlo/www',
			[],
			$this->getService('mail.mailer'),
			$this->getService('application.linkGenerator'),
			$this->getService('latte.templateFactory'),
			$this->getService('mailing.mailLogger')
		);
	}


	public function createServiceMailing__mailLogger(): Ublaboo\Mailing\MailLogger
	{
		return new Ublaboo\Mailing\MailLogger('/var/www/html/avesidlo/app/../log/mails');
	}


	public function createServiceNettrine__annotations__delegatedReader(): Doctrine\Common\Annotations\AnnotationReader
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	public function createServiceNettrine__annotations__reader(): Doctrine\Common\Annotations\Reader
	{
		return new Doctrine\Common\Annotations\CachedReader(
			$this->getService('nettrine.annotations.delegatedReader'),
			$this->getService('nettrine.cache.driver')
		);
	}


	public function createServiceNettrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/var/www/html/avesidlo/app/../temp/cache/nettrine.cache');
	}


	public function createServiceNettrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('nettrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceNettrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		$service = $this->getService('nettrine.dbal.connectionFactory')->createConnection(
			[
				'host' => 'mariadb103.r2.websupport.sk',
				'port' => 3313,
				'driver' => 'mysqli',
				'dbname' => 'avesidlo',
				'user' => 'avesidlo',
				'password' => 'Hp2GV<S&ug',
				'types' => [],
				'typesMapping' => [],
			],
			$this->getService('nettrine.dbal.configuration'),
			$this->getService('nettrine.dbal.eventManager.debug')
		);
		if (!$service instanceof Doctrine\DBAL\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'nettrine.dbal.connection\', value returned by factory is not Doctrine\DBAL\Connection type.');
		}
		$profiler = new Nettrine\DBAL\Logger\ProfilerLogger($service);
		$profiler->addPath('/var/www/html/avesidlo/app');
		$service->getConfiguration()->getSqlLogger()->addLogger($profiler);
		$this->getService('tracy.bar')->addPanel(new Nettrine\DBAL\Tracy\QueryPanel\QueryPanel($profiler));
		$this->getService('tracy.blueScreen')->addPanel(['Nettrine\DBAL\Tracy\BlueScreen\DbalBlueScreen', 'renderException']);
		return $service;
	}


	public function createServiceNettrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory;
	}


	public function createServiceNettrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		return new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
	}


	public function createServiceNettrine__dbal__eventManager__debug(): Nettrine\DBAL\Events\DebugEventManager
	{
		return new Nettrine\DBAL\Events\DebugEventManager($this->getService('nettrine.dbal.eventManager'));
	}


	public function createServiceNettrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		return new Doctrine\DBAL\Logging\LoggerChain;
	}


	public function createServiceNettrine__fixtures__fixturesLoader(): Nettrine\Fixtures\Loader\FixturesLoader
	{
		return new Nettrine\Fixtures\Loader\FixturesLoader([], $this);
	}


	public function createServiceNettrine__fixtures__loadDataFixturesCommand(): Nettrine\Fixtures\Command\LoadDataFixturesCommand
	{
		return new Nettrine\Fixtures\Command\LoadDataFixturesCommand(
			$this->getService('nettrine.fixtures.fixturesLoader'),
			$this->getService('nettrine.orm.managerRegistry')
		);
	}


	public function createServiceNettrine__migrations__configuration(): Nettrine\Migrations\ContainerAwareConfiguration
	{
		$service = new Nettrine\Migrations\ContainerAwareConfiguration($this->getService('nettrine.dbal.connection'));
		$service->setContainer($this->createServiceContainer());
		$service->setCustomTemplate(null);
		$service->setMigrationsTableName('doctrine_migrations');
		$service->setMigrationsColumnName('version');
		$service->setMigrationsDirectory('/var/www/html/avesidlo/app/migrations');
		$service->setMigrationsNamespace('Migrations');
		return $service;
	}


	public function createServiceNettrine__migrations__configurationHelper(): Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper
	{
		return new Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.migrations.configuration')
		);
	}


	public function createServiceNettrine__migrations__diffCommand(): Doctrine\Migrations\Tools\Console\Command\DiffCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DiffCommand;
	}


	public function createServiceNettrine__migrations__executeCommand(): Nettrine\Migrations\Command\FixedExecuteCommand
	{
		return new Nettrine\Migrations\Command\FixedExecuteCommand;
	}


	public function createServiceNettrine__migrations__generateCommand(): Doctrine\Migrations\Tools\Console\Command\GenerateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\GenerateCommand;
	}


	public function createServiceNettrine__migrations__latestCommand(): Doctrine\Migrations\Tools\Console\Command\LatestCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\LatestCommand;
	}


	public function createServiceNettrine__migrations__migrateCommand(): Doctrine\Migrations\Tools\Console\Command\MigrateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\MigrateCommand;
	}


	public function createServiceNettrine__migrations__statusCommand(): Doctrine\Migrations\Tools\Console\Command\StatusCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\StatusCommand;
	}


	public function createServiceNettrine__migrations__upToDateCommand(): Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\UpToDateCommand;
	}


	public function createServiceNettrine__migrations__versionCommand(): Doctrine\Migrations\Tools\Console\Command\VersionCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\VersionCommand;
	}


	public function createServiceNettrine__orm__annotations__annotationDriver(): Doctrine\ORM\Mapping\Driver\AnnotationDriver
	{
		$service = new Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->getService('nettrine.annotations.reader'));
		$service->addExcludePaths([]);
		$service->addPaths(['/var/www/html/avesidlo/app/Model/Database/Entity']);
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheConfiguration(): Doctrine\ORM\Cache\CacheConfiguration
	{
		$service = new Doctrine\ORM\Cache\CacheConfiguration;
		$service->setCacheFactory($this->getService('nettrine.orm.cache.cacheFactory'));
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheFactory(): Doctrine\ORM\Cache\DefaultCacheFactory
	{
		return new Doctrine\ORM\Cache\DefaultCacheFactory(
			$this->getService('nettrine.orm.cache.regions'),
			$this->getService('nettrine.cache.driver')
		);
	}


	public function createServiceNettrine__orm__cache__regions(): Doctrine\ORM\Cache\RegionsConfiguration
	{
		return new Doctrine\ORM\Cache\RegionsConfiguration;
	}


	public function createServiceNettrine__orm__configuration(): Doctrine\ORM\Configuration
	{
		$service = new Doctrine\ORM\Configuration;
		$service->setProxyDir('/var/www/html/avesidlo/app/../temp/proxies');
		$service->setAutoGenerateProxyClasses(2);
		$service->setProxyNamespace('Nettrine\Proxy');
		$service->setMetadataDriverImpl($this->getService('nettrine.orm.mappingDriver'));
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setCustomHydrationModes([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setEntityListenerResolver($this->getService('nettrine.orm.entityListenerResolver'));
		$service->setQueryCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setHydrationCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setMetadataCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setSecondLevelCacheEnabled();
		$service->setSecondLevelCacheConfiguration($this->getService('nettrine.orm.cache.cacheConfiguration'));
		return $service;
	}


	public function createServiceNettrine__orm__entityListenerResolver(): Nettrine\ORM\Mapping\ContainerEntityListenerResolver
	{
		return new Nettrine\ORM\Mapping\ContainerEntityListenerResolver($this);
	}


	public function createServiceNettrine__orm__entityManagerDecorator(): App\Model\Database\EntityManager
	{
		return new App\Model\Database\EntityManager(Doctrine\ORM\EntityManager::create(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.configuration'),
			$this->getService('nettrine.dbal.eventManager.debug')
		));
	}


	public function createServiceNettrine__orm__managerRegistry(): Nettrine\ORM\ManagerRegistry
	{
		return new Nettrine\ORM\ManagerRegistry(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this
		);
	}


	public function createServiceNettrine__orm__mappingDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('nettrine.orm.annotations.annotationDriver'), 'App\Model\Database\Entity');
		return $service;
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__authenticator(): App\Model\Security\Authenticator\UserAuthenticator
	{
		return new App\Model\Security\Authenticator\UserAuthenticator(
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this->getService('security.passwords')
		);
	}


	public function createServiceSecurity__authorizator(): App\Model\Security\Authorizator\StaticAuthorizator
	{
		return new App\Model\Security\Authorizator\StaticAuthorizator;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): App\Model\Security\Passwords
	{
		return new App\Model\Security\Passwords;
	}


	public function createServiceSecurity__user(): App\Model\Security\SecurityUser
	{
		$service = new App\Model\Security\SecurityUser(
			$this->getService('security.legacyUserStorage'),
			$this->getService('security.authenticator'),
			$this->getService('security.authorizator'),
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		Doctrine\Common\Annotations\AnnotationRegistry::registerUniqueLoader("class_exists");
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
	}
}
