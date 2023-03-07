<?php
  require_once("../common/validate.php");
  //test
  echo("<br>".validateEmail($_POST["user_reg_email"]));
  echo("<br>".validateName($_POST["user_reg_name"]));
  echo("<br>".validatePswd($_POST["user_reg_pswd"]));
  echo("<br>".validatePswdConfirm($_POST["user_reg_pswd"], $_POST["user_reg_pswd_confirm"]));
  //test end
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
