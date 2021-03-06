<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36416a92fe2c5865525b095da64c2887
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Security\\Core\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/security-core',
            ),
            'Symfony\\Component\\Routing\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/routing',
            ),
            'Symfony\\Component\\HttpKernel\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-kernel',
            ),
            'Symfony\\Component\\HttpFoundation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-foundation',
            ),
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
            'Symfony\\Component\\Debug\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/debug',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Session' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/session',
            ),
            'Illuminate\\Routing' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/routing',
            ),
            'Illuminate\\Http' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/http',
            ),
            'Illuminate\\Events' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/events',
            ),
            'Illuminate\\Encryption' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/encryption',
            ),
            'Illuminate\\Database' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/database',
            ),
            'Illuminate\\Cookie' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/cookie',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
            'Illuminate\\Cache' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/cache',
            ),
        ),
    );

    public static $classMap = array (
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36416a92fe2c5865525b095da64c2887::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36416a92fe2c5865525b095da64c2887::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit36416a92fe2c5865525b095da64c2887::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit36416a92fe2c5865525b095da64c2887::$classMap;

        }, null, ClassLoader::class);
    }
}
