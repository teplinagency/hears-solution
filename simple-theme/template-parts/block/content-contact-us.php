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
        <div class="container">
            <?php if ($tag) { ?>
                <p class="above">
                    <?php echo $tag; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h3 class="h2"><?php echo $title; ?></h3>
            <?php } ?>
            <div class="flex-wrapper">
                <div class="first-column"
                    style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
                    <?php if ($descriptionTitle) { ?>
                        <p class="titl"><?php echo $descriptionTitle; ?></p>
                    <?php } ?>
                    <?php if ($description) { ?>
                        <p class="dsc"><?php echo $description; ?></p>
                    <?php } ?>

                    <?php if ($button):
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <a class="btn-white" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                            <svg class="ico" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 19L6 15.001V15H3C1.895 15 1 14.105 1 13V3C1 1.895 1.895 1 3 1H17C18.105 1 19 1.895 19 3V13C19 14.105 18.105 15 17 15H14L10 18.999" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 10H6" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 6H14" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>  
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
        </div>
    </section>
<?php } ?>