<?php
if (isset($oldMatch)) {
    var_dump($oldMatch); 
} else {
    echo "Old match data not available.";
}
?>
<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="../UpdateMatche" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="Team1ID" class="form-control" placeholder="Team Name">
                            <option selected disabled value="">select team a</option>
                            <?php
                            $oldMatch = $data["oldMatch"];
                            $team = $data["team"];
                            foreach ($team as $row) {
                                $selected = ($row['id'] == $oldMatch['Team1ID']) ? 'selected' : '';
                                ?>
                                <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['TeamName'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="name">Team1 Name</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="Team2ID" class="form-control" placeholder="Team Name">
                            <option selected disabled value="">select team b</option>
                            <?php
                            foreach ($team as $row) {
                                $selected = ($row['id'] == $oldMatch['Team2ID']) ? 'selected' : '';
                                ?>
                                <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['TeamName'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="name">Team2 Name</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="GroupID" class="form-control">
                            <option selected disabled value="">Select Group</option>
                            <?php
                            $groups = ["A", "B", "C", "D", "E", "F"];
                            foreach ($groups as $group) {
                                $selected = ($group == $oldMatch["GroupID"]) ? 'selected' : '';
                                ?>
                                <option value="<?= $group ?>" <?= $selected ?>><?= $group ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label>Group</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="datetime-local" name="MatchDateTime" class="form-control" value="<?= $oldMatch['MatchDateTime'] ?>" >
                        <label >Match Date</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="stadium_id" class="form-control" placeholder="Stadium Name">
                            <option selected disabled value="">Select Stadium</option>
                            <?php
                            $stadium = $data["stadium"];
                            foreach ($stadium as $row) {
                                $selected = ($row['id'] == $oldMatch['stadium_id']) ? 'selected' : '';
                                ?>
                                <option value="<?= $row['id'] ?>" <?= $selected ?>> <?= $row['name'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="name">Stadium Name</label>
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
