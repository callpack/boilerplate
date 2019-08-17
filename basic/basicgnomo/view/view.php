<?php
function view($nomeStr,$data=null,$print=true){
  $arr=explode('/',$nomeStr);
  $nomeDoRepositorioStr=@$arr[0];
  $nomeDoPacoteStr=@$arr[1];
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
