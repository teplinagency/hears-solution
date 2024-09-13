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
        <div class="container">
            <div class="flex-wrapper">

                <?php if ($title) { ?>
                    <h1><?php echo $title; ?></h1>
                <?php } ?>
                <?php if ($belowTitle) { ?>
                    <p class="below">
                        <?php echo $belowTitle; ?>
                    </p>
                <?php } ?>
                
                <div class="form-email">
                    <?php echo do_shortcode('[contact-form-7 id="e64cbc6" title="Form Email"]') ?>
                </div>
 
                <img src="/wp-content/uploads/2024/09/Frame-2147227644.png" alt="" class="main-banner__image">
            </div>
        </div>
    </section>
<?php } ?>