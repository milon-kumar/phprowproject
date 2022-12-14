<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ca1172afd44329fbdc3e45b4fd73e69
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ca1172afd44329fbdc3e45b4fd73e69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ca1172afd44329fbdc3e45b4fd73e69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ca1172afd44329fbdc3e45b4fd73e69::$classMap;

        }, null, ClassLoader::class);
    }
}
