<?php get_header(); ?>

<section id="glossary-header" class="mt-8">
    <div class="container">
        <h2 class="text-center">
            <span>Colibry</span>
            <span class="blue-text">Glossary</span><span class="yellow-text">.</span>
        </h2>
        <div class="sub-text">
            Ontdek onze belangrijkste termen en begrippen die wij gebruiken.
        </div>
    </div>
</section>

<section class="glossary mt-5">
    <div class="glossary-letter-wrap">
        <?php foreach(range('a', 'z') as $letter): ?>
            <a href="#glossary-<?php echo $letter; ?>" class="glossary-link" style="text-transform: capitalize;"><?php echo $letter; ?></a>
        <?php endforeach; ?>
    </div>

    <div class="glossary-block">
        <div class="glossary-content-card mt-5">
            <?php
            if(have_rows('glossary')):
                while(have_rows('glossary')): the_row();
                    $title = get_sub_field('title');
                    $explanation = get_sub_field('explanation');
                    $first_letter = strtolower(substr($title, 0, 1));
            ?>
            <!-- Accordion Item -->
            <div id="glossary-<?php echo $first_letter; ?>" class="glossary-dropdown w-dropdown">
                <div class="glossary-toggle w-dropdown-toggle">
                    <div class="glossary-word-line">
                        <div class="glossary-word-wrap">
                            <a href="#" class="accordian-letter"><?php echo $first_letter; ?></a>
                            <div class="paragraph-large text-weight-bold"><?php echo $title; ?></div>
                        </div>
                        <div class="glossary-icon-wrapper">
                            <div class="icon-x-small w-embed">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5837 5.99999L7.99706 8.58666L5.41039 5.99999C5.15039 5.73999 4.73039 5.73999 4.47039 5.99999C4.21039 6.25999 4.21039 6.67999 4.47039 6.93999L7.53039 9.99999C7.79039 10.26 8.21039 10.26 8.47039 9.99999L11.5304 6.93999C11.7904 6.67999 11.7904 6.25999 11.5304 5.99999C11.2704 5.74666 10.8437 5.73999 10.5837 5.99999Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="glossary-list w-dropdown-list">
                    <div class="glossary-content">
                        <p class="paragraph-regular"><?php echo $explanation; ?></p>
                    </div>
                </nav>
            </div>
            <!-- End Accordion Item -->
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
</section>

<?php get_footer(); ?>