<?php

$delete_by_id; 

if(isset($_GET['update'])){
    $update_by_id = $_GET["update_by_id"]; 

    selectRecord($update_by_id);
}

function selectRecord($id){
    include('../dbcon/dbcon.php'); 
    // include_once('select.php'); 
    include_once('../pagesections/header.php');
    include_once('../nav.php');


    $sql = " SELECT * FROM cover_letters WHERE id = '{$id}'"; 
    $result = $link->query($sql); 
    $rows = $result->fetch_object(); 

    $txquery = "SELECT * FROM taxonomy";
    $txresult = $link->query($txquery); 
   ?>

    <div class="row justify-content-md-center">
            <form action="updaterecord.php" method="POST">
                <div class="mb-3 col-6">
                    <label for="job_title" class="form-label">Job title</label>
                    <input type="text" name='job_title' class="form-control" id="job_title" value='<?php echo $rows->Job_title;  ?>' aria-describedby="Enter job title">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3 col-3">
                    <label for="taxChoice" class="form-label">Taxonomy</label>
                    <input list="status" name="status" class="form-control" id="taxChoice" aria-describedby="Satus application in" value="<?php echo $rows->status;  ?>" >
                    <datalist  id="status">
                            <?php
                                    if($txresult->num_rows > 0): 
                                    while($txrows = $txresult->fetch_assoc()): 
                                ?>
                                     <option><?php echo $txrows['taxonomy'] ?></option>
                                <?php 
                                    endwhile;
                                    endif;    
                                    ?>
                    </datalist>
                    <div id="taxChoice" class="form-text">Note: Empty the box and select a new option</div>
                </div>
                <div class="mb-6 col-6">
                    <label for="exampleInputEmail1" class="form-label">Job URL</label>
                    <input type="text" class="form-control" name='url' value="<?php echo $rows->url;  ?>" id="url" aria-describedby="enter email address">
                    <div id="emailHelp" class="form-text">Job url</div>
                </div>
                <div class="mb-3 col-8">
                    <label for="coverletterno " class="form-label">Cover letter</label>
                    <textarea type="textarea" name='description' class="form-control " id="coverletter"> <?php echo $rows->description; ?> </textarea>
                </div>
                <input type="hidden" name='id' value='<?php echo $id ?>'>
                <input type="submit" name='update' value='Update database' class="btn btn-primary">
            </form>
        </div>
      

        

    <?php 
    $link->close(); 
    // header("Location: ../index.php");
}

?>