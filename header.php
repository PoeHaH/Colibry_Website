<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Colibry helpt je makelaarskantoor futureproof te worden met betere leadgeneratie en communicatie door het gebruik van data en AI. Kies voor Colibry en wordt meer efficiënt. Meer taken, minder moeite!" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    
    <body>
        <header>
            <nav class="navbar">
                <div class="nav-backdrop" aria-hidden="true" style="display: none;"></div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibrylogo.svg" style="max-width: 174px;" alt="Colibry logo" class="hidden-md-down">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibry-bird.svg" style="max-width: 76px;" alt="Colibry logo" aria-hidden="true" class="hidden-lg-up">
                <ul class="links-container hidden-md-down">
                    <li><a href="/#solutions">Oplossingen</a></li>
                    <li><a href="/#customers">Klanten</a></li>
                    <li><a href="/#integrations">Integraties</a></li>
                    <li class="link-secondary"><a href="https://www.colibry.ai/contact/">Contact</a></li>
                </ul>
                <button aria-label="Navigation menu trigger" class="nav-trigger-mobile hidden-lg-up">
                    <span class="nav-hamburger">
                        <span class="nav-hamburger-inner"></span>
                    </span>
                </button>
                <div class="nav-mobile" aria-label="Navigation for mobile devices" aria-hidden="true" style="display: none;">
                    <ul>
                        <li><a href="/#solutions">Oplossingen</a></li>
                        <li><a href="/#customers">Klanten</a></li>
                        <li><a href="/#integrations">Integraties</a></li>
                        <li class="link-secondary"><a href="/#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>