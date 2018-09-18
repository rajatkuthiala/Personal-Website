<?php include "includes/config.php"; //starts session and allows access to the config file for access to database?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CSS/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="particles-js">

<!-- Navigation Bar -->
<<?php include("layout/navbar.php") ?>

<!-- Document Body -->


<div id="documentTop" class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-4" style="color:white">
      <center><h1> Welcome </h1></center>
    </div>
  </div>
</div>


<!-- Contact Me

<section id="contactBox">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6" style="height:400px">
      <span style="verticle-align:center">
      <center>
        <h1>CONTACT</h1>
      </center>
    </span>
    </div>
    <div class="col-md-6">
      <h1>Name</h1>
      <h1>Email</h1>
      <h1>Phone Number</h1>
      <h1>Message</h1>
      <h3>Submit</h3>
    </div>
  </div>
</div>
</section>
-->

<!-- Page Footer -->
<?php include("layout/footer.php") ?>

<!-- Login/Signup Box -->
<?php include("loginsignup.php") ?>







<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="JS/main.js"></script>

<script>
    particlesJS.load('particles-js', 'JSON/particles.json',
    function(){
        console.log('JSON/particles.json loaded...')
    })
</script>

</body>
</html>
