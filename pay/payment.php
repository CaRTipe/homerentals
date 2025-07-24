<?php

session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] !== TRUE) {
    header("Location: ../login.php?error=Please login to access this page");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment - My Rentals</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7ff;
            color: #333;
            line-height: 1.6;
        }
        
        .payment-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 15px;
        }
        
        .payment-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .payment-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2.5rem 1.5rem;
            text-align: center;
        }
        
        .payment-header i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
        }
        
        .payment-body {
            padding: 2.5rem;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            padding: 0.8rem 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            transition: var(--transition);
            font-size: 1rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.15);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
        }
        
        .btn-pay {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        
        .btn-pay:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .invalid-feedback {
            font-size: 0.85rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .payment-body {
                padding: 1.5rem;
            }
            
            .payment-header {
                padding: 1.5rem 1rem;
            }
            
            .payment-header i {
                width: 60px;
                height: 60px;
                line-height: 60px;
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <?php
    include './navbar/navbar.php';
    ?>
    
    <div class="payment-container">
        <div class="payment-card">
            <!-- Payment Header -->
            <div class="payment-header text-center py-4">
                <i class="fas fa-credit-card"></i>
                <h2 class="mb-0">Make a Payment</h2>
                <p class="mb-0">Complete your rent payment securely</p>
            </div>
            
            <!-- Payment Form -->
            <div class="payment-body">
                <form action="./server/processes.php" method="post" class="needs-validation" novalidate>
                    <div class="mb-4">
                        <label for="tenant_id" class="form-label">Tenant ID</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control form-control-lg" id="tenant_id" name="tenant_id" 
                                   placeholder="Enter your tenant ID" required>
                            <div class="invalid-feedback">
                                Please enter your tenant ID
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="amount" class="form-label">Payment Amount (KES)</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            <input type="number" class="form-control form-control-lg" id="amount" name="amount" 
                                   placeholder="Enter amount" min="1" required>
                            <div class="invalid-feedback">
                                Please enter a valid amount
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select class="form-select form-select-lg" id="payment_method" name="payment_method" required>
                            <option value="" selected disabled>Select payment method</option>
                            <option value="mpesa">M-Pesa</option>
                            <option value="card">Credit/Debit Card</option>
                            <option value="bank">Bank Transfer</option>
                        </select>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" name="pay_rent" class="btn btn-primary btn-pay">
                            <i class="fas fa-lock me-2"></i> Pay Now
                        </button>
                    </div>
                    
                    <div class="text-center mt-3">
                        <p class="text-muted small mb-0">
                            <i class="fas fa-lock me-1"></i> Your payment is secure and encrypted
                        </p>
                    </div>
                </form>
            </div>
            
            <!-- Payment Methods -->
            <div class="px-4 pb-4">
                <p class="text-muted small mb-2">We accept:</p>
                <div class="d-flex gap-3">
                    <img src="https://via.placeholder.com/50x30/4361ee/ffffff?text=MPESA" alt="M-Pesa" class="img-fluid" style="height: 30px;">
                    <img src="https://via.placeholder.com/50x30/3f37c9/ffffff?text=VISA" alt="Visa" class="img-fluid" style="height: 30px;">
                    <img src="https://via.placeholder.com/50x30/4cc9f0/ffffff?text=MC" alt="Mastercard" class="img-fluid" style="height: 30px;">
                </div>
            </div>
        </div>
        
        <!-- Support Info -->
        <div class="text-center mt-4">
            <p class="text-muted">
                <i class="fas fa-headset me-2"></i> Need help? 
                <a href="#" class="text-primary text-decoration-none">Contact Support</a>
            </p>
        </div>
    </div>









    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
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
        
        // Format amount input with commas
        document.addEventListener('DOMContentLoaded', function() {
            const amountInput = document.getElementById('amount');
            
            if (amountInput) {
                amountInput.addEventListener('input', function(e) {
                    // Remove any non-digit characters
                    let value = this.value.replace(/\D/g, '');
                    
                    // Format with commas
                    if (value.length > 0) {
                        value = parseInt(value).toLocaleString('en-US');
                    }
                    
                    // Update the input value
                    this.value = value;
                });
            }
            
            // Add animation to payment card on load
            const paymentCard = document.querySelector('.payment-card');
            if (paymentCard) {
                paymentCard.style.opacity = '0';
                paymentCard.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    paymentCard.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                    paymentCard.style.opacity = '1';
                    paymentCard.style.transform = 'translateY(0)';
                }, 100);
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>