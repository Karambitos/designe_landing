<?php if (have_rows('slider_block')) : ?>
    <?php while (have_rows('slider_block')) : the_row(); ?>
        <section class="slider">
            <div class="wrapper">
                <div class="section--title-box">
                    <span class="section--title section--title-slider"><?php the_sub_field('title'); ?></span>
                </div>
                <?php if (have_rows('slides')): ?>
                <div class="swiper-picture--box">
                    <div class="swiper-picture swiper-container">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('slides')): the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="slide-number--box">
                                        <?php if ($slide_number = get_sub_field('slide_number')): ?>
                                            <span class="slide-number"><?php echo $slide_number; ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="img-box">
                                        <?php if ($image = get_sub_field('image')): ?>
                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                            <p class="img-box--text"><?php echo $image['caption'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="slide-title--box">
                                        <?php if ($image_text = get_sub_field('image_text')): ?>
                                            <p class="slide-title"><?php echo $image_text; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <div class="arrows">
                            <div class="swiper-button-prev"><span class="icon icon-left-arrow"></span></div>
                            <div class="swiper-button-next"><span class="icon icon-right-arrow"></span></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>





