$(document).ready(function(){
  //Küldés klikk
  $("#button_user_reg_send").click(function(){
    $.ajax({
      url:string_model_user_route,
      data:{},
      type:'post',
      success: function(){
        //console.log("Reg elküldve: "+string_model_user_route);
      },
      error: function(){
        //console.log("Reg nem lett elküldve");
      }
    })
    //console.log("reg klikk");
  });
});
