<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3bc46d0ddadcd61ccf2973dc982ce6b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3bc46d0ddadcd61ccf2973dc982ce6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3bc46d0ddadcd61ccf2973dc982ce6b::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitf3bc46d0ddadcd61ccf2973dc982ce6b::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitf3bc46d0ddadcd61ccf2973dc982ce6b::$classMap;

        }, null, ClassLoader::class);
    }
}
