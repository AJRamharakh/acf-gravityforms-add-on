<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c6c6d99b2658709b89f2f20fdab5f9f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'ACFGravityforms\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'ACFGravityforms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c6c6d99b2658709b89f2f20fdab5f9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c6c6d99b2658709b89f2f20fdab5f9f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
