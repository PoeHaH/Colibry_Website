<?php get_header(); ?>

<section id="blogs" class="mt-8">
    <div class="container">
        <h2 class="text-center">
            <span>Colibry</span>
            <span class="blue-text">blog</span><span class="yellow-text">.</span>
        </h2>
        <div class="row mt-4">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="col-12 col-md-4">
                        <a href="<?php the_permalink(); ?>" class="blog-card">
                            <div class="blog-img">
                                <div class=" flex flex-vcenter flex-hcenter">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ); ?>
                                        <img alt="<?php the_title_attribute(); ?>" src="<?php echo $featured_image[0]; ?>" loading="lazy" />
                                    <?php else : ?>
                                        <img alt="Default image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/default-image.png" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('No Blog Posts found', 'colibry' ); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="pagination">
        <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __( 'Vorige' , 'textdomain'),
            'next_text' => __( 'Volgende', 'textdomain'),
        )); ?>
    </div>
</section>

<?php get_footer(); ?>