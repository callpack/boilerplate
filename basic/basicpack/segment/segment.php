<?php
//Criado por Anderson Ismael
//24 de agosto de 2018

function segment($segmentId=null){
    $arr=parse_url($_ENV['SITE_URL']);
    if(isset($arr['path']) && $arr['path']<>'/'){
        $arr=explode('/',$arr['path']);
        $arr=array_filter($arr);
        $numeroDePastas=count($arr);
    }else{
        $numeroDePastas=0;
    }
    $str=$_SERVER["REQUEST_URI"];
    $str=@explode('?',$str)[0];
    $arr=explode('/',$str);
    $arr=array_filter($arr);
    $arr=array_values($arr);
    $i=1;
    if($numeroDePastas>0){
        $i=$i-$numeroDePastas;
    }
    if(count($arr)<1){
        $segment[$i]='/';
    }else{
        foreach ($arr as $key => $value) {
            $segment[$i++]=$value;
        }
    }
    if(is_null($segmentId)){
        return $segment;
    }else{
        if(isset($segment[$segmentId])){
            return $segment[$segmentId];
        }else{
            return false;
        }
    }
}

