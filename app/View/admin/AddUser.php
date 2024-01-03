<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="./AddStadium" enctype="multipart/form-data" >
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                        <label>User Name</label>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="email" class="form-control"  placeholder="email">
                        <label>Email</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="password" class="form-control"  placeholder="password">
                        <label>Password</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="role" class="form-control" placeholder="role_id">
                 
                            <?php
                            foreach ($role as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['role']?></option>
                            <?php
                            }?>
                        </select>
                        <label for="name">Role</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="VerifyCode" class="form-control"  placeholder="VerifyCode">
                        <label>VerifyCode</label>
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


