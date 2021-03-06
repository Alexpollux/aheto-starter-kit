<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2153a935247c4baa06d22f25467dbd2c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aheto_Kit\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aheto_Kit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Aheto_Kit\\Sample' => __DIR__ . '/../..' . '/includes/sample/class-sample.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2153a935247c4baa06d22f25467dbd2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2153a935247c4baa06d22f25467dbd2c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2153a935247c4baa06d22f25467dbd2c::$classMap;

        }, null, ClassLoader::class);
    }
}
