<?php

$f3=require('lib/base.php');

$f3->set('DEBUG',3);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');
$f3->set('AUTOLOAD','classes/;controllers/;lib');
$f3->set('CACHE', true);
require('lib/vendor/autoload.php');
$f3->config('config.ini');

$f3->route('GET @entitylist: /manager/entity/list','ManagerController->listEntity');
$f3->route('GET @entityadd: /manager/entity/add','ManagerController->addEntity');
$f3->route('POST @doaddentity: /manager/entity/add','ManagerController->doAddEntity');

$f3->run();