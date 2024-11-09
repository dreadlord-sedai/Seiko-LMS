<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/contact.css">
  <title>Contact Us | Seiko</title>
</head>

<body>
    <?php
      include "header.php";
    ?>
  <section class="maps">
    <div class="map-header">
      <h1>Our Location</h1>
    </div>
    <div class="google-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7400988567556!2d79.91884597408259!3d6.80144031987293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24ff6504d7ab9%3A0xba8bd2f611110319!2zQmFuayBvZiBDZXlsb24gLSBQaWxpeWFuZGFsYSAtIOC2veC2guC2muC3jyDgtrbgt5DgtoLgtprgt5Tgt4Ag4La04LeS4LeF4LeS4La64Lax4LeK4Lav4La9!5e0!3m2!1sen!2slk!4v1728282355551!5m2!1sen!2slk"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="info">
    <div class="address">
      <span>
        <i class="fa-solid fa-location-dot"></i>
        58 Moratuwa - Piliyandala Rd, Piliyandala
      </span>
      <span>
        <i class="fa-solid fa-phone"></i>
        071 123 4567
      </span>
    </div>
    <br>
    <div class="digi-info">
      <span>
        <i class="fa-solid fa-user"></i>
        Mrs. Buddhi SUMTING
      </span>
      <span>
        <i class="fa-solid fa-envelope"></i>
        sum@email.com
      </span>
    </div>
  </section>
  <hr>
  <section class="message mt-5">
    <div class="message-header mb-5">
      <h1>Write us a Message!</h1>
    </div>

    <div class="content">
      <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
          <div class="col-md-12">
            <div class="form h-100">
              <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                <div class="row">

                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">First Name</label>
                    <input type="text" class="form-control w-100" name="name" id="fname" placeholder="Hirusha">
                  </div>

                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control w-100" name="name" id="lname" placeholder="Jayawardena">
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="" class="col-form-label">Email</label>
                    <input type="email" class="form-control w-100" name="email" id="email" placeholder="example@gmail.com">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="message" class="col-form-label">Message</label>
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="submit" value="Send Message" class="w-100 btn btn-primary rounded-2 py-2 px-4">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <?php
      include "footer.php";
  ?>
</body>
<script src="js/script.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/eea5ddc168.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>

</html>