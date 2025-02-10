<?php


// Exclude header for contact-process.php
if ($_SERVER['REQUEST_URI'] !== '/Prismhue/contact-process') {
    include 'includes/header.php';
}


// Get URL parameters
$page = isset($_GET['page']) ? basename($_GET['page']) : 'home';
$category = isset($_GET['category']) ? basename($_GET['category']) : null;
$subcategory = isset($_GET['subcategory']) ? basename($_GET['subcategory']) : null;
$subpage = isset($_GET['subpage']) ? basename($_GET['subpage']) : null;

if ($category && $subcategory && $subpage) {
    // Load third-level service file (e.g., services/branding/external-signages/hoardings.php)
    $subpage_path = "pages/services/{$category}/{$subcategory}/{$subpage}.php";
    if (file_exists($subpage_path)) {
        include($subpage_path);
    } else {
        include("pages/404.php");
    }
} elseif ($category && $subcategory) {
    // Load second-level service file (e.g., services/branding/external-signages.php)
    $subcategory_path = "pages/services/{$category}/{$subcategory}.php";
    if (file_exists($subcategory_path)) {
        include($subcategory_path);
    } else {
        include("pages/404.php");
    }
} elseif ($category) {
    // Load main service file (e.g., services/branding.php)
    $category_path = "pages/services/{$category}.php";
    if (file_exists($category_path)) {
        include($category_path);
    } else {
        include("pages/404.php");
    }
} else {
    // Load general pages (e.g., home, about)
    $page_path = "pages/{$page}.php";
    if (file_exists($page_path)) {
        include($page_path);
    } else {
        include("pages/404.php");
    }
}


// Exclude footer for contact-process.php
if ($_SERVER['REQUEST_URI'] !== '/Prismhue/contact-process') {
    include 'includes/footer.php';
}


?>
