<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit499ffe05402c21855fe9e84be3ef5c86
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\Paginator\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/assets/includes',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/paginator/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'CoffeeCode\\DataLayer\\Connect' => __DIR__ . '/..' . '/coffeecode/datalayer/src/Connect.php',
        'CoffeeCode\\DataLayer\\CrudTrait' => __DIR__ . '/..' . '/coffeecode/datalayer/src/CrudTrait.php',
        'CoffeeCode\\DataLayer\\DataLayer' => __DIR__ . '/..' . '/coffeecode/datalayer/src/DataLayer.php',
        'CoffeeCode\\Paginator\\Paginator' => __DIR__ . '/..' . '/coffeecode/paginator/src/Paginator.php',
        'CoffeeCode\\Router\\Dispatch' => __DIR__ . '/..' . '/coffeecode/router/src/Dispatch.php',
        'CoffeeCode\\Router\\Router' => __DIR__ . '/..' . '/coffeecode/router/src/Router.php',
        'CoffeeCode\\Router\\RouterTrait' => __DIR__ . '/..' . '/coffeecode/router/src/RouterTrait.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Includes\\Computador' => __DIR__ . '/../..' . '/assets/includes/Computador.php',
        'Includes\\Conexao' => __DIR__ . '/../..' . '/assets/includes/Conexao.php',
        'Includes\\Layout' => __DIR__ . '/../..' . '/assets/includes/Layout.php',
        'Includes\\Notebook' => __DIR__ . '/../..' . '/assets/includes/Notebook.php',
        'Includes\\Usuarios' => __DIR__ . '/../..' . '/assets/includes/Usuarios.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit499ffe05402c21855fe9e84be3ef5c86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit499ffe05402c21855fe9e84be3ef5c86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit499ffe05402c21855fe9e84be3ef5c86::$classMap;

        }, null, ClassLoader::class);
    }
}