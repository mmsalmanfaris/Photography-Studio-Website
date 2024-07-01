
<?php
  include_once './header.php';
?>


  <main>
    <div class="container py-5 my-5">
      <div class="row g-5">
        <!-- Contact Information Block -->
        <div class="col-xl-6">
          <div class=" mt-2 aos-item" data-aos="fade-up" data-aos-delay="800">
            <div class="w-100 h-100 aos-item__inner">
              <iframe class="hvr-shadow" width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
            </div>
          </div>
        </div>

        <!-- Contact Form Block -->
        <div class="col-xl-6">
          <h2 class="pb-4">Leave a message</h2>
          <div class="row g-4">
            <div class="col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Fname</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
            </div>
            <div class="col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Lname</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="94 76 175 4242">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Province</label>
            <select class="form-select" aria-label="Default select example">
              <option value="1">Central</option>
              <option value="2">Eastern</option>
              <option value="3">North Central</option>
              <option value="4">Souther USA</option>
              <option value="5">Nothern</option>
              <option value="6">North Western</option>
              <option value="7">Sabragamuwa</option>
              <option value="8">Southern</option>
              <option value="9">Uva</option>
              <option value="10">Wester</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="button" class="btn btn-primary">Send Message</button>
        </div>
      </div>
    </div>
  </main>


<?php
    include './footer.php';
?>
