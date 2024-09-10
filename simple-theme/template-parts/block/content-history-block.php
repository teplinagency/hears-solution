<?php
/**
 * Block Name: black-banner
 *
 * This is the template that displays the banner.
 */


$tag = get_field('tag');
$title = get_field('title');
$subTitle = get_field('subtitle');
$blocks = get_field('blocks')

?>
<?php if ( $tag || $title || $blocks) { ?>
    <section class="banner"

        <div class="">
            <div class="flex-wrapper">
                <?php if ($tag) { ?>
                    <p class="above">
                        <?php echo $tag; ?>
                    </p>
                <?php } ?>
                <?php if ($title) { ?>
                    <h3><?php echo $title; ?></h3>
                <?php } ?>
                <?php if ($subTitle) { ?>
                    <div><?php echo $subTitle; ?></div>
                <?php } ?>

                <?php if ($blocks):

                     ?><div class="history_blocks">
                         <?php foreach ($blocks as $block){
                             if ($block){
                                 $blockTitle = $block['title'];
                                 $content = $block['content'];
                                 $yearIcon = $block['year_icon'];
                                 $year = $block['year'];
                                 $imageUrl = $block['image'];
                                 ?><div>
                                     <img src="<?php echo $imageUrl?>">
                                     <div>
                                         <img src="<?php echo $yearIcon?>">
                                         <span><?php echo $year; ?></span>
                                     </div>
                                    <div>
                                        <h3><?php echo $blockTitle?></h3>
                                        <p><?php echo $content?></p>
                                    </div>

                                 </div><?php
                             }
                         }
                    ?></div><?php
                endif; ?>

            </div>
        </div>
    </section>
<?php } ?>