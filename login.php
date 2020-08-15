<?php
ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>ReachOut</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
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
</head>
<body>
  <?php
   $err="";
  include 'connect.php';
  if(isset($_POST['submit']))
  {
   
  extract($_POST);
  $sql="select * from ngo where username='$user' ";
  if(!$a=$conn->query($sql))
    die($conn->error);
  if($a->num_rows==0)
    $err="UserName Not Exists";
  else{

    $row=$a->fetch_assoc();
    $pass=$row['password'];
    if($pass!=$pwd)
      $err="Invalid Password";

  }
   if($err=="")
   {
    $_SESSION['ngo_username']=$user;
    $_SESSION['ngo_password']=$pwd;
    $_SESSION['ngo_name']=$row['name'];
    $_SESSION['ngo_location']=$row['location'];
    $_SESSION['ngo_mail']=$row['mail'];
    $_SESSION['ngo_id']=$row['id'];
    header('Location:dashboardngo.php');
 
    
    
   }
  }
  ?>




<div class="container upper">
    <div class="row">
        <h1 style="text-align: center;">Trust Login</h1>
          <center><div style="color:red;"><?php  echo $err;  ?></div></center>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="login.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="user" placeholder="username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pwd" placeholder="password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php include'nav.php';  ?>


</body>
</html>