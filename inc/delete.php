<?php

// $delete_by_id; 

if(isset($_GET['delete'])){
    $delete_by_id = $_GET["delete_by_id"]; 
    deletedRecord($delete_by_id);
}

function deletedRecord($id){
    include('../dbcon/dbcon.php'); 
    
    $deleted = "DELETE FROM cover_letters WHERE id = '{$id}'"; 
    if($link->query($deleted)){
        echo "Deleted record ". $id;
    }else{
        echo 'Oops! Something went wrong';
    }

    $link->close(); 
    header("Location: ../index.php");
}

?>