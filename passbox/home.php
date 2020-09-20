<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
    <title>home page</title>
</head>
<body>
    <?php 
    session_start();
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
              header("location : login.php");
              exit;
        }
    ?>
   <header>
 <div class="container">
   <nav class="navbar navbar-expand-md navbar-dark   fixed-top nav">
     <div class="container">
       <a href="home.php" class="navbar-brand" style="text-shadow: 0.1em 0.1em 0.15em black"><i class="fa fa-1x fa-key" aria-hidden="true"></i>passbox</a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="navbarid">
    <ul class="navbar-nav text-center ml-auto">
      <li class="nav-item"> <a href="home.php" class="nav-link active"> <i class="fa fa-1x fa-home" aria-hidden="true"></i> Home </a></li>
      <li class="nav-item"> <a href="add.php" class="nav-link "><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
       <li class="nav-item">  <a href="logout.php" class="nav-link " ><i class="fa fa-1x fa-sign-out" aria-hidden="true"></i> logout</a></li>
    </ul>
  </div>
  </div>
   </nav>
   </div>
  </header>
    <div class="container layout1 row text-center">
       <h1 class="col-12 container"> Welcome "<?php echo $_SESSION['username'];?> "</h1>
          <h4 class="col-12 container">hope you had a good day.</h4>  
    </div>
    
       <div class="container text-center layout1">
           <h4>click on it to add your password</h4>
           <a href="add.php" class="btn btn-dark btn-md">Add</a>
       </div>
      
 <hr>
   <?php 
   include "dbconnect.php";
   $name = $_SESSION['username'];
   $sql = "SELECT * FROM `users`  WHERE `users`.`username` = '$name'";
$result = mysqli_query($conn, $sql);
  while($res = mysqli_fetch_array($result) ){ 
      
      echo "<div class='container'>";
      echo "<h3 class='text-center'> YOUR PASSWORDS </h3>";
      echo "<i class='fa fa-4x fa-facebook-official col-4 ' aria-hidden='true'></i>". $res['facebook'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-instagram col-4 ' aria-hidden='true'></i>". $res['instagram'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-twitter col-4 ' aria-hidden='true'></i>". $res['twitter'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-envelope col-4 ' aria-hidden='true'></i>". $res['email'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-linkedin col-4 ' aria-hidden='true'></i>". $res['linkidin'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-credit-card col-4 ' aria-hidden='true'></i>". $res['paytm'] ."<br>";
      echo "<hr>";
      echo "<i class='fa fa-4x fa-gamepad col-4 ' aria-hidden='true'></i>". $res['games'] ."<br>";
      echo "<hr>";
      echo "</div>";
     } 
   
   ?> 
   <div class="container text-center">
     <h3>Wann upate your password click here..</h3>
       <a href="add.php" class='btn btn-dark btn-md'>update</a>
   </div>
</body>
</html>