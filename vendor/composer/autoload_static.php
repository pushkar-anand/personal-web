<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc612a729faa2ce7df0aa5b4cb88b0ed1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sendinblue' => 
            array (
                0 => __DIR__ . '/..' . '/mailin-api/mailin-api-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc612a729faa2ce7df0aa5b4cb88b0ed1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc612a729faa2ce7df0aa5b4cb88b0ed1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc612a729faa2ce7df0aa5b4cb88b0ed1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
