<?php
session_start();

// Database connection details
include_once("../dbcon/dbcon.php");


// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the login form
    $input_username = mysqli_real_escape_string($link,filter_var( $_POST["username"], FILTER_SANITIZE_EMAIL));        
    $input_password =  mysqli_real_escape_string($link, $_POST["password"]);

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Query to check if the user exists in the database
    $sql = "SELECT `id`, `first_name`, `last_name` FROM `users` WHERE `email` = ?  AND `password` =  ?";

    $stmt = $link->prepare($sql); 
    $stmt->bind_param("ss", $input_username, $input_password);
    $stmt->execute(); 
    $result = $stmt->get_result(); 
    echo var_dump($result);
           
      if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 

            $userID = $row['id']; 
            $first_name = $row['first_name'];
            $first_last = $row['last_name'];

           $_SESSION['user_id'] =  $userID;
           $_SESSION['user_name']  =  $first_name. ' '.$first_last;
           echo  'this is session name ',$_SESSION['user_name'];
            
    
        exit;
      }else{
        // User not found, show error message
        $error_message = "Invalid username or password.";
      }

    $link->close();
}
?>