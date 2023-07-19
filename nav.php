<?php
                
                $uri = $_SERVER['REQUEST_URI']; 
                $basename = basename($uri); 
                $index;
                $recruits;
                $currentPath; 
                switch ($basename) {
                    case 'index.php':
                      $recruits = "entryForm/recruiters.php";
                      $index = '#';
                      
                      break;
                    case 'recruiters.php':
                      $index = "../index.php#";
                      $recruits = '#';
                      break ;

                    }
?>

<div class="container">
    <div class="row row shadow-lg p-3 mb-5 bg-body position-static">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     <h2> 
         <!-- <a class="navbar-brand" href="../index.php#">Home</a>  -->
        
         <a class="navbar-brand" href="<?php echo  $index;  ?>">Home</a>
         <a class="navbar-brand" href="<?php echo  $recruits;  ?>">Job platforms</a>
     </h2>
    </div>
  </nav>
  </div>
</div>


