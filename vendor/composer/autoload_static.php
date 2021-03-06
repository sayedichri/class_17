<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16e50acbd38b2210102312c2dc90ad7c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16e50acbd38b2210102312c2dc90ad7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16e50acbd38b2210102312c2dc90ad7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16e50acbd38b2210102312c2dc90ad7c::$classMap;

        }, null, ClassLoader::class);
    }
}
