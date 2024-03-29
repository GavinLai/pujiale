<?php
/**
 * Web端请求入口
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//~ require init.php
require (__DIR__.'/core/init.php');

$request  = new Request();
$response = new Response();

try {
  SimPHP::I()
  ->boot(RC_SESSION)
  ->dispatch($request,$response);
}
catch (SimPHPException $me) {
  $response->dump($me->getMessage());
}
catch (Exception $e) {
  $response->dump($e->getMessage());
}



/*----- END FILE: index.php -----*/