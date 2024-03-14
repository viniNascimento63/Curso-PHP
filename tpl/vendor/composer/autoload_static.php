<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d951e942216e2aa8aa268374427822a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d951e942216e2aa8aa268374427822a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d951e942216e2aa8aa268374427822a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2d951e942216e2aa8aa268374427822a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2d951e942216e2aa8aa268374427822a::$classMap;

        }, null, ClassLoader::class);
    }
}
