<?php
/**
 * Block Name: black-banner
 *
 * This is the template that displays the banner.
 */

$background = get_field('background');
$image = get_field('image');
$tag = get_field('tag');
$title = get_field('title');
$description = get_field('description');
$descriptionTitle = get_field('title_description');
$button = get_field('button');
$icons = get_field('icons');
$order = get_field('class');


?>
<?php if ($background || $tag || $title || $button) { ?>
    <section class="contact_us">
        <div class="main_info">
            <?php if ($tag) { ?>
                <p class="above">
                    <?php echo $tag; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h3><?php echo $title; ?></h3>
            <?php } ?>
            <div class="first-column"
                 style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
                <?php if ($descriptionTitle) { ?>
                    <p><?php echo $descriptionTitle; ?></p>
                <?php } ?>
                <?php if ($description) { ?>
                    <p><?php echo $description; ?></p>
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
            <div class="second-column">
                <?php if ($image): ?>
                    <img src="<?php echo $image?>">
                <?php
                endif; ?>
            </div>
        </div>
    </section>
<?php } ?>