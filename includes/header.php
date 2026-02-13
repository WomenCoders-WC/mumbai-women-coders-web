<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Mumbai Women Coders</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="<?php echo $metaDescription ?? 'Empowering women in technology through community, mentorship, and events. Join Mumbai Women Coders today.'; ?>">
    <meta name="author" content="Mumbai Women Coders">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="<?php
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    $host = $_SERVER['HTTP_HOST'];
    $request_uri = $_SERVER['REQUEST_URI'];
    // Clean URL by removing .php and index
    $clean_uri = str_replace(['.php', 'index'], '', $request_uri);
    echo $protocol . "://" . $host . $clean_uri;
    ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://womencoders.org<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Mumbai Women Coders">
    <meta property="og:description"
        content="<?php echo $metaDescription ?? 'Empowering women in technology through community, mentorship, and events. Join Mumbai Women Coders today.'; ?>">
    <meta property="og:image"
        content="<?php echo $ogImage ?? 'https://womencoders.org/assets/images/women-coding-community.png'; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://womencoders.org<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title"
        content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Mumbai Women Coders">
    <meta property="twitter:description"
        content="<?php echo $metaDescription ?? 'Empowering women in technology through community, mentorship, and events. Join Mumbai Women Coders today.'; ?>">
    <meta property="twitter:image"
        content="<?php echo $ogImage ?? 'https://womencoders.org/assets/images/women-coding-community.png'; ?>">

    <!-- Custom Fonts: Albert Sans & Archivo Black -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Archivo+Black&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="<?php echo $root ?? ''; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Animate.css for scroll animations -->
    <link rel="stylesheet" href="<?php echo $root ?? ''; ?>assets/css/animate.min.css" />

    <!-- Swiper.js for modern sliders -->
    <link rel="stylesheet" href="<?php echo $root ?? ''; ?>assets/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $root ?? ''; ?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo $root ?? ''; ?>assets/css/style.css">

    <link rel="icon" type="image/png" href="<?php echo $root ?? ''; ?>assets/images/favicon/favicon-96x96.png"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo $root ?? ''; ?>assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo $root ?? ''; ?>assets/images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo $root ?? ''; ?>assets/images/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="<?php echo $root ?? ''; ?>assets/images/favicon/site.webmanifest" />

</head>

<body>