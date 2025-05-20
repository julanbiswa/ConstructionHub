<?php

include("conn.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConstructHub</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
<a href="index.php" class="brand">🏗️ ConstructionHub</a>

        <nav>
            <ul>
                <li style="text-decoration: underline">Home</li>
                <li>
                    <a href="Vlog.html">Vlog</a>
                </li>
                <li style="color: var(--AccentColor)">
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="aboutus.html">About Us</a>
                </li>
            </ul>
        </nav>

        <div class="login-section">
            <div class="Login"><a href="register.html">Became Renter</a></div>
            <div class="Login"><a href="login.html">Login</a></div>
        </div>
        <button id="show-hide" onclick="ShowHide()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>

    <nav id="nav-bar">
        <ul>
            <li>Home</li>
            <li>Vlog</li>
            <li>Contact</li>
            <li>About Us</li>
        </ul>
    </nav>

    <div class="search-bar-container">
        <div class="textarea">
            <h3>Rent the equipment you need, when you need!</h3>
        </div>
        <div class="textarea">
            <h6>Smartly search the quipment and make a rent here.</h6>
        </div>

        <div class="searchbar-container">
            <input type="search" id="Searching-box" placeholder="Search for the equipment here..." onkeyup="search()" />
            <button id="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <main>
        <div class="card-container">
            <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div> <div class="card">
                <img src="roller.jpg" alt="Roller" />

                <div class="card-content">
                    <h3>Roller X120</h3>
                    
                   
                    <div class="available-rating">
                        <p class="availability available">Available</p>
                        <div class="ratings">⭐⭐⭐⭐☆ (4.0)</div>

                    </div>
                </div>

                <div class="button-container">
                    <button class="cart-btn">Make a rent</button>
                    <button class="cart-btn">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- Login Modal -->
    <div id="login-modal" class="login-modal hidden">
        <div class="login-card glass">
            <span class="close-btn" onclick="closeLogin()">&times;</span>
            <h2>Login to ConstructHub</h2>
            <form action="">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required />
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required />
                </div>
                <button type="submit">Login</button>
            </form>
            <p style="text-align: center">
                Don't have an account?
                <button id="register-button" onclick="registerShow()">
                    Register
                </button>
            </p>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="register-modal" class="register-modal hidden">
        <div class="login-card glass">
            <span class="close-btn" onclick="closeRegister()">&times;</span>
            <h2 style="text-align: center">Login to ConstructHub</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" required name="Uname" />
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required name="Uemail" />
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="phone" placeholder="Number" required name="Unumber" />
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required name="Upass" />
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" required />
                </div>
                <button type="submit" name="register">Register</button>
            </form>
            <p style="text-align: center">
                Already have an account?<button onclick="loginShow()">Login</button>
            </p>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-container">
          <div class="footer-column">
            <h3>ConstructHub</h3>
            <p class="footer-p">Rent reliable construction equipment anytime, anywhere. We help contractors and builders find what they need.</p>
          </div>
      
          <div class="footer-column">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="Vlog.html">Vlog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="aboutus.html">About Us</a></li>
            </ul>
          </div>
      
          <div class="footer-column">
            <h4>Contact</h4>
            <p><i class="fas fa-phone"></i> +91 98765 43210</p>
            <p><i class="fas fa-envelope"></i> support@constructhub.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Kadaghari, Kathmandu, Nepal</p>
          </div>
      
          <div class="footer-column">
            <h4>Follow Us</h4>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      
        <div class="footer-bottom">
          <p>&copy; 2025 ConstructHub. All rights reserved.</p>
        </div>
      </footer>
      

    <script src="script.js"></script>

</body>

</html>

<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $full_name = $_POST['Uname'];
    $email = $_POST['Uemail'];
    $number = $_POST['Unumber'];
    $password = $_POST['Upass'];

    // Optional: hash password
    // $password = password_hash($_POST['Upass'], PASSWORD_DEFAULT);

    $query = "INSERT INTO usercredentials (userfullname, useremail, userpnumber, userpassword)
              VALUES ('$full_name', '$email', '$number', '$password')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Registration Successful!'); window.location.href = 'index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error inserting data.');</script>";
    }
}
?>
