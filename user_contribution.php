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
    .row.content {height: 1500px}
    

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

  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Ngo Name</h4>
      <ul class="nav nav-pills nav-stacked" id="bigs">
        <li><a href="dashboardngo.html">Home</a></li>
        <li><a href="#dashboard_ngo_newpage.html">Contributions</a></li>
        <li><a href="dashboard_ngo_newpage.html">Issue</a></li>
        <li><a href="dashboard_ngo_newpage.html">Join</a></li>
        <li><a href="dashboard_ngo_newpage.html">Others</a></li>
      </ul><br>
 </div>

	  <div class="col-sm-9">
	  	<hr>
		<ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="lo_sgup.php" style="font-size:20px;"><bold>Logout</bold></a></li>                
        </ul>
      <h4 id="recent">RECENT POSTS</h4>
      <hr><hr>

     <div class="card" style="padding-top: 15px;">
      <div class="opt">
      	<ul style="font-family:arial;letter-spacing:1px;">
      		<li>Name:</li>
      		<li>Mail Id:</li>
      		<li>Phone Number:</li>
      		<li>Description:</li>
          <li>Date:</li>
      		<button class="button button1">Approve</button>
      	</ul>
      	<hr>
      </div>
      </div>


      <div></div>
</div>
</div>

</body>
</html>