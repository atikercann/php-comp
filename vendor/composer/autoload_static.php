<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit903f4efc8597b28448caf06897f609a3
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit903f4efc8597b28448caf06897f609a3::$classMap;

        }, null, ClassLoader::class);
    }
}
