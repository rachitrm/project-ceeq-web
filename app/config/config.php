<?php

define('SLIM_MODE_DEV', 'development');
define('SLIM_MODE_PRO', 'production');

define('SLIM_MODE', SLIM_MODE_DEV);

/* Slim configuration */
$slim_configuration =  array(
    'mode'               => SLIM_MODE,
    'cookies.secret_key' => md5('CEE_EEE_EEQ'),
    'view'               => new \Slim\Views\Twig(),
    'templates.path'     => ROOT.'/app/views/',
    'debug'              => (SLIM_MODE === SLIM_MODE_DEV),
    'log.enabled'        => (SLIM_MODE === SLIM_MODE_PRO),
);

/* Redbean configuration */
$db = R::setup('mysql:host=localhost;dbname=ceeq', 'ceeq','jpWeCCCB5BFSwBSr');
return $slim_configuration;