<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8aa9cf1a9996b92ca3f3bffeb3aec2f6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8aa9cf1a9996b92ca3f3bffeb3aec2f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8aa9cf1a9996b92ca3f3bffeb3aec2f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8aa9cf1a9996b92ca3f3bffeb3aec2f6::$classMap;

        }, null, ClassLoader::class);
    }
}
