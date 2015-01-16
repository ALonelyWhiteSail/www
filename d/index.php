<?php

$f3=require('lib/base.php');
$f3->set('DEBUG', 3);
$f3->set('UI','ui/');

$f3->route('GET /', function($f3) {
	$f3->set('content', 'home.htm');
	echo View::instance()->render('layout.htm');
} );

$f3->set('ONERROR', function($f3){
  echo \Template::instance()->render('error.html');
} );

$f3->run();