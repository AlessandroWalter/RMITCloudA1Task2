<?php
/**
 * Created by IntelliJ IDEA.
 * User: AlCappuccino
 * Date: 18.08.2019
 * Time: 16:42
 */
?>

<form method = "post" action="main.php">
    <h2>Main</h2>
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