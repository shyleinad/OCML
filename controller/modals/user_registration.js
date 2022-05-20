$(document).ready(function(){
  //Küldés klikk
  $("#button_user_reg_send").click(function(){
    let user_reg_email = document.getElementById("input_user_reg_email").value;
    let user_reg_name = document.getElementById("input_user_reg_name").value;
    let user_reg_borndate = document.getElementById("input_user_reg_borndate").value;
    let user_reg_pswd = document.getElementById("input_user_reg_pswd").value;
    //console.log(typeof(email)+" "+typeof(name)+" "+typeof(borndate)+" "+typeof(pswd));
    $.ajax({
      url:string_model_user_route,
      data:{command: 'addUser', user_reg_email: user_reg_email, user_reg_name: user_reg_name,
        user_reg_borndate: user_reg_borndate, user_reg_pswd: user_reg_pswd},
      type:'post',
      success: function(){
        //console.log("Reg elküldve: "+string_model_user_route);
      },
      error: function(){
        alert("A regisztráció sikertelen!");
        //console.log("Reg nem lett elküldve");
      }
    })
    //console.log("reg klikk");
  });
});
