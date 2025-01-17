<!DOCTYPE html>
<html lang="en">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
     <style>
        /*about hotel deatiles */
   
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .thailand-header {
            /*background-color: #007bff;*/
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        .thailand-container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
            background: #fff;
            padding: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .thailand-hotel-section {
            margin-bottom: 2rem;
        }
        .thailand-hotel {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 2rem;
            gap: 1rem;
        }
        .thailand-hotel img {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
            object-fit: cover;
        }
        .thailand-hotel-details {
            flex: 1;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .thailand-daywise-itinerary {
            margin-top: 2rem;
        }
        .thailand-day {
            margin-bottom: 1.5rem;
            padding: 1rem;
            background-color: #f0f8ff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .thailand-day h3 {
            margin-top: 0;
        }
        .thailand-footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #777;
        }
        .thailand-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .thailand-btn:hover {
            background-color: #0056b3;
        }
        .thailand-footer {
            text-align: center;
            margin-top: 6rem;
            font-size: 0.9rem;
            color: #777;
        }
        .thailand-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .thailand-btn:hover {
            background-color: #0056b3;
        }
        .thailand-touch-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom:20px;
         
            background-color: #1EC6B6;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 1rem;
        }
        .thailand-touch-btn:hover {
            color:white;
            background-color: #e83e8c;
        }
        .thailand-hotel {
    display: flex;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    max-width: 600px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.hotel-image {
    width: 200px;
    height: auto;
    object-fit: cover;
}

.thailand-hotel-details {
    padding: 15px;
    font-family: Arial, sans-serif;
    color: #333;
}

.thailand-hotel-details h4 {
    margin: 10px 0;
}

.price {
    font-size: 1.2em;
    color: #e63946;
}

.country {
    font-size: 1em;
    font-weight: bold;
    color: #457b9d;
}

.stay-plan, .inclusions {
    font-size: 1.1em;
    margin-top: 15px;
}

.stay-list, .inclusion-list {
    list-style-type: disc;
    margin: 5px 0 0 20px;
    padding: 0;
    color: #1d3557;
}

.stay-list li, .inclusion-list li {
    margin-bottom: 5px;
    font-size: 0.95em;
}

   </style>
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
            <a href="index.php">Home &nbsp;</a>
        
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
            <a href="index.php">Home &nbsp;</a>
        
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

   

<div class="thailand-container">
    <div class="thailand-hotel-section">
        <!--<h4>Day 1-4 (4 Nights): Citymax Bur Dubai</h4>-->
        <div class="thailand-hotel">
            <img src="img/place/66.png" alt="Citymax Bur Dubai" class="hotel-image">
            <div class="thailand-hotel-details">
                <h4 class="price"><strong>Price Per Person:</strong> ₹ 38,500</h4>
                <h4 class="country"><strong>Country:</strong> Dubai, UAE</h4>
                <h4 class="stay-plan"><strong>Stay Plan:</strong></h4>
                <ul class="stay-list">
                    <li>Dubai Hotel</li>
                </ul>
                <h4 class="inclusions"><strong>Inclusions:</strong></h4>
                <ul class="inclusion-list">
                    <!--<li>Hotel Accommodation (3 Star)</li>-->
                                        <li>Hotel</li>
                    <li>Activities</li>
                    <li>Transfer</li>
                </ul>
                <h4 class="exclusions"><strong>Exclusions:</strong></h4>
                <ul class="exclusion-list">
                    <li>Flights</li>
                    <li>Visa</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="thailand-daywise-itinerary">
        <h2>Day-wise Itinerary</h2>

        <div class="thailand-day">
            <h3>Day 1 - Arrival into Dubai - Check-in - Evening Dhow Cruise</h3>
            <p>You will be met by our representative at the Airport Arrival Terminal. Our representative will be holding a signage card with your Name written on it. You will then be escorted to a waiting vehicle for transfer to the hotel. In the evening, enjoy a two-hour Dhow Cruise along Dubai Marina, complete with an international buffet dinner, soft drinks, mineral water, and live entertainment, including a tanoura dance show.</p>
        </div>

        <div class="thailand-day">
            <h3>Day 2 - Top of Burj Khalifa - Ticket With Seat in Coach Transfers - 124th Floor</h3>
            <p>Transfer to Dubai Mall and visit the Top of Burj Khalifa, the world's tallest tower. Experience the breathtaking 360-degree view of the city, desert, and ocean from the 124th floor. Later, watch the Dubai Fountains come alive in the evening.</p>
        </div>

        <div class="thailand-day">
            <h3>Day 3 - Desert Safari with Dune Bashing, Belly Dancing and Barbeque Dinner</h3>
            <p>Embark on an evening desert safari with activities like sandboarding, camel riding, and henna painting. Enjoy a barbeque dinner at a desert camp with live entertainment.</p>
        </div>

        <div class="thailand-day">
            <h3>Day 4 - Miracle Garden and Global Village</h3>
            <p>Visit the Dubai Miracle Garden, the world's largest flower garden, and explore the stunning floral sculptures. In the afternoon, head to Global Village, a cultural extravaganza featuring festivals, shopping, and entertainment.</p>
        </div>

        <div class="thailand-day">
            <h3>Day 5 - Departure from Dubai</h3>
            <p>You will be picked up from the hotel's lobby and transferred to the airport for your departure.</p>
        </div>
    </div>

    <div class="payment-policy">
        <h4>Payment Terms:</h4>
        <ul>
            <li>30% advance payment required.</li>
            <li>100% of the total cost to be paid 21 days before the trip date.</li>
        </ul>
    </div>

    <div class="booking-details">
        <h4>Amount to Pay:</h4>
        <p><strong>INR 38,500</strong> (Inclusive of all taxes)</p>
        <a href="#" class="pay-now">PAY NOW</a>
        <p>Contact your travel agent for assistance with payment links.</p>
    </div>
</div>


     <div class="thailand-footer">
        <h2>Thank you for choosing our service!</h2>
        <a href="contact.php" class="thailand-touch-btn">Book Now</a>
    </div>
   <!-- Footer -->
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
</body>
</html>
