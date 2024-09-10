<?php
/**
 * Block Name: main-banner
 *
 * This is the template that displays the banner.
 */

$background = get_field('background');
$belowTitle = get_field('subtext_below_title');
$title = get_field('title');
$button = get_field('button-new', 'options');
?>
<?php if ($background || $belowTitle || $title || $button) { ?>
    <section class="main-banner"
             style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
        <div class="row1320">
            <div class="flex-wrapper">

                <?php if ($title) { ?>
                    <h1><?php echo $title; ?></h1>
                <?php } ?>
                <?php if ($belowTitle) { ?>
                    <p class="below">
                        <?php echo $belowTitle; ?>
                    </p>
                <?php } ?>
                <?php if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a class="btn2" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php } ?>