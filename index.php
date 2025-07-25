<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your perfect rental home in Freehold, Nakuru. Affordable and comfortable houses with modern amenities.">
    <meta name="keywords" content="rental houses, Nakuru, Freehold, apartments, affordable housing, Kenya">
    <title>Home Rentals | Housing in Freehold, Nakuru</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --font-primary: 'Poppins', sans-serif;
            --accent-color: #ff7e5f;
            --light-bg: #f8f9fa;
            --text-dark: #343a40;
            --gradient-start: #4a6fa5;
            --gradient-end: #6b8cae;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
            padding: 6rem 0;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php
    include 'includes/navbar.php';  // Include the navbar from includes/navbar.php
    ?>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Your Dream Home in <span class="text-primary">Freehold</span></h1>
                    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Discover beautifully designed homes in Nakuru's most desirable neighborhood. Comfort, security, and convenience in one place.</p>
                    <div class="d-flex gap-3 animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="register.php" class="btn btn-primary btn-lg px-4">
                            <i class="fas fa-sign-in-alt me-2"></i> Get Started
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">
                            <i class="fas fa-phone-alt me-2"></i> Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate__animated animate__fadeInRight">
                    <div class="position-relative">
                        <img src="./assets/images/house.avif" alt="Modern House" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bg-white p-3 rounded-3 shadow-sm" style="bottom: -20px; right: -20px;">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-2">
                                    <i class="fas fa-home text-primary"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Available Now</p>
                                    <h6 class="mb-0">+20 Properties</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container my-5 py-5" id="features">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="text-muted lead">Experience comfortable living with our premium rental solutions</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Spacious Rooms</h3>
                    <p class="text-muted">Enjoy well-designed living spaces that provide comfort and functionality for your lifestyle.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Environment</h3>
                    <p class="text-muted">24/7 security and gated community for your peace of mind and safety.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Prime Location</h3>
                    <p class="text-muted">Centrally located with easy access to amenities, schools, and transport.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-5">
                        <h2 class="section-title mb-4">About Our Properties</h2>
                        <p class="lead mb-4">Discover comfortable and affordable living in the heart of Freehold, Nakuru.</p>
                        <div class="d-flex mb-3">
                            <div class="me-4 text-primary">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <div>
                                <h5>Flexible Options</h5>
                                <p class="text-muted mb-0">Choose from bedsitters, 1-bedroom, and 2-bedroom units to suit your needs.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="me-4 text-primary">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <div>
                                <h5>Affordable Living</h5>
                                <p class="text-muted mb-0">Quality housing solutions at competitive prices to fit your budget.</p>
                            </div>
                        </div>
                        
                        <div class="mt-4
                        ">
                            <a href="#contact" class="btn btn-primary mt-3">Schedule a Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="./assets/images/house.avif" alt="Modern Apartment" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-3 shadow-sm" style="transform: translate(-20%, -20%);">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                    <i class="fas fa-phone-alt text-primary"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Call us now</p>
                                    <h5 class="mb-0">+254 722 257 250</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- Contact Page -->
    <div class="container mt-5" id="contact">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    Contact Us
                </h1>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="bg-white p-4 rounded-4 h-100">
                        <div class="d-flex mb-4">
                            <div class="me-4 text-primary">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5>Our Location</h5>
                                <p class="text-muted mb-0">513 Freehold, Nakuru</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4 text-primary">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5>Email Us</h5>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4 text-primary">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5>Call Us</h5>
                                <p class="text-muted mb-0">+254 722 257 250</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="bg-white p-4 rounded-4">
                        <h4 class="mb-4">Send Us a Message</h4>
                        <form action="./server/processes.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" style="height: 150px" placeholder="Your Message" required></textarea>
                                        <label for="message">Your Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary px-5 py-3 fw-bold" type="submit" name="add_contact" 
                                        style="background: linear-gradient(135deg, #4361ee 0%, #3f37c9 100%);
                                               border: none;
                                               border-radius: 8px;
                                               transition: all 0.3s ease;
                                               letter-spacing: 0.5px;
                                               text-transform: uppercase;
                                               font-size: 0.95rem;">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                    <style>
                                        button[type="submit"]:hover {
                                            transform: translateY(-2px);
                                            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
                                            background: linear-gradient(135deg, #3f37c9 0%, #2a2a72 100%) !important;
                                        }
                                        button[type="submit"]:active {
                                            transform: translateY(0);
                                        }
                                    </style>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Bootstrap JS -->
    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="text-white mb-4">My Rentals</h5>
                    <p class="text-white">Providing quality and affordable housing solutions in Nakuru's most desirable neighborhoods since 2023.</p>
                </div>
                
                <div class="col-lg-2 col-md-4">
                    <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#properties" class="text-white text-decoration-none">Properties</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h6 class="text-uppercase fw-bold mb-4">Properties</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Bedsitters</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">1-Bedroom Apartments</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">2-Bedroom Apartments</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Vacation Rentals</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h6 class="text-uppercase fw-bold mb-4">Newsletter</h6>
                    <p class="text-white">Subscribe to our newsletter for the latest updates and offers.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white">&copy; 2025 HomeRentals. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary btn-lg back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Form validation
        (function () {
            'use strict'
            
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>