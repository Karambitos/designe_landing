<?php # TODO: code here ?>
<footer>
    <div class="footer">
        <div class="footer-address">
            <?php if ( have_rows( 'main_logo', 'option' ) ) : ?>
                <?php while ( have_rows( 'main_logo', 'option' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php if ( $logo ) { ?>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    <?php } ?>
                    <?php $link = get_sub_field( 'link' ); ?>
                    <?php if ( $link ) { ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="mobile-conteiner">
            <div class="footer-partner--links">
                <?php if (have_rows('partners', 'option')) : ?>
                    <?php while (have_rows('partners', 'option')) : the_row(); ?>
                        <div class="footer-partner--links-item">
                            <?php $link = get_sub_field('link'); ?>
                            <?php if ($link) { ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php $logo = get_sub_field('logo'); ?>
                                    <?php if ($logo) { ?>
                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                                    <?php } ?>
                                    <?php echo $link['title']; ?></a>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
            <div class="footer-links">
                <?php if (have_rows('links_list', 'option')) : ?>
                    <?php while (have_rows('links_list', 'option')) : the_row(); ?>
                        <ul>
                            <?php if (have_rows('links')) : ?>
                                <?php while (have_rows('links')) : the_row(); ?>
                                    <?php $link = get_sub_field('link'); ?>
                                    <?php if ($link) { ?>
                                        <li>
                                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        </li>
                                    <?php } ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="footer-logos">
                <?php if (have_rows('logos', 'option')) : ?>
                    <?php while (have_rows('logos', 'option')) : the_row(); ?>

                        <?php $logo_one = get_sub_field('logo_one'); ?>
                        <?php if ($logo_one) { ?>
                            <div class="footer-logos--item">
                                <img src="<?php echo $logo_one['url']; ?>" alt="<?php echo $logo_one['alt']; ?>"/>
                            </div>
                        <?php } ?>
                        <?php $logo_two = get_sub_field('logo_two'); ?>
                        <?php if ($logo_two) { ?>
                            <div class="footer-logos--item">
                                <img src="<?php echo $logo_two['url']; ?>" alt="<?php echo $logo_two['alt']; ?>"/>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
