<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6e1f4b015d08a28db1c4c3210bbec82
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6e1f4b015d08a28db1c4c3210bbec82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6e1f4b015d08a28db1c4c3210bbec82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6e1f4b015d08a28db1c4c3210bbec82::$classMap;

        }, null, ClassLoader::class);
    }
}