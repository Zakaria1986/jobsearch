<?php

function fetchResult(){
    global $link;
    $query = "SELECT * FROM cover_letters";
    $result = $link->query($query); 
//   echo var_dump($result->num_rows);
  
echo ' <div class="row">'; 

if($result->num_rows > 0): 
    while($rows = $result->fetch_assoc()): ?>
    <div class="col-md-4 ">
        <div class="card shadow p-3 mb-5 bg-body rounded" style=" margin: 0.3rem 0">

            <div class="card-body text-center">
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
               
<<<<<<< HEAD
            <div class="card-body row justify-content-evenly">
                                <div class="col-4">
                                    <form class='align-items-end ' action="inc/delete.php" method="GET">
                                        <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                                        <input class="alert-danger d-flex align-items-right bg-success p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name='delete' value='Delete'>  
                                    </form>
                                </div>
                                <div class="col-4">
                                    <form class='align-items-end ' action="inc/update.php" method="GET">
                                        <input type="hidden" name="update_by_id" value='<?php echo $rows['id']; ?>'>
                                        <input class="alert-success d-flex align-items-right bg-success p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name="update" value="Edit">  
                                    </form>
                                </div>           
                    </div>      
=======
            <div class="card-body">
                    <form class='align-items-end ' action="inc/delete.php" method="GET">
                        <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                        <input class="alert-danger d-flex align-items-right bg-success p-2" style="--bs-bg-opacity: .10;" role="alert"  type="submit" name='delete' value='Delete'>  
                    </form>
            </div>      
>>>>>>> cededd9f051fbe9de8ec93303c226d10748adac4
          
          
        </div>
    </div>

<?php 
    endwhile;
    endif;
    // $link->free();
    // $link->close();  
}
echo '</div>'; 

?>

<?php

    function RecruitFetchResult(){
        global $link;
        $query = "SELECT * FROM recruiters";
        $result = $link->query($query); 
    //   echo var_dump($result->num_rows);
    if($result->num_rows > 0): 
        while($rows = $result->fetch_assoc()): ?>
    
        <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded"  style="width: 18rem; margin: 1rem;" >
                        <div class="card-body ">
                            <h5 class="card-title card-header" style="margin: 1rem;"><?php echo $rows['name'];  ?></h5>
                            <p class="card-text"><?php echo $rows['comments']; ?>.</p>
<<<<<<< HEAD
                            <a target="_blank" href="<?php echo $rows['web_site']; ?>" class="btn bg-clr p-2 text-white" style="--bs-bg-opacity: .10;">Visit job site</a>
=======
                            <a target="_blank" href="<?php echo $rows['web_site']; ?>" class="btn bg-success p-2 text-white" style="--bs-bg-opacity: .10;">visit the job site</a>
>>>>>>> cededd9f051fbe9de8ec93303c226d10748adac4
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