<?php get_header(); ?>

<section class="contact mt-5" id="contact">
    <div class="container">
        <div class="box blue-bg">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="text-center-lg">
                        <span>Contacteer </span><span class="blue-text">ons</span><span class="yellow-text">.</span>
                    </h2>
                    
                    <p>Heb je nog een vraag over onze producten, prijzen of Colibry algemeen?</p>
                    <p>Stel je vraag gerust via het contactformulier of maak een afspraak voor een gratis demo of meeting van 30 minuten. </p>
                    <p>Bij Colibry nemen we graag de tijd om al jouw vragen te beantwoorden.</p>
                    <a href="/#contact" class="btn btn-blue-stroke">Maak een afspraak</a>
                
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-container">
						<?php echo do_shortcode('[wpforms id="21" title="false"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-8">
    <div class="container">
        <div class="box">
            <p class="text-center tagline">
                “Colibry helpt onze klanten hun woning sneller en makkelijker te vinden. Ze worden als eerste op de hoogte gesteld als er nieuwe panden in onze database te vinden zijn. Tevens zorgt Colibry ook voor meer leads via onze website.“
            </p>
        </div>
    </div>

</section>

<?php get_footer(); ?>
