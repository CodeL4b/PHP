<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaebe478221d22ccb70b6b78933940958
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noyon\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noyon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaebe478221d22ccb70b6b78933940958::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaebe478221d22ccb70b6b78933940958::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}