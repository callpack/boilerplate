<?php
function e($textoStr,$print=true){
  if($print){
    print htmlentities($textoStr);
  }else{
    return htmlentities($textoStr);
  }
}
