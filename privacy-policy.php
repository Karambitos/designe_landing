<?php

/*

    Template name: Privacy Policy

*/ ?>
<?php get_header(); ?>
<main>
    <div class="inner-page wrapper">
    <?php
    the_post();
    the_content();
    if ( have_rows( 'page_fields' ) ): ?>
        <?php while ( have_rows( 'page_fields' ) ) : the_row(); ?>
            <?php get_template_part( 'parts/'.get_row_layout() ); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>

