<?php
/**
 * Block Name: person card
 *
 * This is the template that displays the person card.
 */

$tag = get_field('tag');
$title = get_field('title');
$backgroundUrl = get_field('background');
$blockBackgroundUrl = get_field('image_of_block');
$offices = get_field('offices')
?>
<?php if ( $title || $offices) { ?>
    <section class="" id=""
             style="<?php if ($backgroundUrl){ ?>background-image: url(<?php echo $backgroundUrl; ?>)<?php } ?>">
        <div class="">
            <?php if ($tag) { ?>
                <p class="above">
                    <?php echo $tag; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($offices) { ?>
                <div class="block-map" style="<?php if ($blockBackgroundUrl){ ?>background-image: url(<?php echo $blockBackgroundUrl; ?>)<?php } ?>"></div>
                <div class="flex-wrapper">
                    <?php foreach ($offices as $office) {
                        $name = $office['name'];
                        $titleOffice = $office['title'];
                        $subtitle = $office['subtitle'];
                        $address = $office['address'];
                        $class = $office['class'];

                        if ($name || $titleOffice || $subtitle || $address ||$class) { ?>
                            <div class="card">
                                <?php if (!empty($name)): ?>
                                    <div class="<?php echo $class;?>">
                                        <div><?php echo $name;?></div>
                                        <icon></icon>
                                    </div>
                                <?php endif; ?>
                                <div class="offices_info">
                                    <?php if ($titleOffice) { ?>
                                        <h3><?php echo $titleOffice; ?></h3>
                                    <?php } ?>
                                    <?php if ($subtitle) { ?>
                                        <div class=""><?php echo $subtitle; ?></div>
                                    <?php } ?>
                                    <?php if ($address) { ?>
                                        <p><?php echo $address; ?></p>
                                    <?php } ?>
                                </div>


                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>