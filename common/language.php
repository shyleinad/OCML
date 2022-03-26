<?php
/**
 * Checks/gets the selected language and set other stuffs based on it
 */
class classLanguage{
  private static $string_lang=null;
  public static function stringGetSelectedLang(){
    self::voidUpdateLang();
    return $string_lang;
  }
  public static function stringSetHtmlTop(){
    self::voidUpdateLang();
    if (self::$string_lang=="en") {
      return "./view/top_en.php";
    } elseif (self::$string_lang=="hu") {
      return "./view/top_hu.php";
    } else {
      return null;
    }
  }
/**
*Update the private string_lang property
*/
  private static function voidUpdateLang(){
    self::$string_lang="hu";
  }
}
?>
