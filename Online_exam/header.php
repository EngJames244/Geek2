<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Geek E-Learning Platform" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title> Geek </title>
        <!-- Include Stylesheet Files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../icons/css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/home.css">
        <!-- ====================
            Designed By : Hesham Mohamed Fathy 
        ===================== -->
    </head>
    <body>
        <!-- Upper bar Section -->
            <div class="upperbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                          <i class="fas fa-tty"></i> 02555555550 , <i class="fas fa-mobile-alt"></i> 015000000056100
                        </div>
                        <div class="col-sm">
                            Let's Work Together , <button class="btn btn-outline-success">Our Vision</button> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- Navbar Section -->
         <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#"> Geek </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../courses.php">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../courses.php">Courses</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Live Training</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact</a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="../onlinecourse/index.php">Profile</a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="../index.php">Logout</a>
                </li>
                </ul>
            </div>
          </div>
         </nav>
            <!-- Footer Section -->
            <footer class="fixed-bottom">
                <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                       <p>
                            Designed <i class="fa fa-heart"></i> by
                            <a target="_blank" href="#">Hesham Mohamed Fathy</a>
                             Copyright &copy; 2019 All Right Reserved
                      </p>
                    </div>
                
                 <div class="col-sm-4 col-xs-12 rule">
                        <div><a href="#">Terms of Use</a></div>
                        <div><a href="#">Privacy Policy</a></div>
                </div>
                 <div class="col-sm-4 col-xs-12">
                        <span><a href="#"><i class="fab fa-facebook fa-2x"></i></a></span>
                        <span><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></span>
                        <span><a href="#"><i class="fas fa-envelope fa-2x"></i></a></span>
                        <span><a href="#"><i class="fab fa-github fa-2x"></i></a></span>
                </div>
                </div>
                </div>
            </footer>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>