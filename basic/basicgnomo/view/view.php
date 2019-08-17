<?php
function view($nomeStr,$data=null,$print=true){
  $arr=explode('/',$nomeStr);
  $nomeDoRepositorioStr=@$arr[0];
  unset($arr[0]);
  $nomeDoPacoteStr=implode('/',$arr);
  if($nomeDoPacoteStr=='404'){
    header("HTTP/1.0 404 Not Found");
  }
  $str=ROOT.'call/callgnomo/'.$nomeDoRepositorioStr;
  $str.='/view/'.$nomeDoPacoteStr.'.php';
  if(file_exists($str)){
    if(is_array($data)){
      extract($data);
    }
    ob_start();
    require $str;
    $output=ob_get_contents();
    ob_end_clean();
    if($print){
      print $output;
    }else{
      return $output;
    }
  }else{
    die('a view '.$str.' não existe');
  }
}
