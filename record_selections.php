<?php
session_start();
date_default_timezone_set('Africa/Johannesburg');
//show errors
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( -1 );
if (!isset($_SESSION['userID'])) {
    //user not logged in
    header('location:../login.php');
    exit();
}
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo '<h4 style="text-align: center">ERROR CODE:<span class="timespan">'.mt_rand(100,1000).'</span></h4>';
die();
}
require_once'head.php';
$userID = $_SESSION['userID'];
$tournament = $_POST['tournament'][0];
$round = $_POST['round'][0];
?>

<div class="container" style="max-width: 1020px; margin:0 auto">
    <div class="content">
        <div class="page">
            <?php
            $hasPicked = isActive($userID, $tournament, $round);
            if ($hasPicked === true) {
                require_once 'enter_tournament/entered.php';
            }
            if ($hasPicked === false){
                require_once 'enter_tournament/new_entry.php';
            }

                ?>

        </div>
    </div>
</div>
</body>
</html>