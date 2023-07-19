 <?php 
  include_once("dbcon/dbcon.php"); 
  include_once("inc/select.php");
  include_once("inc/delete.php"); 
  require_once 'pagesections/header.php'; 
  ?>
        
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

