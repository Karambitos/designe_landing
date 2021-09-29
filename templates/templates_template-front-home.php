<?php

/*

Template name: Home-front

*/ ?>
<?php get_header(); the_post();?>
<main>
    <?php get_template_part( 'parts/hero' ); ?>
    <?php get_template_part( 'parts/text-section' ); ?>
    <?php get_template_part( 'parts/picture' ); ?>
    <?php get_template_part( 'parts/text-picture' ); ?>
    <?php get_template_part( 'parts/text-slider' ); ?>
    <?php get_template_part( 'parts/slider' ); ?>
    <?php get_template_part( 'parts/form' ); ?>
</main>
<?php get_footer(); ?>
