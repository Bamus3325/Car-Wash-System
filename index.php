<?php include '_include/head.php' ?>

<script src="js.js"></script>

<div class="header-item">
    <div class="header-item-text">
        <p>Sparkling Clean, Hassle-Free – Experience the Ultimate Car Wash Today!</p>

        <a href="about.php">Explore more</a>
    </div>
</div>
</div>

<!--Latest-item-->
<section class="latest-items">
    <div class="container">
        <h2>Latest Items</h2>
        <div class="latest-items-grid">
            <!-- Item 1 -->
            <div class="item">
                <img src="Images/latest-item-1.jpg" alt="Item 1">
                <div class="item-info">
                    <h3>car exterior wash</h3>
                    <p>Short description of the item.</p>
                    <a href="service-single.php" class="btn">View Details</a>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="item">
                <img src="Images/latest-item-2.jpg" alt="Item 2">
                <div class="item-info">
                    <h3>car waxing</h3>
                    <p>Short description of the item.</p>
                    <a href="service-single.php" class="btn">View Details</a>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="item">
                <img src="Images/latest-item-3.jpg" alt="Item 3">
                <div class="item-info">
                    <h3>car engine cleaning</h3>
                    <p>Short description of the item.</p>
                    <a href="service-single.php" class="btn">View Details</a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- discount-card -->
<section class="discount-form-section">
    <div class="container-2">
        <div class="dicount-form-info">
            <h3>Special Offers Include:</h3>
            <p><strong>Limited-Time Discounts:</strong><br> Available for a short period only.</p>
            <p><strong>Promotional Offers:</strong><br>Special discounts on bookings.</p>
            <p><strong>Exclusive Deals:</strong><br>Available only for selected customers.</p>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            include '_include/connect.php';

            extract($_POST);

            $sql = "INSERT INTO offers (f_name, email, phone, service) VALUES ('$f_name','$email','$phone','$service')";

            $query =  mysqli_query($conn, $sql);

            if ($query == TRUE) {
                echo "<script> alert('Record Created Successfully'); </script>";
            } else {
                echo "Records Not Created";
            }
        }
        ?>
        <div class="discount-form">
            <h3>Get 30% Discount</h3>
            <p>Fill out the form below to get your special discount offer!</p>
            <form method="POST" action="">
                <input type="text" id="name" name="f_name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="YOUR EMAIL" required
                    style="text-transform: none;">
                <input type="tel" id="phone" name="phone" placeholder="Your Mobile Number" required>
                <select id="service" name="service" required>
                    <option value="" disabled selected>Select Service</option>
                    <option value="car-wash">Car Wash</option>
                    <option value="car-repair">Car Repair</option>
                    <option value="cleaning">Cleaning</option>
                </select>
                <button type="submit" name="submit">Get Offer</button>
            </form>
        </div>
    </div>
</section>

<!--Why shooose us section-->
<section class="why-choose-us">
    <div class="container">
        <div class="choose-us-wrapper">

            <!-- Right Side: Why Choose Us Details -->
            <div class="choose-us-details">
                <h2 class="section-title">Why Choose Us?</h2>
                <div class="choose-us-item">
                    <div class="icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h3>High Quality</h3>
                    <p>We provide top-notch services with the best quality to ensure customer satisfaction.</p>
                </div>

                <div class="choose-us-item">
                    <div class="icon">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <h3>Customer Satisfaction</h3>
                    <p>Our customers are our priority, and we focus on delivering excellent customer service.</p>
                </div>

                <div class="choose-us-item">
                    <div class="icon">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <h3>Timely Service</h3>
                    <p>We value your time and ensure that services are delivered promptly and on schedule.</p>
                </div>

                <div class="choose-us-item">
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <h3>Reasonable Price</h3>
                    <p>Most of the vehicles get damaged just because of maintenance neglect you take</p>
                </div>

            </div>

            <!-- Left Side: Phone Image -->
            <div class="choose-us-image">
                <img src="Images/WCU-image.webp" alt="Phone Image">
            </div>
        </div>
    </div>
</section>

<!-- working-process -->

<section class="working-process">
    <div class="container">
        <div class="working-process-wrapper">
            <!-- Title and Description -->
            <div class="working-process-title">
                <h2 class="section-title">Our Working Process</h2>
                <p class="section-description">We make car cleaning simple and easy! Follow these simple steps to
                    get your car cleaned.</p>
            </div>

            <!-- Steps -->
            <div class="process-steps">
                <!-- Step 1 -->
                <div class="step">
                    <div class="step-icon">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <h3>Book a Service from us</h3>
                    <p>Select a service package, schedule a time, and book online.</p>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <div class="step-icon">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <h3>Pick-Up your vehicle</h3>
                    <p>We will pick up your car at the scheduled time, ensuring hassle-free service.</p>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <div class="step-icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h3>washing your car</h3>
                    <p>Our expert team will clean and wash your car with top-quality products.</p>
                </div>

                <!-- Step 4 -->
                <div class="step">
                    <div class="step-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </div>
                    <h3>Return Your Car</h3>
                    <p>We deliver your car back to you, looking fresh and sparkling clean!</p>
                </div>
            </div>
        </div>
    </div>
</section>




<!--booking-appointment-->
<?php
if (isset($_POST['book'])) {
    include '_include/connect.php';      

    extract($_POST);

    $sql = "INSERT INTO appoint (f_name, email, phone, brand, service, cdate) VALUES ('$f_name','$email','$phone','$brand','$service','$cdate')";

    $query =  mysqli_query($conn, $sql);

    if ($query == TRUE) {
        echo "<script> alert('Appointment Booked Created Successfully'); </script>";
    }else {
        echo "Appointment Not Booked";
    }
}   
?>
<section class="booking-appointment">
    <div class="container">
        <h2>Book an Appointment</h2>
        <p>Fill out the form below to book an appointment with us.<br> We’ll confirm your appointment shortly!</p>

        <div class="booking-container">
            <!-- Left Side (Customer Info) -->
            <div class="left-side">
                <h3>Customer Information</h3>
                <form action="" method="POST" class="appointment-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="f_name" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <!-- </form> -->
            </div>

            <!-- Right Side (Car Info & Service Selection) -->
            <div class="right-side">
                <h3>Service Details</h3>
                <!-- <form action="#" method="POST" class="appointment-form"> -->
                <div class="form-group">
                    <label for="car-brand">Select Car Brand</label>
                    <select id="car-brand" name="brand" required>
                        <option value="">Select Car Brand</option>
                        <option value="toyota">Toyota</option>
                        <option value="honda">Honda</option>
                        <option value="ford">Ford</option>
                        <option value="bmw">BMW</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="service">Select Service</label>
                    <select id="service" name="service" required>
                        <option value="">Select Service</option>
                        <option value="exterior-wash">Exterior Wash</option>
                        <option value="interior-wash">Interior Wash</option>
                        <option value="waxing">Waxing</option>
                        <option value="detailing">Detailing</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Select Date</label>
                    <input type="date" id="date" name="cdate" required>
                </div>


               
            </div>
        </div>
        <button type="submit" name="book" class="submit-btn">Submit</button>
 </form>
    </div>
</section>

<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h2>Carz.</h2>
                <p>Your trusted car repair service.</p>
                <div class="footer-social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p><i class="fa fa-map-marker"></i>123 Street, City, Country</p>
                <p><i class="fa fa-phone"></i>+91 123 456 789</p>
                <p><i class="fa fa-envelope"></i>info@autrics.com</p>
            </div>

            <div class="footer-subscribe">
                <h3>Subscribe</h3>
                <p>Get the latest updates and offers.</p>
                <form action="#">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Carz. All rights reserved.</p>
        </div>
    </div>
</footer>





</body>

</html>