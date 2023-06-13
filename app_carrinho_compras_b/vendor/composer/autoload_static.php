<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa48567e2ad2c978570c9b773648a18c
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa48567e2ad2c978570c9b773648a18c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa48567e2ad2c978570c9b773648a18c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa48567e2ad2c978570c9b773648a18c::$classMap;

        }, null, ClassLoader::class);
    }
}