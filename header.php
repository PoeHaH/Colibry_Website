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
        <script> (function(ss,ex){ window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js'); })(document,'script'); })('DzLR5a5vQBz8BoQ2'); </script>
    </head>
    
    <body>
        <header>
        <nav class="navbar">
            <div class="nav-backdrop" aria-hidden="true" style="display: none;"></div>
                <a href="<?php echo home_url(); ?>" class="logo-container">
                    <object id="svg1" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibry1.svg" style="max-width: 174px;" alt="Colibry logo" class="hidden-md-down"></object>
                    <object id="svg2" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibry2.svg" style="max-width: 174px;" alt="Colibry logo" class="hidden-md-down"></object>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibry-bird.svg" style="max-width: 76px;" alt="Colibry logo" aria-hidden="true" class="hidden-lg-up">
                </a>
                <?php 
                    wp_nav_menu( [ 
                        'theme_location'    => 'main-menu', 
                        'container'         => false, 
                        'menu_class'        => 'links-container hidden-md-down', 
                        'menu_id'           => 'main-menu' 
                    ] ); 
                ?>
                <button aria-label="Navigation menu trigger" class="nav-trigger-mobile hidden-lg-up">
                    <span class="nav-hamburger">
                        <span class="nav-hamburger-inner"></span>
                    </span>
                </button>
                <div class="nav-mobile" aria-label="Navigation for mobile devices" aria-hidden="true" style="display: none;">
                    <?php 
                        wp_nav_menu( [ 
                            'theme_location'    => 'main-menu', 
                            'container'         => false, 
                            'menu_class'        => '', 
                            'menu_id'           => 'main-menu' 
                        ] ); 
                    ?>    
                </div>
            </nav>
        </header>
        <main>