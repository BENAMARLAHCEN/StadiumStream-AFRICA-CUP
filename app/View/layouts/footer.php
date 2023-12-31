<footer class="footer">
  <div class="footer-top py-8">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-4">
          <img src="<?=APP_URL?>asset/img/logo.svg" alt="">
          <h5 class="text-white footer-title-01 fs-6">StadiumStream isn't just a ticketing website we're your trusted partner in making your event dreams a reality. </h5>
        </div>
        <div class="col-lg-8 pe-xxl-10">
          <div class="row gy-5">
            <div class="col-6 col-lg-4">
              <h5 class="text-white footer-title-02">A propos</h5>
              <ul class="list-unstyled footer-link-01 m-0">
                <li><a class="text-white text-opacity-75" href="#">About Us</a></li>
                <li><a class="text-white text-opacity-75" href="#">Blog</a></li>
                <li><a class="text-white text-opacity-75" href="#">Our ingredients</a></li>
                <li><a class="text-white text-opacity-75" href="#">Our resellers</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-4">
              <h5 class="text-white footer-title-02">About</h5>
              <ul class="list-unstyled footer-link-01 m-0">
                <li><a class="text-white text-opacity-75" href="#">Customer Service</a></li>
                <li><a class="text-white text-opacity-75" href="#">Privacy Policy</a></li>
                <li><a class="text-white text-opacity-75" href="#">Cookie Policy</a></li>
                <li><a class="text-white text-opacity-75" href="#">Terms &amp; Conditions</a></li>
                <li><a class="text-white text-opacity-75" href="#">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-4">
              <h5 class="text-white footer-title-02">Need Help?</h5>
              <ul class="list-unstyled footer-link-01 m-0">
                <li><a class="text-white text-opacity-75" href="#">Contact Us</a></li>
                <li><a class="text-white text-opacity-75" href="#">FAQs</a><span class="new">New</span></li>
                <li><a class="text-white text-opacity-75" href="#">Offers &amp; Kits</a></li>
                <li><a class="text-white text-opacity-75" href="#">Get the app</a></li>
                <li><a class="text-white text-opacity-75" href="#">Store locator</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom small py-3 border-top border-white border-opacity-10">
    <div class="container">
      <div class="row">
        <div >
          <p class="copyright m-0 text-white text-opacity-75 text-center">© 2022 copyright by <a class="text-reset" href="#">StadiumStream.com</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<style>
  .wrapper>* {
    flex: 0 0 auto;
  }

  .footer {
    background-color: #004930;
  }

  a {
    text-decoration: none;
    background-color: transparent;
  }

  .py-8 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }

  .footer-link-01 li+li {
    padding-top: 0.8rem;
  }

  .footer-title-01 {
    font-size: 8px;
    margin: 0 0 20px;
    font-weight: 300;
    padding-right: 3rem;
  }

  .footer-title-02 {
    font-size: 16px;
    margin: 0 0 20px;
    font-weight: 600
  }

  .footer-link-01 li+li {
    padding-top: .8rem
  }
  .new{
    background-color: #FF7900;
    border-radius: 45%;
    font-family: Roboto;
    color: #fff;
    padding: 0.1rem 0.3rem 0.1rem 0.3rem;
    font-size:small;
    margin-left: 0.5rem;
  }

  @media (max-width: 991.98px) {
    .footer-link-01 li+li {
      padding-top: .6rem
    }
  }

  .footer-link-01 a {
    position: relative;
    display: inline-block;
    vertical-align: top
  }

  .footer-link-01 a:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: auto;
    right: 0;
    width: 0;
    height: 1px;
    transition: ease all .35s;
    background: currentColor
  }

  .footer-link-01 a:hover:after {
    left: 0;
    right: auto;
    width: 100%
  }
</style>