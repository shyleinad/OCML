<?php
  require_once('../resources/string_resources.php');
  function validateEmail($user_reg_email){
    if (preg_match($email_regex, $user_reg_email)){
      return true;
    }
    return false;
  }
  function validateName($user_reg_name){
    if(preg_match($name_regex, $user_reg_name)){
      return true;
    }
    return false;
  }
  function validatePswd($user_reg_pswd){
    if(preg_match($pswd_regex, $user_reg_pswd)){
      return true;
    }
    return false;
  }
  function validatePswdConfirm($user_reg_pswd, $user_reg_pswd_confirm){
    if($user_reg_pswd_confirm===$user_reg_pswd){
      return true;
    }
    return false;
  }
  function validateReg($user_reg_email, $user_reg_name, $user_reg_pswd, $user_reg_pswd_confirm) {
    if ((validateEmail($user_reg_email))&&
    (validateName($user_reg_name))&&
    (validatePswd($user_reg_pswd))&&
    (validatePswdConfirm($user_reg_pswd, $user_reg_pswd_confirm))){
      return true;
    }
    return false;
  }
?>
