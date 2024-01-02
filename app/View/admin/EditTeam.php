<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="../UpdateTeam">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="<?=$data['TeamName']?>" type="text" name="TeamName" class="form-control" id="floatingName" placeholder="Team Name">
                        <label for="floatingName">Team Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['country']?>" type="text" name="Country" class="form-control"  placeholder="Country">
                        <label>Country</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['coach']?>" type="text" name="coach" class="form-control"  placeholder="coach">
                        <label>coach</label>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <label>Team detail</label> -->
                    <div class="form-floating">
                        <!-- TinyMCE Editor -->
                        <textarea name="detail" class="tinymce-editor">
                            <?=$data['detail']?>
                        </textarea>
                        
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                
                
                <div class="text-center">
                    <button type="submit" name="TeamID" value="<?=$data['TeamID']?>" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
</section>
