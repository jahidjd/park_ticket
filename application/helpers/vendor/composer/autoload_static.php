<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96d4a80b79e74675afb4ef9651e1df89
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96d4a80b79e74675afb4ef9651e1df89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96d4a80b79e74675afb4ef9651e1df89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96d4a80b79e74675afb4ef9651e1df89::$classMap;

        }, null, ClassLoader::class);
    }
}
