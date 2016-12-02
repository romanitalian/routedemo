<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad474e59bdabf9432f803d330018279e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad474e59bdabf9432f803d330018279e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad474e59bdabf9432f803d330018279e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
