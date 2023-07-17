
<?php include("../dbcon/dbcon.php");


?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if(isset($_POST['submit'])){
        if(!empty($_POST['recruiter_name']) && !empty($_POST['website']) && !empty($_POST['comments'])){
            $compName = $_POST['recruiter_name'];
            $url = $_POST['website'];
            $comments = $_POST['comments'];

            // $insert = "INSERT INTO cover_letters (`Job_title`, `url`, `description`) VALUES('{$jobTitle}','{$url}','{$descpt}')";  

            $insert =  "INSERT INTO `recruiters`( `name`, `web_site`, `comments`) VALUES('{$compName}','{$url}','{$comments}')";

            if($link->query($insert)){ 
               echo 'success fully entered'; 
            }
        }
    }
    
}
$link->close();

header("Location: ../entryForm/recruiters.php");

?>