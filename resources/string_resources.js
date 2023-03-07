//elérési utak
/*$string_bootstrap_css_route="./dependencies/bootstrap-5.1.3-dist/css/bootstrap.min.css";
$string_bootstrap_js_route="./dependencies/bootstrap-5.1.3-dist/js/bootstrap.min.js";
$string_jquery_route="./dependencies/jquery-3.6.0.min.js";
$string_menu_route="./view/menu.php";
$string_fontawesome_css_route="dependencies/fontawesome-free-6.1.1-web/css/fontawesome.min.css";
$string_controller_route="./controller/";
$string_controller_modals_route="./controller/modals/";
$string_view_modals_route="./view/modals/";*/

//models
var string_model_user_route = "./model/user.php";

//controllers

var string_controller_user = "./controller/user.php";

//html input ids
///reg
var string_input_user_reg_email = "input_user_reg_email";
var string_input_user_reg_name = "input_user_reg_name";
var string_input_user_reg_borndate = "input_user_reg_borndate";
var string_input_user_reg_pswd = "input_user_reg_pswd";
var string_input_user_reg_pswdconfirm = "input_user_reg_pswd_confirm";

//regexes
var email_regex = /^((([a-z0-9\-(_)(.)])+)(@)(([a-z0-9(_)\-]+\.)+)([a-z]{2,4}))|(\-)$"/;
var name_regex = /^(([AÁBCDEÉFGHIÍJKLMNOÓÖŐPQRSTUÚÜŰVWXYZ][aábcdeéfghiíjklmnoóöőpqrstuúüűvwxyz]+((\-)|(\ ))?)+)(\ [AÁBCDEÉFGHIÍJKLMNOÓÖŐPQRSTUÚÜŰVWXYZ][aábcdeéfghiíjklmnoóöőpqrstuúüűvwxyz]+)$/;
var pswd_regex = /^(?=.*?[AÁBCDEÉFGHIÍJKLMNOÓÖŐPQRSTUÚÜŰVWXYZ])(?=.*?[aábcdeéfghiíjklmnoóöőpqrstuúüűvwxyz])(?=.*?[0-9])(?=.*?[§\'\"\+\!\%\/\=\(\)\~\ˇ\^\˘\°\˛\`\˙\´\˝\¨\¸\\\|\€\÷\×\[\]\$\¤\<\>\#\&\@\{\}\;\>\*\,\.\-]).{8,100}$/;
