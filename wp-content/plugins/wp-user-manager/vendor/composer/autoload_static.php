<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit142ab231def8526b7e90435e475df94b
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'b5020c445617d804f0c014177f92907a' => __DIR__ . '/..' . '/wp-user-manager/wpum-blocks/blocks-loader.php',
        'e7a23b473708f4b0fb5b99fe921bee83' => __DIR__ . '/..' . '/wpbp/widgets-helper/wph-widget.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPUserManagerBlocks\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Carbon_Fields\\' => 14,
        ),
        'B' => 
        array (
            'Brain\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPUserManagerBlocks\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-user-manager/wpum-blocks/includes/classes',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'Brain\\' => 
        array (
            0 => __DIR__ . '/..' . '/brain/cortex/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Gamajo_Template_Loader' => __DIR__ . '/..' . '/gamajo/template-loader/class-gamajo-template-loader.php',
        'TDP\\OptionsKit' => __DIR__ . '/..' . '/wp-user-manager/wp-optionskit/wp-optionskit.php',
        'TDP\\WP_Notice' => __DIR__ . '/..' . '/wp-user-manager/wp-notices/wp-notices.php',
        'WP_Requirements_Check' => __DIR__ . '/..' . '/wearerequired/wp-requirements-check/WP_Requirements_Check.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit142ab231def8526b7e90435e475df94b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit142ab231def8526b7e90435e475df94b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit142ab231def8526b7e90435e475df94b::$classMap;

        }, null, ClassLoader::class);
    }
}
