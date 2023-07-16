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
                    <h4>Job title:</h4> <?php echo $rows['Job_title']; ?>
                </div>
                <br><br>
                <div class="col">
                    <h4> Applied on:</h4>  <?php echo $rows['created']; ?>
                </div>   
        </div>
        
        <div class="row">
            <div class="col">
                    <h4>Job link:</h4> 
                    <a target="_blank" href="<?php echo $rows['url']; ?>">
                     <?php echo $rows['url']; ?> </a>
            </div>
            <br><br>
        </div>
         <br>
        <div class="shadow-none p-3 mb-5 bg-light row">
            <div class="col">
                <h4>Job Description:</h4> 
                <?php echo $rows['description']; ?>
            </div>
        </div>
    </div>
    <br><br>

<?php 
    endwhile;
    endif;
    // $link->free();
    $link->close();
}
?>