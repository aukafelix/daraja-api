<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7128117a3f9987b1509698249f9d1721
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aukafelix\\DarajaApi\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aukafelix\\DarajaApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7128117a3f9987b1509698249f9d1721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7128117a3f9987b1509698249f9d1721::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7128117a3f9987b1509698249f9d1721::$classMap;

        }, null, ClassLoader::class);
    }
}
