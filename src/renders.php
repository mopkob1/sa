<?php
// Настраивает фильтры для отображения
$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    $app['locale']=strtolower($app['locale']);

    $twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) use ($app) {
        return $app['request_stack']->getMasterRequest()->getBasepath().'/'.ltrim($asset, '/');
    }));
    $twig->addFunction(new \Twig_SimpleFunction('interface', function ($str) use ($app){
        $locale=$app['locale'];
        if (isset($app['user.options']['interface.strings'][$locale][$str]))
            return $app['user.options']['interface.strings'][$locale][$str];
        return "«" . $str . "» not found in your locale!";
    }));
    return $twig;
}));