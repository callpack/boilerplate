<?php
function controller($nomeStr,$data=null){
  $arr=explode('/',$nomeStr);
  $nomeDoRepositorioStr=@$arr[0];
  $nomeDoPacoteStr=@$arr[1];
  $str=ROOT.'call/callgnomo/'.$nomeDoRepositorioStr;
  $str.='/controller/'.$nomeDoPacoteStr.'.php';
  if(file_exists($str)){
    if(is_array($data)){
      extract($data);
    }
    return require_once($str);
  }else{
    die('o controller '.$str.' não existe');
  }
}
