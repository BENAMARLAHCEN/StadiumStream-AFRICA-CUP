<section class="wrapper">
  <div class="container">
    <!-- <div class="row">

    </div> -->
    <div class="row">
      <div class=" text-center">
        <div class="match-title card text-dark card-has-bg click-col" style="background-image:url('images/match.jpg'); ">
          <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">

              <h4 class="card-title mt-0 text-center">Jan 13, 21:00</h4>
              <p class="card-title mt-0 text-center">Stadium : Olympic Stadium of Ebimpé</p>
              <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                <div class="col-3 text-right d-flex flex-column text-center">
                  <img src="<?= APP_URL ?>asset/uploads/Image.svg" alt="">
                  <p class="name mt-0 text-center">name</p>

                </div>
                <div class="vs me-2">VS</div>
                <div class="col-3 text-right d-flex flex-column ms-2 text-center">
                  <img src="<?= APP_URL ?>asset/uploads/Flag_Congo.svg" alt="">
                  <p class="name mt-0 text-center">name</p>

                </div>
              </div>
              <!-- <div class="text-center"><a href="" class="btn border border-dotted  mt-5 py-3 px-5 fs-5">Reserve</a></div> -->
              <button type="button" class="btn btn-success mt-5 py-3 px-5 fs-5" style=""><a href="" class="reserve">Reserve</a></button>

            </div>
          </div>
        </div>
      </div>



    </div>

  </div>
</section>

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