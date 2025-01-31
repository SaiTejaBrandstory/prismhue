<?php include 'includes/header.php'; ?>

<main>
    <?php
    // Get the page from the URL (defaults to 'home' if not set)
    $page = isset($_GET['page']) ? basename($_GET['page']) : 'home';
    $category = isset($_GET['category']) ? basename($_GET['category']) : null;
    $subpage = isset($_GET['subpage']) ? basename($_GET['subpage']) : null;

    if ($category && $subpage) {
        // Load deeper nested subpages (e.g., services/branding/corporate-branding.php)
        $subpage_path = "pages/services/{$category}/{$subpage}.php";
        if (file_exists($subpage_path)) {
            include($subpage_path);
        } else {
            include("pages/404.php");
        }
    } elseif ($category) {
        // Load main category page (e.g., services/branding.php)
        $category_path = "pages/services/{$category}.php";
        if (file_exists($category_path)) {
            include($category_path);
        } else {
            include("pages/404.php");
        }
    } else {
        // Load regular pages (e.g., home, about)
        $page_path = "pages/{$page}.php";
        if (file_exists($page_path)) {
            include($page_path);
        } else {
            include("pages/404.php");
        }
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>
