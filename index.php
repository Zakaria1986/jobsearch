 <?php 
  include_once("dbcon/dbcon.php"); 
  include_once("inc/select.php");
  include_once("inc/delete.php"); 
  require_once 'pagesections/header.php'; 

 
   !empty($_SESSION['user_id']) && !empty($_SESSION['user_name']) ? "Welcome ". $_SESSION['user_name'] : "Please, login to EDIT and DELETE"; 

  ?>
      <div class="row shadow-lg p-3 mb-5 bg-body position-static"><h1 class="position-relative">Job Platfroms</h1></div>  
    <?php 
    // include_once 'login/login.php';
    include_once('nav.php');
    // as the names suggest, it fetches the database data stored in the database
    fetchResult(); 
    ?>
 </div> 
 <!--Form section to enter the job details into the database -->
 <?php 
  if(!empty($_SESSION['user_id']) && !empty($_SESSION['user_name'])){
    echo '<div class="container">', include("entryForm/entryform.php"),'</div>';
  }else{
    echo '<div class="container"> <div class="row"> <h5>Please, login to add new jobs.</h5></div></div>';
  }
 require_once('pagesections/footer.php');
 ?>     

