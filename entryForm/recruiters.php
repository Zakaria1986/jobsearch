<?php
 include_once("../dbcon/dbcon.php");
 include_once("../inc/select.php");
 require_once('../pagesections/header.php')
 
 ?>

<div class="container">
<div class="row shadow-lg p-3 mb-5 bg-body position-static"><h1 class="position-relative">Recruiting Platfroms</h1></div>
<?php include('../nav.php') ?>
  <!-- Content here -->
</div>
    <br>
<div class="container bg-body">
  <!-- Content here -->
  
           <div class="row row-background p-2 text-dark bg-opacity-5">
                <?php
                 
                RecruitFetchResult();
             

                ?>

                </div>
</div>

<br>

<?php 
if(!empty($_SESSION['user_id']) && !empty($_SESSION['user_name'])){
require_once('recruitEntryForm.php');
}
else{
  echo '<h5>Please, login to add new jobs.</h5>';
}
require_once('../pagesections/footer.php')

?>

