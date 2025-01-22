<?php include 'includes/header.php'; ?>

<main>
    <?php
    // Simple routing mechanism to include the appropriate page based on the 'page' URL parameter
    $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to 'home' if no page is set

    // Include the relevant page content
    if (file_exists("pages/{$page}.php")) {
        include("pages/{$page}.php");
    } else {
        include("pages/404.php"); // Show a 404 page if the requested page doesn't exist
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>