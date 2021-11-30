<!doctype html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Control and Precision Limited" />
  <title>Control and Precision Limited | Contact Us</title>
  <link href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="icon" href="assets/images/favicon.ico.png" />
</head>

<body>
  <!--header-->
  <?php include ("menu.php") ; ?>
  <!--/header-->
  <!--/inner-page-->

  <div class="inner-bannercb">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- /contact-section -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Contact Us</h6>
        <h3 class="title-w3l mt-2">Get In Touch With Us</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
        <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        
      <h3 class="title-w3l mt-2">Address:</h3>

            <p class="mt-md-4 mt-3">7A Omosinde Agbaje, off John Okafor Street, Agungi Road, Lekki. <br>15 Ganiyu Olorun-Rinu Close, Ogudu G.R.A.</p>
            <h3 class="title-w3l mt-2">Phone:</h3>
            <p class="mt-md-4 mt-3">+234 811 605 3260, <br>+234 805 421 3484</p>
            <h3 class="title-w3l mt-2">Email:</h3>
            <p class="mt-md-4 mt-3">conprislimited@gmail.com</p>

             
           
          
      </div>
    </div>
  </section>
        </div>
        <div class="contact-right">
          <form action="proc-contact.php" method="post" class="signin-form">
          <?php if($msg)
          {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
          }
          ?>
            <div class="input-grids">

              <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="subect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="map-iframe mt-5 mb-lg-5 pb-lg-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3964.5697928079207!2d3.5167644!3d6.4492378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf6929c7cb75d%3A0xf9453e6d1a1ed380!2sAgungi%20Ajiran%20Rd%20%26%20John%20Okafor%20St%2C%20Lekki%20Penninsula%20II%2C%20Lekki!5e0!3m2!1sen!2sng!4v1622042141406!5m2!1sen!2sng"
          width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
  
  <!-- //contact-section -->
  <!-- footer-28 block -->
  <?php include ("footer.php") ; ?>


    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    <!-- //footer-28 block -->
  </footer>

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>