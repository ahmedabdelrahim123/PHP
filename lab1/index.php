<?php 
require_once("config.php");
require_once("functions.php");

if(!empty($_POST)){
    if(empty($_POST["name"]) ||empty($_POST["email"]) || empty($_POST["message"]) ){
        $error = "The Data cannot be blanked";
    }elseif(strlen($_POST["name"]) > MAX_NAME_LENGTH){
        $error = "Name must be less than less than 100 charchters";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $error = "Email is not valid";
    }elseif(strlen($_POST["message"]) > MAX_MESSAGE_LENGTH){
        $error = "Message must be less than less than 255 charchters";
    }
    else{
        $error = "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
                  <strong>Name: </strong>" .$_POST["name"] . "</br>".
                  "<strong>Email: </strong>" .$_POST["email"] . "</br>".
                  "<strong>Message: </strong>" .$_POST["message"];
        
        die($error);
    }
}


require_once("views/form.php");

?>