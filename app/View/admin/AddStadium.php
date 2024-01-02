<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="./AddStadium" enctype="multipart/form-data" >
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Stadium Name">
                        <label for="floatingName">Stadium Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control"  placeholder="Stadium Name">
                        <label>Stadium Name</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="city" class="form-control"  placeholder="Stadium City">
                        <label>Stadium's city</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="capacity" class="form-control"  placeholder="Stadium Capacity">
                        <label>Stadium Capacity</label>
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="adress" class="form-control"  placeholder="adress">
                        <label>Adress</label>
                    </div>
                </div>

                <div class="col-12">
                    <!-- <label>Stadium detail</label> -->
                    <div class="form-floating">
                        <!-- TinyMCE Editor -->
                        <textarea name="detail	" class="tinymce-editor">
                            <p>Hello World!</p>
                            <p>This is TinyMCE <strong>full</strong> editor</p>
                        </textarea>
                        
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="stadium_image" id="floatingCity" >
                            <label for="floatingCity">Stadium Image</label>
                        </div>
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


