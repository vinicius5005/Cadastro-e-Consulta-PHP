<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit60e2a3fd3a9725d19aa7c5b7094f751e
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

        spl_autoload_register(array('ComposerAutoloaderInit60e2a3fd3a9725d19aa7c5b7094f751e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit60e2a3fd3a9725d19aa7c5b7094f751e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit60e2a3fd3a9725d19aa7c5b7094f751e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
