<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seiko || Home</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="resources/logo.png">
</head>

<body class="home-body">
  <div class="container-fluid">
    <div class="row">
      <?php
      include "header.php";
      ?>
      <div class="main__img">
        <div class="japanese__girl">
          <img src="resources/japan__girl.png">
        </div>

        <div class="background__ribbon">

        </div>

        <div class="WT">
          <h2>Welcome to</h2>
          <h1>Seiko Japanese Academy</h1>
        </div>

      </div>


      <div class="col-12  classes">
        <div class="class__title">
        <h1>CLASSES</h1>
        </div>
        <div class="row">
          <div class="slider-container">
            <div class="slider-images">
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="1" />
                <h1>1 to 5</h1>
                <div class="details">
                  <h2>1 to 5</h2>
                  <p>web3 Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="2" />
                <h1>6 to 9</h1>
                <div class="details">
                  <h2>6 to 9</h2>
                  <p>wordpress Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="3" />
                <h1>o/ls</h1>
                <div class="details">
                  <h2>o/ls</h2>
                  <p>java Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img active button1" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="4" />
                <h1>a/ls</h1>
                <div class="details">
                  <h2>a/ls</h2>
                  <p>web Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="5" />
                <h1>jlpt</h1>
                <div class="details">
                  <h2>jlpt</h2>
                  <p>php Developer</p>
                  <div class="class__see__all">
                    <a href="">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="6" />
                <h1>Spoken</h1>
                <div class="details">
                  <h2>Spoken</h2>
                  <p>seo Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
              <div class="slider-img" onclick="showButton__cardSlide(this);">
                <img src="resources/Image__Slider/1.png" alt="7" />
                <h1>coureses</h1>
                <div class="details">
                  <h2>coureses</h2>
                  <p>sql Developer</p>
                  <div class="class__see__all">
                    <a href="#">
                      See All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="about__sensei">
        <div class="container__about">
          <div class="content__section">
            <div class="about__title">
              <h1 class="font1">About Sensei</h1>
            </div>
            <div class="about__content">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloremque magni eos, labore suscipit cumque dignissimos non quos qui aspernatur vitae adipisci,
                ipsa aut voluptas asperiores, in nesciunt velit! Aperiam, eos!
                ab aliquam eligendi magni. Alias cum consequuntur illo dolores nobis, temporibus corporis!
                Optio explicabo vero aperiam repellat corporis asperiores vitae saepe unde!
              </p>
              <div class="about__readmore">
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="social__about">
              <a href=""><i class="fa fa-facebook-f"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-whatsapp"></i></a>
            </div>
          </div>
          <div class="img__section">
            <img class="sensei__img" src="resources/sensei.png">
          </div>
        </div>

      </div>

      <?php
      include "footer.php";
      ?>
    </div>
  </div>



  <script src="js/jQuery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/script.js" defer></script>
</body>

</html>