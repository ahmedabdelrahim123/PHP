<?php 
require_once("config.php");
require_once("functions.php");

$error="";

if (!empty($_POST)) {
 
  if(empty($errors)){ 
    echo print_welcome_message();
    save_to_file();
    convert_file_to_array();
    exit();
  }
  
}


  $parameter = isset($_GET["page"]) ? $_GET["page"] : "contact";
  if ($parameter === "contact")
      require_once("views/form.php");
  else
      require_once("views/users.php");
  ?>
