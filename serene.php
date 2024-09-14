<!DOCTYPE html>
<html lang="en">

<head>
  <!-- The required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>serene conference</title>
  <link rel="stylesheet" href="./css/boostrap.min.css">
  <link rel="stylesheet" href="./css/boxicons.min.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://kit.fontawesome.com/5bebd170da.js" crossorigin="anonymous"></script>
  <!-- favicon -->
  <link rel="shortcut icon" href="./assets/icons/logo.jpeg" type="image/x-icon">
</head>

<body>
  <?php
  include("components/header.html");
  ?>
  <!-- GENERAL BANNER -->
  <div class="main-banner-wrapper">
    <div class="main-banner d-flex align-items-center bg-cover" id="serenity-banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="title-wrap">
              <h1 class="title display-3 text-capitalize text-white">Serenity conference</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SERENE CONFERENCE BODY -->
  <section id="conference-wrapper">
    <div class="conference-box-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-11 mx-auto mb-4">
            <div class="conference-box">
              <div class="card accom-box">
                <div class="card-img-box">
                    <img loading="lazy" src="./assets/captions/conference (14).jpg" alt="conference-venues-room" class="accom-img-top">
                </div>
                <div class="card-body accom-text">
                  <div class="title-wrap mt-3">
                    <h5 class="card-title title">Serenity conference</h5>
                  </div>
                  <div class="text-wrap body-text">
                    <p class="card-text">
                      Experience the Serenity Conference, a nurturing environment for personal and professional growth. Rooted in the principles of mindfulness and wellness, this conference offers a holistic approach to leadership development, team building, and organizational success.
                      Through immersive workshops, wellness activities, and expert-led sessions, participants will gain valuable insights, build resilience, and cultivate a culture of well-being that fosters growth and prosperity.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
include("components/footer.html");
?>