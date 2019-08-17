<?php
function redirect($urlStr){
    header('Location: '.$urlStr);
    exit;
}
