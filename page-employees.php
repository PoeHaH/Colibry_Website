<?php get_header(); ?>
<section id="mission" class="mt-8">
    <div class="container">
        <h2 class="text-center">
            <span>Over</span>
            <span class="blue-text">ons</span><span class="yellow-text">.</span>
        </h2>
        <div class="sub-text">
            Jouw werkprocessen versterken en de efficiëntie van jouw vastgoedonderneming vergroten
        </div>
    </div>
</section>

<section id="about" class="mt-8">
    <div class="container">
        <div class="row center-cols">
            <div class="col-lg-6 col-12 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colibry-bird.svg" alt="Colibry bird logo">
            </div>

            <div class="col-lg-6 col-12">
                <h2 class="text-center-lg">
                    <span>Onze </span><span class="blue-text">missie</span><span class="yellow-text">.</span>
                </h2>
                <p>
                    Colibry is ontstaan uit de ambitie om makelaarskantoren te transformeren tot futureproof spelers in de vastgoedmarkt. 
                    Met een sterke focus op datagedreven automatisatie en personalisatie streven we ernaar om de bedrijfsvoering van onze klanten te optimaliseren en een ongeëvenaarde gebruikerservaring te bieden. 
                    Bij Colibry geloven we in de kracht van data en AI om groei te realiseren en klantrelaties te versterken. 
                    Ons toegewijde team staat klaar om jouw makelaarskantoor futureproof te maken.</p>
            </div>
    </div>
</section>

<section id="employees" class="employees-section mt-8">
    <div class="container">
        <h2 class="text-center">
            <span>Ons</span>
            <span class="blue-text">Team</span><span class="yellow-text">.</span>
        </h2>

        <div class="row mt-4">
            <?php 
            if( have_rows('employees') ): 
                while ( have_rows('employees') ) : the_row();
                    $avatar = get_sub_field('avatar');
                    $name = get_sub_field('name');
                    $specialties = get_sub_field('specialties');
            ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="employees-card mt-2">
                            <div class="employee-avatar">
                                <?php if($avatar): ?>
                                    <img src="<?php echo esc_url($avatar['url']); ?>" alt="<?php echo esc_attr($avatar['alt']); ?>">
                                <?php else: ?>
                                    <p>Image not found</p>
                                <?php endif; ?>
                            </div>
                            <div class="employee-content">
                                <h3 class="employee-name"><?php echo esc_html($name); ?></h3>
                                <p class="employee-specialties"><?php echo esc_html($specialties); ?></p>
                            </div>
                        </div>
                    </div>
            <?php 
                endwhile; 
            else : 
            ?>
                <p><?php _e( 'No Employees found', 'your-textdomain' ); ?></p>
            <?php 
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
