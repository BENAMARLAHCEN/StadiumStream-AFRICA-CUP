<section class="h-100 gradient-form" style="background-color: #064534;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-4 text-black border-0">
          <div class="row g-0 px-5 py-4 rounded-4" style="background-color: #FF7900;">
            <div class="col-lg-6 " >
              <div class="card-body " >
                <div class="card px-4 py-4">
                <div class="text_log text-center">
                  <h1>SIGN-UP</h1>
                  <h4 class="mt-1 mb-5 pb-1">Sign-Up for free !</h4>
                </div>

                <form method="post" action="<?=APP_URL?>Auth/registration">

                <div class="mb-3">
                      <input type="usename" name="fullname" class="form-control p-2 " id="username" placeholder="Enter ur FullName">
                  </div>

                  <div class="mb-3">
                      <input type="email" name="email" class="form-control p-2" id="email" placeholder="enter ur email">
                  </div>

                  <div class="mb-3">
                      <input type="password" name="password" class="form-control p-2" id="password" placeholder="enter ur password">
                  </div>

                  <div class="mb-3">
                      <input type="password" name="cpassword" class="form-control p-2" id="confirmPassword" placeholder=" confirm ur Password">
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn-click btn-block fa-lg gradient-custom-2 mb-3 px-5 py-3" type="submit" name="submit" value="regester">Sign-Up</button>
                  </div>




                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a href="<?=APP_URL?>Auth/login" class="btn btn-outline-danger" >Login </a>
                  </div>

                </form>
              </div>


              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <img class="w-100" src="<?=APP_URL?>asset/img/portrait-african-child-with-football-ball 1.svg" alt="portrait-african-child-with-football-ball">
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>