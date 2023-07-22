
<div class="mt-10 shadow-lg p-3 mb-5 bg-body rounded">
  <!-- Content here -->
  <div class="row justify-content-md-center">
    <h2>Enter job details here:</h2>
    </div> 

  <div class="row justify-content-md-center">
        <form action="inc/insertinto.php" method="POST">
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Job title</label>
                <input type="text" name='job_title' class="form-control" id="exampleInputEmail1" aria-describedby="enter email address">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3 col-3">
                <label for="taxChoice" class="form-label">Taxonomy</label>
                <input list="status" name="status" class="form-control" id="taxChoice" aria-describedby="Satus application in">
                <datalist id="status">
                        <?php  taxonomyResult(); ?>
                 </datalist>
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
