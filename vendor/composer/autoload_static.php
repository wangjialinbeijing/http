<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2dd0de2d1c942a626518cdc11da05c9
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wangjialin\\http\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wangjialin\\http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/http/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2dd0de2d1c942a626518cdc11da05c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2dd0de2d1c942a626518cdc11da05c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
