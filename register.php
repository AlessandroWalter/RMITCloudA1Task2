<form action="register.php">
    <h2>Register</h2>
    <div class="container">
        <label for="usern"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"
               required data-errormessage-value-missing="User name or password cannot be empty">

        <label for="passw"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="password"
               required data-errormessage-value-missing="User name or password cannot be empty">

        <button type="submit">Register</button>
    </div>
</form>

<?php
#$handle = fopen('gs://a1-2-user_storage/user_Credentials.txt','w');
#fwrite($handle, $_POST["username"]);
#fclose($handle);

if(isset($_POST['username']) && isset($_POST['password'])) {
    $data = $_POST['username'] . '-' . $_POST['password'] . "\r\n";
    #$ret = file_put_contents('/tmp/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    $handle = fopen('gs://a1-2-user_storage/user_Credentials.txt','w');
    fwrite($handle, $data);
    fclose($handle);
    echo "User credentials saved";
}
?>
