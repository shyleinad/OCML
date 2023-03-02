//email validation (email text, input of the text to change it's border)
function validateEmail(user_reg_email, input_id) {
  //if matches the regex
  if (email_regex.test(user_reg_email)) {
    $("#" + input_id).css("border", "solid green");
    return true;
  }
  $("#" + input_id).css("border", "solid red");
  return false;
}
//name validation (name text, input of the text to change it's border)
function validateName(user_reg_name, input_id) {
  //if matches the regex
  if (name_regex.test(user_reg_name)) {
    $("#" + input_id).css("border", "solid green");
    return true;
  }
  $("#" + input_id).css("border", "solid red");
  return false;
}
//pswd validation (pswd text, input of the text to change it's border)
function validatePswd(user_reg_pswd, input_id) {
  //if matches the regex
  if (pswd_regex.test(user_reg_pswd)) {
    $("#" + input_id).css("border", "solid green");
    return true;
  }
  $("#" + input_id).css("border", "solid red");
  return false;
}
//pswd confirm validation (pswd text, pswd confirm text, input of the text to change it's border)
function validatePswdConfirm(user_reg_pswd, user_reg_pswd_confirm, input_id) {
  //if matches the regex
  if (user_reg_pswd_confirm === user_reg_pswd) {
    $("#" + input_id).css("border", "solid green");
    return true;
  }
  $("#" + input_id).css("border", "solid red");
  return false;
}
//validate the whole registration
function validateReg(user_reg_email, user_reg_name, user_reg_pswd, user_reg_pswd_confirm) {
  //if they all return true, they all match the regex
  //this way, not all of the funtions will trigger
  if ((validateEmail(user_reg_email, string_input_user_reg_email)) &&
    (validateName(user_reg_name, string_input_user_reg_name)) &&
    (validatePswd(user_reg_pswd, string_input_user_reg_pswd)) &&
    (validatePswdConfirm(user_reg_pswd, user_reg_pswd_confirm, string_input_user_reg_pswdconfirm))) {
    return true;
  }
  return false;
}
