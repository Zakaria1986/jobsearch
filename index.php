 <?php 
  include_once("dbcon/dbcon.php"); 
  include_once("inc/select.php");
  include_once("inc/delete.php"); 
  require_once 'pagesections/header.php'; 
  ?>
      <div class="row shadow-lg p-3 mb-5 bg-body position-static"><h1 class="position-relative">Job Platfroms</h1></div>  
    <?php 
    
    include('nav.php');
    // as the names suggest, it fetches the database data stored in the database
    fetchResult(); 
    ?>
 </div> 
 <!--Form section to enter the job details into the database -->
 <?php 
 include("entryForm/entryform.php");
 require_once('pagesections/footer.php') 
 ?>     

