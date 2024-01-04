<section class="wrapper">
  <div class="container">
    <!-- <div class="row">
 <?php  

      $match = $data["matches"];
      $status= $data["status"];
    ?>
    </div> -->
    <div class="row">
      <div class=" text-center">
        <div class="match-title card text-dark card-has-bg click-col"
          style="background-image:url('images/match.jpg'); ">
          <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
              
              <h4 class="card-title mt-0 text-center"><?= $match[0]->MatchDateTime ?></h4>
              <p class="card-title mt-0 text-center">Stadium : <?= $match[0]->stadiomName ?> </p>
              <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                <div class="col-3 text-right d-flex flex-column text-center">
                  <img style="border-radius:100%;" src="https://flagsapi.com/<?=$match[0]->logoA?>/flat/64.png" alt="flag of <?= $match[0]->teamA ?> ">
                  <p class="name mt-0 text-center"><?= $match[0]->teamA ?></p>

                </div>
                <div class="vs me-2">VS</div>
                <div class="col-3 text-right d-flex flex-column ms-2 text-center">
                  <img style="border-radius:100%;"  src="https://flagsapi.com/<?=$match[0]->logoB?>/flat/64.png" alt="flag of <?= $match[0]->teamB ?> ">
                  <p class="name mt-0 text-center"><?= $match[0]->teamB ?></p>
                
                </div>
              </div>
              <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
              <?php  

                  if(isset($_SESSION["idUser"])){ 
               ?>
              <button class="btn btn-success mt-5 py-3 px-5 fs-5  " type="button" <?= $status  ? 'data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"' : ""?> ><a  class="reserve"><?= $status  ? "Reserve" : "match is passed" ?></a></button>
               <?php
               } else { 
               ?>
                
                <?php  
               }
                   ?>
                
            </div>
          </div>
        </div>
      </div>



    </div>
    
  </div>
</section>
  
<!-- modale reservation -->



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?=APP_URL?>reservation/addreservation" method="post" class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div  class="modal-body">
                  <div class="mb-3 row">
                    <label for="inputPassword"  class="col-sm-2 col-form-label"    >Number Of tecket</label>
                    <div class="col-sm-10">
                      <input type="number" name="number_of_ticket" class="form-control" id="inputPassword" value="1" required max="4" min="1">
                    </div>
                  </div>
                   <input type="hidden" value="<?=$match[0]->id?>" name="id" >
                  <div class="mb-3 row">
                    <div  class="col-sm-10" >
                  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" required >
                   <label class="btn btn-outline-primary" for="btncheck1">i agree</label>
                  </div>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">confirmer</button> -->
        <input type="submit" value="confirmer"  class="btn btn-primary" >
      </div>
    </form>
  </div>
</div>
<!-- end Modal -->
<style>
  body {
    /* Created with https://www.css-gradient.com */
    background: none;
  }

  h1 {
    color: #fff;
  }

  .lead {
    color: #aaa;
  }

  .wrapper {
    margin: 10%
  }

  /* //post card styles */

  .cont {
    font-weight: 800;
    font-family: Inter;
    color: #fff;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }


  .card {
    border: none;
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    overflow: hidden;
    border-radius: 20px;
    min-height: 580px;
    box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);

    @media (max-width: 768px) {
      min-height: 350px;
    }

    @media (max-width: 420px) {
      min-height: 300px;
    }

    &.card-has-bg {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      background-size: 120%;
      background-repeat: no-repeat;
      background-position: center center;

      &:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: inherit;
        -webkit-filter: grayscale(1);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
      }

      &:hover {


        transform: scale(0.98);
        box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
        background-size: 130%;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

        .card-img-overlay {
          transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
          /* background: rgb(255, 186, 33);
          background: linear-gradient(0deg, rgb(1, 57, 13, 0.5) 0%, rgba(255, 186, 33, 1) 100%); */
          background: #FF7900;
          background: linear-gradient(135deg, #FF7900, #074534);

        }
      }
    }

    .card-footer {
      background: none;
      border-top: none;

      .media {
        img {
          border: solid 3px rgba(255, 255, 255, 0.3);
        }
      }
    }

    .card-title {
      font-weight: 800;
      font-family: Inter;
      color: #fff;
      font-size: 10px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .card-meta {
      color: rgba(0, 0, 0, 0.3);
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 2px;
    }

    .card-body {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

    }

    .name {

      font-weight: 800;
      font-family: Inter;
      color: #fff;
      font-size: 30px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .vs {
      color: #FFF;
      font-family: Jockey One;
      font-size: 36px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }



    .reserve {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .see {
      color: #FFF;
      font-family: Poppins;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    &:hover {
      .card-body {
        margin-top: 30px;
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      }

      cursor: pointer;
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card-img-overlay {
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      background: rgb(255, 186, 33);
      background: linear-gradient(0deg, rgba(255, 186, 33, 0.3785889355742297) 0%, rgba(255, 186, 33, 1) 100%);
    }
  }

  @media (max-width: 767px) {}
</style>