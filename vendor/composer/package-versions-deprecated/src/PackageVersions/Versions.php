<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'nette/sandbox';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.3@fff576ac850c045158a250e7e27666e146e78d18',
  'contributte/application' => 'v0.5.1@2579ab2bc3b7c95ae32a2e664ac9a8cc038777f9',
  'contributte/console' => 'v0.9.1@549893573ba3cb81f476785763f48178b5166322',
  'contributte/di' => 'v0.5.1@534fdb5e85b4ae01f8f848fc4b752deb8458ed7c',
  'dg/adminer-custom' => 'v1.28.0@e4cc472b1bef36d89a5ddd515e368fb3fcb7ca5b',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.3.4@6d87c9a0baa6a4725b4c4e1a45b2a39f53bf1859',
  'doctrine/orm' => '2.9.5@77cc86ed880e3f1f6c9c5819e131a8aaeeeee0da',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'krehak/sk-firmy' => '1.1.0@49e89d95e48769abf20875f3dba709f73d44197b',
  'laminas/laminas-code' => '4.4.2@54251ab2b16c41c6980387839496b235f5f6e10b',
  'latte/latte' => 'v2.10.3@dd2c58863e830c22a2c6b85af63f37b829d255df',
  'nette/application' => 'v3.1.3@c1229f66210a7a4a7dd62cf9f1757a393d3c8067',
  'nette/bootstrap' => 'v3.1.1@efe6c30fc009451f59fe56f3b309eb85c48b2baf',
  'nette/caching' => 'v3.1.1@3e771c589dee414724be473c24ad16dae50c1960',
  'nette/component-model' => 'v3.0.1@66409cf5507c77edb46ffa88cf6a92ff58395601',
  'nette/database' => 'v3.1.3@08aff4d62c80873752254b0b655027211f501c4d',
  'nette/di' => 'v3.0.8@1a3210f0f1f971db8a6e970c716c1cebd28b7ab0',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/forms' => 'v3.1.3@bfbef39b1f07dc5cdfeb7dba4843ee086ca0c065',
  'nette/http' => 'v3.1.1@c903d0f0b793ed2045a442f338e756e1d3954c22',
  'nette/mail' => 'v3.1.7@0825a071b896c2ed8cbe1af776c2539acd7bb976',
  'nette/neon' => 'v3.2.2@e4ca6f4669121ca6876b1d048c612480e39a28d5',
  'nette/php-generator' => 'v3.5.4@59bb35ed6e8da95854fbf7b7d47dce6156b42915',
  'nette/robot-loader' => 'v3.4.0@3973cf3970d1de7b30888fd10b92dac9e0c2fd82',
  'nette/routing' => 'v3.0.2@5532e7e3612e13def357f089c1a5c25793a16843',
  'nette/safe-stream' => 'v2.4.2@921bd889860cf697a022642e628d086c9048ca67',
  'nette/schema' => 'v1.2.1@f5ed39fc96358f922cedfd1e516f0dadf5d2be0d',
  'nette/security' => 'v3.1.3@817ee98aad1f122f8f40b728c35e634086e1093d',
  'nette/utils' => 'v3.2.3@5c36cc1ba9bb6abb8a9e425cf054e0c3fd5b9822',
  'nettrine/annotations' => 'v0.7.0@fbb06d156a4edcbf37e4154e5b4ede079136388b',
  'nettrine/cache' => 'v0.3.0@8a58596de24cdd61e45866ef8f35788675f6d2bc',
  'nettrine/dbal' => 'v0.7.0@26a63ef21d229aa35b42b2d7798581bdb88ee912',
  'nettrine/fixtures' => 'v0.6.0@395476f575f48cd37d66f7856b0804b9534455f8',
  'nettrine/migrations' => 'v0.7.1@71951f68fec491e484e628047a3a2fe21469a518',
  'nettrine/orm' => 'v0.8.1@a86e9ec690cf4b7659a25767fd493935c1d3e34a',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'symfony/console' => 'v5.3.6@51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/property-access' => 'v5.3.4@098681253076af7070df7d9debe5f75733eea189',
  'symfony/property-info' => 'v5.3.4@0f42009150679a7a256eb6ee106401af5d974ed2',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'tracy/tracy' => 'v2.8.6@f3d2d6a1230a0a1a7b116c071ae4937e5e30101a',
  'ublaboo/datagrid' => 'v6.9.0@eeaeae63d09df62e1206f3b4834f6bb290c51fea',
  'ublaboo/mailing' => 'v1.2.1@710b808c77944a85c6748b85b2cc32d24fbe5636',
  'nette/tester' => 'v2.4.0@0988c33459b49bfd6c8d06e16f29de96eba341e7',
  'phpstan/phpstan' => '0.12.94@3d0ba4c198a24e3c3fc489f3ec6ac9612c4be5d6',
  'phpstan/phpstan-nette' => '0.12.21@c24d2bb6292b81cf3878b2892c49f9277e8789d0',
  'nette/sandbox' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === []) {
                return false;
            }
        }

        return true;
    }
}
