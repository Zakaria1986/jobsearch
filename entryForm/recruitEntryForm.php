

<!-- This goes into recruite.php -->

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