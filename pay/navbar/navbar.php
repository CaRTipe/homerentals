 <nav class="navbar navbar-expand-lg bg-cream shadow-sm px-4 py-2">
     <div class="container-fluid d-flex justify-content-between align-items-center">

         <!-- Brand with spacing -->
         <a class="navbar-brand fw-bold text-dark me-4" href="#">My Rentals</a>

         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Nav links with spacing -->
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="navbar-nav gap-3">
                 <?php if (isset($_SESSION['login']) && $_SESSION['login'] === TRUE): ?>
                     <li class="nav-item">
                         <a class="nav-link text-dark" href="../logout.php">Logout</a>
                     </li>
                 <?php endif; ?>

             </ul>
         </div>

     </div>
 </nav>