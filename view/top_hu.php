<?php /*require_once ('./resources/string_resources.php');*/ //redundant ?>
  <!DOCTYPE html>
  <html lang="hu">
  <head>
     <meta charset="UTF-8">
     <meta name="session_token" content="<?php echo $_SESSION["session_token"]; ?>">
     <meta name="keywords" content="<?php echo($string_meta_keywords_hu); ?>">
     <meta name="description" content="<?php echo($string_meta_description_hu); ?>">
     <meta name="author" content="<?php echo($string_meta_author); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo($string_bootstrap_css_route); ?>">
     <title><?php echo($string_meta_title_hu); ?></title>
     <script src="<?php echo($string_jquery_route); ?>"></script>
     <script src="<?php echo($string_bootstrap_js_route); ?>"></script>
     <script src="<?php echo($string_resources_stringresourcesjs_route); ?>"></script>
     <script src="<?php echo($string_controller_route."main_menu.js"); ?>"></script>
     <script src="<?php echo($string_common_validatejs_route); ?>"></script>
     <link rel="stylesheet" href="<?php echo($string_fontawesome_css_route); ?>">
  </head>
  <body>
