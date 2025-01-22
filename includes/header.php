<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prismhue</title>
    
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
       

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<header>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="./">
            <img src="./assets/images/prismhue-logo.svg" alt="Prismhue Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">


        <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link <?php echo (empty($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>" href="./">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'active' : ''; ?>" href="./about">About Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'services') ? 'active' : ''; ?>" href="./services">Services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>" href="./contact">Contact Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link get-quote <?php echo (isset($_GET['page']) && $_GET['page'] == 'quote') ? 'active' : ''; ?>" href="./quote">Get a Quote</a>
    </li>
</ul>







        </div>
    </div>
</nav>




        
    </header>
