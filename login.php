<?php include "includes/config.php"; //allows access to the config file for access to database?>
<?php

  //starts the process of logging the user in as a member by checking to see if the login fields were filled in
  if(!empty($_POST['usernameInput']) && !empty($_POST['passwordInput']))
  {
    $username = $_POST['usernameInput']; //removes unwanted parts of what have been entered in field
    $password = md5($_POST['passwordInput']); //removes unwanted parts and encrypts the password entered

    $checklogin = mysqli_query($connection, "SELECT * FROM users WHERE email = '".$username."' AND password = '".$password."'"); //database query to find all users who match data entered

    if(mysqli_num_rows($checklogin) == 1)	//checking to see if any matches are found for that user
    {
      $row = mysqli_fetch_array($checklogin);	//getting an array of the data returned from query
      $email = $row['email'];		//assigning a variable to the users email
      $name = $row['firstname'];

      //setting the session
      $_SESSION['email'] = $email;	//storing user's email in session
      $_SESSION['LoggedIn'] = 1;	//setting the user as being logged in for this session
      $_SESSION['Name'] = $name;

      echo "Success";

    }
    else //when no matches of the details entered are found
    {
      echo "Error, User not found";
      //echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";	//given link to redirect to home page to try login again
    }
  }

  //if the user's login was not successful

  ?>
