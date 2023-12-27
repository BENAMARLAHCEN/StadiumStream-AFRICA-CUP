    <style>
        --------------------------------------------------------------*/
/* Hero Section - Home Page
------------------------------*/
.hero {
    z-index: 1;
  --default-color: #ffffff;
  --default-color-rgb: 255, 255, 255;
  --background-color: #000000;
  --background-color-rgb: 0, 0, 0;
  width: 100%;
  min-height: 100vh;
  position: relative;
  padding: 160px 0 80px 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero #backVS {
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



@media (max-width: 768px) {
  .hero h2 {
    font-size: 32px;
  }

  .hero p {
    font-size: 18px;
  }
}

    </style>
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img id="backVS" class="w-100" src="<?= APP_URL ?>asset/img/RectangleVS.svg" alt="" data-aos="fade-in">

        <div class="container ">
            <div class="d-flex">
                <div>
                    <img src="asset/uploads/Flag_of_Morocco.svg.png" alt="">
                </div>
                <div>

                </div>
            </div>
        </div>

    </section>
    <section>
        jjh
    </section>
    <!-- End Hero Section -->