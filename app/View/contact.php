<section class="h-100 gradient-form" style="background-color: #064534;">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-xl-10 ">
        <div class="card rounded-4 text-black border-0">
          <div class="row g-0 px-5 py-4 rounded-4" style="background-color: #FF7900;">
            <div class="col-lg-6 ">
              <div class="card-body ">
                <div class="text_log text-center">
                  <h1>CONTACT-US</h1>
                </div>
                <div class="card px-5 py-4">
                  <div class="text_log text-center">
                    <h4>Leave us a message</h4>
                  </div>

                  <form action="<?=APP_URL?>contact/sendMailer" method="post">
                    <div class="mb-3">
                      <input type="text" name="username" class="form-control p-2 " id="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                      <input type="text" name="subject" class="form-control p-2 " id="username" placeholder="subject">
                    </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control p-2" id="email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                      <textarea name="message" class="form-control " id="message" placeholder="Message" rows="3"></textarea>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button  class="btn-click btn-block fa-lg gradient-custom-2 mb-3 px-5 py-3" type="submit">Send</button>
                    </div>

                  </form>
                </div>


              </div>
            </div>

            <div class="info-contact col-lg-6  gradient-custom-2 fs-7">
              <p> Weekend UX B 37/3 Ground Floor Double StoryRamesh Nagar , Near Raja Garden Chowk.Delhi: 110015</p>
              <p>+212 655334422</p>
              <p id="email-entreprise">Stream@info.com.ng</p>
              <img src="public/asset/img/icones-socialmedia.svg" alt="sociale-media-icones" class="image-social-media w-50">
              <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d46033.41171344199!2d-8.509456194188056!3d32.24866898559128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1703675465322!5m2!1sen!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>