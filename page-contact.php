<?php get_header(); ?>

<p>
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
                    <a href="#contact" class="btn btn-blue-stroke smooth">Maak een afspraak</a>
                    

                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-container">
                        <form id="Form" action="mailto:tech@co-libry.com" method="post" enctype="text/plain">
                            <div class="name-container">
                                <div class="name-field mr-1">
                                    <label for="fname">Voornaam*</label>
                                    <input type="text" id="fname" name="firstname" placeholder="Voornaam">
                                </div>
                                <div class="name-field">
                                <label for="lname">Achternaam</label>
                                <input type="text" id="lname" name="lastname" placeholder="Achternaam">
                                </div>
                            </div>

                            <label for="cname">Onderneming</label>
                            <input type="text" id="cname" name="companyname" placeholder="Onderneming">

                            <label for="email">Email*</label>
                            <input type="text" id="email" name="emailaddress" placeholder="Voorbeeld@email.com">
<!-- 
                            <label for="role">Role</label>
                            <select id="role" name="role">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            </select> -->
                                
                            <label for="subject">Onderwerp*</label>
                            <textarea id="subject" name="subject" placeholder="Stel je vraag..." style="height:200px"></textarea>

                            <div class="mt-0 mb-0 text-center-lg">
                                <button type="submit" class="btn btn-blue smooth" input type="submit" value="Submit">Verstuur</a>
                            </div>
                        </form>
                        <div id="error-message" style="display: none;">Vul de vereiste velden in(*)</div>
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
</p>

<?php get_footer(); ?>
