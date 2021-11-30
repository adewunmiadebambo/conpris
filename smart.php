<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Control and Precision Limited" />
  <title>Control and Precision Limited | Smart Home Automation</title>
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

  <div class="inner-bannersm">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Smart Home Automation</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- about page about section -->
  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4 align-self">
            <!-- <h6 class="title-subhny">Power Solution</h6> -->
            <h3 class="title-w3l mt-2">Smart Home Automation</h3>

            <p class="mt-md-4 mt-3">A smart home system is an advanced home automation system that allows homeowners to control and monitor appliances / devices in their homes locally or remotely from smart mobile devices such as Mobile phones, tablets, smart watches and computers. <br><br>

Examples of some of the devices that can be controlled and monitored in a smart home system are thermostats for climate control, lighting, multimedia devices (televisions, home theater system with surround sound) , curtains / windows, doors, refrigerators etc. <br><br>

Modern smart home systems can be configured to inform you who enters your residence by sending “push” notifications to your mobile device. The control and monitoring systems offered by a smart home system creates benefits such as low energy consumption which in turn results in cost savings. A smart home system intelligently creates an optimised, secure, environment inside your home. <br><br>

Our team of experts will design and conceptualize a custom smart home system for your smart home or office. We also procure, install and service multi brand smart home system electronic parts such as:</p>
             
            </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img src="assets/images/smart.png" alt="" class="radius-image img-fluid">
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        
            <span class="title-subhny mb-2">Computer System and Electronic Gadgets </span> 

            <p class="mt-md-4 mt-3">Our computer systems and electronic gadgets department deals with supplying quality and reliable multi brand smart phones, tablets, computer systems and accessories for personal and office use. <br><br>Some of the products we sell and service are:<br><br>

1.	Apple Macbook/ iPad / iPhone / watch / airpods and accessories<br>
2.	Samsung and other multi brand android OS Tablets, phones, smart watches<br>
3.	Lenovo / Dell/ HP and other multi brand Windows OS Laptops and tablets<br>
4.	Network routers and switches e.g Cisco routers and switches, Linksys, D-link etc<br>
5.	Servers e.g Dell, HP, Lenovo servers<br>
6.	Printers and scanners.<br>
7.	Portable and foldable Solar panel Mobile and Laptop chargers<br>
8.	Solar backpacks<br><br>

We are able to supply all the above items and more in small, medium or large quantities for your personal and corporate needs. All our products are covered by the CONPRIS promise of quality.</p>

            <div class="row">
              <div class="col-md-4">
              <img src="assets/images/smart1.png" alt="" class="radius-image img-fluid"> <br><br>
              <p class="text-center">Smart Robot Automatic <br> Windows and floor cleaners</p>
            
              </div>
              <div class="col-md-4">
              <img src="assets/images/smart3.png" alt="" class="radius-image img-fluid"> <br><br>
              <p class="text-center">Smart Refrigerators</p>
            
              </div>
              <div class="col-md-4">
              <img src="assets/images/smart2.png" alt="" class="radius-image img-fluid"> <br><br>
              <p class="text-center">Smart Heating Ventilation <br> and Air Conditioning (HVAC) control system</p>
            
              </div>
            </div>
          
      </div>
    </div>
  </section>

  
 
  
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