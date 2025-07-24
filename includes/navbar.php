 <?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_auth_page = ($current_page === 'login.php' || $current_page === 'register.php');
?>
<nav class="navbar navbar-expand-lg bg-cream shadow-sm px-4 py-2">
     <div class="container-fluid d-flex justify-content-between align-items-center">
         <!-- Brand with spacing -->
         <a class="navbar-brand fw-bold text-dark me-4" href="index.php">My Rentals</a>

         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Nav links with spacing -->
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="navbar-nav gap-3">
                 <?php if (!$is_auth_page): ?>
                 <li class="nav-item">
                     <a class="nav-link text-dark" href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-dark" href="#about">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-dark" href="#contact">Contact</a>
                 </li>
                 <?php endif; ?>
                 
                 <?php if ($current_page !== 'login.php'): ?>
                 <li class="nav-item">
                     <a class="nav-link text-dark" id="login-link" href="login.php">Login</a>
                 </li>
                 <?php endif; ?>
                 
                 <?php if ($current_page !== 'register.php'): ?>
                 <li class="nav-item">
                     <a class="nav-link text-dark" id="register-link" href="register.php">Register</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </div>
     </div>
 </nav>