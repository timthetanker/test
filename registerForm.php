<?php
session_start();
if(empty($_SERVER['CONTENT_TYPE']))
{
$_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}
if(isset($_SESSION['userID'])) {
    echo $_SESSION['userID'];
    echo $_SESSION['email'];
    echo $_SESSION['userName'];
    echo $_SESSION['firstname'];
    echo $_SESSION['lastname'];
}
else{
    echo '***SESSION VARIABLES NOT SET***';
}
?>
<style>
    p{
        padding: 0 0 0 10px;
        margin: 0 0 0 10px;
    }
    .reg-headline{
        color: red;
        font-size: 15px;
    }
</style>
<div align="centre"><h1>Welcome To CashBru Yall</h1></div>



<p class="reg-headline">Login to get started</p>
<form method="POST" name="registration" action="router.php" id="registrationForm"><br />
    <br />FIRSTNAME:<input type="text" name="firstname" placeholder="Please Enter First Name"<br />
    <br />LASTNAME:<input type="text" name="lastname" placeholder="please enter lastname"><br />
    <br />USERNAME:<input type="text" name="username" placeholder="please enter username"><br />
    <br />EMAIL:<input type="text" name="email" placeholder="please enter email"><br />
    <br />PASSWORD:<input type="text" name="password" placeholder="please enter your password"><br />
   <input type="hidden" name="url" value="<?php $_SERVER['REQUEST_URI'] ?>">
    <button type="submit" name="registerBtn">SUBMIT</button>
</form>

