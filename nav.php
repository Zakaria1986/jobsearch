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

                     default:
                        $index = "../index.php#";
                        $recruits = "../entryForm/recruiters.php";
                        break ;

                    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-clr shadow-lg p-3 mb-5  rounded"> 
     <h2> 
     <a class="navbar-brand" href="<?=!empty($basename) ? $index : 'index.php';?>">Home</a>
         <a class="navbar-brand" href="<?= !empty($basename) ? $recruits : "entryForm/recruiters.php" ; ?>">Job platforms</a>
     </h2>
  </nav>


