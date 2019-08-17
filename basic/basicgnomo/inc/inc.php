<?php
function inc($includesMix){
    if(is_array($includesMix)){
        $listaDeIncludesArr=$includesMix;
    }else{
        $listaDeIncludesArr[]=$includesMix;
    }
    foreach ($listaDeIncludesArr as $includeStr) {
        $includeStr=mb_strtolower($includeStr);//tudo em letra minúscula
        $filename=ROOT.'basic/basicgnomo/'.$includeStr.'/'.$includeStr.'.php';
        if(file_exists($filename)){
            require_once($filename);
        }else{
            die('include '.$include.' not found');
        }
    }
}
