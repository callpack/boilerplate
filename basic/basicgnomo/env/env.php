<?php
require __DIR__.'/vendor/autoload.php';

use Dotenv\Dotenv;

$filename=ROOT.'.env';
if(file_exists($filename)){
    $dotenv = Dotenv::create(ROOT);
    $dotenv->load();
}else{
    die('nano '.$filename.PHP_EOL);
}
