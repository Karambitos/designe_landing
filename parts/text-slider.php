<?php if (have_rows('text_slider_group')) : ?>
    <?php while (have_rows('text_slider_group')) : the_row(); ?>
        <section class="text-slider">
            <div class="swiper-text--box">
                <div class="swiper-text swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <h3><?php the_sub_field('left_title'); ?></h3>
                            <ul>
                                <?php if (have_rows('left_column')): ?>
                                    <?php while (have_rows('left_column')): the_row(); ?>
                                        <?php if ($l_list_item = get_sub_field('text')): ?>
                                            <li><?php echo $l_list_item; ?></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <h3><?php the_sub_field('right_title'); ?></h3>
                            <ul>
                                <?php if (have_rows('right_column')): ?>
                                    <?php while (have_rows('right_column')): the_row(); ?>
                                        <?php if ($r_list_item = get_sub_field('text')): ?>
                                            <li><?php echo $r_list_item; ?></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>



