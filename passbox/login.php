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
    <title>Login page</title>
</head>
<body>
<?php 
$login = true;
if(isset($_POST['login'])){
    include "dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from users where username = '$username'";
    $sqli = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($sqli);
    if($row == 1){
        while($check = mysqli_fetch_assoc($sqli)){
            if(password_verify($password,$check['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location:home.php");

            }
            else{
                $login = false;
            }
        }
    }
}



?>





    <div class="container text-center ">
   <img src="" class="">
   <h1 class="style4">"WELCOME TO <i class="fa fa-1x fa-key" aria-hidden="true"></i>PASSBOX "</h1>
    <p>say no to forget password</p>
    </div>
    <i class="fa fa-4x fa-user-circle col-12 text-center" aria-hidden="true"></i>
    <div class="layout">
   
     <form class="form-horizontal row" method="POST" action="">
         <div class="form-group col-sm-10">
             <label class="control-label" for="username">Username:</label>
          <input type="text" name="username" placeholder="enter username" class="form-control" id="username">
         </div>
         <div class="form-group col-sm-10">
             <label class="control-label" for="username">password:</label>
          <input type="password" name="password" placeholder="enter password" class="form-control" id="username">
         </div>
         <?php 
           if($login == false){
            echo "<div class='alert alert-danger col-sm-10' role='alert'>
            invalid username or password !.
          </div>";
           }
         ?>
         <div class="form-group col-sm-12 text-center">
          <input type="submit" class="btn btn-dark btn-md"  value="Login" name="login">
         </div>
     </form>
     </div>
     <div class="container row">
      <div class="container col-6"><hr></div>   
      <div class="container col-6"> or <hr></div>
     </div>
     <div class="container style2 row text-center">
         <h4 class="col-12">Dont have an account !! go ahead and signup</h4>
       <a href="signup.php" class="btn btn-dark btn-lg text-center col-4 style3">signup</a>
     </div>
</body>
</html>