<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb762ed57b99378c90b01c52dd05c96cf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Codenixsv\\CoinGeckoApi\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Codenixsv\\CoinGeckoApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/codenix-sv/coingecko-api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb762ed57b99378c90b01c52dd05c96cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb762ed57b99378c90b01c52dd05c96cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
