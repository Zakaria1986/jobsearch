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

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-body rounded"> 
     <h2> 
         <a class="navbar-brand" href="<?php echo  $index;  ?>">Home</a>
         <a class="navbar-brand" href="<?php echo  $recruits;  ?>">Job platforms</a>
     </h2>
  </nav>


