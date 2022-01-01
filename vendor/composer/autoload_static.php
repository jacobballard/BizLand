<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c41a2bf6cf4ed40c540bf539c7f5bbd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c41a2bf6cf4ed40c540bf539c7f5bbd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c41a2bf6cf4ed40c540bf539c7f5bbd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c41a2bf6cf4ed40c540bf539c7f5bbd::$classMap;

        }, null, ClassLoader::class);
    }
}
