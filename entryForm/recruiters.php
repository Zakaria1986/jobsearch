<?php
 include_once("../dbcon/dbcon.php");
 include_once("../inc/select.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script charset="utf-8" src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- <script>
$(document).ready(function(){
  $("form.recruiters").submit(function(){
   event.preventDefault();
    document.getElementById("recruiter_name").value=""; //don't forget to set the textbox id
                        document.getElementById("website").value="";
                        document.getElementById("comments").value="";
  });
});


</script> -->
</head>
<body>
<div class="container">
<div class="row shadow-lg p-3 mb-5 bg-body position-static"><h1 class="position-relative">Recruiting Platfroms</h1></div>
<?php include('../nav.php') ?>
  <!-- Content here -->
</div>
    <br>
   
<div class="container">
  <!-- Content here -->
  
           <div class="row  alert-secondary">
                <?php RecruitFetchResult() ?>
                </div>
</div>

<br>

<div class="container">
  <!-- Content here -->
  <div class="row">
        <h2>Enter recruiters details here: </h2>
    </div> 
  <div class="row alert alert-light ">
        <form class='recruiters' action="../inc/recrinsert.php" method="POST">
            <div class="mb-3 col-6">
                <label for="recruiter_name" class="form-label">Recruiter Name</label>
                <input type="text" name='recruiter_name' class="form-control" id="recruiter_name" aria-describedby="Recruiters name">
                <div id="recruiter_name" class="form-text"></div>
            </div>
            <div class="mb-6 col-6">
                <label for="website" class="form-label">Job board</label>
                <input type="text" class="form-control" name='website' id="website" aria-describedby="Enter website url">
                <div id="websiteHelper" class="form-text">Website</div>
            </div>
            <div class="mb-3 col-8">
                <label for="comments" class="form-label">Comments</label>
                <textarea type="textarea" name='comments' class="form-control " id="comments"></textarea>
            </div>

             <input type="submit" name='submit' value='Save' class="btn btn-primary" onclick="clearFrom()"></button>
        </form>
    </div>
</div>
<br>
</body>
</html>