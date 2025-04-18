<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite61a345a4e2874bdd909c2d3028fc95c
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Baikov\\Chocolate\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Baikov\\Chocolate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite61a345a4e2874bdd909c2d3028fc95c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite61a345a4e2874bdd909c2d3028fc95c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite61a345a4e2874bdd909c2d3028fc95c::$classMap;

        }, null, ClassLoader::class);
    }
}
