<?php

require 'mysql.php';

class membership{

  function validate_user($un, $pwd){
    $mysql = New mysql();
    $ensure_credentials = $mysql->verify_Username_and_Pass($un, $pwd);

    if($ensure_credentials){
      $_SESSION['status'] = 'authorized';
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username; 
      return('correct');
      //header("location: test.php");
    }
    else {
      //return "Please Enter Correct Username and Password";
      return('incorrect');
    }

  }

  function add_user($un, $pwd, $first, $last, $em){
    $mysql = New mysql();
    $user_signup = $mysql->signup_user($un, $pwd, $first, $last, $em);

    if($user_signup){
      return('Signup Successful');
    }
  }

}

?>
