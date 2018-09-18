<?php

require_once 'includes/constant.php';

class mysql{
  private $conn;

  function __construct(){
    $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or
                  die('There was problem connecting to DB server');
  }

  function verify_Username_and_Pass($un, $pwd){
    $query = "SELECT *
              FROM users
              WHERE username = ? AND password = ?
              LIMIT 1";

    if($stmt = $this->conn->prepare($query)){
      $stmt->bind_param('ss', $un, $pwd);
      $stmt->execute();

      if($stmt->fetch()){
        $stmt->close();
        return true;
      }
    }
  }

  function signup_user($un, $pwd, $firstname, $lastname, $email){
      $sql = "INSERT INTO users (username, password, firstname, lastname, email)
              VALUES ('$un', '$pwd', '$firstname', '$lastname', '$email')";

      if (mysqli_query($this->conn, $sql)) {
        return true;
      }
      else {
        echo "Error: " . $sql . " \r\n " . mysqli_error($this->conn);
      }

      mysqli_close($this->conn);


  }




}
