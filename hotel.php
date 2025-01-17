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
        
        <style>
        /* CSS for hover behavior */
        .international-packages {
            max-height: 200px; /* Control the height of the menu */
            overflow-y: hidden; /* Hide extra items initially */
            transition: max-height 0.3s ease-in-out;
        }
        
        .international-packages:hover {
            max-height: 600px; /* Expand height on hover */
        }
        
        /* Show only 4 items initially */
        .international-packages li {
            display: block;
        }
        
        /* Hide the "extra-item" list items initially */
        .international-packages .extra-item {
            display: none;
        }
        
        /* Show the "Show More" link initially */
        .international-packages .show-more {
            display: block;
        }
        </style>
        
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
<style>
    /* Section background styling */
.section {
    background-image: url('img/blog/visa.jpg');
    background-size: cover; /* Ensures the background image covers the entire section */
    background-position: center center; /* Keeps the image centered */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    padding: 50px 0; /* Adds padding around the content */
    display: flex; /* Flexbox to center content */
    justify-content: center; /* Horizontally center the content */
    align-items: center; /* Vertically center the content */
    min-height: 500px; /* Ensures the section has a minimum height */
}

.container {
    width: 100%; /* Full width container */
    max-width: 1200px; /* Optional: limits the width to 1200px */
    padding: 0 15px; /* Optional: adds padding to avoid touching the edges */
}

.form-title {
    color: #fff; /* White text for visibility */
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.form-group label {
    color: #fff; /* White text for labels */
    font-size: 1rem;
    margin-bottom: 8px;
    display: block;
}

.form-group input,
.form-group textarea {
    width: 100%; /* Full width inputs */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    margin-bottom: 15px;
    background-color: rgba(255, 255, 255, 0.8); /* Slight background for better contrast */
}

.submit-btn {
    padding: 12px 20px;
    font-size: 1.2rem;
    background-color: #007bff; /* Button color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #0056b3; /* Darken on hover */
}

@media screen and (max-width: 768px) {
    /* Mobile responsiveness */
    .form-title {
        font-size: 2rem;
    }

    .form-group label,
    .form-group input,
    .form-group textarea {
        font-size: 0.9rem;
    }

    .submit-btn {
        width: 100%; /* Make the button full-width on smaller screens */
    }
}

</style>
   <!-- Form Section with Background Image -->
<section style="background-image: url('img/blog/hotel.jpg'); background-size: cover; padding: 50px;">
    <div class="container">
        <h2 class="form-title">Hotel Enquiry</h2>

        <!-- Contact Form -->
        <form id="contactForm" method="post" action=""> <!-- Use the same page for form submission -->
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Name</label>
                <input type="text" id="name" name="name" class="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone-alt"></i> Phone</label>
                <input type="tel" id="phone" name="phone" class="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" class="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <label for="message"><i class="fas fa-comment-alt"></i> Message</label>
                <textarea id="message" name="message" class="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</section>

<?php
$host = "localhost";
$username = "u705415612_anaKhan";
$password = "Anakhan@123";
$dbname = "u705415612_Travicito";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input fields
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        die("All fields are required.");
    }

    // Sanitize input
    $name = $conn->real_escape_string($name);
    $phone = $conn->real_escape_string($phone);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);

    // Check if the email already exists in the database
    $checkQuery = $conn->prepare("SELECT * FROM `mainform` WHERE `email` = ?");
    $checkQuery->bind_param("s", $email);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        die("This email has already been used to submit an enquiry. Please try again with a different email.");
    }

    // Prepare SQL query for inserting data into the database
    $stmt = $conn->prepare("INSERT INTO `mainform` (`name`, `phone`, `email`, `message`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $email, $message);

    // Execute the query and check if insertion is successful
    if ($stmt->execute()) {
        // Send the email
        $to = "anaKhan@travicito.com";
        $subject = "New Form Submission from Hotel Enquiry";
        $body = "You have received a new form Hotel Enquiry:\n\n";
        $body .= "Name: $name\n";
        $body .= "Phone: $phone\n";
        $body .= "Email: $email\n";
        $body .= "Message: $message\n";
        
        // Email headers
        $headers = "From: noreply@travicito.com\r\n"; // Use a domain-specific email for sending
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Form submitted successfully!'); window.location.href = 'flight.php';</script>";
        } else {
            echo "<script>alert('Error: Failed to send email.');</script>";
        }
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

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
