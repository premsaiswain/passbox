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
    <title>signup page</title>
</head>
<body>
     <?php 
     $start = true;
     $exist = false;
      $passverify = true;
      if(isset($_POST['signup'])){
           include "dbconnect.php";
           $username = $_POST['username'];
           $password = $_POST['password'];
           $cpassword = $_POST['cpassword'];
          $sql ="select * from users where username = '$username'";
          $verify = mysqli_query($conn,$sql);
          $check =  mysqli_num_rows($verify);
          if($check > 0){
               $exist = true;
          }
          else{
               $exist = false;
          }
          if($password == $cpassword){
               $passverify = true;
          }
          else{
              $passverify = false;
          }
           if($passverify == true && $exist == false){
                $hash = password_hash($password , PASSWORD_DEFAULT);
                $sqli = "INSERT INTO `users` (`username`, `password`)
                VALUES ( '$username','$hash')";
                $success = mysqli_query($conn,$sqli);
                if($success){
                     $start = true;
                     session_start();
                     $_SESSION['loggedin']= true;
                     $_SESSION['username']= $username;
                     header("location:home.php");

                }
                else{
                     $start = false;
                }
           }          
     }
     
     ?>
    <div class="container">
      <img src="">
    </div>
    <div class="container layout">
    <!--CREATING LOGIN FORM -->
          <form method="POST" class="form-horizontal row" action="">
                <div class="col-sm-10 form-group">
                     <label class="control-label" for="username">username</label>
                     <input type="text" placeholder="enter username" class="form-control" id="username" name="username">
                </div>
                <div class="col-sm-10 form-group">
                     <label class="control-label" for="password">password</label>
                     <input class="form-control" type="password" placeholder="enter password" id="password" name="password">
                </div>
                 <div class="col-sm-10 form-group">
                     <label class="control-label" for="cpassword">confirm password</label>
                     <input class="form-control" type="password" placeholder="conform password" id="cpassword" name="cpassword">
                </div>
                <?php 

                /* CHECKING IF LOGIN WAS SUCESSFUL OR NOT*/ 

                if( $exist == true || $passverify == false){
                      echo "<div class='alert alert-danger col-sm-10' role='alert'>
                     password doesnt match! or username already exists.
                   </div>";
                } ?>
                <div class="col-sm-10 form-group  text-center">
                     <input type="submit" class="btn btn-dark btn-md  style5" value="signup" name="signup">
                </div>
                <?php   
               
                 if($start == false){
                      echo "<div class='alert alert-danger col-sm-10' role='alert'>
                      error connecting !.
                    </div>";
                 }    
                ?>
        </form>
    </div>
</body>
</html>