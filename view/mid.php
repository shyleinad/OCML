<?php require_once("./resources/string_resources.php");
require_once('./common/import.php'); ?>
<div id="mid">
  <div id="header">
  </div>
  <?php require_once($string_menu_route); ?>
  <div id="content">
    <?php importFolder($string_view_modals_route); ?>
  </div>
  <div id="footer">
  </div>
</div>
