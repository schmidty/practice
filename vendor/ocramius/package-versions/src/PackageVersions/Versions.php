<?php

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const VERSIONS = array (
  'components/jquery' => '3.2.1@e5534d4ab8e80c159553d507e358ed20a806d3bf',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'doctrine/annotations' => 'v1.4.0@54cacc9b81758b14e3ce750f205a393d52339e97',
  'doctrine/cache' => 'v1.6.1@b6f544a20f4807e81f7044d31e679ccbb1866dc3',
  'doctrine/collections' => 'v1.4.0@1a4fb7e902202c33cce8c55989b945612943c2ba',
  'doctrine/common' => 'v2.7.2@930297026c8009a567ac051fd545bf6124150347',
  'doctrine/dbal' => 'v2.5.12@7b9e911f9d8b30d43b96853dab26898c710d8f44',
  'doctrine/inflector' => 'v1.1.0@90b2128806bfde671b6952ab8bea493942c1fdae',
  'doctrine/lexer' => 'v1.0.1@83893c552fd2045dd78aef794c31e694c37c0b8c',
  'doctrine/migrations' => 'v1.5.0@c81147c0f2938a6566594455367e095150547f72',
  'nikic/fast-route' => 'v1.2.0@b5f95749071c82a8e0f58586987627054400cdf6',
  'ocramius/package-versions' => '1.1.2@51e867c70f0799790b3e82276875414ce13daaca',
  'ocramius/proxy-manager' => '2.0.4@a55d08229f4f614bf335759ed0cf63378feeb2e6',
  'pimple/pimple' => 'v3.0.2@a30f7d6e57565a2e1a316e1baf2a483f788b258a',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'slim/slim' => '3.8.1@5385302707530b2bccee1769613ad769859b826d',
  'symfony/console' => 'v3.2.7@c30243cc51f726812be3551316b109a2f5deaf8d',
  'symfony/debug' => 'v3.2.7@56f613406446a4a0a031475cfd0a01751de22659',
  'symfony/polyfill-mbstring' => 'v1.3.0@e79d363049d1c2128f133a2667e4f4190904f7f4',
  'symfony/yaml' => 'v3.2.7@62b4cdb99d52cb1ff253c465eb1532a80cebb621',
  'twitter/bootstrap' => 'v3.3.7@0b9c4a4007c44201dce9a6cc1a38407005c26c86',
  'zendframework/zend-code' => '3.1.0@2899c17f83a7207f2d7f53ec2f421204d3beea27',
  'zendframework/zend-eventmanager' => '3.1.0@c3bce7b7d47c54040b9ae51bc55491c72513b75d',
  '__root__' => 'dev-dev@1cc7a1f39ad99589c03d2ba0cce326af65e23da6',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException if a version cannot be located
     */
    public static function getVersion(string $packageName) : string
    {
        if (! isset(self::VERSIONS[$packageName])) {
            throw new \OutOfBoundsException(
                'Required package "' . $packageName . '" is not installed: cannot detect its version'
            );
        }

        return self::VERSIONS[$packageName];
    }
}
