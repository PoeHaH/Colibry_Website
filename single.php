<?php get_header(); ?>

<section class="blogpost mt-8">
    <div class="container">
        <div class="row flex-hcenter">
            <div class="col-lg-10 col-12 mx-auto">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2 class="text-left mb-4">
                        <span><?php the_title(); ?></span>
                    </h2>
                    <div class="box blue-bg">
                        <div class="blog-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'colibry' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>