<?php
session_start();
require_once('config/config.php');
require_once('config/db.php');
require_once('app/class/Users.php');
?>

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Email Signup</button>
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register With Email</h4>
                </div>
                <div class="modal-body">

                    <p class="reg-headline">Login to get started</p>
                    <form method="POST" name="registration" action="router.php" id="registrationForm"><br />
                        <br />FIRSTNAME:<input type="text" name="firstname" style ="color:black" placeholder="Please Enter First Name"<br />
                        <br />LASTNAME:<input type="text" style ="color:black" name="lastname" placeholder="please enter lastname"><br />
                        <br />USERNAME:<input type="text" style ="color:black" name="username" placeholder="please enter username"><br />
                        <br />EMAIL:<input type="text" style ="color:black" name="email" placeholder="please enter email"><br />
                        <br />PASSWORD:<input type="text" style ="color:black" name="password" placeholder="please enter your password"><br />
                        <input type="hidden" name="url" value="<?php $_SERVER['REQUEST_URI'] ?>">
                        <button type="submit" name="registerBtn" class="btn btn-danger">SUBMIT</button>
                        <div id="formMsg"></div>
                    </form>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<?php
/*
if(isset($_POST['submitBtn'])){
    $user = new Users();
    $user->register_user($_POST['email'], $_POST['password'], $_POST['username'], $_POST['firstname'], $_POST['lastname']);
    /*
    $email = $_POST['email'];
    $pword = $_POST['password'];
    $user->login_user($email, $pword);

}
*/
?>