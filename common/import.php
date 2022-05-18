<?php
  function importFolder($string_folder_route){
    $array_files = glob($string_folder_route.'*.php');
    //var_dump($array_files);
    foreach ($array_files as $string_file) {
        require_once($string_file);
    }
  }
?>
