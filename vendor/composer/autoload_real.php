<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0016df00f9cd7c7b9e90134118cdd3ba
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

        spl_autoload_register(array('ComposerAutoloaderInit0016df00f9cd7c7b9e90134118cdd3ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0016df00f9cd7c7b9e90134118cdd3ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0016df00f9cd7c7b9e90134118cdd3ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
