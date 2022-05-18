  <!DOCTYPE html>
  <?php require_once ('./resources/string_resources.php');
  require_once('./common/import.php');
  importFolder($string_view_modals_route);
  ?>
  <html lang="hu">
  <head>
     <meta charset="UTF-8">
     <meta name="keywords" content="<?php echo($string_meta_keywords_hu); ?>">
     <meta name="description" content="<?php echo($string_meta_description_hu); ?>">
     <meta name="author" content="<?php echo($string_meta_author); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo($string_bootstrap_css_route); ?>">
     <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">-->
     <title><?php echo($string_meta_title_hu); ?></title>
     <script src="<?php echo($string_jquery_route); ?>"></script>
     <script src="<?php echo($string_bootstrap_js_route); ?>"></script>
     <script src="<?php echo($string_controller_route."main_menu.js"); ?>"></script>
     <link rel="stylesheet" href="<?php echo($string_fontawesome_css_route); ?>">
  </head>
  <body>
