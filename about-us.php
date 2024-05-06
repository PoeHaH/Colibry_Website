<?php
/*
Template Name: about-us
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                    <li><a href="#solutions">Oplossingen</a></li>
                    <li><a href="#customers">Klanten</a></li>
                    <li><a href="#integrations">Integraties</a></li>
                    <li class="link-secondary"><a href="#contact">Contact</a></li>
                </ul>
                <button aria-label="Navigation menu trigger" class="nav-trigger-mobile hidden-lg-up">
                    <span class="nav-hamburger">
                        <span class="nav-hamburger-inner"></span>
                    </span>
                </button>
                <div class="nav-mobile" aria-label="Navigation for mobile devices" aria-hidden="true" style="display: none;">
                    <ul>
                        <li><a href="#solutions">Oplossingen</a></li>
                        <li><a href="#customers">Klanten</a></li>
                        <li><a href="#integrations">Integraties</a></li>
                        <li class="link-secondary"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
  
        <main>
            <h1>hello<h1>
        </main>

        <!-- Footer -->
        <footer class="mt-8">
            <div class="container container-footer">
            <div class="row">
                <div class="col-md-6 col-sm-down">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibrylogo.svg" id="footer-logo" alt="Logo"></div>
                    <a href="#contact" class="btn btn-white smooth">Get in touch →</a>
                </div>
                <div class="col-md-6">
                <div class="row">
                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                    <ul class="footer-link">
                        <li><a class="smooth" href="#solutions">Oplossingen</a></li>
                    </ul>
                    </div>
                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                        <ul class="footer-link">
                        <li><a class="smooth" href="#customers">Klanten</a></li>
                    </ul>
                    </div>
                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                        <ul class="footer-link">
                        <li><a class="smooth" href="#integrations">Integraties</a></li>
                    </ul>
                    </div>

                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                        <ul class="footer-link">
                        <li><a class="smooth" href="#contact">Contact</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <hr class="white-hr mt-3 mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-down">
                <ul class="copyright">
                <li><a href="#">2024 Guide2Property</a></li>
                <li><a href="https://co-libry.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="https://co-libry.com/terms-of-use/">Terms Of Use</a></li>
                <li><a href="https://co-libry.com/wp-content/uploads/2022/01/Terms-Conditions-Co-libry-2022-1.pdf">Terms & Conditions</a></li>
                </div>
            </ul>
            <div class="col-md-6">
                <div class="social-links text-md-end mt-3 mt-md-0">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/colibrybe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/Facebook_f_logo_white.svg" alt="facebook logo"></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/co-libry/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/LinkedIn_icon_white.svg" alt="linkedin logo"></a>
                    </li>   
                </ul>
                </div>
            </div>
            </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>