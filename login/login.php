<?php 
 require_once "login_validate.php"; ?>

    <?php  
    echo 'This is the user ID :', $_SESSION['user_id'], " and the User name ", $_SESSION['user_name'];
    ?>

<div class="myform bg-dark">
    <h1 class="text-center">Login Form</h1>
        <form method="post" action="login/login_validate.php">
        <div class="mb-3 mt-4">
            <label for="username">Username:</label>
            <input type="email" class="form-control"  id="username" name="username" required><br>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
         </div>
            <button type="submit" class="btn btn-light mt-3">Login</button>
        </form>
</div>