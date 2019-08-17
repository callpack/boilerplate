<?php
function segment($segmentInt=null){
    $str=$_SERVER["REQUEST_URI"];
    $str=@explode('?',$str)[0];
    $arr=explode('/',$str);
    $arr=array_filter($arr);
    $arr=array_values($arr);
    $i=1;
    if(count($arr)<1){
        $segmentArr[$i]='/';
    }else{
        foreach ($arr as $key => $value) {
            $segmentArr[$i++]=$value;
        }
    }
    if(is_null($segmentInt)){
        return $segmentArr;
    }else{
        if(isset($segmentArr[$segmentInt])){
            return $segmentArr[$segmentInt];
        }else{
            return false;
        }
    }
}
