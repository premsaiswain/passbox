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
    <title>add page</title>
</head>
<body>
<?php 
$sucess = 0;
       if(isset($_POST['add'])){
             include "dbconnect.php";
             session_start();
             $name = $_SESSION['username'];
             $facebook = $_POST['faceboo'];
             $insta = $_POST['instagram'];
             $twit = $_POST['twitter'];
             $email = $_POST['email'];
             $link = $_POST['linkedin'];
             $atm = $_POST['atm'];
             $game = $_POST['game']; 
             $sql = "UPDATE `users` SET `facebook` = '$facebook',`instagram` = '$insta', `twitter` = '$twit', `email` = '$email', `linkidin` = '$link', `paytm` = '$atm', `games` = '$game'
              WHERE `users`.`username` = '$name';";
             $sqli = mysqli_query($conn, $sql);
             if($sqli){
                 $sucess = 1;
             }
             else{
                 $sucess = 2; 
             }

       }
    
    ?>
<header>
 <div class="container">
   <nav class="navbar navbar-expand-md navbar-dark  fixed-top nav">
     <div class="container">
       <a href="home.php" class="navbar-brand" style="text-shadow: 0.1em 0.1em 0.15em black"><i class="fa fa-1x fa-key" aria-hidden="true"></i>passbox</a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="navbarid">
    <ul class="navbar-nav text-center ml-auto">
      <li class="nav-item"> <a href="home.php" class="nav-link "> <i class="fa fa-1x fa-home" aria-hidden="true"></i>Home </a></li>
      <li class="nav-item"> <a href="add.php" class="nav-link active"><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
       <li class="nav-item">  <a href="logout.php" class="nav-link " ><i class="fa fa-1x fa-sign-out" aria-hidden="true"></i> logout</a></li>
    </ul>
  </div>
  </div>
   </nav>
   </div>
  </header>
    <div class="container layout1">
       <form class="form-horizontal" method="POST" action="">
           <div class="row">
           <i class="fa fa-4x fa-facebook-official col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">facebook:</label>
             <input type="password" placeholder="password" name="faceboo" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-instagram col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">instagram:</label>
             <input type="password" placeholder="password" name="instagram" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-twitter col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">twitter:</label>
             <input type="password" placeholder="password" name="twitter" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-envelope col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">email:</label>
             <input type="password" placeholder="password" name="email" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-linkedin col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">linkedin:</label>
             <input type="password" placeholder="password" name="linkedin" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-credit-card col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">ATM/BANK:</label>
             <input type="password" placeholder="password" name="atm" class="form-control">
           </div>
           </div>
           <div class="row">
           <i class="fa fa-4x fa-gamepad col-4" aria-hidden="true"></i>
           <div class="col-7 form-group">
             <label class="control-label" for="">game:</label>
             <input type="password" placeholder="password" name="game" class="form-control">
           </div>
           </div>
           <div class="form-group col-sm-12 text-center">
               <?php 
               if($sucess == 1){
                   echo "<div class='alert alert-success' role='alert'>
                   added sucessfully.
                 </div>" ;
               }
               if ($sucess == 2){
                echo "<div class='alert alert-danger' role='alert'>
                didnt add sucessfully.
              </div>" ;
               }
               
               ?>
          <input type="submit" class="btn btn-dark btn-md"  value="add" name="add">
         </div>
       </form>
      
    </div>
   
</body>
</html>