<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post"  action="../UpdateUser" >
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="<?=$data['name']?>" type="text" name="name" class="form-control" id="floatingName" placeholder="User Name">
                        <label for="floatingName">User Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['email']?>" type="text" name="email" class="form-control"  placeholder="email">
                        <label> email</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['password']?>" type="password" name="password" class="form-control"  placeholder="Stadium password">
                        <label>Stadium's password</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['VarifyCode']?>" type="text" name="VarifyCode" class="form-control"  placeholder="VerifyCode">
                        <label>VerifyCode</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="role" class="form-control" placeholder="role">
                 
                            <?php
                            foreach ($role as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['role']?></option>
                            <?php
                            }?>
                        </select>
                        <label for="name">Role</label>
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
