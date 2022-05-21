<?php
  //session_start();
  function generateToken(){
    $string_token_chars="123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxy,.-?/*+";
    $string_res="";
    for ($i=0; $i < 8; $i++) {
      $int_rand_num=rand(0, strlen($string_token_chars)-1);
      $string_res.=$string_token_chars[$int_rand_num];
    }
    $string_res=hash("SHA256", $string_res);
    $_SESSION["session_token"]=$string_res;
    //echo $_SESSION["session_token"];
  }
  //generateToken();
?>
