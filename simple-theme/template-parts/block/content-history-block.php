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
    <section class="history">

        <div class="container">
                <?php if ($tag) { ?>
                    <p class="above">
                        <?php echo $tag; ?>
                    </p>
                <?php } ?>
                <?php if ($title) { ?>
                    <h3 class="h2"><?php echo $title; ?></h3>
                <?php } ?>
                <?php if ($subTitle) { ?>
                    <div class="desc"><?php echo $subTitle; ?></div>
                <?php } ?>

                <div class="flex-wrapper">
                    <?php if ($blocks): 
                     ?><div class="history_blocks">
                         <?php foreach ($blocks as $block){
                             if ($block){
                                 $blockTitle = $block['title'];
                                 $content = $block['content'];
                                 $yearIcon = $block['year_icon'];
                                 $year = $block['year'];
                                 $imageUrl = $block['image'];
                                 ?><div class="history_block">
                                     <div class="img">
                                        <img src="<?php echo $imageUrl?>">
                                     </div> 
                                     <div class="year">
                                         <img src="<?php echo $yearIcon?>">
                                         <span><?php echo $year; ?></span>
                                         <svg width="34" height="180" viewBox="0 0 34 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 1L8.36075 17.0186C-1.22699 34.7959 -1.22699 56.2041 8.36074 73.9814L17 90L25.6393 106.019C35.227 123.796 35.227 145.204 25.6393 162.981L17 179" stroke="url(#paint0_linear_891_10481)"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_891_10481" x1="17" y1="1" x2="17" y2="179" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" stop-opacity="0.1"/>
                                            <stop offset="0.499885" stop-color="#11BA5F" stop-opacity="0.5"/>
                                            <stop offset="1" stop-color="white" stop-opacity="0.1"/>
                                            </linearGradient>
                                            </defs>
                                         </svg>
                                     </div>
                                    <div class="text">
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