<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf94640d8a384398a6fbd1c7ec36571c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf94640d8a384398a6fbd1c7ec36571c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf94640d8a384398a6fbd1c7ec36571c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf94640d8a384398a6fbd1c7ec36571c::$classMap;

        }, null, ClassLoader::class);
    }
}