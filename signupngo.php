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
  if(isset($_POST['submit_reg']))
  {
     
    
    extract($_POST);
    $sql3="select username from ngo where username='$reg_username'";
    if(!$r=$conn->query($sql3))
        die($conn->error);
    
        
    if($r->num_rows>0)
        $err="Username already exist";
    if($err==""){
        $location=strtolower($reg_location);
    $sql2="insert into ngo values('','$reg_name','$location','$reg_username','$reg_password','$reg_mail')";
    if(!$o=$conn->query($sql2))
        die($conn->error);
    header('Location:index.php');

          }
  }

    ?>
<?php include'nav.php';  ?>
<div class="container">
    <div class="row">
        <h1 style="text-align: center">Trust Sign Up</h1>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="signupngo.php" method="post">
                  <center><div style="color:red;"><?php  echo $err;  ?></div></center>
                <div class="form-group">
                    <input class="form-control" type="text" name="reg_username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="reg_name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="reg_mail" placeholder="Mail-id" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="reg_password" placeholder="Password" required>
                </div>
                 <div class="form-group">
                    <select class="form-control" name="reg_location" required>
                        <option selected disabled>City!</option>
                        <?php
                          while ($num=$q->fetch_assoc()) { ?>
                             <option value="<?php echo $num['city_name']; ?>"><?php echo $num['city_name']; ?></option>
                        <?php  }
                        ?>
                        
                        
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="submit_reg">Sign Up!</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>