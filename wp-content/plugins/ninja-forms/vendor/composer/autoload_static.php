<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit063f66def99f02b5c3669d9f1307c5bd
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NinjaForms\\NinjaForms\\' => 22,
            'NinjaForms\\Includes\\' => 20,
            'NinjaForms\\Blocks\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NinjaForms\\NinjaForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'NinjaForms\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'NinjaForms\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocks/views/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit063f66def99f02b5c3669d9f1307c5bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit063f66def99f02b5c3669d9f1307c5bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit063f66def99f02b5c3669d9f1307c5bd::$classMap;

        }, null, ClassLoader::class);
    }
}