$(document).ready(function(){
  //Küldés klikk
  $("#button_user_reg_send").click(function(){
    let session_token = $('meta[name="session_token"]').attr('content');
    //console.log(session_token);
    let user_reg_email = document.getElementById("input_user_reg_email").value;
    let user_reg_name = document.getElementById("input_user_reg_name").value;
    //let user_reg_borndate = document.getElementById("input_user_reg_borndate").value; //taken out
    let user_reg_pswd = document.getElementById("input_user_reg_pswd").value;
    let user_reg_pswd_confirm = document.getElementById("input_user_reg_pswd_confirm").value;
    //console.log(user_reg_email+" "+user_reg_name+" "+user_reg_pswd+" "+user_reg_pswd_confirm);
    if (validateReg(user_reg_email, user_reg_name, user_reg_pswd, user_reg_pswd_confirm)){
      console.log("nem jóóó");
      return; //TODO: some was of letting the user know that the input is not correct
    }
    $.ajax({
      url:string_controller_user,
      data:{command: 'addUser', user_reg_email: user_reg_email, user_reg_name: user_reg_name, user_reg_pswd: user_reg_pswd},
      type:'post',
      headers:{
        'session_token': session_token},
      success: function(){
        //console.log("Reg elküldve: "+string_controller_user);
        //alert("A regisztráció elküldve!");
      },
      error: function(){
        alert("A regisztráció sikertelen!");
        //console.log("Reg nem lett elküldve");
      }
    });
    //console.log("reg klikk");
  });
});
