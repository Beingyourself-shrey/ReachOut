
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">

        <title>ReachOut</title>

    </head>

    <body>
        <?php
        include 'nav.php';
        ?>
            <div class="body-part">
                <div class="background-main-page">
                    <div class="transparent">
                        <img src="quote.png" class="quote"> When everyone has the chance to succeed,we all prosper
                        <img src="closequote.png" class="quote">
                    </div>
                </div>

                <!--below background-->
                <div class="container-fluid belowlandpage1" id="cont">
                    <div class="col-sm-6 img-full">
                        <img src="photos/contribute2.jpg" alt="error loading the image" class="img-left-right">
                    </div>
                    <div class="col-sm-6 ">
                        <div class="quoteandlink" style="margin-top:20px;">
                            A smile is the light in your window that tells others that there is a caring, sharing person inside.

                        </div>
                        <div style="font-size:23px;font-weight:300;margin-top: 10px;">Contribution</div>
                        <div class="text">
                            More than half of the books published in India are written in Hindi and English. But in a country with dozens of local languages, this means many students don’t have access to books in their native tongue.
                            <br/> Now the question is how everyone could start doing something towards this goal without looking towards government or politician or university or industry etc.
                        </div>
                        <a href="<?php if(!isset($_SESSION['user_username'])) echo 'userlogin.php'; else echo 'contribution.php';?>">
                            <div style="color:blue; font-weight: 700;margin-top: 10px;">CONTRIBUTE FOR NEEDY</div>
                        </a>
                    </div>
                </div>
                <hr class="hr" />
                <div class="container-fluid belowlandpage1" id="issue">

                    <div class="right">
                        <img src="photos/issue1.jpg" alt="error loading the image" class="img-left-right">
                    </div>
                    <div class="right">
                        <div class="quoteandlink">
                            I believe our biggest issue is the same biggest issue that the whole world is facing,and that's poverty and illiteracy.
                        </div>
                        <div style="font-size:23px;font-weight:300;margin-top: 10px;">Issues</div>
                        <div class="text">
                            A developed nation is not devoid of issues but rather,has a platform to solve them diligently at the earliest.

                        </div>
                        <a href="<?php if(!isset($_SESSION['user_username'])) echo 'userlogin.php'; else echo 'issue.php';?>">
                            <div style="color:blue; font-weight: 700;margin-top: 10px;">HAVE ANY ISSUE</div>
                        </a>
                    </div>
                </div>
                <hr class="hr" />
                <div class="container-fluid belowlandpage1" id="join">
                    <div class="col-sm-6 issueimg">
                        <img src="photos/join1.jpg" alt="error loading the image" class="img-left-right">
                    </div>
                    <div class="col-sm-6">
                        <div class=" quoteandlink">
                            Be apart of a team to serve for good.
                        </div>
                        <div style="font-size:23px;font-weight:300;margin-top: 10px;">Join Us</div>
                        <div class="text">
                            Do you see any social, civic or economic issue around?
                            <br> Do you think you can get together and help solve it?
                            <br> Be a volunteer!!

                        </div>
                        <a href="<?php if(!isset($_SESSION['user_username'])) echo 'userlogin.php'; else echo 'issue.php';?>">
                            <div style="color:blue; font-weight: 700;margin-top: 10px;">COME JOIN US</div>
                        </a>
                    </div>
                </div>

                <div style="height: 50px;">

                </div>
            </div>

            <?php
            include 'footer.html';
            ?>
    </body>

    </html>