<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($name,$data=false){
    $str1=ROOT.'controller/'.$name.'.php';
    $name2=explode('/',$name);
    $repoName=@$name2[0];
    $nameControllerName=@$name2[1];
    $str2=ROOT.'call/callpack/'.$repoName.'/controller/'.$nameControllerName.'.php';
    $str3=ROOT.$repoName.'/controller/home.php';
    if(file_exists($str1)){
        return returnController($str,$data);
    }elseif(file_exists($str2)){
        return returnController($str2,$data);
    }elseif(file_exists($str3)){
        return returnController($str3,$data);
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
