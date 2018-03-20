<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<!--   JAVASCRIPT   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body{
        margin: 0px auto;
        max-width: 1020px;
    }




</style>
<div class="tourn-header2">

    <div class="top-and-nav">
        <div class="top">
            <div class="brand">
                <div class="logo">
                    <a href="/player/dashboard.php#tab=upcoming">
                    <img src="../imgs/cashbru-nav-name.png" alt="cashbru">
                    <i</a></div>
                <a class="population" href="/player/population.php">
                    <span class="tot">TODO ADD NR PLAYERS</span>
                    <span class="split">|</span>
                    <span class="rel">POOLS </span>
                    <span class="place">TOTAL PAYOUTS</span>
                </a>
            </div>
            <div class="player-card">
                <div class="top-card">
                    <a class="photo" href="/player/edit_settings.php#tab=photo">
                        <img src="https://e85601e4ca667e3dae8b-2ce6e0250d2fe055d95f4583fa48a1c9.ssl.cf2.rackcdn.com/awaiting.jpg">

                    </a>
                    <div class="info">
                        <div class="user-name">timmertim</div>
                        <div class="metrics">
                            <div class="metric">
                                <div class="title">Balance</div>
                                <div class="number">R100</div>
                            </div>
                            <div class="metric">
                                <div class="title">Entries</div>
                                <div class="number">9</div>
                            </div>
                            <div class="metric">
                                <div class="title">Withdraw</div>
                                    <div class="number">
                                        <a href="account.php" style="text-decoration: none">
                                            <i class="fa fa-credit-card"></i>
                                        </a>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


    <div class="nav-wrap">
        <div class="nav-flex">
        <div class="example5" style="padding-left: 0px; padding-right: 0px; margin-top: 10px;">
            <nav class="navbar navbar-default">
                <div class="container-fluid" style="background-color: #333333">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="dashboard.php" style="color: lightgrey"><!--<img style="	width: 64px;" src="../imgs/logo50-50.png" alt="CashBru Logo">-->CASHBRU
                        </a>
                    </div>
                    <div id="navbar5" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active" style="color: lightgrey">
                                <a class="active" href="http://www.aisportbetting.xyz/src/dashboard.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a style="color: lightgrey"><i class="fa fa-envelope"></i> Messages</a>
                            </li>
                            <li> <a href="#" style="color: lightgrey"><i class="fa fa-bullhorn"></i>
                                    <span class="badge">1</span>Notifications
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="settings.php" style="color: lightgrey">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    Settings</a>
                            </li>
                            <li><a href="logout.php" style="color: lightgrey"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
        </div>
    </div><!--NAVWRAP BOTTOM-->


<?PHP
/*
?>
<div class="header">
    <div class="nav-and-top">
        <div class="top">
            <div class="brand-name">
                <div class="logo">
                    <h1 style="color: whitesmoke">CASHBRU PICKEM</h1>
                </div><!--./ LOGO-->
                <a class="facts">
                    <span class="number-players">7589</span>
                    <span class="spliter">|</span>
                    <span class="active-pools">45</span>
                </a>
            </div><!-- ./BRAND NAME -->
            <div class="player-card">
                <div class="top-player-card">
                    <a href="#" class="user-photo">
                        <img src="resources/imgs/users/1.jpg" alt="user1" />
                    </a>
                    <div class="player-info">
                        <div class="userName">
                            TimTheTank
                        </div>
                        <div class="account">
                            <div class="account-info">
                                <div class="account-title">
                                    Balance
                                </div>
                                <div class="number">
                                    500
                                </div>
                            </div>
                            <div class="account-info">
                                <div class="account-title">
                                Mem For
                                </div>
                                <div class="number">
                                35 D
                                 </div>
                            </div>
                            <div class="account-info">
                            <div class="account-title">
                                Location
                            </div>
                            <div class="number">
                                Thai
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="nav">
                <ul>
                    <li class=" active">
                        <a href="/player/dashboard.php">
                            <i class="fa fa-home"></i>
                            <div class="title">Dashboard</div>
                            <span class="alert-number hidden" data-alert-type="picks"><span class="num">0</span></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/player/career.php">
                            <i class="fa fa-book"></i>
                            <div class="title">Career</div>
                        </a>
                    </li>
                    <li class="">
                        <a href="/player/notifications.php">
                            <i class="fa fa-bullhorn"></i>
                            <div class="title">Notifications</div>
                            <span class="alert-number" data-alert-type="notifications"><span class="num"></span></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/player/mail.php">
                            <i class="fa fa-envelope"></i>
                            <div class="title">Mail</div>
                            <span class="alert-number hidden" data-alert-type="mail"><span class="num">0</span></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/player/clubs.php">
                            <i class="fa fa-shield"></i>
                            <div class="title">Clubs</div>
                        </a>
                    </li>
                    <li class="">
                        <a href="/player/certificates.php">
                            <i class="fa fa-certificate"></i>
                            <div class="title">Certificates</div>
                        </a>
                    </li>
                    <li class="tab-settings">
                        <a href="/player/edit_settings.php">
                            <i class="fa fa-cog"></i>
                            <div class="title">Settings</div>
                        </a>
                    </li>
                </ul>
            </div><!--./nav-->
    </div><!--/top-->
</div><!--/.NAV and top-->
</div><!--./header-->
*/?>


<?php

/*
<div class="container example5">
    <nav class="navbar navbar-default">
        <div class="container-fluid" style="background-color: #333333">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: lightgrey"><img style="	width: 64px;" src="resources/imgs/logo50-50.png" alt="Dispute Bills">CASHBRU
                </a>
            </div>
            <div id="navbar5" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active" style="color: lightgrey"><a class="active" href="#"><i class="fa fa-home"></i> Home</a> </li>
                    <li><a style="color: lightgrey"><i class="fa fa-envelope"></i> Messages</a> </li>
                    <li> <a href="#" style="color: lightgrey"><i class="fa fa-globe"></i> Notifications</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" style="color: lightgrey"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" style="color: lightgrey"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>

</div>
*/
?>
    </div>
</div>
</body>
</html>