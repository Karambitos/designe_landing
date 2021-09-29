<?php if ($hero_block = get_field('hero_block')): ?>
<section class="hero-section">
    <div class="hero">
        <h2>HELLO WORLD</h2>
        <h3>Git test</h3>
        <div class="row first-row">
            <div class="hero--logo hero--item">
                <?php if ($h_logo = $hero_block['hero_logo']):?>
                    <img src="<?php echo $h_logo['url'] ?>" alt="<?php echo $h_logo['alt'] ?>">
                <?php endif; ?>
            </div>
            <div class="hero--title hero--item">
                <?php if ($h_title = $hero_block['h_title']): ?>
                    <h2><?php echo $h_title; ?> </h2>
                <?php endif; ?>
                <?php if ($h_title2 = $hero_block['h_title2']): ?>
                    <h2><?php echo $h_title2; ?> </h2>
                <?php endif; ?>
            </div>
            <div class="hero--img hero--item img-box">
                <?php if ($h_image = $hero_block['image_one']):?>
                    <img src="<?php echo $h_image['url']?>" alt="<?php echo $h_image['alt'] ?>">
                    <p class="img-box--text"><?php echo $h_image['caption'] ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row second-row">
            <div class="hero--img hero--item img-box">
                <?php if ($h_image2 = $hero_block['image_two']): ?>
                    <img src="<?php echo $h_image2['url']?>" alt="<?php echo $h_image2['alt'] ?>">
                    <p class="img-box--text"><?php echo $h_image2['caption'] ?></p>
                <?php endif; ?>
            </div>
            <div class="hero--link hero--item">
                <?php if ($hero_link = $hero_block['hero_link']): ?>
                <a href="<?php echo $hero_link['url'] ?>" title="<?php echo $hero_link['title'] ?>" <?php if ($hero_link['target'] == '_blank'): ?> target="_blank"<?php endif; ?>>
                    <span class="icon icon-left icon-right-arrow"></span>
                    <span class="text-link"><?php echo $hero_link['title'] ?></span>
                    <span class="icon icon-right icon-right-arrow"></span>
                </a>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
