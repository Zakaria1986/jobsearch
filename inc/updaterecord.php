<?php
 include('../dbcon/dbcon.php'); 
    
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['update'])){

            if(!empty($_POST['job_title']) && !empty($_POST['url']) && !empty($_POST['description'])){
                $update_by_id = $_POST["id"];

                $jobTitle = $_POST['job_title'];
                $url = $_POST['url'];
                $status = $_POST['status'];
                $descpt = $_POST['description'];

                $insert = "UPDATE cover_letters SET `status` = '{$status}', `Job_title` = '{$jobTitle}', `url` = '{$url}', `description` = '{$descpt}' WHERE `id` = '{$update_by_id}'";  

                if($link->query($insert)){
                    echo "<h1>Updated successfully!</h1> ",   
                    $update_by_id, " ",
                    $jobTitle, " ",
                    $url, " ",
                    $status, " ",
                    $descpt;
                      
                }
                else {
                
                    echo "Error: " . $insert . "<br>" . $link->error;
                }
            }
        }
    }

    $link->close();
       header("Location: ../index.php");
   ?>