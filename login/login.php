<?php require_once "login_validate.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <?php  
    echo 'This is the user ID :', $_SESSION['user_id'], " and the User name ", $_SESSION['user_name'];
    ?>
    <h2>Login</h2>
    <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
    <form method="post" action="login_validate.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>