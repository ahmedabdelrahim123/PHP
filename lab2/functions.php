<?php
  function validate_form($var){
    if( !empty($_POST[$var])){
      return $_POST[$var];
    }
  }
 
  function save_to_file(){
    $fb=fopen(__Saving_File_,"w+");
    $date = date("F j Y g:i a");
    $ip = $_SERVER['REMOTE_ADDR'];
    $email = $_POST["email"];
    $name = $_POST["name"];
    fwrite($fb, "$date,$ip,$email,$name" . PHP_EOL);
  }

  function convert_file_to_array() {
    return file(__Saving_File_);
}
  

  // function print_welcome_message()
  // {
  //     return  
  //     "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
  //     <strong>Name: </strong>" .$_POST["name"] . "</br>".
  //     "<strong>Email: </strong>" .$_POST["email"] . "</br>".
  //     "<strong>Message: </strong>" .$_POST["message"];
  // }

  ?>