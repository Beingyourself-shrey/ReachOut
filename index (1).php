<?php
include 'nav.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif|Roboto" rel="stylesheet">
  <style type="text/css">
  /*  nav  */
     *{
     	/*border:1px solid red;*/
     }
	 body { padding-top: 50.5px;
	        background-color: #fafafa !important;
	         }

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
	    	.background-main-page{
          background:url(frontpagemain.jpg);
         height:630px;
         width:100%;
         background-size: cover;
         background-attachment: fixed;
         background-repeat: no-repeat;
         background-position:65%;
         margin:-1px;
         padding: 1px;

		}
		::-webkit-scrollbar{
         width: 0px;
		}
		.transparent{
			padding: 40px;
			width: 60%;
			position: relative;
			float: none;
			display: block;
			margin:0 auto;
			text-align: center;
			font-size: 30px;
			color:#000;
			background-color:rgba(255,255,255,0.3);
			margin-top: 200px;
			font-weight: 700;
			font-family: 'IBM Plex Serif', serif;
			letter-spacing:0.05em;
			color: #222;

		}
		.quote{
			width:30px;
			position: relative;
			top:-10px;
		}

		/* below landing page */
		.belowlandpage1{
            margin-top: 150px;

        
             }

      .img-left-right{
       width: 100%;
      }
       .quoteandlink{
         text-align: left;
         font-size: 44px;
        color:#414141;
        font-family: 'Roboto', sans-serif;
        margin-top: 50px;
        font-weight: 200;

          }
      .img-full{
	      align-self: center;
          }
       .text{
       	    line-height: 1.66667;
       	    font-size: 18px;
            font-weight: 400;
            line-height: 30.0001px;
            color:#656565;
            word-spacing: 3px;
            margin-top: 30px;
       }
       .right{
       	float: right;
       	width: 50%;


       }
       	.hr{
       		border:2px solid #ccc !important;
       		max-width:300px;
       		margin:0 auto;
       		position: relative;
       		top: 60px;
       	}
       @media screen and (max-width:1100px)
       {
       	.col-sm-6{
       		position: relative !important;
       		display: block;
       		float: none !important;
       		width: 80% !important;
       		margin: 0 auto;


       	}
       
       	.right{
       		float: none;
       		width: 80%;
       		position: relative;
       		display: block;
       		
       		margin: 0 auto;
       	}
       	.quoteandlink{
                    font-size:26px;  
                    margin-top: 10px;           
                  }
       }
		@media screen and (max-width: 700px)
		{
			.transparent{
				width: 90%;
				font-size: 20px;
				margin-top: 100px;

			}
			.background-main-page{
				height:400px;
			}
			
		}
	</style>
	<title>ReachOut</title>

</head>
<body>
<div class="background-main-page">
	<div class="transparent">
		<img src="quote.png" class="quote">
		When everyone has the chance to succeed,we all prosper
		<img src="closequote.png" class="quote">
	</div>
</div>

<!--below background-->
<div class="container-fluid belowlandpage1">
    <div class="col-sm-6 img-full">
     <img src="photos/contribute2.jpg" alt="error loading the image" class="img-left-right">
    </div>
    <div class="col-sm-6 ">
    	<div class="quoteandlink">
    		When everyone has the chance to succeed,we all prosper 
    	</div>
         <div class="text">
         More than half of the books published in India are written in Hindi and English. But in a country with dozens of local languages, this means many students don’t have access to books in their native tongue. Google.org is supporting Pratham Books to rapidly expand the reach of their translation platform StoryWeaver.
         </div>
    </div>
  </div>
<hr class="hr" />
  <div class="container-fluid belowlandpage1">
   
   
     <div class="right">
     <img src="photos/issue1.jpg" alt="error loading the image" class="img-left-right" >
    </div>
     <div class="right">
    	<div class="quoteandlink">
          When everyone has the chance to succeed,we all prosper
       </div> 
         <div class="text">
         More than half of the books published in India are written in Hindi and English. But in a country with dozens of local languages, this means many students don’t have access to books in their native tongue. Google.org is supporting Pratham Books to rapidly expand the reach of their translation platform StoryWeaver.
         </div>
    </div>
  </div>
<hr class="hr"/>
   <div class="container-fluid belowlandpage1"> 
     <div class="col-sm-6 issueimg">
     <img src="photos/join1.jpg" alt="error loading the image" class="img-left-right">
    </div>
    <div class="col-sm-6">
    	<div class=" quoteandlink">
    		 When everyone has the chance to succeed,we all prosper 
    	</div>
         <div class="text">
         More than half of the books published in India are written in Hindi and English. But in a country with dozens of local languages, this means many students don’t have access to books in their native tongue. Google.org is supporting Pratham Books to rapidly expand the reach of their translation platform StoryWeaver.
         </div>
    </div>
  </div>
  <hr class="hr"/>
<div style="height: 30px;">
	
</div>
<?php

include 'nav.php';
?>
<?php
include 'footer.html';

?>
</body>
</html>