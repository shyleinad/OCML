<?php
  try{
    session_start();
    require_once('./resources/string_resources.php');
    require_once('./db_config/connect.php');
    require_once($string_common_tokengen_route);
    generateToken();
    //require_once('common/language.php');
    //require_once(classLanguage::stringSetHtmlTop());
    require_once($string_view_top_hu_route);
    require_once($string_view_mid_route);
    require_once($string_view_bottom_route);
  }
  catch(Exception $e){
    echo($e); //később átírni logolásra
  }
?>
