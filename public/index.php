<?php
require '../basic/basic.php';
inc([
    'controller',
    'e',
    'env',
    'error',
    'redirect',
    'segment',
    'view'
]);
error(true);
$call=segment(1);
if($call=='/' OR empty($call)){
    $call=$_ENV['SITE_CALL'];
}
$filename=ROOT.'call/call.json';
$repos=json_decode(file_get_contents($filename));
$alternativeCall=ROOT.$call.'/controller/home.php';
if(in_array($call,$repos) OR file_exists($alternativeCall)){
    controller($call.'/home');
}else{
    view($_ENV['SITE_CALL'].'/404');
}
