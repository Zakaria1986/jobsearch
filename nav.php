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
                        case "jobsearch":
                        $index = "index.php#";
                        $recruits = "entryForm/recruiters.php";
                          break;
                          default:
                            $index = "../index.php#";
                            $recruits = "../entryForm/recruiters.php";
                              break;
                    }
                    // echo $basename, " ", $index , " " , $recruits;
                    // die;
                    $taxoQuery = "SELECT * FROM taxonomy"; 
                    $txresult = $link->query($taxoQuery); 
// ?>
<div class="row align-items-center navbar-light bg-clr navbar-expand-lg shadow-lg p-3 mb-5  rounded">
<div class="col">
<nav class="navbar "> 
     <h2> 
     <a class="navbar-brand" href="<?php echo !empty($basename) ? $index : 'index.php';?>">Home</a>
         <a class="navbar-brand" href="<?= !empty($basename) ? $recruits : "entryForm/recruiters.php" ; ?>">Job platforms</a>
     </h2>
  </nav>
  </div>
  <!-- Only show if index page -->
  <?php if($basename == "index.php" || $basename == "jobsearch" ): ?>
    <div class="col">
    <form class='float-end' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
  <?php endif;?>  
    </div>
