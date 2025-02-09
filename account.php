<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examiner</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <!--alert message end-->
</head>

<?php
include_once 'dbConnection.php';
?>

<body style="background:#D4BEE4;">
    <div class="header">
        <div class="row" style="background-color:#3B1E54;">
            <div class="col-lg-6">
                <span class="logo"></span>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <?php
                include_once 'dbConnection.php';
                session_start();
                if (!(isset($_SESSION['email']))) {
                    header("location:index.php");

                } else {
                    $name = $_SESSION['name'];
                    $email = $_SESSION['email'];

                    include_once 'dbConnection.php';
                    echo '<span class="pull-right top custom-title" >
                            <span class="log1">
                                <i class="bi bi-person-fill custom-logo1" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b>Welcome,</b>
                            </span> 
                            <a href="account.php?q=1" class="log log1"><b>' . $name . '</b></a>
                                &nbsp;|&nbsp;
                            <a href="logout.php?q=account.php" class="log">
                                <i class="bi bi-box-arrow-right custom-logo1" aria-hidden="true"></i>
                                &nbsp;<b>Signout</b>
                            </a></span>';
                } ?>
            </div>
        </div>
    </div>

    <div class="bg">
        <!--navigation menu-->
        <nav class="navbar navbar-default title1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="account.php?q=1"><b>Dashboard - Student</b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar left">
                        <li <?php if (@$_GET['q'] == 1)
                            echo 'class="active"'; ?>><a href="account.php?q=1">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                &nbsp;Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li <?php if (@$_GET['q'] == 2)
                            echo 'class="active"'; ?>>
                            <a href="account.php?q=2">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                &nbsp;History
                            </a>
                        </li>
                        <li <?php if (@$_GET['q'] == 3)
                            echo 'class="active"'; ?>>
                            <a href="account.php?q=3">
                                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                                &nbsp;Ranking
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!--navigation menu closed-->

        <!--container start-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--home start-->
                    <?php if (@$_GET['q'] == 1) {

                        $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                        echo '<div class="panel">
                                <table class="table table-striped title1">
                                    <tr style="color:black">
                                        <td><b>S.N.</b></td>
                                        <td><b>Topic</b></td>
                                        <td><b>Total question</b></td>
                                        <td><b>Marks</b></td>
                                        <td><b>Positive</b></td>
                                        <td><b>Negative</b></td>
                                        <td><b>Description</b>
                                        <td><b>Action</b></td>
                                    </tr>';
                        $c = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $title = $row['title'];
                            $total = $row['total'];
                            $sahi = $row['sahi'];
                            $wrong = $row['wrong'];
                            $eid = $row['eid'];
                            // $id = $row['id'];
                            $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
                            $rowcount = mysqli_num_rows($q12);
                            if ($rowcount == 0) {
                                echo '<tr>
                                        <td>' . $c++ . '</td>
                                        <td>' . $title . '</td>
                                        <td>' . $total . '</td>
                                        <td>' . $sahi * $total . '</td>
                                        <td>' . $sahi . '</td>
                                        <td>' . $wrong . '</td>
                                        <td>
                                            <a title="Open quiz description" href="account.php?q=1&fid=' . $eid . '">
                                                <b>
                                                    <i class="bi bi-archive-fill custom-logo1" aria-hidden="true"></i>
                                                </b>
                                            </a>
                                        </td>
                                        <td>
                                            <b>
                                                <a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '"class="pull-right btn custom-bg">
                                                    <i class="bi bi-arrow-up-right-square-fill" aria-hidden="true"></i>
                                                        &nbsp;
                                                    <span class="title1">
                                                        <b>Start</b>
                                                    </span>
                                                </a>
                                            </b>
                                        </td>
                                    </tr>';
                            } else {
                                echo '<tr style="color:#859F3D">
                                        <td>' . $c++ . '</td>
                                        <td>' . $title . '&nbsp;
                                            <span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                        </td>
                                        <td>' . $total . '</td><td>' . $sahi * $total . '</td>
                                        <td>' . $sahi . '</td>
                                        <td>' . $wrong . '</td>
                                    </tr>';
                            }
                        }
                        $c = 0;
                        echo '</table></div>';

                    } ?>
                    <!----quiz reading portion starts--->

                    <?php if (@$_GET['fid']) {
                        echo '<br />';
                        $eid = @$_GET['fid'];
                        $result = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error');
                        while ($row = mysqli_fetch_array($result)) {
                            // $name = $row['name'];
                            $title = $row['title'];
                            $date = $row['date'];
                            $date = date("d-m-Y", strtotime($date));
                            //$time = $row['time'];
                            $intro = $row['intro'];

                            echo '<div class="panel"
                                    <a title="Back to Archive" href="update.php?q1=2">
                                        <b>
                                            <i class="bi bi-caret-down-square-fill" aria-hidden="true"></i>
                                        </b>
                                    </a>
                                    <h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;">
                                        <b>' . $title . '</b>
                                    </h2>';
                            echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;">
                                    <span style="line-height:35px;padding:5px;">
                                        -&nbsp;
                                        <b>DATE:</b>
                                        &nbsp;' . $date . '</span>
                                    <span style="line-height:35px;padding:5px;"></span>
                                    <br />' . $intro . '</div></div>';
                        }
                    } ?>
                    <!--quiz reading portion closed-->

                    <!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

                    <!--home closed-->

                    <!--quiz start-->
                    <?php
                    if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
                        $eid = @$_GET['eid'];
                        $sn = @$_GET['n'];
                        $total = @$_GET['t'];
                        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
                        echo '<div class="panel" style="margin:5%">';
                        while ($row = mysqli_fetch_array($q)) {
                            $qns = $row['qns'];
                            $qid = $row['qid'];
                            echo '<b>Question-&nbsp;' . $sn . '&nbsp;<i class="bi bi-caret-right-fill"></i><br />' . $qns . '</b><br /><br />';
                        }
                        $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
                        echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';

                        while ($row = mysqli_fetch_array($q)) {
                            $option = $row['option'];
                            $optionid = $row['optionid'];
                            echo '<input type="radio" name="ans" value="' . $optionid . '">&nbsp;&nbsp;' . $option . '<br /><br />';
                        }
                        echo '<br /><button type="submit" class="btn custom-bg">&nbsp;Submit <i class="bi bi-check-circle-fill" aria-hidden="true"></i></button></form></div>';
                        //header("location:dash.php?q=4&step=2&eid=$id&n=$total");
                    }
                    //result display
                    if (@$_GET['q'] == 'result' && @$_GET['eid']) {
                        $eid = @$_GET['eid'];
                        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
                        echo '<div class="panel">
                                <center>
                                    <h1 class="title" style="color:#3B1E54">
                                        Result
                                    </h1>
                                <center><br />
                                <table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while ($row = mysqli_fetch_array($q)) {
                            $s = $row['score'];
                            $w = $row['wrong'];
                            $r = $row['sahi'];
                            $qa = $row['level'];
                            echo '<tr style="color:#9B7EBD">
                                    <td>Total Questions</td>
                                    <td>' . $qa . '</td>
                                </tr>
                                <tr style="color:#31511E">
                                    <td>Correct Answers&nbsp;
                                        <b><i class="bi bi-check2-circle" aria-hidden="true"></i></b>
                                    </td>
                                    <td>' . $r . '</td>
                                </tr> 
                                <tr style="color:#C62E2E">
                                    <td>Wrong Answers&nbsp;
                                        <i class="bi bi-x-circle" aria-hidden="true"></i>
                                    </td>
                                    <td>' . $w . '</td>
                                </tr>
                                <tr style="color:#FAB12F">
                                    <td>Score&nbsp;
                                        <i class="bi bi-star-fill" aria-hidden="true"></i>
                                    </td>
                                    <td>' . $s . '</td>
                                </tr>';
                        }
                        $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$email' ") or die('Error157');
                        while ($row = mysqli_fetch_array($q)) {
                            $s = $row['score'];
                            echo '<tr style="color:#220E24">
                                    <td>Overall Score&nbsp;
                                        <i class="bi bi-bar-chart-fill" aria-hidden="true"></i>
                                    </td>
                                    <td>' . $s . '</td>
                                </tr>';
                        }
                        echo '</table></div>';

                    }
                    ?>
                    <!--quiz end-->
                    <?php
                    //history start
                    if (@$_GET['q'] == 2) {
                        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
                        echo '<div class="panel title">
                                <table class="table table-striped title1" >
                                    <tr style="color:black">
                                        <td><b>S.N.</b></td>
                                        <td><b>Quiz</b></td>
                                        <td><b>Question Solved</b></td>
                                        <td><b>Correct</b></td>
                                        <td><b>Wrong<b></td>
                                        <td><b>Score</b></td>';
                        $c = 0;
                        while ($row = mysqli_fetch_array($q)) {
                            $eid = $row['eid'];
                            $s = $row['score'];
                            $w = $row['wrong'];
                            $r = $row['sahi'];
                            $qa = $row['level'];
                            $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
                            while ($row = mysqli_fetch_array($q23)) {
                                $title = $row['title'];
                            }
                            $c++;
                            echo '<tr>
                                    <td>' . $c . '</td>
                                    <td>' . $title . '</td>
                                    <td>' . $qa . '</td>
                                    <td>' . $r . '</td>
                                    <td>' . $w . '</td>
                                    <td>' . $s . '</td>
                                </tr>';
                        }
                        echo '</table></div>';
                    }

                    //ranking start
                    if (@$_GET['q'] == 3) {
                        $q = mysqli_query($con, "SELECT * FROM rank  ORDER BY score DESC ") or die('Error223');
                        echo '<div class="panel title">
                                <table class="table table-striped title1" >
                                    <tr style="color:black">
                                        <td><b>Rank</b></td>
                                        <td><b>Name</b></td>
                                        <td><b>Gender</b></td>
                                        <td><b>College</b></td>
                                        <td><b>Score</b></td>
                                    </tr>';
                        $c = 0;
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['email'];
                            $s = $row['score'];
                            $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
                            while ($row = mysqli_fetch_array($q12)) {
                                $name = $row['name'];
                                $gender = $row['gender'];
                                $college = $row['college'];
                            }
                            $c++;
                            echo '<tr>
                                    <td style="color:#3B1E54">
                                        <b>' . $c . '</b>
                                    </td>
                                    <td>' . $name . '</td>
                                    <td>' . $gender . '</td>
                                    <td>' . $college . '</td>
                                    <td>' . $s . '</td><td>';
                        }
                        echo '</table></div>';
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>

</body>

</html>