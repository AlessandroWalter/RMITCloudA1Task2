<?php
    $current_user_name = file_get_contents('gs://a1-2-users/current_user.txt');
    if ($current_user_name != ''){
        echo 'Logged in as: ' . $current_user_name;
    }
    else{
        header("location: login.php");
    }
?>
<p><a href="login.php">Logout</a></p>
<h1>Main Content</h1>