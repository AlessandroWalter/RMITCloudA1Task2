<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $user_entry = $_POST['username'] . '|' . $_POST['password'] . "\r\n";

    $entries = explode("\n",
        file_get_contents('gs://a1-2-users/users.txt')
    );

    array_push($entries, $user_entry);
    $isWritten = file_put_contents('gs://a1-2-users/users.txt',
        $entries);

    if($isWritten === true) {
        header('Location: login.php');
    }
    else {
        #header("Location: https://cloudassignment1-2.appspot.com/login.php");
        #echo "<script>window.location = 'http://www.google.com'</script>";
        #echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        ob_start();
        header('Location: login.php');
        exit();
    }
}
?>

<form method = "post" action="register.php">
    <h2>Register</h2>
    <div class="container">
        <label for="usern"><b>Username</b></label>
        <input class="form-control" type="text" name="username" required="" placeholder="Username"
               oninvalid="this.setCustomValidity('User name or password cannot be empty')"
               oninput="setCustomValidity('')">

        <label for="passw"><b>Password</b></label>
        <input class="form-control" type="password" name="password" required="" placeholder="Password"
               oninvalid="this.setCustomValidity('User name or password cannot be empty')"
               oninput="setCustomValidity('')">

        <button type="submit">Register</button>
    </div>
</form>
