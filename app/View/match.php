<style>
  /* Hero Section - Home Page
------------------------------*/
  .hero {
    --default-color: #ffffff;
    --default-color-rgb: 255, 255, 255;
    --background-color: #000000;
    --background-color-rgb: 0, 0, 0;
    width: 100%;
    min-height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero #VSimage {
    position: absolute;
    inset: 0;
    display: block;
 
    -o-object-fit: cover;
    object-fit: cover;
    z-index: 1;
  }

  .hero:before {
    content: "";
    background: rgba(var(--background-color-rgb), 0.5);
    position: absolute;
    inset: 0;
    z-index: 2;
  }

  .hero .container {
    position: relative;
    z-index: 3;
  }

  .hero h2 {
    color: var(--contrast-color);
    margin: 0;
    font-size: 44px;
    font-weight: 700;
  }

  .hero p {
    color: rgba(var(--default-color-rgb), 0.8);
    margin: 5px 0 0 0;
    font-size: 20px;
  }

  .hero .sign-up-form {
    margin-top: 20px;
    padding: 10px;
    border-radius: 7px;
    background: #fff;
    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.1);
  }

  .hero .sign-up-form .form-control {
    border: none;
  }

  .hero .sign-up-form .form-control:active,
  .hero .sign-up-form .form-control:focus {
    outline: none;
    box-shadow: none;
  }

  .hero .sign-up-form input[type=submit] {
    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    padding: 8px 20px 10px 20px;
    border-radius: 7px;
    color: var(--contrast-color);
  }

  .hero .sign-up-form input[type=submit]:hover {
    background-color: rgba(var(--primary-color-rgb), 0.9);
  }

  @media (max-width: 768px) {
    .hero h2 {
      font-size: 32px;
    }

    .hero p {
      font-size: 18px;
    }
  }

  /* Clients Section - Home Page
------------------------------*/
  .clients {
    padding: 10px 0;
  }

  .clients .client-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .clients .client-logo img {
    padding: 40px;
    max-width: 80%;
    transition: 0.3s;
    opacity: 0.5;
    filter: grayscale(100);
  }

  .clients .client-logo img:hover {
    filter: none;
    opacity: 1;
  }

  @media (max-width: 640px) {
    .clients .client-logo img {
      padding: 20px;
    }
  }
  #teamA,#teamB{
    width: 50%;
    border-radius: 50%;
    overflow: hidden;
  }
  .radius{
    border-radius: 50%;
  } 
  </style>

  <main id="main">
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">
      <img id="VSimage" class="w-100" src="<?= APP_URL ?>asset/img/RectangleVS.svg" alt="" data-aos="fade-in">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 d-flex flex-column align-items-center">
            <div id="teamA">
              <img class="w-100" src="<?= APP_URL ?>asset/uploads/Flag_of_Morocco.svg.png" alt="">
            </div>
            <h2 data-aos="fade-up" data-aos-delay="100">MAROC</h2>
          </div>
          <div class="col-lg-6 d-flex flex-column align-items-center">
            <div id="teamB">
              <img class="w-100" src="<?= APP_URL ?>asset/uploads/Flag_of_the_Democratic_Republic_of_the_Congo.svg" alt="">
            </div>
            <h2 data-aos="fade-up" data-aos-delay="100">Cogejdoi</h2>
          </div>
        </div>
      </div>
    </section><!-- End Hero Section -->
  </main>