<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($name,$data=false){
    $str=ROOT.'controller/'.$name.'.php';
    $name2=explode('/',$name);
    $repoName=@$name2[0];
    $nameControllerName=@$name2[1];
    $str2=ROOT.'call/callpack/'.$repoName.'/controller/'.$nameControllerName.'.php';
    if(file_exists($str)){
        return returnController($str,$data);
    }elseif(file_exists($str2)){
        return returnController($str2,$data);
    }else{
        return false;
    }
}

function returnController($name,$data){
    if(is_array($data)){
        extract($data);
    }
    return require_once($name);
}
