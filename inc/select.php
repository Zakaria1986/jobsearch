<?php
function fetchResult(){
    global $link;
    $query = "SELECT * FROM cover_letters";
    $result = $link->query($query); 
//   echo var_dump($result->num_rows);
  if($result->num_rows > 0): 
    while($rows = $result->fetch_assoc()): ?>
    
    <div class='row shadow-lg p-3 mb-5 bg-body '>
        <div class="row">
                <div class="col">
                    <h4>Job title:</h4>  <a target="_blank" href="<?php echo $rows['url']; ?>"><h6><?php echo $rows['Job_title'];  ?></h6></a>
                </div>
                <br><br>
                <div class="col">
                    <h4> Applied on:</h4>  <?php echo $rows['created']; ?>
                </div>
                <!-- This is a danger Zone -->
                        <div class="col-md-3" class="alert alert-danger d-flex align-items-center" role="alert">
                            <form action="inc/delete.php" method="GET">
                                <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                                <input class="alert alert-danger d-flex align-items-right" role="alert"  type="submit" name='delete' value='Delete'>  
                            </form>
                           
                        </div>
                        <!-- Ends -->
        </div>
         <br>
        <div class="shadow-none p-3 mb-5 bg-light row">
            <div class="col">
                <h4>Job Description:</h4> 
                <?php echo $rows['description']; ?>

            </div>
        </div>
    </div>
   

<?php 
    endwhile;
    endif;
    // $link->free();
    $link->close();
}



function RecruitFetchResult(){
    global $link;
    $query = "SELECT * FROM recruiters";
    $result = $link->query($query); 
//   echo var_dump($result->num_rows);
  if($result->num_rows > 0): 
    while($rows = $result->fetch_assoc()): ?>
   
     <div class="card text-center  " style="width: 18rem; margin: 1rem;" >
                
                    <div class="card-body ">
                        
                        <h5 class="card-title card-header" style="margin: 1rem;"><?php echo $rows['name'];  ?></h5>
                        <p class="card-text"><?php echo $rows['comments']; ?>.</p>
                        <a target="_blank" href="<?php echo $rows['web_site']; ?>" class="btn btn-primary">visit the job site</a>
                    </div>
     </div>
<?php 
    endwhile;
    endif;
    // $link->free();
    $link->close();
}
?>