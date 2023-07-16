


<div class="container">
  <!-- Content here -->
  <div class="row">
    
    </div> 
  <div class="row ">
        <form action="inc/insertinto.php" method="POST">
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Job title</label>
                <input type="text" name='job_title' class="form-control" id="exampleInputEmail1" aria-describedby="enter email address">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-6 col-6">
                <label for="exampleInputEmail1" class="form-label">Job URL</label>
                <input type="text" class="form-control" name='url' id="url" aria-describedby="enter email address">
                <div id="emailHelp" class="form-text">Job url</div>
            </div>
            <div class="mb-3 col-8">
                <label for="coverletterno " class="form-label">Cover letter</label>
                <textarea type="textarea" name='description' class="form-control " id="coverletter"></textarea>
            </div>

             <input type="submit" name='submit' value='Add to database' class="btn btn-primary"></button>
        </form>
    </div>
</div>
<br>
