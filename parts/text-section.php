<?php if ($text_block = get_field('text_block')): ?>
    <section class="text-section">
        <div class="row">
            <div class="text-section--box">
                <?php if ($t_title = $text_block['title']): ?>
                    <span class="section--title"><?php echo $t_title; ?></span>
                <?php endif; ?>
                <?php if ($t_sub_title = $text_block['sub_title']): ?>
                    <h2><?php echo $t_sub_title; ?></h2>
                <?php endif; ?>
            </div>
            <div class="text-section--box">
                <?php if ($t_text = $text_block['text']): ?>
                    <?php echo $t_text; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


