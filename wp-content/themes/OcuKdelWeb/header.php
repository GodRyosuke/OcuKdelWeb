<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo wp_get_document_title(); ?></title>
    <script src="https://kit.fontawesome.com/29d47546b5.js" crossorigin="anonymous"></script>
    <!-- <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script> 
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets//css/tomorrow-night.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <a href="<?php echo esc_url(home_url()); ?>" class="logo">OMU<span>KDEL</span></a>
        <!-- <div class="menuToggle" onclick="toggleMenu();">
        </div> -->
        <i class="fa fa-bars"></i>
        <!-- <ul class="navigation">
            <li><a href="#banner" class="nav-a">Home</a></li>
            <li><a href="#about" class="nav-a">About</a></li>
            <li><a href="#menu" class="nav-a">Menu</a></li>
            <li><a href="#expert" class="nav-a">Expert</a></li>
            <li><a href="#testimonials" class="nav-a">Testimonials</a></li>
            <li><a href="#contact" class="nav-a">Contact</a></li>
        </ul> -->
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times"></i>
<?php
wp_nav_menu(
    array (
        'theme_location' => 'place_global',
        'container' => false,
    )
);
?>
            <!-- <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="page-member.php">MEMBER</a></li>
                <li><a href="research.html">RESEARCH</a></li>
                <li><a href="thesis.html">THESIS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul> -->
        </div>
    </header> 