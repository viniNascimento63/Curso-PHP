<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6fd69672a59fba5b88ea0a3555cfa685
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit6fd69672a59fba5b88ea0a3555cfa685', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6fd69672a59fba5b88ea0a3555cfa685', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6fd69672a59fba5b88ea0a3555cfa685::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
