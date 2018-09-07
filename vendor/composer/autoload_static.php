<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16e4025446aa183469aecff3160f065c
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Configuration\\BaseConfiguration' => __DIR__ . '/../..' . '/app/configuration/BaseConfiguration.php',
        'App\\Configuration\\Init' => __DIR__ . '/../..' . '/app/configuration/Init.php',
        'App\\Controllers\\AddcoinController' => __DIR__ . '/../..' . '/app/controllers/user/AddcoinController.php',
        'App\\Controllers\\ApiController' => __DIR__ . '/../..' . '/app/controllers/index/ApiController.php',
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController/BaseController.php',
        'App\\Controllers\\BaseIndexController' => __DIR__ . '/../..' . '/app/controllers/index/BaseIndexController.php',
        'App\\Controllers\\BaseSecureController' => __DIR__ . '/../..' . '/app/controllers/secure/BaseSecureController/BaseSecureController.php',
        'App\\Controllers\\BaseUserController' => __DIR__ . '/../..' . '/app/controllers/user/BaseUserController/BaseUserController.php',
        'App\\Controllers\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/user/DashboardController.php',
        'App\\Controllers\\EnterController' => __DIR__ . '/../..' . '/app/controllers/secure/EnterController.php',
        'App\\Controllers\\IndexController' => __DIR__ . '/../..' . '/app/controllers/index/IndexController.php',
        'App\\Controllers\\OutController' => __DIR__ . '/../..' . '/app/controllers/secure/OutController.php',
        'App\\Controllers\\ParserController' => __DIR__ . '/../..' . '/app/controllers/index/ParserController.php',
        'App\\Controllers\\RegistrationController' => __DIR__ . '/../..' . '/app/controllers/secure/RegistrationController.php',
        'Aura' => __DIR__ . '/../..' . '/lib/parser/coin/Aura.php',
        'BaseCoinParser' => __DIR__ . '/../..' . '/lib/parser/coin/BaseCoinParser.php',
        'Bitcoin' => __DIR__ . '/../..' . '/lib/parser/coin/Bitcoin.php',
        'CMC' => __DIR__ . '/../..' . '/lib/parser/coinmc/CMC.php',
        'Callback' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'CallbackBody' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'CallbackParam' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'CallbackParameterToReference' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'CallbackReturnReference' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'CallbackReturnValue' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'Callisto' => __DIR__ . '/../..' . '/lib/parser/coin/Callisto.php',
        'Cardano' => __DIR__ . '/../..' . '/lib/parser/coin/Cardano.php',
        'DOMDocumentWrapper' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'DOMEvent' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'Ethereum' => __DIR__ . '/../..' . '/lib/parser/coin/Ethereum.php',
        'GoByte' => __DIR__ . '/../..' . '/lib/parser/coin/GoByte.php',
        'Helper\\DateHelp' => __DIR__ . '/../..' . '/helper/DateHelp.php',
        'Helper\\Hash' => __DIR__ . '/../..' . '/helper/Hash.php',
        'Helper\\TraceImg' => __DIR__ . '/../..' . '/helper/TraceImg.php',
        'Helper\\TranslateDay' => __DIR__ . '/../..' . '/helper/TranslateDay.php',
        'Helper\\TranslateMonth' => __DIR__ . '/../..' . '/helper/TranslateMonth.php',
        'Helper\\Translit' => __DIR__ . '/../..' . '/helper/Translit.php',
        'ICallbackNamed' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'Lib\\Location\\UserLocation' => __DIR__ . '/../..' . '/lib/location/UserLocation.php',
        'Lib\\Location\\UserTime' => __DIR__ . '/../..' . '/lib/location/UserTime.php',
        'Lib\\Location\\UserWeather' => __DIR__ . '/../..' . '/lib/location/UserWeather.php',
        'Lib\\Packeg\\BasePackeg' => __DIR__ . '/../..' . '/lib/packeg/BasePackeg.php',
        'Lib\\Parser\\BaseParser' => __DIR__ . '/../..' . '/lib/parser/BaseParser.php',
        'Lib\\Parser\\News\\BaseNewsParser' => __DIR__ . '/../..' . '/lib/parser/news/BaseNewsParser.php',
        'Lib\\Parser\\News\\ExeptionNewsParser' => __DIR__ . '/../..' . '/lib/parser/news/ExeptionNewsParser.php',
        'Lib\\Parser\\News\\InterfaceNewsParser' => __DIR__ . '/../..' . '/lib/parser/news/InterfaceNewsParser.php',
        'Lib\\Parser\\News\\NewsEtceteraMedia' => __DIR__ . '/../..' . '/lib/parser/news/NewsEtceteraMedia.php',
        'Lib\\Parser\\News\\NewsParser112' => __DIR__ . '/../..' . '/lib/parser/news/NewsParser112.php',
        'Lib\\Parser\\News\\NewsParser24Ua' => __DIR__ . '/../..' . '/lib/parser/news/NewsParser24Ua.php',
        'Lib\\Parser\\News\\NewsParserObozrevatel' => __DIR__ . '/../..' . '/lib/parser/news/NewsParserObozrevatel.php',
        'Lib\\Parser\\News\\SaveNews' => __DIR__ . '/../..' . '/lib/parser/news/SaveNews.php',
        'Lib\\Parser\\ProxyParser' => __DIR__ . '/../..' . '/lib/parser/proxy/ProxyParser.php',
        'Lib\\Parser\\ProxyParser2' => __DIR__ . '/../..' . '/lib/parser/proxy/ProxyParser2.php',
        'Lib\\User\\User' => __DIR__ . '/../..' . '/lib/user/User.php',
        'Pegas' => __DIR__ . '/../..' . '/lib/parser/coin/Pegas.php',
        'Pirl' => __DIR__ . '/../..' . '/lib/parser/coin/Pirl.php',
        'System\\DB' => __DIR__ . '/../..' . '/system/DB.php',
        'System\\Error' => __DIR__ . '/../..' . '/system/Error.php',
        'System\\Lang' => __DIR__ . '/../..' . '/system/Lang.php',
        'System\\Log' => __DIR__ . '/../..' . '/system/Log.php',
        'System\\ORM' => __DIR__ . '/../..' . '/system/ORM.php',
        'System\\Router' => __DIR__ . '/../..' . '/system/Router.php',
        'System\\TwigView' => __DIR__ . '/../..' . '/system/TwigView.php',
        'System\\Verification' => __DIR__ . '/../..' . '/system/Verification.php',
        'System\\Viber' => __DIR__ . '/../..' . '/system/Viber.php',
        'ValidTag' => __DIR__ . '/../..' . '/lib/parser/valid/ValidTag.php',
        'Vivo' => __DIR__ . '/../..' . '/lib/parser/coin/Vivo.php',
        'lib\\UserException' => __DIR__ . '/../..' . '/lib/user/UserException.php',
        'phpQuery' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'phpQueryEvents' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'phpQueryObject' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
        'phpQueryPlugins' => __DIR__ . '/../..' . '/lib/phpQuery/phpQuery-onefile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16e4025446aa183469aecff3160f065c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16e4025446aa183469aecff3160f065c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit16e4025446aa183469aecff3160f065c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit16e4025446aa183469aecff3160f065c::$classMap;

        }, null, ClassLoader::class);
    }
}
