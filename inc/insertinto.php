<?php include("../dbcon/dbcon.php"); ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['submit'])){

        if(!empty($_POST['job_title']) && !empty($_POST['url']) && !empty($_POST['description'])){
            $jobTitle = $_POST['job_title'];
            $url = $_POST['url'];
            $status = $_POST['status'];
            $descpt = $_POST['description'];

            $insert = "INSERT INTO cover_letters (`status`,`Job_title`, `url`, `description`) VALUES('{$status}','{$jobTitle}','{$url}','{$descpt}')";  

            if($link->query($insert)){
                echo "<h1>Inserted successfully!</h1>";     
            }
            else {
               
                echo "Error: " . $insert . "<br>" . $link->error;
            }
        }
    }

    $link->close();
    header("Location: ../index.php");
}

    
    ?>