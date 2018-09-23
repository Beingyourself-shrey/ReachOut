
<?php
ob_start();
session_start();
if(!isset($_SESSION['ngo_username']))
    header("Location:login.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>user_dashboard_page</title>
	  <meta charset="utf-8">
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
      line-height:1.6em;
    }

#recent
{
	text-align: center;
}


    .button1
    {
    border-radius: 2px;
    background-color: #244D83; /* Green */
    border: none;
    color: white;
    padding: 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 2px;
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


/*   */

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
            z-index: -999;
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
            padding:0px;
            border: none;
            outline: 0;
            display: inline-block;
            width:80% !important;
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


?>

      <?php
      include 'connect.php';
      
      



      ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
     <a href="index.php">
                    <h4>ReachOut</h4>
       </a>
      <ul class="nav nav-pills nav-stacked" id="bigs">
        <li><a href="dashboardngo.php">Home</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=1">Contributions</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=2">Issue</a></li>
        <li><a href="dashboard_ngo_newpage.php?menu_id=2">Join</a></li>
        <li><a href="approve.php" class="active">Approved</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul><br>
 </div>

	  <div class="col-sm-9">
	  	
		<ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="logout.php" style="font-size:20px;"><bold>Logout</bold></a></li>                
        </ul>
      <h4 id="recent">Recent Approve</h4>
      
      <?php  ?>
     
      <?php 
      $id=$_SESSION['ngo_id'];
      $location=$_SESSION['ngo_location'];
      $sql2="select * from approve where `ngo_id` ='$id'";

      if(!$b=$conn->query($sql2))
            die($conn->error);

      while ($row2=$b->fetch_assoc())
        {
          $user_id=$row2['user_id'];
          $sql3="select * from user where user_id='$user_id'";
          if(!$b2=$conn->query($sql3))
            die($conn->error);
          $userdata=$b2->fetch_assoc();
          $user_name=$userdata['name'];
          $user_email=$userdata['email'];
          $user_phone=$userdata['phone'];
          $cat_id=$row2['cat_id'];
          $approve_description=$row2['contribution_discription'];
          $approve_date=$row2['date'];

          $contribution_id=$row2['approve_id'];
          ?>
        <div class="card" style="padding-top: 15px;">
      <div class="opt">
        <ul style="font-family:arial;letter-spacing:1px;">
          <li>Name:<?php echo $user_name; ?></li>
          <li>Mail Id:<?php echo $user_email; ?></li>
          <li>Phone Number:<?php echo $user_phone; ?></li>
          <li>Description:<?php echo $approve_description; ?></li>
          <li>Date:<?php echo $approve_date; ?></li>
          
        </ul>
        <hr>
      </div>
      </div>

          
         
          
        
        <?php }?>
      


      <!--menu issue-->
   
   

     

      <div></div>
</div>
</div>

</body>
</html>