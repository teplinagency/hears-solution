<?php
/**
 * Block Name: black-banner
 *
 * This is the template that displays the banner.
 */

$background = get_field('background');
$tag = get_field('tag');
$title = get_field('title');
$description = get_field('subtext');
$button = get_field('button');
$icons = get_field('icons');
$order = get_field('class');


?>
<?php if ($background || $tag || $title || $button) { ?>
    <section class="banner"
             style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
        <div class="main_info">
            <div class="<?php echo $order;?>">
                <div class="first-column">
                    <?php if ($tag) { ?>
                        <p class="above">
                            <?php echo $tag; ?>
                        </p>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <h3><?php echo $title; ?></h3>
                    <?php } ?>
                    <?php if ($description) { ?>
                        <p><?php echo $description; ?></p>
                    <?php } ?>
                </div>
                <div class="second-column">
                    <?php if ($icons):

                         ?><div class="black_banner">
                             <?php foreach ($icons as $icon){
                                 if ($icon){
                                     $iconName = $icon['name'];
                                     $iconImage = $icon['image'];
                                     ?><div>
                                         <img src="<?php echo $iconImage?>">
                                         <span><?php echo $iconName; ?></span>
                                     </div><?php
                                 }
                             }
                        ?></div><?php
                    endif; ?>
                    <?php if ($button):
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <a class="btn-white" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
                           target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>