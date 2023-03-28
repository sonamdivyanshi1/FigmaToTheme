

<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assests/css/custom.css">
    <script  src="https://kit.fontawesome.com/b3348ae33f.js" crossorigin="anonymous"></script>
    <title>html assignment</title>
</head>
<body>
    <div id="hero">
        <nav>
            <a class="logo" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assests/images/Logo.png" height="48" width="48">
            </a>
            <?php
               // $logo_img=get_header_image();
            ?>
            <div class="menu-bar">
                <a href="<?php echo site_url(); ?>">
                    <!-- <img src="<?php echo $logo_img; ?>"> -->
                </a>
                <?php wp_nav_menu(array(
                    'theme-location' => 'primary-menu',
                    'menu_class' => 'nav-elements',
                ))
                ?>
            </div>
            
            <button id="button-mobile">Start free trial</button>
        </nav>