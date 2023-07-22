<?php
function fetchResult(){
    global $link;
    $query = "SELECT * FROM cover_letters";
    $result = $link->query($query); 
//   echo var_dump($result->num_rows);
  
echo ' <div class="row">'; 

if($result->num_rows > 0): 
    while($rows = $result->fetch_assoc()): ?>
    <div class="col-md-4">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Job title:  </h5>
                <p class="card-text">
                     <a target="_blank" href="<?php echo $rows['url']; ?>">
                        <?php echo $rows['Job_title'];  ?></a> 
                </p>
               </div>
            <ul class="list-group list-group-flush">  
                <li class="list-group-item"> <h4> Status:</h4> <span class='fs-5 text-success'><?php echo $rows['status']; ?></span> </li>
                <li class="list-group-item"> <h4 class='align-middle'> Applied on:</h4>  <?php echo $rows['created']; ?></li>
                <li class="list-group-item">  <h4>Job Description:</h4> <?php echo $rows['description']; ?></li>
        </ul>
               
            <div class="card-body">
                    <form action="inc/delete.php" method="GET">
                        <input type="hidden" name="delete_by_id" value='<?php echo $rows['id']; ?>'>
                        <input class="alert alert-danger d-flex align-items-right" role="alert"  type="submit" name='delete' value='Delete'>  
                    </form>
            </div>      
          
          
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

 function fetchResult(){
    global $link;
    $query = "SELECT * FROM cover_letters";
    $result = $link->query($query); 
//   echo var_dump($result->num_rows);
  if($result->num_rows > 0): 
    while($rows = $result->fetch_assoc()): ?>
    
    <div class='row shadow-lg p-3 mb-5 bg-body '>
        <div class="row text text-center">
                <div class="col align-middle">
                    <h4>Job title:</h4> 
                </div>
                <br><br>
                <div class="col">
                   
                </div>

                <div class="col">
                   
                </div>
                <!-- This is a danger Zone -->
                        <div class="col-md-3 text-right" class="alert alert-danger d-flex " role="alert">
                          
                           
                        </div>
                        <!-- Ends -->
        </div>
         <br>
        <div class="shadow-none p-3 mb-5 bg-light row">
            <div class="col">
              

            </div>
        </div>
    </div>
   
<?php 
    endwhile;
    endif;
    // $link->free();
    // $link->close();
}
