<?php
ob_start();
session_start();
if(!isset($_SESSION['user_username']))
    header("Location:userlogin.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>user_dashboard_page</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  ul
  {
  	list-style-type: none;
  }
    
    

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
  .opt
    {
    	font-family: "Times New Roman", Times, serif;
    	font-size: 16px;
    }

#recent
{
	text-align: center;
}


    .button1
    {
    border-radius: 2px;
    background-color: #cccccc; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    #bigs
{
	font-weight: 700px;
	font-size: 20px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
}
*{
    font-family: 'Raleway', sans-serif !important;
  
  }
    .content{
   
    }

    .sidenav {
      background-color: #111;
      height: 690px !important;
      position: fixed;
      z-index:999;

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
  margin-left: 25%;
  float: center;
  width: 40%;
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
        margin-left: 0;
      }
    }
      
  </style>
</head>
<body>
<?php
include 'connect.php';
$sql="select * from `contribution_categories`";
if(!$e=$conn->query($sql))
  die($conn->error);
if(isset($_POST['cat_sub']))
{
  $id=$_SESSION['user_id'];
  extract($_POST);
  $date=date("Y-m-d");
  $sql2="insert into `contribution` values('','$id','$cat','$description','$date')";
  if(!$t=$conn->query($sql2))
    die($conn->error);
  echo '<script>alert("Submission done!!")</script>';
}


?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <a href="index.php">
                    <h4>ReachOut</h4>
       </a>
      <ul class="nav nav-pills nav-stacked" id="bigs">
        <li><a href="dashboarduser.php">Home</a></li>
        <li><a href="contribution.php" class="active">Contributions</a></li>
        <li><a href="issue.php">Issue</a></li>
        <li><a href="issue.php">Join</a></li>
       <li><a href="logout.php">Logout</a></li>
      </ul><br>
 </div>

	  <div class="col-sm-9">
	  	

<div class="container">
    <div class="row">
        <h1 style="text-align: center">Fill Up</h1>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="contribution.php" method="post">
            	<div class="form-group">
                    <select class="form-control" name="cat">
                        <option selected disabled>Categories!</option>
                        <?php
                        while ($j=$e->fetch_assoc()) {?>
                            <option value="<?php echo $j['cat_id']; ?>" ><?php echo $j['name']; ?></option>
                       <?php  }  ?>

                    </select>
                </div>
                <div class="form-group">
                	<textarea rows="4" cols="50" class="form-control" name="description">Description</textarea>
                </div>
                 <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="cat_sub">Submit!</button>
                </div>



      </div>
    </div>
</div>

<?php

?>
</body>
</html>