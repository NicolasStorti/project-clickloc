<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33cad13092641f81b77ea1ff6e1ca5db
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Clickloc\\Projeto\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Clickloc\\Projeto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33cad13092641f81b77ea1ff6e1ca5db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33cad13092641f81b77ea1ff6e1ca5db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33cad13092641f81b77ea1ff6e1ca5db::$classMap;

        }, null, ClassLoader::class);
    }
}
