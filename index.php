<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from preview.colorlib.com/theme/travelo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2024 09:58:55 GMT -->
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
    <link rel="stylesheet" href="script.js">
    <!-- Link to Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Instagram Icon -->


    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
</head>
<body>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min5829.js?ver=3.15.1" id="pro-elements-handlers-js"></script>
            <!-- Sticky Sidebar Section -->
   
 
              
                <!-- Main section with buttons -->
     <!-- Contact Section -->
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
        
<header class="header">
    <div class="logo">
        <img src="img/logo.png" width="60vw" alt="Logo">
    </div>

    <!-- Desktop Menu -->
    <ul class="menu">
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
                <li><a href="cruise.php">Cruise</a></li>
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
            <ul class="international-packages">
                <li><a href="#">Thailand</a></li>
                <li><a href="#">Singapore</a></li>
                <li><a href="#">Bali</a></li>
                <li><a href="#">Dubai</a></li>
                <li ><a href="#">Baku</a></li>
                <li class="extra-item"><a href="#">Malaysia</a></li>
                <li class="extra-item"><a href="#">Vietnam</a></li>
                <li class="extra-item"><a href="#">Almaty</a></li>
                <li class="extra-item"><a href="#">Nepal</a></li>
                <li class="extra-item"><a href="#">Bhutan</a></li>
                <li class="extra-item"><a href="#">Sri Lanka</a></li>
                <li class="show-more"><a href="javascript:void(0);" onclick="showMore()" style="text-decoration: underline;">Show More</a></li>
                
            </ul>
        </li>
        
        <script>
        // JavaScript to toggle "Show More"
        function showMore() {
            var extraItems = document.querySelectorAll('.extra-item');
            var showMoreLink = document.querySelector('.show-more');
            
            // Show all the extra items
            extraItems.forEach(function(item) {
                item.style.display = 'block';
            });
            
            // Hide the "Show More" link after showing more items
            showMoreLink.style.display = 'none';
        }
        
        // Initially, show only 4 items (hide the rest)
        document.addEventListener("DOMContentLoaded", function() {
            var allItems = document.querySelectorAll('.extra-item');
            
            // Hide all items except the first 4
            for (var i = 4; i < allItems.length; i++) {
                allItems[i].style.display = 'none';
            }
        });
        </script>

        
        <!-- <li>
            <a href="contact.html">Contact Us &nbsp;</a>
         
        </li> -->
        <li>
            <a href="about.php">About Us</a>
        </li>
    </ul>

    <!-- Burger Icon -->
    <div class="burger" id="burger-icon">
        <i class="fa fa-bars"></i>
    </div>

    <!-- Mobile Menu -->
    <ul class="mobile-menu" id="mobile-menu">
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
               <li><a href="cruise.php">Cruise</a></li>
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
       
        <li>
            <a href="about.php">About Us</a>
        </li>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Singapore</h3>
                                <p>Pixel perfect design with awesome contents</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Thailand</h3>
                                <p>Pixel perfect design with awesome contents</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Malaysia</h3>
                                <p>Pixel perfect design with awesome contents</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- popular_destination_area_start  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Places</h3>
                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Package 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                               <a href="ThailandHotel.php" > <img src="img/place/11.png" alt=""></a>
                          
                            <a href="ThailandHotel.php" class="prise" >₹ 29900</a>
                        </div>
                        <div class="place_info">
                            <a href="ThailandHotel.php" class="prise" ><h3>Thailand</h3></a>
                            <p>Country in Southeast Asia</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="ThailandHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="ThailandHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Package 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                                        <a href="BaliHotel.php" > <img src="img/place/22.png" alt=""></a>
                                        <a href="BaliHotel.php" class="prise">₹ 29,999</a>
                        </div>
                        <div class="place_info">
                            <a href="BaliHotel.php" class="prise"><h3>Bali</h3></a>
                            <p>Island in Indonesia</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="BaliHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="BaliHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Package 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                             <a href="SingaporeHotel.php" > <img src="img/place/33.png" alt=""></a>
                            
                            <a href="SingaporeHotel.php" class="prise" >₹ 45,500</a>
                        </div>
                        <div class="place_info">
                            <a href="SingaporeHotel.php" class="prise" ><h3>Singapore</h3></a>
                 
                            <p>City-state in Southeast Asia</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="SingaporeHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="SingaporeHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Package 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                              <a href="VietnamHotel.php" > <img src="img/place/44.png" alt=""></a>
                        
                            <a href="VietnamHotel.php" class="prise" >₹ 30,000</a>
                        </div>
                        <div class="place_info">
                            <a href="VietnamHotel.php" class="prise" ><h3>Vietnam</h3></a>
                   
                         
                            <p>Country in Southeast Asia</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="VietnamHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="VietnamHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Package 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                                <a href="MalaysiaHotel.php" > <img src="img/place/55.png" alt=""></a>
                            
                            <a href="MalaysiaHotel.php" class="prise" >₹ 25,000</a>
                        </div>
                        <div class="place_info">
                            <a href="MalaysiaHotel.php" class="prise" ><h3>Malaysia</h3></a>
                
                        
                            <p>Island nation in the Indian Ocean</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="MalaysiaHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="MalaysiaHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Package 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                                   <a href="DubaiHotel.php" > <img src="img/place/66.png" alt=""></a>
                           
                            <a href="DubaiHotel.php" class="prise" >₹ 28,500</a>
                        </div>
                        <div class="place_info">
                            <a href="DubaiHotel.php" class="prise"><h3>Dubai</h3></a>
                 
                        
                            <p>City in the United Arab Emirates</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <a href="DubaiHotel.php">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="DubaiHotel.php">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- why choose us -->
          
    <div class="ourAcheivement">
        <div class="container">
            <div class="row" style="display:flex;flex-wrap:wrap;align-items:center;">
                <div class="col-xs-10 col-md-12">
                    <div class="section_title text-center mb_70">
                        <h3>Why Choose Us</h3>
                        <p>Expert Advice: Our team of travel professionals brings deep knowledge <br> and years of experience to help you plan your perfect trip...
                        </p>
                    </div>
                 
                    <div class="subheading" style=" font-weight: 409;"> 
                        Expert Advice: Our team of travel professionals brings deep knowledge and years of experience to help you plan your perfect trip...
                    </div>
                    <ul class="ourAcheivement_list">
                        <!-- First List Item: Unforgettable Travel Experiences -->
                        <li>
                            <i class="fas fa-suitcase-rolling"></i> <!-- Unforgettable Travel Experiences Icon -->
                            <div>
                                <div class="subheading"  style="font-weight: 401;"    >Unforgettable Travel Experiences</div>
                                <p>At Travicito, we design every journey with care and expertise, ensuring that each trip you take is extraordinary. Whether you're exploring a relaxing beach destination or trekking through rugged terrains, we make sure your travel is unforgettable.</p>
                            </div>
                        </li>
                    
                        <!-- Second List Item: Tailored Travel Plans -->
                        <li>
                            <i class="fas fa-map-marked-alt"></i> <!-- Tailored Travel Plans Icon -->
                            <div>
                                <div class="subheading" style="font-weight: 401;" >Tailored Travel Plans</div>
                                <p>We believe every traveler is unique. Our team works closely with you to craft personalized itineraries that cater to your interests and preferences. No matter what type of trip you’re looking for, we will create a customized plan just for you.</p>
                            </div>
                        </li>
                    
                        <!-- Third List Item: Cultural Immersion -->
                        <li>
                            <i class="fas fa-users"></i> <!-- Cultural Immersion Icon -->
                            <div>
                                <div class="subheading" style="font-weight: 401;" >Cultural Immersion</div>
                                <p>We believe travel is more than just visiting places—it’s about connecting with the culture, people, and traditions of your destination. Our tours focus on providing a deeper understanding of local cultures through authentic experiences that enrich your journey.</p>
                            </div>
                        </li>
                    </ul>
                    
                </div>
    
            
                <!-- Right Column: Logo -->
               
            </div>
        </div>
    </div>
    
    <!-- why choose us -->
   

    <!-- <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Places</h3>
                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/2.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Korola Megna</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/3.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>London</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/4.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Miami Beach</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/5.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/6.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                     <a href="#" class="boxed-btn3">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="company-logo-section">
        <div class="container">
            <div class="section_title text-center mb_70">
                <h3>Our Trusted Partners</h3>
                     </div>
           
   
            <div class="logo-container">
                <div class="logo-item">
                    <img src="./img/PartnerLogo/one.png" alt="Company 1">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/two.png" alt="Company 2">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/three.png" alt="Company 3">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/four.png" alt="Company 4">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/five.png" alt="Company 5">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/six.png" alt="Company 6">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/seven.png" alt="Company 7">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/eight.png" alt="Company 8">
                </div>
                <div class="logo-item">
                    <img src="img/PartnerLogo/nine.png" alt="Company 9">
                </div>
                  <div class="logo-item">
                    <img src="img/PartnerLogo/ten.png" alt="Company 9">
                </div>
                  <div class="logo-item">
                    <img src="img/PartnerLogo/eleven.png" alt="Company 9">
                </div>
            </div>
        </div>
    </div>
    
 
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


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="section_title text-center mb_70">
                <h3>Customer Testimonials</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="Micky Mouse" class="img-fluid rounded-circle">
                                        </div>
                                        <p class="testimonial_text">"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering."</p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                        <!-- Rating stars -->
                                        <div class="rating_stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="Tom Mouse" class="img-fluid rounded-circle">
                                        </div>
                                        <p class="testimonial_text">"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering."</p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Mouse</h3>
                                        </div>
                                        <!-- Rating stars -->
                                        <div class="rating_stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-alt"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="Jerry Mouse" class="img-fluid rounded-circle">
                                        </div>
                                        <p class="testimonial_text">"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering."</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
                                        </div>
                                        <!-- Rating stars -->
                                        <div class="rating_stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Owl Carousel JS & CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/2.3.4/assets/owl.theme.default.min.css">
    
    <script>
      $(document).ready(function(){
        $(".testmonial_active").owlCarousel({
          loop: true,           // Enable continuous loop
          margin: 10,           // Add some space between items
          items: 1,             // Show 1 item at a time
          autoplay: true,       // Enable autoplay
          autoplayTimeout: 1200, // Time for autoplay (2 seconds)
          autoplayHoverPause: true, // Pause on hover
          nav: false,           // Hide navigation buttons
          dots: false,          // Hide dots
        });
      });
    </script>
    
    <style>
    /* Styling for the testimonial section */
    .testimonial_area {
        padding: 80px 0;
        background-color: #f9f9f9;
    }
    
    .section_title h3 {
        font-size: 36px;
        color: #333;
        margin-bottom: 30px;
    }
    
    .single_carousel {
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .author_thumb {
        margin-bottom: 20px;
    }
    
    .author_thumb img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #ddd;
    }
    
    .testimonial_text {
        font-style: italic;
        color: #666;
        margin-bottom: 20px;
        font-size: 18px;
    }
    
    .testmonial_author h3 {
        font-size: 20px;
        color: #333;
        font-weight: 600;
    }
    
    .rating_stars i {
        color: #ffbc00; /* Gold color for the stars */
        margin-right: 3px;
    }
    
    .owl-carousel .owl-nav {
        display: none;
    }
    
    .owl-carousel .owl-dots {
        display: none;
    }
    
    /* Responsive Design */
    @media (max-width: 767px) {
        .testimonial_area {
            padding: 40px 0;
        }
    
        .section_title h3 {
            font-size: 28px;
        }
    
        .single_carousel {
            padding: 20px;
        }
    }
    </style>
    
    <!-- /testimonial_area  -->


    <!-- <section class="contact-section">
        <div class="section_title text-center mb_70">
            <h3>Our Location</h3>
                 </div>
       
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="position: relative; overflow: hidden;"> </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6979.80484252027!2d77.76020741619504!3d28.99026240147556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c7b21528c1ccb%3A0x3311d5371b9440e8!2sAbdullapur%2C%20Meerut%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1729253706327!5m2!1sen!2sin" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap"> -->
                <!-- </script>

            </div>


        </div>
    </section> --> 



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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d47ac2fe8535971","version":"2024.10.1","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preview.colorlib.com/theme/travelo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2024 09:59:29 GMT -->
</html>