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
switch(segment(1)){
  case '/':
  redirect('/teste');
  break;
  case 'teste':
  controller("teste/home");
  break;
  default:
  view("teste/404");
  break;
}
