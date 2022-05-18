$(document).ready(function(){

  //Regisztráció katt
  $("#button_menu_user_registration").click(function(){
    $("#modal_user_registration").modal('show');
    //console.log("regisztráció kattintás");
  });

  //Belépés katt
  $("#button_menu_user_login").click(function(){
    $("#modal_user_login").modal('show');
    //console.log("belépés kattintás");
  });
});
