<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam Management System</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>

    <script>
        function validateForm() {
            var y = document.forms["form"]["name"].value; var letters = /^[A-Za-z]+$/; if (y == null || y == "") { alert("Name must be filled out."); return false; } var z = document.forms["form"]["college"].value; if (z == null || z == "") { alert("college must be filled out."); return false; } var x = document.forms["form"]["email"].value; var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf("."); if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) { alert("Not a valid e-mail address."); return false; } var a = document.forms["form"]["password"].value; if (a == null || a == "") { alert("Password must be filled out"); return false; } if (a.length < 5 || a.length > 25) { alert("Passwords must be 5 to 25 characters long."); return false; }
            var b = document.forms["form"]["cpassword"].value; if (a != b) { alert("Passwords must match."); return false; }
        }
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arvo&family=Parkinsans:wght@300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        .custom-bg {
            background-color: #3B1E54;
            color: #EEEEEE;
            border: none;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
}

        .custom-bg:hover {
            background-color: #D4BEE4;
            transform: scale(1.05);
}

        .modal {
            text-align: center;
        }

        @media screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .clear {
            clear: both;
        }

        .jumbotron {
            background-color: #3B1E54;
            color: #fff;
            padding: 100px 60px;
            /*
            padding: 100px 25px;
            font-family: Montserrat, sans-serif; */

            font-family: "Arvo", serif;
            font-weight: 400;
            font-style: normal;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }

        .logo-small1 {
            color: #3B1E54;
            font-size: 100px;
        }

        .logo {
            color: #3B1E54;
            font-size: 200px;
        }

        .logo1 {
            color: #3B1E54;
            font-size: 110px;
        }

        .logo2 {
            color: #3B1E54;
            font-size: 20px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            max-width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .thumbnail1 {
            padding: 15px; /* Adds space around the content */
        border: none;
        border-radius: 0;
        text-align: center; /* Center the text within the thumbnail */
        }

        .thumbnail1 img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            display: inline-block;
        }

        .center-content {
            display: flex;
            justify-content: center; /* Horizontally centers the content */
            align-items: center; /* Vertically centers the content */
            height: 100vh; /* Full viewport height for vertical centering */
            text-align: center; /* Centers text */
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #f4511e;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #f4511e;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: #9B7EBD !important;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #EEEEEE !important;
            background-color: #D4BEE4 !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">
                    <!--<span class="glyphicon glyphicon-home"></span>-->
                    <i class="fa-solid fa-house logo2"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal1">SIGN UP</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login2">TEACHER</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="">Online Exam Management System</h1>
    </div>

    <!-- Container (Admin Section) start -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">
                        <span
                            style="color:#3B1E54;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; ">
                            <b>LOGIN-ADMIN</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="head.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <button type="button" class="btn custom-bg" data-dismiss="modal">Close</button>
                                    <input type="submit" name="login" value="Login" class="btn custom-bg" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Container (Admin Section) end -->

    <!----Teacher signin start --->
    <div class="modal fade" id="login2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">
                            Close
                        </span>
                    </button>
                    <h4 class="modal-title">
                        <span
                            style="color:#3B1E54;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; ">
                            <b>LOGIN-TEACHER</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Teacher user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <button type="button" class="btn custom-bg" data-dismiss="modal">Close</button>
                                    <input type="submit" name="login2" value="Login" class="btn custom-bg" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!----Teacher signin end --->

    <!---- Not necessary start --->
    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-globe logo slideanim"></span>-->
                <i class="bi bi-laptop logo slideanim"></i>

            </div>
            <div class="col-sm-8">
                <h2>Goal</h2><br>
                <h4><strong>Streamline the process of conducting, managing, and evaluating exams by providing a secure,
                        efficient, and user-friendly platform for students,
                        teachers, and administrators.</strong></h4><br>
                <p>It enables students and educators to access exams from anywhere, automates tasks like
                    scheduling, grading, and ranking, and ensures fairness through robust security and
                    evaluation mechanisms. By offering detailed analytics and feedback, it helps
                    institutions and individuals make informed decisions, while its seamless
                    interface enhances the overall user experience.
                    The system aims to save time, reduce manual effort, and ensure a transparent and
                    scalable examination process.</p>
            </div>
        </div>
    </div>
    <!---- Not necessary end --->

    <!-- Container (USERS section) start -->
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title title1">
                        <span
                            style="color:#3B1E54;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; ">
                            <b>LOGIN-USER</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                        <fieldset>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id"
                                        class="form-control input-md" type="email">

                                </div>
                            </div>


                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password"
                                        class="form-control input-md" type="password">

                                </div>
                            </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn custom-bg" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn custom-bg">Log in</button>
                    </fieldset>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign in modal closed-->
    <!-- Container (USERS section) end -->

    <!--sign up modal start-->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title title1">
                        <span
                            style="color:#3B1E54;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; ">
                            <b>SIGN UP</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="sign.php?q=account.php"
                        onSubmit="return validateForm()" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"></label>
                                <div class="col-md-6">
                                    <input id="name" name="name" placeholder="Enter your name"
                                        class="form-control input-md" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="gender"></label>
                                <div class="col-md-6">
                                    <select id="gender" name="gender" placeholder="Enter your gender"
                                        class="form-control input-md">
                                        <option value="Male">Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"></label>
                                <div class="col-md-6">
                                    <input id="college" name="college" placeholder="Enter your college name"
                                        class="form-control input-md" type="text">

                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label title1" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id"
                                        class="form-control input-md" type="email">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mob"></label>
                                <div class="col-md-6">
                                    <input id="mob" name="mob" placeholder="Enter your mobile number"
                                        class="form-control input-md" type="number">

                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your password"
                                        class="form-control input-md" type="password">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="cpassword"></label>
                                <div class="col-md-6">
                                    <input id="cpassword" name="cpassword" placeholder="Conform Password"
                                        class="form-control input-md" type="password">

                                </div>
                            </div>
                            <?php if (@$_GET['q7']) {
                                echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                            }
                            ?>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for=""></label>
                                <div class="col-md-6">
                                    <input type="submit"  class="sub btn custom-bg" value="Sign up" />
                                    <button type="button" class="sub btn custom-bg" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign up modal closed-->

    <!-- Not Necessary start -->
    <!-- Container (Services Section) start -->
    <div id="services" class="container-fluid text-center">
        <h2>SERVICES</h2>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <!-- span class="glyphicon glyphicon-off logo-small"></span-->
                <i class="material-icons logo1">group_add</i>
                <p>Multiple users in one platform</p>
            </div>
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-secure logo-small"></span>-->
                <i class="fa-solid fa-file-shield logo-small1"></i>
                <p><br>Secure User Authentication</p>
            </div>
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-user logo-small"></span>-->
                <i class="fa-solid fa-building-columns logo-small1"></i>
                <p><br>Question Bank Management</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
                <i class="fa-solid fa-people-group logo-small1"></i>
                <p><br>Multi-Role Access and Panels</p>
            </div>
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-certificate logo-small"></span>-->
                <i class="fa-solid fa-ranking-star logo-small1"></i>
                <p><br>Performance Analytics and Feedback</p>
            </div>
            <div class="col-sm-4">
                <!--<span class="glyphicon glyphicon-envelope logo-small"></span>-->
                <i class="fa-solid fa-desktop logo-small1"></i>
                <p><br>Real-Time Monitoring</p>
            </div>
        </div>
    </div>
    <!-- Container (Services Section) end -->
    <!-- Not Necessary end -->

    <!-- Not Necessary start -->
    <!-- Container (Portfolio Section) start -->
    <div id="developers" class="container-fluid text-center bg-grey">
        <div class="center-content">
            <div class="thumbnail slideanim">
                <h2>Developer</h2>
                <img src="./image/sadman.jpg" alt="SADMAN" width="400" height="300">
                <p><strong>S.M. Ehsanu Haque Sadman</strong></p>
                <p>CSE 3RD YEAR</p>
            </div>
        </div>
        <!--
        <h2>Developer</h2><br>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="./image/sadman.jpg" alt="SADMAN" width="400" height="300">
                    <p><strong>S.M. Ehsanu Haque Sadman</strong></p>
                    <p>CSE 3RD YEAR</p>
                </div>
            </div>-->

    </div><br>

    </div>
    <!-- Container (Portfolio Section) end -->
    <!-- Not Necessary end -->

    <!-- Not Necessary start -->
    <!-- Container (About Section) start -->
     <!--
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Page</h2><br>
                <h4>Online examination System is conducting a test online to measure the knowledge of the participants
                    on a given topic. In the olden days everybody had to gather in a classroom at the same time to take
                    an exam. With online examination students can do the exam online, in their own time and with their
                    own device, regardless where they life. You online need a browser and internet connection. </h4><br>
                <p>Online Examination System (OES) is a platform to hold online examinations. It caters to many
                    requirements of holding online examinations. The system can generate statistical data for records.
                    The system makes it possible to maintain a repository of questions, and then generate papers at a
                    later stage, such that the lecturer has more flexibility over holding online quizzes. Furthermore,
                    it provides the functionality to mark the papers automatically.</p>

                <br><button class="btn btn-default btn-lg">Get in Touch</button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>-->
    <!-- Container (About Section) end -->
    <!-- Not Necessary end -->

    <!-- Not Necessary start -->
    <!-- Container (Contact Section) start -->
     <!--
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Karnataka, INDIA</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 9491849828 </p>
                <p><span class="glyphicon glyphicon-envelope"></span> kpsagar1999@gmail.com</p>
            </div>
            <div class="col-sm-7 slideanim">

                <?php if (@$_GET['q'])
                    echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
                else {
                    echo '
        <form role="form"  method="post" action="feed.php?q=index.php">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="subject" placeholder="subject" type="text" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="feedback" placeholder="Comment" rows="4">

            </textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" name="submit" input type="submit">send</button>
          </div>
        </form>';
                } ?>
            </div>
        </div>
    </div>-->
    <!-- Container (Contact Section) end -->
    <!-- Not Necessary end -->

    <!-- Add Google Maps -->
     <!--
    <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(13.0108439, 74.7921164);
            var mapProp = { center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({ position: myCenter });
            marker.setMap(map);
        }
    </script> -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFj4gNzJYXg7z8mlzs0fHLKvi1MAZYI3c&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

    <!-- footer start -->
    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <!--<span class="glyphicon glyphicon-chevron-up "></span>-->
            <i class="fa-solid fa-angle-up logo-small1"></i>
        </a>
        <h4>Thank you</h4>
    </footer>
    <!-- footer end -->

    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>

</html>