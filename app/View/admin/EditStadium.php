<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="../UpdateStadium">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="<?=$data['name']?>" type="text" name="name" class="form-control" id="floatingName" placeholder="Stadium Name">
                        <label for="floatingName">Stadium Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['city']?>" type="text" name="city" class="form-control"  placeholder="Stadium City">
                        <label>Stadium's City</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['capacity']?>" type="text" name="capacity" class="form-control"  placeholder="Stadium capacity">
                        <label>Stadium's Capacity</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['address']?>" type="text" name="address" class="form-control"  placeholder="Adress">
                        <label>Adress</label>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <label>Stadium detail</label> -->
                    <div class="form-floating">
                        <!-- TinyMCE Editor -->
                        <textarea name="detail" class="tinymce-editor">
                            <?=$data['detail']?>
                        </textarea>
                        
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="image" id="floatingCity" value="<?= $row['image']?>">
                            <label for="floatingCity">Stadium Image</label>
                        </div>
                    </div>
                </div>
                
                
                <div class="text-center">
                    <button type="submit" name="id" value="<?=$data['id']?>" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>z
            </form><!-- End floating Labels Form -->

        </div>
    </div>
</section>
