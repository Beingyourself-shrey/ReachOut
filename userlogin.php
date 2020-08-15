<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>userlogin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<style type="text/css">
	.upper{
    margin-top: 150px;
	}
/*nav */
	body { padding-top: 50.5px; }

            .jumbotron {
                color: #2c3e50;
                background: #ecf0f1;

            }
            .navbar-inverse {
                background: rgba(0,0,0,1);
                color: #fff;
            }
            .navbar-inverse .navbar-brand, .navbar-inverse a{
                color:#fff;
            }
            .navbar-inverse .navbar-nav>li>a {
                color: #fff;
            }
            .navbar{
            	z-index: 9999;
               position: absolute;
               top: 0px;
               border-radius: 0px !important;
               width: 100%;
               position: fixed !important;
            }
            li:hover{
            	background-color: #fff;
            	color: black !important;
            }
            li>a:hover{
            	color:black !important;
            }
          
            .active{
            	color:white;
            }
            .navbar-inverse .navbar-nav>.open>a:hover{
            	color:#fff !important;
            }
            /*  other than nav  */
</style>
<body>
<?php

	 $err="";
  include 'connect.php';
  if(isset($_POST['user_submit']))
  {
  extract($_POST);
  $sql="select * from user where user_username='$user_username' ";
  if(!$a=$conn->query($sql))
    die($conn->error);
  if($a->num_rows==0)
    $err="UserName Not Exists";
  else{

    $row=$a->fetch_assoc();
    $pass=$row['user_password'];
    if($pass!=$user_password)
      $err="Invalid Password";

     }
   if($err=="")
   {
    $_SESSION['user_username']=$user_username;
    $_SESSION['user_password']=$user_password;
    $_SESSION['user_name']=$row['name'];
    $_SESSION['user_location']=$row['location'];
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['user_email']=$row['email'];
    $_SESSION['user_credit']=$row['credit'];
    
    header('Location:dashboarduser.php');

   }
  }
?>

<div class="container upper">
    <div class="row">
        <h1 style="text-align: center">User Login</h1>
        <center><div style="color:red;"><?php  echo $err;  ?></div></center>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="userlogin.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="user_username" placeholder="username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="user_password" placeholder="password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="user_submit">Login</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php include'nav.php';  ?>


</body>
</html>