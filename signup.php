<?php include "includes/config.php"; //allows access to the config file for access to database?>
<?php

  //starts the process of logging the user in as a member by checking to see if the login fields were filled in
  if($_POST && !empty($_POST['pwd']) && !empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']))
  {
    //removes unwanted parts of what have been entered in field
    $pwd= md5($_POST['pwd']); //removes unwanted parts and encrypts the password entered
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];


    $checkemail = mysqli_query($connection, "SELECT * FROM users WHERE email = '".$email."'");



    if(mysqli_num_rows($checkemail) == 1) //if the user has already registered with the email before
    {
      echo "Sorry, but this email has already been assigned to an account.";
    }
    else{
      $sql = "INSERT INTO users (password, firstname, lastname, email)
              VALUES ('$pwd', '$firstname', '$lastname', '$email')";
      $signup = mysqli_query($connection, $sql);

      if($signup){
        echo "Success";
      }

    }
}
?>
