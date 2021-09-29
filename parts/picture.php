<?php if ($picture_block = get_field('picture_block')):?>
    <section class="picture">
        <div class="picture-box img-box">
            <?php if ($picture = $picture_block['picture']):?>
                <img src="<?php echo $picture['url'] ?>" alt="<?php echo $picture['alt'] ?>">
                <p class="img-box--text"><?php echo $picture['caption'] ?></p>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
