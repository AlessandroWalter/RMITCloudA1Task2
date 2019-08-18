<?php
if(isset($_POST['username']) && isset($_POST['password'])) {

    $user_entry = $_POST['username'] . '|' . $_POST['password'];

    $entries = explode("~",
        file_get_contents('gs://a1-2-users/users.txt')
    );

    $exists = false;
    $exists = in_array($user_entry, $entries);

    if($exists==true){
        $handle = fopen('gs://a1-2-users/current_user.txt','w');
        fwrite($handle, $_POST['username']);
        header("location: main.php");
    }
    else{
        echo "User name or password is invalid";
    }
}
?>
<form method = "post" action="login.php">
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
