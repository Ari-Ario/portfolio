<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd65eb2ea778cd1cd9d155d2c7197b0a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd65eb2ea778cd1cd9d155d2c7197b0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd65eb2ea778cd1cd9d155d2c7197b0a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd65eb2ea778cd1cd9d155d2c7197b0a::$classMap;

        }, null, ClassLoader::class);
    }
}