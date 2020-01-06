<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2180f9a109f8a6b9c97c8157558a039e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2180f9a109f8a6b9c97c8157558a039e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2180f9a109f8a6b9c97c8157558a039e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
