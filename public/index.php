<?php
require '../basic/basic.php';
inc([
    'call',
    'env',
    'error',
    'is_dev',
    'segment',
    'view'
]);
if(is_dev(){
    error(true);
}
$call=segment(1);
if($call=='/' OR empty($call)){
    $call=$_ENV['SITE_CALL'].'/home';
}
$filename=ROOT.'call/call.json';
$repos=json_decode(file_get_contents($filename));
if(in_array($call,$repos)){
    call($call);
}else{
    view($_ENV['SITE_CALL'].'/404');
}
