<?php
/**
 * Block Name: banner
 *
 * This is the template that displays the banner.
 */

$background = get_field('background');
$aboveTitle = get_field('above_title');
$title = get_field('title');
$button = get_field('button', 'options');
?>
<?php if ($background || $aboveTitle || $title || $button) { ?>
    <section class="banner"
             style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
        <div class="row1320">
            <div class="flex-wrapper">
                <?php if ($aboveTitle) { ?>
                    <p class="above">
                        <?php echo $aboveTitle; ?>
                    </p>
                <?php } ?>
                <?php if ($title) { ?>
                    <h1><?php echo $title; ?></h1>
                <?php } ?>
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
    </section>
<?php } ?>