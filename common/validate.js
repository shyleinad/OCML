function validateReg(user_reg_email, user_reg_name, user_reg_pswd, user_reg_pswd_confirm){
  if((user_reg_email.match(string_input_user_reg_email))&&
  (user_reg_name.match(string_input_user_reg_name))&&
  (user_reg_pswd.match(string_input_user_reg_pswd))&&
  (user_reg_pswd_confirm===user_reg_pswd)){
    return true;
  }
  return false;
}
