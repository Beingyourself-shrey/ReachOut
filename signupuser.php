<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
            
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif|Roboto" rel="stylesheet">

<style type="text/css">
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
      $sql="select * from city order by city_name";
      if(!$q=$conn->query($sql)) 
      die($conn->error);
  if(isset($_POST['submit_reg_u']))
  {
     
    
    extract($_POST);
    $sql3="select `user_username` from user where `user_username`='$username'";
    if(!$r=$conn->query($sql3))
        die($conn->error);
    
        
    if($r->num_rows>0)
        $err="Username already exist";
    if($err==""){
        $location=strtolower($location);
    $sql2="insert into user values('','$username','$password','$name','$mail','$location','0','$number')";
    if(!$o=$conn->query($sql2))
        die($conn->error);
    header('Location:index.php');

          }
  }

    ?>
<?php include 'nav.php';  ?>
<div class="container">
    <div class="row">
        <h1 style="text-align: center">User Sign Up</h1>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="signupuser.php" method="post">
                <center><div style="color:red;"><?php  echo $err;  ?></div></center>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="number" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="mail" placeholder="Mail-id" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                 <div class="form-group">
                    <select class="form-control" name="location" required>
                         <option selected disabled>City!</option>
                        <?php
                          while ($num=$q->fetch_assoc()) { ?>
                             <option value="<?php echo $num['city_name']; ?>"><?php echo $num['city_name']; ?></option>
                        <?php  }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="submit_reg_u">Sign Up!</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>