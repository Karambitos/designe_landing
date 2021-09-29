<?php if ($text_picture_block = get_field('text_picture_block')):?>
    <section class="text-picture">
        <div class="row">
            <div class="text-section--container">
                <div class="text-section--box">
                    <?php if ($title = $text_picture_block['title']): ?>
                        <span class="section--title"><?php echo $title; ?></span>
                    <?php endif; ?>
                    <?php if ($sub_title = $text_picture_block['sub_title']): ?>
                        <h3><?php echo $sub_title; ?></h3>
                    <?php endif; ?>
                </div>
                <div class="text-section--box">
                    <?php if ($text = $text_picture_block['text']): ?>
                       <?php echo $text; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="picture-section--box">
                <?php if ($picture = $text_picture_block['image']):?>
                    <img src="<?php echo $picture['url'] ?>" alt="<?php echo $picture['alt'] ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>




