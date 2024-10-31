<?php
require_once('controller/user.php');
require_once('controller/user_controller.php');

$login_msg = '';

if (isset($_POST['username']) & isset($_POST['pw'])) {
    //login and password fields
    if (UserController::validUser($_POST['username'],
        $_POST['pw']))
    {
        $login_msg = 'Login Successful';
    } else {
        $login_msg = 'Failed login';
    }
}
?>
<html>
<head>
    <title>Star Streamer Alyce Cooper</title>


<body>
    <h1>Star Streamer Alyce Cooper</h1>
    <h2> User Login</h2>
    <form method='POST'>
        <h3>Login ID: <input type="text"
            name="username"></h3>
        <h3>Password: <input type="password" name="pw"></h3>
        <input type="submit" value="Login" name="login">
    </form>
    <h2><php echo $login_msg; ?></h2>
</body>
</html>