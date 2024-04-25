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
            
            <section class="hero-section">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="text-center">
                            <span>Meer inkopen en verkopen</span>
                            <br>
                            <span class="blue-text">dankzij data en AI</span>
                            <span class="yellow-text">.</span>
                        </h1>
                        <!--<p style="text-align:center;" class="tagline">Automatiseer en personaliseer jouw communicatie</p>-->
                        <p class="text-center tagline">
                            Maak jouw makelaarskantoor futureproof in de vastgoedmarkt
                        </p>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#contact" class="btn btn-blue smooth">Laten we kennismaken</a>
                    </div>
                </div>
            </section>

            <section class="mt-5">
                <!--<div class="text-center mb-1">
                    <span class="opacity-65">Vertrouwd 40+ makelaars</span>
                </div>-->
                <div class="splide logo-carousel" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/Altro.svg" alt="Logo Altro" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/Bordes.svg" alt="Logo Bordes" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/era.svg" class="smaller" alt="Logo Era" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/immodavinci-1.svg" alt="Logo Immo Da Vinci" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/immovl.svg" class="smaller" alt="Logo ImmoVL"/>
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/janssen.svg" class="bigger" alt="Logo Janssen en Janssen" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/malines.svg" alt="Logo Malines" />
                            </div>
                            <div class="splide__slide">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/customers/vastgoeddejonghe.svg" alt="Logo Vastgoed Dejonghe" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-us mt-8">
                <div class="container">
                    <div class="box blue-bg no-bottom">
                        <div class="row center-cols">
                            <div class="col-lg-6 col-12">
                                <h2 class="text-center-lg">
                                    <span>Juiste </span><span class="blue-text">boodschap</span><span class="yellow-text">.</span>
                                </h2>
                                <p>
                                    Dankzij Colibry hoef je niet te jongleren met talloze tools. 
                                    Wij stroomlijnen jouw processen rechtstreeks vanuit jouw CRM. 
                                </p>
                                <p>
                                    Alle klant- en panddata wordt gecentraliseerd en we passen artificiële intelligentie (AI) toe voor optimale prestaties. 
                                </p>
                                <p>
                                    We geloven in de groei van immokantoren door datagedreven automation en personalisatie van communicatie en processen. 
                                </p>
                                <div class="mt-3 mb-3 text-center-lg">
                                    <a href="#contact" class="btn btn-blue smooth">
                                        Vraag een gratis demo aan
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main.png" alt="The cycle going from an incoming lead to a nurtured customer in real-estate">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-8 super-powers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-lg-0 order-1 mt-2-lg-down">
                            <div class="box blue-bg no-bottom text-center flex-row" style="height: 100%; align-items: end;">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/super-powers-new.png" loading="lazy" style="max-width: 450px;max-height: 450px;"  alt="Man holding a phone, doing realestate related tasks" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            
                            <h2 class="text-center-lg">
                                <span>Colibry geeft je</span>
                                <br/>
                                <span class="blue-text">super powers</span><span class="yellow-text">.</span>
                            </h2>
                            
                            <p class="text-center-lg">Als makelaar staat je klant centraal. Wil jij ook:  
                            </p>
                            
                            <ul class="list-unstyled">
                                <li class="benefit-card">
                                    <span>
                                        <svg width="1.4rem" height="1.4rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="blue-text"><path class="fa-secondary" opacity=".4" d="M113.2 66.3c.1-.8 .3-1.6 .4-2.3H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H270.4c.2 .8 .3 1.6 .4 2.3C290.1 72.6 304 90.7 304 112v24c0 13.3-10.7 24-24 24H192 104c-13.3 0-24-10.7-24-24V112c0-21.3 13.9-39.4 33.2-45.7zm74.2 162.3c6.2 6.2 6.2 16.4 0 22.6l-64 64c-6.2 6.2-16.4 6.2-22.6 0l-32-32c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L112 281.4l52.7-52.7c6.2-6.2 16.4-6.2 22.6 0zM192 304c0-8.8 7.2-16 16-16h96c8.8 0 16 7.2 16 16s-7.2 16-16 16H208c-8.8 0-16-7.2-16-16zm112 80c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16H304zM72 400a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/><path class="fa-primary" d="M113.2 66.3C119.6 28.7 152.5 0 192 0s72.4 28.7 78.8 66.3C290.1 72.6 304 90.7 304 112v24c0 13.3-10.7 24-24 24H192 104c-13.3 0-24-10.7-24-24V112c0-21.3 13.9-39.4 33.2-45.7zM216 80a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM187.3 228.7c6.2 6.2 6.2 16.4 0 22.6l-64 64c-6.2 6.2-16.4 6.2-22.6 0l-32-32c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L112 281.4l52.7-52.7c6.2-6.2 16.4-6.2 22.6 0zM72 400a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                                    </span>
                                    <span>
                                        Tijd vrijmaken door repititieve taken te outsourcen.
                                    </span>
                                </li>
                                <li class="benefit-card">
                                    <span>
                                        <svg width="1.4rem" height="1.4rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="blue-text"><path class="fa-secondary" opacity=".4" d="M0 112V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V112c0 15.1-7.1 29.3-19.2 38.4L275.2 313.6c-11.4 8.5-27 8.5-38.4 0L19.2 150.4C7.1 141.3 0 127.1 0 112z"/><path class="fa-primary" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48z"/></svg>
                                    </span>
                                    <span>
                                        Terug naar <i>inbox zero</i>
                                    </span>
                                </li>
                                <li class="benefit-card">
                                    <span>
                                        <svg width="1.4rem" height="1.4rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="blue-text"><path class="fa-secondary" opacity=".4" d="M224 80A80 80 0 1 0 64 80a80 80 0 1 0 160 0zm368 0A80 80 0 1 0 432 80a80 80 0 1 0 160 0zM106.7 192C47.8 192 0 239.8 0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7zm298 128c.2 0 .4 0 .7 0H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96z"/><path class="fa-primary" d="M320 320a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 32C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z"/></svg>
                                    </span>
                                    <span>
                                        Meer tijd hebben om je klanten bij te staan
                                    </span>
                                </li>
                                <li class="benefit-card">
                                    <span>
                                        <svg width="1.4rem" height="1.4rem" class="blue-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="fa-secondary" opacity=".4" d="M208 416A208 208 0 1 0 208 0a208 208 0 1 0 0 416zM104 216c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24V216zm80-96c0-13.3 10.7-24 24-24s24 10.7 24 24V280c0 13.3-10.7 24-24 24s-24-10.7-24-24V120zm80 64c0-13.3 10.7-24 24-24s24 10.7 24 24v96c0 13.3-10.7 24-24 24s-24-10.7-24-24V184z"/><path class="fa-primary" d="M104 216c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24V216zm80-96c0-13.3 10.7-24 24-24s24 10.7 24 24V280c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-160zm80 64c0-13.3 10.7-24 24-24s24 10.7 24 24v96c0 13.3-10.7 24-24 24s-24-10.7-24-24V184zM457.4 502.6L330.7 376C348 363.3 363.3 348 376 330.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0z"/></svg>
                                    </span>
                                    <span>
                                        Jouw ongebruikte database ten volle benutten
                                    </span>
                                </li>
                            </ul>
                            <div class="mt-2 text-center-lg">
                                <a href="#contact" class="btn btn-blue smooth">Colibry kan je hierbij helpen!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="fact-card">
                                <span class="fact">
                                    600+
                                </span>
                                <span class="desc">
                                    Gelukkige makelaars
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2-md-down">
                            <div class="fact-card">
                                <span class="fact">
                                    8.893
                                </span>
                                <span class="desc">
                                    Emails verstuurd per maand
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2-md-down">
                            <div class="fact-card">
                                <span class="fact">
                                    53u
                                </span>
                                <span class="desc">
                                    Per maand aan tijd bespaard
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="customers" class="mt-8">
                <div class="container">
                    <div class="box blue-bg">

                        <h2 class="text-center mb-4">
                            <span>Onze</span>
                            <span class="blue-text">klanten</span><span class="yellow-text">.</span>
                        </h2>

                        <div class="row">
                            <div class="col-12 col-lg-6">

                                <div class="testimonial-card">
                                    
                                    <div class="testimonial-content">
                                        <p>
                                            “Colibry helpt onze klanten hun woning sneller en makkelijker te vinden. 
                                            Ze worden als eerste op de hoogte gesteld als er nieuwe panden in onze database te vinden zijn. 
                                            Tevens zorgt Colibry ook voor meer leads via onze website.“
                                        </p>
                                    </div>

                                    <div class="testimonial-author">
                                        <div>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/michiel-van-hove.jpg" alt="Michael Van Hove" loading="lazy" />
                                        </div>
                                        <div class="author-info">
                                            <span class="author-name">Michiel Van Hove</span>
                                            <span class="author-role">CTO</span>
                                            <span class="author-cpy blue-text">Hillewaere Group</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-3-lg-down">

                                <div class="testimonial-card">
                                    
                                    <div class="testimonial-content">
                                        <p>“We wilden al veel eerder repetitieve taken automatiseren, maar de technologie was er nog niet. Dankzij Colibry hebben we automations om klanten beter te servicen en te informeren via mails en sms. Zo kunnen we focussen op de zaken die echt resultaten leveren.”</p>
                                    </div>

                                    <div class="testimonial-author">
                                        <div>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/malinesgroup.svg" alt="Andreas Van Deyck" loading="lazy" />
                                        </div>
                                        <div class="author-info">
                                            <span class="author-name">Andreas Van Deyck</span>
                                            <span class="author-role">Zaakvoerder</span>
                                            <span class="author-cpy blue-text">Malines Group</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    

            <section id="solutions" class="mt-8">
                <div class="container">
    
                    <h2 class="text-center">
                        <span>Onze</span>
                        <span class="blue-text">oplossingen</span><span class="yellow-text">.</span>
                    </h2>

                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <div class="box padding-small blue-bg flex flex-vcenter flex-hcenter">
                                        <img alt="Colibry dashboard example" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dashboard.png" loading="lazy" />
                                    </div>
                                </div>
                                <div class="solution-content">
                                    <h3 class="solution-title">Dashboards</h3>
                                    <p>
                                        Krijg inzicht in je prestaties en maak gefundeerde beslissingen. Met de dashboards van Colibry heb je alle essentiële gegevens binnen handbereik, zodat je je bedrijf effectief kunt sturen en groeien.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <div class="box padding-small lightgreen-bg flex flex-vcenter flex-hcenter">
                                        <img alt="AI and data abstractions" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/data-ai.png" loading="lazy" />
                                    </div>
                                </div>
                                <div class="solution-content">
                                    <h3 class="solution-title">Data & AI</h3>
                                    <p>
                                        Benut de kracht van data en AI om betere beslissingen te nemen. Colibry's geavanceerde technologie analyseert gebruikers- en pandgegevens, waardoor je dieper inzicht krijgt in je klanten en prospects, en slimmer kunt werken.
                                    </p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 col-md-6">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <div class="box padding-small lightpurple-bg flex flex-vcenter flex-hcenter">
                                        <img alt="Example of some of the integrations Colibry offers" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integrations.png" />
                                    </div>
                                </div>
                                <div class="solution-content">
                                    <h3 class="solution-title">Automatisatie</h3>
                                    <p>
                                        Automatiseer repetitieve taken, van follow-ups tot administratieve taken, zodat jij je kunt concentreren op wat echt belangrijk is: je klanten.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <div class="box padding-small apzg-bg flex flex-vcenter flex-hcenter">
                                        <img alt="Showing marketing connections" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/marketing.png" loading="lazy" />
                                    </div>
                                </div>
                                <div class="solution-content">
                                    <h3 class="solution-title">Marketing</h3>
                                    <p>
                                        Bereik de juiste doelgroep op het juiste moment met de juiste boodschap. Met Colibry verbetert je marketing en vergroot je bereik, waardoor je meer leads kunt genereren en je omzet kunt verhogen.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="mt-2 text-center">
                        <a href="#contact" class="btn btn-blue smooth">Contacteer ons</a>
                    </div>
                </div>
            </section>

            <section id="integrations" class="mt-8">
                <div class="container">
                    <h2 class="text-center">
                        <span>Onze</span>
                        <span class="blue-text">integraties</span><span class="yellow-text">.</span>
                    </h2>
                    <div class="sub-text">
                        Samen met onze partners streven we ernaar om jouw werkprocessen te versterken en de efficiëntie van jouw vastgoedonderneming te vergroten
                    </div>
                
                    <div class="logo-box mt-3">
                        <ul class="list-unstyled">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integraties/Zabun.svg" loading="lazy" alt="Zabun Logo"></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integraties/pipedrive.svg" loading="lazy" alt="Pipedrive Logo"></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integraties/Skarabee.svg" loading="lazy" alt="Skarabee Logo"></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integraties/Whise.svg" loading="lazy" alt="Whise Logo"></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/integraties/Omnicasa.svg" loading="lazy" alt="Omnicasa Logo"></li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="faq mt-8">
                <div class="container">
                    <h2 class="text-center">
                        <span>Veelgestelde</span>
                        <span class="blue-text">vragen</span><span class="yellow-text">.</span>
                    </h2>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <ul class="list-unstyled accordion">
                                <li>
                                    <input type="radio" name="accordion" id="first" checked>
                                    <label for="first">
                                        <span>Zijn jullie een CRM systeem?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                            Neen, maar we leggen we wel een connectie met jouw CRM systeem zodat jij in jouw vertrouwde omgeving kan blijven werken en wij automatiseren alles in de achtergrond.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="second">
                                    <label for="second">
                                        <span>Welke data verzamelen jullie?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                        We verzamelen zowat alle data die we kunnen verzamelen over prospecten, klanten en jullie panden. 
                                        Dat wil zeggen dat we data over je bezoekers opslaan: waar en wanneer die op je website is gekomen. 
                                        We koppelen deze aan jullie CRM data en combineren deze met onze automatisaties. 
                                        Onze AI systemen gebruiken die data om profielen van je bezoekers op te stellen.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="third">
                                    <label for="third">
                                        <span>Wat doen jullie juist met onze data?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>De data die we capteren wordt opgeslagen in onze database in Europa. We verwerken die data en onze AI kan daar slimme inzichten mee vergaren. We delen deze data niet met derden, tenzij het gaat om connecties naar jouw systemen of om onze eigen diensten te kunnen verzekeren.</p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="fourth">
                                    <label for="fourth">
                                        <span>Hoe zit dat met de GDPR wetgeving?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>Colibry volgt de GDPR wetgeving waar nodig. We functioneren als een "data processor", wat betekend dat wij voor jou persoonsgegevens kunnen verwerken.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="list-unstyled accordion">
                                <li>
                                    <input type="radio" name="accordion" id="fifth">
                                    <label for="fifth">
                                        <span>Wat automatiseren jullie juist?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                            We automatiseren marketing, sales en leveranciers communicatie. Dit gaande van mails en sociale media, over berichten en whatsapp tot het aansturen van de makelaars zodat zij telefonisch contact kunnen opnemen wanneer nodig.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="sixth">
                                    <label for="sixth">
                                        <span>Kan het design van de mailtjes aangepast worden volgens mijn stijl?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                        Uiteraard, bij elke opstart gaan we de mailtjes uitwerken zoals jij dit wilt. Heb je geen idee wat je precies wilt, dan maken wij een voorstel op basis van jouw website. En kan jij eenvoudig feedback geven.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="seventh">
                                    <label for="seventh">
                                        <span>Moet ik de inhoud van alle automation mails zelf schrijven?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                            Neen we hebben een uitgebreide basis van mails die we laten herschrijven door chat GPT. Jij moet deze enkel nog nalezen en aanpassen waar nodig.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="eight">
                                    <label for="eight">
                                        <span>Hebben jullie een voorbeeld van een marketing automatisaties?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                            Een marketing voorbeeld zijn onze marriage mails waar we rekening houden met het actuele zoekprofiel en checken of de zoekers ook nog een pand moeten verkopen in tweede fase. Het zoekprofiel houden we up-to-date door na te gaan of de zoekers de mails nog openen en klikken op de voorgestelde panden, of ze op jullie website naar hetzelfde type panden zoeken en of ze voor hetzelfde type panden eventueel een bezichtiging aanvragen. Als een van deze afwijkt van het profiel gaan we hen bevragen en het profiel updaten.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="nine">
                                    <label for="nine">
                                        <span>Hebben jullie een voorbeelden van een sales automatisaties?</span>
                                        <span>
                                            <svg fill="none" width="1.2rem" height="1.2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><ellipse cx="18.086" cy="17.5" rx="17.5" ry="18" transform="rotate(90 18.086 17.5)" fill="#ADC3FC"/><path transform="matrix(-.60312 .79765 .93835 .34568 29.401 13.077)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h12.202"/><path transform="matrix(.65872 .75238 .91982 -.39235 9.857 12)" stroke="#fff" stroke-width="4" stroke-linecap="round" d="M2-2h13.176"/></svg>
                                        </span>
                                    </label>
                                    <div class="content">
                                        <p>
                                            Een sales automatisatie kan bijvoorbeeld bij het inkoop proces zijn. De schatting is uitgevoerd maar het mandaat wordt niet getekend. Dit kan om tal van redenen zijn, men wil het eerst zelf proberen, een andere makelaar heeft het pand ingekocht, er is sprake van een echtscheiding of erfenis, men moet eerst nog een andere woning vinden. Wij gaan deze leads automatisch opvolgen. En als we merken dat zij terug interesse tonen door op de linken te klikken of op de website actief te zijn, dan gaan we de betreffende makelaar informeren.                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-2 text-center">
                        <a href="#contact" class="btn btn-blue smooth">Vragen? Contacteer ons</a>
                    </div>
                </div>
            </section>
      

            <section id="contact" class="mt-8">
                <div class="container">
                <h2 class="text-center">
                    <span>Plan nu uw</span>
                    <span class="blue-text">afspraak</span><span class="yellow-text">.</span>
                </h2>
                <div class="row">
                    <div class="col-12 flex-hcenter">
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/maxime-dejonghe/kennismaking-met-co-libry?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=0049ff"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                    </div>
                </div>
            </section>


            <section class="mt-8">
                <div class="container">
                    <div class="cta-end-text">
                        <h2>
                            <span>Samen op weg</span><br/>
                            <span>naar een</span> <span class="blue-text">hoger niveau</span><span class="yellow-text">.</span>
                        </h2>
                        <p class="sub-text">
                            Als je klaar bent om de volgende stap te zetten in de groei van jouw makelaarskantoor, neem dan vandaag nog contact met ons op.
                        </p>
                        <div class="mt-2">
                            <a class="btn btn-blue smooth" href="#contact">Maak een afspraak</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="mt-8">
            <div class="container container-footer">
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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

        <!-- Include Splide directly from CDN -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>

</html>