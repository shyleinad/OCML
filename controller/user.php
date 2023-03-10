<?php
  require_once("../common/validate.php");
  $command_from_request=null;
  if (isset($_POST["command"])&&!empty($_POST["command"])){
    $command_from_request=$_POST["command"];
    switch ($command_from_request) {
      //registration
      case 'addUser':
        //if matches validators
        if (validateReg($_POST["user_reg_email"], $_POST["user_reg_name"], $_POST["user_reg_pswd"], $_POST["user_reg_pswd_confirm"])){
          //TODO: give it to dal
        }
        break;

      default:
        break;
    }
  }
?>
