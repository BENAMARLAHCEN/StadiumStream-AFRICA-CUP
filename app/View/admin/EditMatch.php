<?php  
if(isset($_SESSION['errorMessage'])):
    $message = $_SESSION['errorMessage'];
    unset($_SESSION['errorMessage']);
?>
    <div id="messageError"  class="d-flex justify-content-between alert alert-danger">
        <div>
            <?=$message?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


    </div>
   
  
<?php endif;
  $oldMatch = $data["oldMatch"];
  
?>




<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="<?=APP_URL?>matche/UpdateMatche" enctype="multipart/form-data" >
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="Team1ID" class="form-control" id="slectTeamA" placeholder="Team Name">
                       <option selected value="<?=$oldMatch[0]->Team1ID?>" ><?=$oldMatch[0]->teamA?></option>

                            <?php
                            $team = $data["team"];
                            foreach ($team as $row) {
                                if($row['id']!=$oldMatch[0]->Team1ID):
                                ?>
                            <option value="<?=$row['id']?>"><?=$row['TeamName']?></option>
                            <?php
                            endif;
                            }?>
                        </select>
                        <label for="name">Team 1 Name</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="Team2ID" class="form-control" id="slectTeamB" placeholder="Team Name">
                        <option selected value="<?=$oldMatch[0]->Team2ID?>" ><?=$oldMatch[0]->teamB?></option>
                       <?php
                            $team = $data["team"];
                            foreach ($team as $row) {
                                if($row['id']!=$oldMatch[0]->Team2ID):
                                ?>
                            <option value="<?=$row['id']?>"><?=$row['TeamName']?></option>
                            <?php
                              endif;
                            }?>
                
                        </select>
                        <label for="name">Team 2 Name</label>
                    </div>
                </div>

      <input type="hidden" name="id" value="<?=$oldMatch[0]->id?>" >

                <div class="col-md-6">
                    <div class="form-floating">
                       
                        <select name="GroupID" class="form-control" >
                            <option selected disabled >Select Group</option>
                            <option selected value="<?=$oldMatch[0]->GroupID?>" ><?=$oldMatch[0]->GroupID?></option>

                            <?php
                               $group=["A","B","C","D","E","F"];
                               for($i=0;$i<6;$i++){
                                if($group[$i]!==$oldMatch[0]->GroupID) :
                            ?>
                            <option value="<?=$group[$i]?>"><?=$group[$i]?></option>
                            
                            <?php
                            endif;
                               }
                            ?>
                        </select>
                        <label>Group</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="datetime-local" name="MatchDateTime" value="<?=$oldMatch[0]->MatchDateTime?>" class="form-control"  >
                        <label >Match Date</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="stadium_id" class="form-control" placeholder="Stadium Name">

                        <option selected value="<?=$oldMatch[0]->stadiumID?>" ><?=$oldMatch[0]->stadiomName?></option>
                            <?php
                            
                            $stadium = $data["stadium"];
                            foreach ($stadium as $row) {
                                if($row['id']!=$oldMatch[0]->stadiumID):?>
                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                            <?php
                            endif;
                            }?>
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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>






$(document).ready(function() {





$("#slectTeamA").change(function() {
var selectedTeam1 = $(this).val();

$("#slectTeamB").html('<option selected disabled >select team b</option>');

<?php foreach ($team as $row) { ?>
if ("<?=$row['id']?>" !== selectedTeam1) {
    $("#slectTeamB").append('<option value="<?=$row['id']?>"><?=$row['TeamName']?></option>');
}
<?php } ?>
});

});
</script>