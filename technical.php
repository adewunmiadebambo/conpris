<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Control and Precision Limited" />
  <title>Control and Precision Limited | Technical Training and Labour Supply</title>
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

  <div class="inner-bannertc">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Technical Training and Labour Supply</li>
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
            <h3 class="title-w3l mt-2">Technical Training and Labour Supply</h3>

            <p class="mt-md-4 mt-3">CONPRIS Limited in conjunction with our technical partners provides modern technical training and technical labor supply. Our technical training technique and methods are very practical and easy to understand. Leveraging our many years of international and local experience and exposure,experience and exposure, our understanding of electrical and electronics systems and modern technology is compared to none because we do not only understand the theory behind a lot of the technical concepts that we teach, we also understand the practical aspects.<br><br>

We have developed a very unique, modern and relatable training program that ensures that we provide technical training that is very relevant to the modern Electrical / Electronics / Instrumentation and Automation systems world. This makes it easy for our students to easily understand how multiple Electrical / Electronic instruments, devices and equipment integrate and work together in a simple or robust domestic or industrial process automation system.<br><br>

We currently offer training in the following courses:<br><br>

1.	Basic PLC - Programming, Troubleshooting and Maintenance <br>
2.	Instrumentation and Control in Process Plants<br>
3.	Calibration and Maintenance of Process instruments <br>
4.	Troubleshooting and Repairs of Industrial Electronics equipment systems<br>
5.	Design and Installations of Electrical systems<br>
6.	Industrial Motor Controls: Operation, Troubleshooting and Maintenance<br>

Finally, we supply very well trained and competent Electricians, Electrical and Electronics Technicians, Instrumentation Technicians, Hydraulic Technicians, Mechanical Technicians that have gone through several theoretical and practical competency tests and certifications to ensure that they deliver quality jobs and services to clients. <br><br>

Our technical team is well trained in technical safety, recognising and mitigating hazards in multiple work environments. They understand how to carry out a detailed Job safety Analysis before carrying out any task and they have been trained in the importance of PPE and raising a Permit to Work and Energy Isolation in the workplace prior to commencing any technical task.<br><br>

We guarantee safe and efficient work delivery from all members of the CONPRIS team as we strive to always deliver on the CONPRIS CARES (Creative, Affordable, Reliable, Efficient and Smart) solutions and the CONPRIS promise of quality.<br><br></p>
             
            </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img src="assets/images/tecn.jpg" alt="" class="radius-image img-fluid">
            </div>
            
          </div>
          <!-- <div class="row">
              <div class="col-md-4">
              <img src="assets/images/b1.jpg" alt="" class="radius-image img-fluid">
            
              </div>
              <div class="col-md-4">
              <img src="assets/images/b1.jpg" alt="" class="radius-image img-fluid">
            
              </div>
              <div class="col-md-4">
              <img src="assets/images/b1.jpg" alt="" class="radius-image img-fluid">
            
              </div> -->
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