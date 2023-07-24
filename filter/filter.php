<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script charset="utf-8" src="js/app.js"></script>
    <link rel="stylesheet" href="<?= (basename($_SERVER['REQUEST_URI'])==='index.php')? 'css/style.css' : '../css/style.css' ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Filter the result</title>
</head>
<body>
<div class="container">
    <div class="row">

<?php 
// including db connection here
require_once "../dbcon/dbcon.php";
$link; 

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
// Preperated statement query


$stmt = mysqli_prepare($link, "SELECT * FROM cover_letters WHERE status = ?"); 

// Status query; 
$taxoQuery = "SELECT * FROM taxonomy"; 
$txresult = $link->query($taxoQuery); 
?>

<h2>Select an option from the filter:</h2> 
<div class="row gx-5">
<div class="col-md-12 p-3">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="status">Filter:</label>
    <select id="status" name="status" value="<?php echo 'Select an option' ?>">
    <option value="Refresh page">Select an option</option>
                        <?php
                                if($txresult->num_rows > 0): 
                                while($txrows = $txresult->fetch_assoc()): 
                            ?>
                               <option value="<?php echo $txrows['taxonomy'] ?>"><?php echo $txrows['taxonomy'] ?></option>
                    <?php 
                        endwhile;
                        endif;    
                         ?>
    </select>
    <input type="submit" value="Search">
</form>

                    </div>
                </div>
<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <?php // Keyword from status options
        $status = $_POST["status"]; 
        mysqli_stmt_bind_param($stmt, "s", $status);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($rows = mysqli_fetch_assoc($result)) :
    ?>

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
                                
                                
                                </div>
                            </div>


                            <script>
// JavaScript function to reload the page after 30 seconds
//             setTimeout(function() {
//                 alert('time refresh the page');
//                 window.reloaad();
//             }, 3000); // 30 seconds in milliseconds (30,000 ms = 30 seconds)
// </script>


     <?php
     endwhile;
else:
    $sql =  "SELECT * FROM cover_letters";
    $result = $link->query( $sql);

   $data = array(); 
     
    while ($rows = mysqli_fetch_assoc($result)) :

        $data[] = $rows; 
?>
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
                            </div>
                        </div>
 <?php
 endwhile;
endif;
?>
 </div>
</div>
</body>
</html>
