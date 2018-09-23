<?php
ob_start();
if(!isset($_SESSION))
session_start();


?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">ReachOut</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#cont">Contribution</a></li> 
        <li><a href="index.php#issue">Issue</a></li> 
        <li><a href="index.php#join">Join</a></li> 
        <?php 
        if(isset($_SESSION['user_username']))
         {  ?>
        <li><a href="<?php echo 'dashboarduser.php';  ?>"><?php echo $_SESSION['user_username'];  ?></a></li> 
         <?php }?>
          <?php 
        if(isset($_SESSION['ngo_username']))
         {  ?>
        <li><a href="<?php echo 'dashboardngo.php';  ?>"><?php echo $_SESSION['ngo_username'];  ?></a></li> 
         <?php }?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
      <?php
      if(!isset($_SESSION['user_username']) && !isset($_SESSION['ngo_username']))
        {?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="signupuser.php">User</a></li>
          <li><a href="signupngo.php">Trust</a></li>
          
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Log in <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="userlogin.php">User</a></li>
          <li><a href="login.php">Trust</a></li>
          
        </ul>
      </li>
       <?php } 
    else
        {?>
          <li><a href="logout.php">Logout</a></li>
       <?php }?>
       
      
      </ul>
    </div>
  </div>
</nav>

