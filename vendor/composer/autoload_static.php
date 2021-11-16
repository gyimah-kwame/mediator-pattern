<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06a2d8e194c50c1887672c78c81d9cff
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kwame\\Demo\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kwame\\Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kwame\\Demo\\Colleagues\\User' => __DIR__ . '/../..' . '/src/Colleagues/User.php',
        'Kwame\\Demo\\Colleagues\\UserImp' => __DIR__ . '/../..' . '/src/Colleagues/UserImp.php',
        'Kwame\\Demo\\Mediators\\ChatMediator' => __DIR__ . '/../..' . '/src/Mediators/ChatMediator.php',
        'Kwame\\Demo\\Mediators\\ChatMediatorImp' => __DIR__ . '/../..' . '/src/Mediators/ChatMediatorImp.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06a2d8e194c50c1887672c78c81d9cff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06a2d8e194c50c1887672c78c81d9cff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06a2d8e194c50c1887672c78c81d9cff::$classMap;

        }, null, ClassLoader::class);
    }
}