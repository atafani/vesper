<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf96716b11ad773f64eb943b45a6d871b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf96716b11ad773f64eb943b45a6d871b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf96716b11ad773f64eb943b45a6d871b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf96716b11ad773f64eb943b45a6d871b::$classMap;

        }, null, ClassLoader::class);
    }
}