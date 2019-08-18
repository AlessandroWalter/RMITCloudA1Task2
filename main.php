<?php
    $current_user_name = file_get_contents('gs://a1-2-users/current_user.txt');
    echo $current_user_name;
?>
<p><a href="login.php">Logout</a></p>
<h1>Main Content</h1>