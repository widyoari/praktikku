<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51689f3f8dc3db3bb9e292ee44d8fbe2
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51689f3f8dc3db3bb9e292ee44d8fbe2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51689f3f8dc3db3bb9e292ee44d8fbe2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51689f3f8dc3db3bb9e292ee44d8fbe2::$classMap;

        }, null, ClassLoader::class);
    }
}
