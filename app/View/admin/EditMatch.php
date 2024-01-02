<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="../UpdateMatch">
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="TeamName" class="form-control" placeholder="Team1 Name">
                            <?php
                            foreach ($team as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['TeamName']?></option>
                            <?php
                            }?>
                        </select>
                        <label for="name">Team1 Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="TeamName" class="form-control" placeholder="Team2 Name">
                            <?php
                            foreach ($team as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['TeamName']?></option>
                            <?php
                            }?>
                        </select>
                        <label for="name">Team2 Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['MatchDate Time']?>" type="date" name="MatchDate Time" class="form-control"  placeholder="match date">
                        <label>Match's Date</label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="<?=$data['Result']?>" type="text" name="Result" class="form-control"  placeholder="Match Result">
                        <label>Match's Result</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="name" class="form-control" placeholder="Stadium Name">
                 
                            <?php
                            foreach ($stadium as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                            <?php
                            }?>
                        </select>
                        <label for="name">Stadium Name</label>
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
