<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm px-4 py-2">
     <div class="container-fluid d-flex justify-content-between align-items-center">

         <!-- Brand with spacing -->
         <a class="navbar-brand fw-bold text-white me-4" href="index.php">My Rentals</a>

         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Nav links with spacing -->
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="navbar-nav gap-3">
                 <li class="nav-item">
                     <a class="nav-link text-white" href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="#tenant">Tenants</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="messages.php">Messages</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="#">Last Month</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="#">This Month</a>
                 </li>
                 <?php if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE): ?>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="../logout.php" id="logout">Logout</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </div>

     </div>
 </nav>