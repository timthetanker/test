<?php
session_start();
require_once('config/config.php');
require_once('config/db.php');
require_once('app/class/Users.php');
if(empty($_SERVER['CONTENT_TYPE']))
{
    $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}
//CREATE NEW LOGIN ROUTE
if($_SERVER['REQUEST_METHOD'] =='POST') {
//CREATE NEW REGISTRATION ROUTE
    //register BTN has been clicked so we know if comes from the regform
         if (isset($_POST['registerBtn'])) {
        $user = new Users();
           $result = $user->register_user($_POST['email'], $_POST['password'], $_POST['username'], $_POST['firstname'], $_POST['lastname']);
           if($result){
               echo $result;
               echo '<br />';
               echo '***ERROR REGISTERING***';
           }
        }
        elseif (isset($_POST['loginBtn'])){
             $user = new Users();
             $user->login_user($_POST['email'], $_POST['password']);
        }//isset login button
    else{
             echo '***ERRROR LOGIN BUTTON NOT SET***';
        }
    }//request method = POST

    else {
        die('INVALID REQUEST');
    }

