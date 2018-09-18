<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">R.K.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Me <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="view-pdf" href=<?php echo "CSS/Resume/".$_SESSION['Username'].".pdf" ?>>Resume</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ECE</a></li>
            <li><a href="#">CS</a></li>
            <li><a href="#">Personal</a></li>
          </ul>
        </li>
        <li><a href="https://www.linkedin.com/in/rajatkuthiala/">LinkedIn</a></li>
        <li><a href="https://github.com/rajatkuthiala">Git</a></li>
        <li><a href="#">Contact Me</a></li>
      </ul>

        <?php
        if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
        {
          include("layout/headerloggedin.php");	//includes this header if logged in
        }

        else
        {
          include("layout/header.php");		//includes this header if not logged in
        }
      ?>

    </div>
  </div>
</nav>
