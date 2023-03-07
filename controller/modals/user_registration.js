$(document).ready(function(){
  //Küldés klikk
  $("#button_user_reg_send").click(function(){
    let session_token = $('meta[name="session_token"]').attr('content');
    //console.log(session_token); //debug
    let user_reg_email = document.getElementById("input_user_reg_email").value;
    let user_reg_name = document.getElementById("input_user_reg_name").value;
    let user_reg_pswd = document.getElementById("input_user_reg_pswd").value;
    let user_reg_pswd_confirm = document.getElementById("input_user_reg_pswd_confirm").value;
    //validation, if not correct
    if (!validateReg(user_reg_email, user_reg_name, user_reg_pswd, user_reg_pswd_confirm)){
      //TODO: some way of letting the user know that the input is not correct
      return;
    }
    $.ajax({
      url:string_controller_user,
      data:{command: 'addUser', user_reg_email: user_reg_email, user_reg_name: user_reg_name, user_reg_pswd: user_reg_pswd},
      type:'post',
      headers:{
        'session_token': session_token},
      success: function(){
        //console.log("Reg elküldve: "+string_controller_user);
        //alert("Sikeres regsiztráció!");
      },
      error: function(){
        alert("A regisztráció sikertelen!");
        //console.log("Reg nem lett elküldve");
      }
    });
  });
});
