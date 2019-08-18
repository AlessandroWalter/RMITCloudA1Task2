<form method = "post" action="register.php">
    <h2>Register</h2>
    <div class="container">
        <label for="usern"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"
               required data-errormessage-value-missing="User name or password cannot be empty">

        <label for="passw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password"
               required data-errormessage-value-missing="User name or password cannot be empty">

        <button type="submit">Register</button>
    </div>
</form>

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $user_entry = $_POST['username'] . '|' . $_POST['password'] . "\r\n";

    $entries = explode("\n",
        file_get_contents('gs://a1-2-users/users.txt')
    );

    array_push($entries, $user_entry);
    $isWritten = file_put_contents('gs://a1-2-users/users.txt',
        $entries);

    if($isWritten === false) {
       die('Writing credentials to file failed');
    }
    else {
       echo "Writing credentials to file succeeded";
    }
    echo $_POST['username'] . $_POST['password'];
}
?>
