<?php

function fetchResult(){
    global $link;
    // $query = "SELECT * FROM cover_letters";
    // $result = $link->query($query); 
//   echo var_dump($result->num_rows);


$stmt = mysqli_prepare($link, "SELECT * FROM cover_letters WHERE status = ?"); 

if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <?php // Keyword from status options
        $status = $_POST["status"]; 
        mysqli_stmt_bind_param($stmt, "s", $status);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo ' <div class="row">'; 
        while ($rows = mysqli_fetch_assoc($result)) :
            
?>
                        <div class="col-md-4 ">
                                <div class="card shadow p-3 mb-5 bg-body rounded" style=" margin: 0.3rem 0">

                                    <div class="card-body card-title-sec text-center">
                                        <strong class="fs-6 card-title ">Job title:  </strong>
                                        <p class=" card-title">
                                            <a target="_blank" href="<?php echo $rows['url']; ?>">
                                                <?php echo $rows['Job_title'];  ?></a> 
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">  
                                        <li class="list-group-item"> <strong class=" card-title" > Status:</strong> <span class='fs-8 text-success'><?php echo $rows['status']; ?></span> </li>
                                        <li class="list-group-item">  <strong class="card-title">Applied on: </strong>  <?php echo $rows['created']; ?></li>
                                        <li class="list-group-item">  <strong class=" card-title">Note:</strong> <?php echo $rows['description']; ?></li>
                                </ul>
                                <?php 
                                
                                if(!empty($_SESSION['user_id']) && !empty($_SESSION['user_name'])): ?>                        
                                    <div class="card-body row justify-content-evenly">
                                                        <div class="col-4">
                                                            <form class='align-items-end ' action="inc/delete.php" method="GET">
                                                                <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                                                                <input class="alert-danger d-flex align-items-right  p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name='delete' value='Delete'>  
                                                            </form>
                                                        </div>
                                                        <div class="col-4">
                                                            <form class='align-items-end ' action="inc/update.php" method="GET">
                                                                <input type="hidden" name="update_by_id" value='<?php echo $rows['id']; ?>'>
                                                                <input class="alert-success d-flex align-items-right bg-success p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name="update" value="Edit">  
                                                            </form>
                                                        </div>           
                                        </div>      
                                
                                <?php endif ?>
                                </div>
                            </div>


                            <?php
     endwhile;
     echo ' </div>'; 
else:
    $sql =  "SELECT * FROM cover_letters";
    $result = $link->query( $sql);
    echo ' <div class="row">'; 
    while ($rows = mysqli_fetch_assoc($result)) : ?>
  
        <div class="col-md-4 ">
        <div class="card shadow  p-3 mb-5 bg-body rounded" style=" margin: 0.3rem; ">

            <div class="card-body card-title-sec text-center" style=" background-color: #802bc1a6 !important;" >
                <strong class="fs-6 card-title ">Job title:  </strong>
                <p class=" card-title">
                    <a style=" background-color: none !important;" target="_blank" href="<?php echo $rows['url']; ?>">
                        <?php echo $rows['Job_title'];  ?></a> 
                </p>
            </div>
            <ul class="list-group list-group-flush">  
                <li class="list-group-item"> <strong class=" card-title" > Status:</strong> <span class='fs-8 text-success'><?php echo $rows['status']; ?></span> </li>
                <li class="list-group-item">  <strong class="card-title">Applied on: </strong>  <?php echo $rows['created']; ?></li>
                <li class="list-group-item">  <strong class=" card-title">Note:</strong> <?php echo $rows['description']; ?></li>
        </ul>
      <?php  if(!empty($_SESSION['user_id']) && !empty($_SESSION['user_name'])): ?>    
            <div class="card-body editSec row justify-content-evenly" >
                                <div class="col-4">
                                    <form class='align-items-end ' action="inc/delete.php" method="GET">
                                        <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                                        <input class="alert-danger d-flex align-items-right p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name='delete' value='Delete'>  
                                    </form>
                                </div>
                                <div class="col-4">
                                    <form class='align-items-end ' action="inc/update.php" method="GET">
                                        <input type="hidden" name="update_by_id" value='<?php echo $rows['id']; ?>'>
                                        <input class="alert-success d-flex align-items-right bg-clr p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name="update" value="Edit">  
                                    </form>
                                </div>           
                    </div>   
                    <?php endif ?>   
        </div>
    </div>
<?php
    endwhile;
    echo '</div>'; 
endif;

}
?>

<?php

    function RecruitFetchResult(){
        global $link;
        $query = "SELECT * FROM recruiters";
        $result = $link->query($query); 
    //   echo var_dump($result->num_rows);
    if($result->num_rows > 0): 
        while($rows = $result->fetch_assoc()): ?>
    
        <div class="card text-center col-sm-6 shadow-lg p-3 mb-4 rounded"  style=" width: 18rem; margin: 0.3rem;" >
                        <div class="card-body ">
                            <h5 class="card-title card-header" style="marginxs: 1rem;"><?php echo $rows['name'];  ?></h5>
                            <p class="card-text"><?php echo $rows['comments']; ?>.</p>
                            <a target="_blank" href="<?php echo $rows['web_site']; ?>" class="recbt btn bg-clr p-2 text-white" style="--bs-bg-opacity: .10;">Visit job site</a>
                        </div>
        </div>
    <?php 
        endwhile;
        endif;
        
    }

?>

<?php

    function taxonomyResult(){
                global $link;
                $txquery = "SELECT * FROM taxonomy";
                $txresult = $link->query($txquery); 
            //   echo var_dump($result->num_rows);
            if($txresult->num_rows > 0): 
                while($txrows = $txresult->fetch_assoc()): ?>
                    <option  value="<?php echo $txrows['taxonomy'] ?>"><?php echo $txrows['taxonomy'] ?>
            <?php 
                endwhile;
                endif;
                // $link->free();
                $link->close();
    }


?>