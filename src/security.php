<?php
use Providers\UserProvider;
$app['security.firewalls'] = array(
    'admin' => array(
        'pattern' => '^/admin/',
        'form' => array('login_path' => '/login', 'check_path' => '/admin/login_check'),
        'users' => $app->share(function () use ($app) {
                return new UserProvider();
            }),
    ),
);
return $app;