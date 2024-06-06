    </main>

    <!-- Footer -->
    <footer class="mt-8">
        <div class="container container-footer">
            <div class="row">
                <div class="col-md-6 col-sm-down">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibrylogo.svg" id="footer-logo" alt="Logo"></div>
                    <a href="/contact" class="btn btn-white">Get in touch →</a>
                </div>
                <div class="col-md-6 col-sm-down">
                <div class="row">
                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                        <h4>Company</h4>
                        <?php 
                            wp_nav_menu( [ 
                                'theme_location'    => 'footer-menu-company', 
                                'container'         => false, 
                                'menu_class'        => 'footer-link', 
                                'menu_id'           => 'footer-menu-company' 
                            ] ); 
                        ?>
                    </div>
                    <div class="col-6 col-md-5 col-lg-5 footer-column">
                        <h4>Resources</h4>
                            <ul class="footer-link">
                                <li><a class="smooth" href="#blogs">Blog</a></li>
                                <li><a class="smooth" href="#glossary">Glossary</a></li>
                            </ul>
                    </div>
                </div>
                </div>
            </div>
            <hr class="white-hr mt-3 mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-down">
                    <?php 
                        wp_nav_menu( [ 
                            'theme_location'    => 'footer-menu-bottom', 
                            'container'         => false, 
                            'menu_class'        => 'copyright', 
                            'menu_id'           => 'footer-menu-bottom' 
                        ] ); 
                    ?>
                </div>
                <div class="col-md-6 col-sm-down">
                    <div class="social-links text-md-end mt-md-0">
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

    <!-- Include Splide directly from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>