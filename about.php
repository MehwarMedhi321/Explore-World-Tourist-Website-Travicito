<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from preview.colorlib.com/theme/travelo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2024 09:59:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travicito</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/styleTwo.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="contact-section">
    <button id="contactUsButton" class="contact-btn">
      <i class="fas fa-envelope" style="font-size: 2.5vw; color: white;"></i>
   </button>
    <button id="whatsappButton" class="contact-btn">
      <i class="fab fa-whatsapp" style="font-size: 3vw; color: white;" ></i> 
    </button>
    <button id="instagramButton" class="contact-btn">
        <a href="https://www.instagram.com/itstravicito/?igsh=dGltb3EwOWR1MHl2" style="color: white;"> <i class="fab fa-instagram" style="font-size: 3vw;"></i> </a>
     
    </button>
  </div>
  
  <!-- Form Modal -->
  <div id="contactFormModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" id="closeBtn">&times;</span>
      <h2>Contact Us</h2>
      <?php include 'sendform.php'; ?>
    </div>
  </div>
  
  <!-- Include Font Awesome CDN for Icons -->

              
  <script>
  // Modal and form logic
const contactUsButton = document.getElementById('contactUsButton');
const contactFormModal = document.getElementById('contactFormModal');
const closeBtn = document.getElementById('closeBtn');
const contactForm = document.getElementById('contactForm');

// Open contact form when "Contact Us" button is clicked
contactUsButton.addEventListener('click', () => {
  contactFormModal.style.display = 'block';
});

// Close modal when the close button is clicked
closeBtn.addEventListener('click', () => {
  contactFormModal.style.display = 'none';
});

// Close modal if clicked outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === contactFormModal) {
    contactFormModal.style.display = 'none';
  }
});

// Form submission logic
contactForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent the default form submission behavior

  // Gather form data
  const formData = new FormData(contactForm);

  // Send form data using Fetch API (AJAX) to avoid page reload during submission
  fetch(window.location.href, {
    method: 'POST',
    body: formData
  })
  .then(response => response.text()) // Get the response from the server
  .then(response => {
    if (response.includes('Form submitted successfully!')) {
      // If form is successfully submitted, hide the modal and reload the page
      contactFormModal.style.display = 'none'; // Close the modal
      location.reload(); // Reload the page
    } else {
      alert('Error: ' + response); // Show any error messages from the server
    }
  })
  .catch(error => {
    console.error('Error submitting form:', error);
  });
});

</script> 
    <!-- header-start -->
    <header class="header">
        <div class="logo">
            <img src="img/logo.png" width="60vw" alt="Logo">
        </div>
    
        <!-- Desktop Menu -->
        <ul class="menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="#">Holiday Package &nbsp;<i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Honeymoon Trip</a></li>
                    <li><a href="#">Group Trip</a></li>
                    <li><a href="#">Adventure Trip</a></li>
                    <li><a href="#">Family Trip</a></li>
                    <li><a href="#">Solo Trip</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Our Services &nbsp;<i class="fa fa-chevron-down"></i></a>
                <ul>
                                    <li><a href="flight.php">Flights</a></li>
                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="#">Transfers</a></li>
                <li><a href="#">Sightseeing</a></li>
                <li><a href="#">Cruise</a></li>
                <li><a href="visa.php">Visa</a></li>
                            <li><a href="travelinsurance.php">Travel Insurance</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Domestic Packages &nbsp;<i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Kashmir</a></li>
                    <li><a href="#">Goa</a></li>
                    <li><a href="#">Uttarakhand</a></li>
                    <li><a href="#">Kerala</a></li>
                    <li><a href="#">Himachal Pradesh</a></li>
                    <li><a href="#">Rajasthan</a></li>
                    <li><a href="#">Andaman</a></li>
                    <li><a href="#">Northeast</a></li>
                </ul>
            </li>
            <li>
                <a href="#">International Packages &nbsp;<i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Thailand</a></li>
                    <li><a href="#">Singapore</a></li>
                    <li><a href="#">Bali</a></li>
                    <li><a href="#">Dubai</a></li>
                    <li><a href="#">Baku</a></li>
                    <li><a href="#">Malaysia</a></li>
                    <li><a href="#">Vietnam</a></li>
                    <li><a href="#">Almaty</a></li>
                    <li><a href="#">Nepal</a></li>
                    <li><a href="#">Bhutan</a></li>
                    <li><a href="#">Sri Lanka</a></li>
                </ul>
            </li>
       
         
        </ul>
    
        <!-- Burger Icon -->
        <div class="burger" id="burger-icon">
            <i class="fa fa-bars"></i>
        </div>
    
        <!-- Mobile Menu -->
        <ul class="mobile-menu" id="mobile-menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="#">Holiday Package <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Honeymoon Trip</a></li>
                    <li><a href="#">Group Trip</a></li>
                    <li><a href="#">Adventure Trip</a></li>
                    <li><a href="#">Family Trip</a></li>
                    <li><a href="#">Solo Trip</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Our Services <i class="fa fa-chevron-down"></i></a>
                <ul>
                               <li><a href="flight.php">Flights</a></li>
                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="#">Transfers</a></li>
                <li><a href="#">Sightseeing</a></li>
                <li><a href="#">Cruise</a></li>
                <li><a href="visa.php">Visa</a></li>
                            <li><a href="travelinsurance.php">Travel Insurance</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Domestic Packages <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Kashmir</a></li>
                    <li><a href="#">Goa</a></li>
                    <li><a href="#">Uttarakhand</a></li>
                    <li><a href="#">Kerala</a></li>
                    <li><a href="#">Himachal Pradesh</a></li>
                    <li><a href="#">Rajasthan</a></li>
                    <li><a href="#">Andaman</a></li>
                    <li><a href="#">Northeast</a></li>
                </ul>
            </li>
            <li>
                <a href="#">International Packages <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Thailand</a></li>
                    <li><a href="#">Singapore</a></li>
                    <li><a href="#">Bali</a></li>
                    <li><a href="#">Dubai</a></li>
                    <li><a href="#">Baku</a></li>
                    <li><a href="#">Malaysia</a></li>
                    <li><a href="#">Vietnam</a></li>
                    <li><a href="#">Almaty</a></li>
                    <li><a href="#">Nepal</a></li>
                    <li><a href="#">Bhutan</a></li>
                    <li><a href="#">Sri Lanka</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="#">Contact Us <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Contact No.</a></li>
                    <li><a href="#">Email ID</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </li> -->
          
        </ul>
    </header>
    
    <!-- JavaScript for Burger and Mobile Menu -->
    <script>
        const burgerIcon = document.getElementById('burger-icon');
        const mobileMenu = document.getElementById('mobile-menu');
    
        // Toggle full mobile menu
        burgerIcon.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });
    
        // Toggle sub-menus
        document.querySelectorAll('.mobile-menu > li > a').forEach(item => {
            item.addEventListener('click', (e) => {
                const parentLi = item.parentElement;
                if (parentLi.querySelector('ul')) {
                    e.preventDefault();
                    parentLi.classList.toggle('active');
                }
            });
        });
    </script>
    <!-- header-end -->

<!-- Bradcam Area -->
<div class="bradcam_area bradcam_bg_3 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    
                    <h3>About Us</h3>
                    <p>Pixel perfect design with awesome contents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Bradcam Area -->

<!-- About Us Section Start -->

<div class="about_us_section"  style="margin-top: 30px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb_70">
                    <h3><i class="fa fa-info-circle"></i> About Us</h3>
                    <p>Welcome to Travicito Pvt. Ltd., your trusted travel partner for unforgettable journeys! We are a passionate team of travel experts who believe that every trip is an opportunity for discovery, adventure, and lasting memories. Our goal is to make travel easier, more accessible, and tailored to your unique desires.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4><i class="fa fa-history"></i> Our Story</h4>
                <p>Founded with a shared love for exploration and cultural connection, Travicito has grown from a small travel agency to a trusted brand known for creating extraordinary travel experiences. Whether you’re planning a relaxing getaway, an adventurous trek, or an immersive cultural tour, we take pride in designing each journey with care and expertise.</p>
            </div>
            <div class="col-lg-12">
                <h4><i class="fa fa-bullseye"></i> Our Mission</h4>
                <p>At Travicito, we are committed to crafting personalized travel experiences that not only take you to amazing destinations but also enrich your life. We focus on providing seamless, unforgettable experiences that allow you to immerse yourself fully in new cultures, landscapes, and adventures. Your journey is our priority, and we’re here to guide you every step of the way.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4><i class="fa fa-cogs"></i> What We Do</h4>
                <ul>
                    <li><strong>Custom Travel Itineraries:</strong> Whether you're looking for a luxury escape, a family vacation, or a solo adventure, we design customized trips that meet your preferences, needs, and budget.</li>
                    <li><strong>Group Tours & Packages:</strong> Explore the world with like-minded travelers through our expertly guided group tours. From local tours to global expeditions, we handle all the details for you.</li>
                    <li><strong>Specialty Travel:</strong> From eco-tourism to wellness retreats, culinary tours, and adventure travel, we offer a range of specialty services that cater to diverse interests and passions.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->

<!-- Our Story Section Start -->
<div class="about_story">
    
    <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb_70">
                    <h3><i class="fa fa-book"></i>Our Story</h3>
                    <p>Consulting represents success at realizing the company is going in the wrong direction. The only time the company fails is when it is not possible to do a turnaround anymore. We help companies pivot into more profitable directions where they can expand and grow. It is inevitable that companies will end up making a few mistakes; we help them correct these mistakes.</p>
                </div>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-lg-12">-->
        <!--        <div class="story_heading">-->
        <!--            <h3><i class="fa fa-book"></i> Our Story</h3>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-11 offset-lg-1">-->
        <!--                <div class="story_info">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-lg-9">-->
        <!--                            <p>Consulting represents success at realizing the company is going in the wrong direction. The only time the company fails is when it is not possible to do a turnaround anymore. We help companies pivot into more profitable directions where they can expand and grow. It is inevitable that companies will end up making a few mistakes; we help them correct these mistakes.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="story_thumb">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-lg-5 col-md-6">-->
        <!--                            <div class="thumb padd_1">-->
        <!--                                <img src="img/about/1.png" alt="">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-6 col-md-6">-->
        <!--                            <div class="thumb">-->
        <!--                                <img src="img/about/2.png" alt="">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="counter_wrap">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-lg-4 col-md-4">-->
        <!--                            <div class="single_counter text-center">-->
        <!--                                <h3 class="counter">378</h3>-->
        <!--                                <p>Tour has done successfully</p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-md-4">-->
        <!--                            <div class="single_counter text-center">-->
        <!--                                <h3 class="counter">30</h3>-->
        <!--                                <p>Yearly tours arranged</p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-md-4">-->
        <!--                            <div class="single_counter text-center">-->
        <!--                                <h3 class="counter">2263</h3>-->
        <!--                                <p>Happy Clients</p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<!-- Our Story Section End -->
 
<div class="video_area video_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video_wrap text-center">
                    <h3>Enjoy Video</h3>
                    <div class="video_icon">
                        <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=vNQR3ixE8AE">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us Section Start -->
<!-- Contact Us Section Start -->
<div class="contact_us_section" style="margin-top: 20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb_70">
                    <h3><i class="fa fa-phone"></i> Contact Us</h3>
                    <p>We’d love to hear from you! Whether you’re ready to book your next adventure or just need more information, our team is here to help. Reach out to us and let’s plan your perfect journey!</p>
                </div>
                
                <!-- Add Button -->
                <div class="text-center">
                    <a href="contact.php" class="boxed-btn3">Touch us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- Contact Us Section End -->

<!-- Contact Us Section End -->


   





<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                          
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" width="90vw" alt="">
                                </a>
                                <br>
                              
                            </div>
                                    <h3 class="footer_title" >
                                Contact us
                            </h3>
                            <p>B-6, Sector-4, Noida,   UP-201301 <br>
                              
                                <a href="#"><span class="_cf_email_" data-cfemail="593a36372d383a2d193a382b293c372d3c2b773a3634">[ Travicitopvt@gmail.com ]</span></a>
                            </p>
                             <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/itstravicito/?igsh=dGltb3EwOWR1MHl2" > <i class="fab fa-instagram" ></i> </a>
  
                                    </li>
                                    <li>
                                        <a href="mailto:travicitopvt@gmail.com">
                                            <i class="fas fa-envelope" ></i>
                                          </a>
                                          
                                    </li>
                              
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                            <li><a href="#">Pricing</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                

 

                                


                                <li><a href="#">Thailand</a></li>
                                <li><a href="#">Bali</a></li>
                                <li><a href="#">Singapore</a></li>
                                <li><a href="#">Vietnam</a></li>
                                <li><a href="#">Malaysia</a></li>
                                <li><a href="#">Dubai</a></li>
                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> travicito ,All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://colorlib.com/" target="_blank">travicito</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d47ac659aab5971","version":"2024.10.1","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preview.colorlib.com/theme/travelo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2024 09:59:55 GMT -->
</html>