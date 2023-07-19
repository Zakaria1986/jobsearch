<?php include("../dbcon/dbcon.php"); ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['submitTaxonomy'])){
                if(!empty($_POST['wordChoice'])){
                    $wordChoice = $_POST['wordChoice'];

                    $insert = "INSERT INTO taxonomy (`taxonomy`) VALUES('{$wordChoice}')";  

                    if($link->query($insert)){
                        echo "<h1>Inserted successfully!</h1>";     
                    }
                    else {
                    
                        echo "Error: " . $insert . "<br>" . $link->error;
                    }
                }
                $link->close();
               
        }
    }
    header("Location: entryForm/taxonomy.php");

?>