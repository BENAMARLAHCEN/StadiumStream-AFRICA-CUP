<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="./AddTeam" enctype="multipart/form-data" >
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="TeamName" class="form-control" id="floatingName" placeholder="TeamName">
                        <label for="floatingName">Team Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="Country" class="form-control" placeholder="country" >
                        <label >Country</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="coach" class="form-control"  placeholder="coach">
                        <label>Coach</label>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <label>Team detail</label> -->
                    <div class="form-floating">
                        <!-- TinyMCE Editor -->
                        <textarea name="detail" class="tinymce-editor">
                            <p>Hello World!</p>
                            <p>This is TinyMCE <strong>full</strong> editor</p>
                        </textarea>
                        
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                <div class="col-md-6">
                    
                        <div class="form-floating">
                            <input type="file" class="form-control" name="image" id="floatingCity" >
                            <label for="floatingCity">Team Image</label>
                        </div>
                    
                </div> 
                <div class="col-md-6">
                    
                        <div class="form-floating">
                            <input type="text" class="form-control" name="logo" id="floatingCity" >
                            <label for="floatingCity">Team Logo</label>
                        </div>
                    
                </div> 
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
</section>
