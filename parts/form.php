<?php
$f_form = get_sub_field('f_form')[0]; ?>
<section id="form<?php echo get_row_index(); ?>" class="form-section">
    <div class="wrapper">
        <div class="row">
            <div class="form--box">
                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                <div class="form--success">
                    <?php if (have_rows('form_group')) : ?>
                        <?php while (have_rows('form_group')) : the_row(); ?>
                            <div class="form--title">
                                <span class="section--title"><?php the_sub_field('form_title'); ?></span>
                            </div>
                            <h3 id="message"><?php the_sub_field('form_success_message'); ?></h3>
                            <button type="button">
                                <span class="icon icon-left icon-right-arrow"></span><span class="text-link"><?php the_sub_field('form_success_button'); ?></span><span class="icon icon-right icon-right-arrow"></span>
                            </button>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="form--container modal-show">
                    <div class="form--title">
                        <?php if (have_rows('form_group')) : ?>
                            <?php while (have_rows('form_group')) : the_row(); ?>
                                <span class="section--title"><?php the_sub_field('form_title'); ?></span>
                                <h3><?php the_sub_field('form_subtitle'); ?></h3>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php echo do_shortcode("[contact-form-7 id=\"18\" title=\"Main Form\"]"); ?>
                </div>
            </div>
        </div>
    </div>
</section>


