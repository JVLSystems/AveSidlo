<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;

        $router->addRoute('nasa-spolocnost', [
            'module' => 'Front',
            'presenter' => 'Page',
            'action' => 'aboutCompany'
        ]);

        $router->addRoute('sluzby', [
            'module' => 'Front',
            'presenter' => 'Page',
            'action' => 'services'
        ]);

        $router->addRoute('kontakt', [
            'module' => 'Front',
            'presenter' => 'Page',
            'action' => 'contact'
        ]);

        $router->addRoute('ochrana-osobnych-udajov', [
            'module' => 'Front',
            'presenter' => 'Page',
            'action' => 'privacyPolicy'
        ]);

        $router->addRoute('obchodne-podmienky', [
            'module' => 'Front',
            'presenter' => 'Page',
            'action' => 'termsAndConditions'
        ]);

        $router->addRoute('registracia', [
            'module' => 'Front',
            'presenter' => 'Register',
            'action' => 'default'
        ]);

        $router->addRoute('prihlasenie', [
            'module' => 'Front',
            'presenter' => 'Login',
            'action' => 'default'
        ]);

        $router->addRoute('zabudnute-heslo', [
            'module' => 'Front',
            'presenter' => 'Login',
            'action' => 'forgetPassword'
        ]);

        $router->addRoute('klient/<presenter>/<action>',[
            'module' => 'Client',
            'presenter' => 'Homepage',
            'action' => 'default'
        ]);

		$router->addRoute('<presenter>/<action>', [
		    'module' => 'Front',
            'presenter' => 'Homepage',
            'action' => 'default'
        ]);

		return $router;
	}
}
