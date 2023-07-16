<?php include("dbcon/dbcon.php"); ?>
<?php include("inc/select.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script charset="utf-8" src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row shadow-lg p-3 mb-5 bg-body position-static"><h1 class="position-relative">Job Search history</h1></div>

    <?php 
    // as the names suggest, it fetches the database data stored in the database
    fetchResult(); 
    ?>
 </div> 
 <!--Form section to enter the job details into the database -->
 <?php include("entryForm/entryform.php"); ?>     
</body>
</html>

