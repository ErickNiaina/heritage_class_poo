<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4342e3edb1cffa09e4adacbebeb1635
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
            'Mere\\' => 5,
        ),
        'F' => 
        array (
            'Fille\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'Mere\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Mere',
        ),
        'Fille\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Fille',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4342e3edb1cffa09e4adacbebeb1635::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4342e3edb1cffa09e4adacbebeb1635::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
