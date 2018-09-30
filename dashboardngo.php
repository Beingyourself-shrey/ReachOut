<?php
ob_start();
session_start();
if(!isset($_SESSION['ngo_username']))
    header("Location:login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard_user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    

    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
   
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    .ngo
    {
    	text-align: center;
    	font-weight: 200;
    	font-family: arial;
    	letter-spacing: 1px;

    }


    html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
	margin:0 auto;
  float: center;
  max-width: 320px;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  overflow:hidden;
}

.title {
  color:#000 !important;
  font-family: arial;
  letter-spacing: 1px;
  padding: 5px;

}
.ngoname{
  color:#0E3260;
  margin-left:-20; 

}

    .container{
    	width: 70% !important;
    }
    .button {
    	padding:10px;
  border: none;
  outline: 0;
  display: inline-block;
  width:100%;
  color: white;
  background-color: #244D83;
  text-align: center;
  cursor: pointer;

}
#bigs
{
	font-weight: 700px;
	font-size: 20px;
}

.button:hover {
  background-color: #555;
}



/* */

*{
            font-family: 'Raleway', sans-serif !important;
            }
            .content{
            }
            .sidenav {
            background-color: #111;
            height: 690px !important;
            position: fixed;
            }
            footer {
            background-color: #555;
            color: white;
            padding: 15px;
            margin-top: -30px;
            }
            @media screen and (max-width: 767px) {
            .sidenav {
            height: auto;
            padding: 15px;
            position: relative;
            z-index:999;
            }
            }
            .ngo
            {
            text-align: center;
            font-weight: 200;
            font-family: arial;
            letter-spacing: 1px;
            }
            html {
            box-sizing: border-box;
            }
            *, *:before, *:after {
            box-sizing: inherit;
            }
                .column {
            
             float: none;
            width: 100%;
            position: relative;
            display: block;
            margin:0 auto;
           
            margin-bottom: 16px;
            padding: 0 8px;
            }
            @media screen and (max-width: 650px) {
            .column {
            width: 100%;
            display: block;
            }
            }
            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
             float: none;
            width: 100%;
            position: relative;
            display: block;
            margin:0 auto;
            }
            .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
            overflow:hidden;
            }
            .title {
            color:#9EA19E;
            font-family: arial;
            letter-spacing: 1px;
            }
            .ngoname{
            color:#0E3260;
            margin-left:-20; 
            }
            .container{
            width: 70% !important;
            }
            .button {
            padding:10px;
            border: none;
            outline: 0;
            display: inline-block;
            width:100%;
            color: white;
            background-color: #244D83;
            text-align: center;
            cursor: pointer;
            }
            .active{
            background-color:  #337AB7 !important;
            }
            a{
            font-size:18px;
            }
            a:hover{
            background-color: #337AB7 !important;
            }
            li{
            margin-top: 10px;
            }
            .button:hover {
            background-color: #337AB7 !important;
            }
            /* Set gray background color and 100% height */
            /* Set black background color, white text and some padding */
            footer {
            background-color: #555;
            color: white;
            padding: 15px;
            margin-top: 10px;
            }
            a{
            color:white !important;
            }
            .col-sm-9{
              margin-left:25%;
            }
            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
            .sidenav {
            height: auto;
            padding: 15px;
            }
            .col-sm-9{
              margin-left:0;
            }
          }
  </style>
</head>
<body>
<?php
include 'connect.php' ;




?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
       <a href="index.php">
                    <h4>ReachOut</h4>
       </a>
      <ul class="nav nav-pills nav-stacked" id="bigs">
        <li><a href="dashboardngo.php" class="active">Home</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=1">Contributions</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=2">Issue</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=2">Join</a></li>
        <li><a href="approve.php">Approved</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul><br>
 </div>

	  <div class="col-sm-9">
	  	<ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="lo_sgup.php" style="font-size:20px;"><bold>Logout</bold></a></li>                
        </ul>
      
      <h1 class="ngo">Your Profile</h1>
      
      <br>
      <div class="contents">
      	 <div class="column">
          <div class="card">
            <div class="container">
              <div class="title"> <h4>Ngo Name:<?php echo $_SESSION['ngo_name']; ?></h4></div>
              
                <p class="title"> <h4>Ngo Username:<?php echo $_SESSION['ngo_username'];  ?><h4></p>
                	
                <p class="title"><h4><?php echo $_SESSION['ngo_mail'];  ?></h4></p>
                
                <p class="title"><h4> <?php echo $_SESSION['ngo_location'];  ?></h4></p>
                
                <p><button class="button updatbtn">Update</button></p>
                
                <br>
                <br>
              </div>
           </div>
       </div>
      
      </div>

</body>
</html>