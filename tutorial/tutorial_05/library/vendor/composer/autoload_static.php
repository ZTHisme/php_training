<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit632f2cb120a7b647a5edafca199048ce
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SimpleXLSX' => __DIR__ . '/..' . '/shuchkin/simplexlsx/src/SimpleXLSX.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit632f2cb120a7b647a5edafca199048ce::$classMap;

        }, null, ClassLoader::class);
    }
}