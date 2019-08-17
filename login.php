<html>
<body>
<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
$user = UserService::getCurrentUser();

if (isset($user)) {
    echo sprintf('Welcome, %s! (<a href="%s">sign out</a>)',
        $user->getNickname(),
        UserService::createLogoutUrl('/'));
} else {
    echo sprintf('<a href="%s">Sign in or register</a>',
        UserService::createLoginUrl('/'));
}
?>
<form action="login.php">
    <h2>Login</h2>
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password"
               required data-errormessage-value-missing="User name or password cannot be empty">

        <button type="submit">Login</button>
        <p><a href="register.php">Register</a></p>
    </div>
</form>
