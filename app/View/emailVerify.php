
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?=APP_URL?>asset/img/SStream.svg" alt="">
                  <!-- <span class="d-none d-lg-block">Stadium Stream</span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Verfy Your Email</h5>
                    <p class="text-center small">Enter the verification Code We Sent To Your Email. </p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action='<?=APP_URL?>Auth/verfyEmailRegistre'>

                    <div class="col-12">
                      <label style='font-weight: bold;' class="form-label">CODE VERFY : </label>
                      <input type="text" name="verfyEmail" class="form-control"  required>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" name='submit'value='verfyEmailRegistre' type="submit">Verfy</button>
                    </div>
                  </form>

                </div>
              </div>

        

            </div>
          </div>
        </div>

      </section>

    </div>
 
