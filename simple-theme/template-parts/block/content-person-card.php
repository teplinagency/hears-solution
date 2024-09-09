<?php
/**
 * Block Name: person card
 *
 * This is the template that displays the person card.
 */

$aboveTitle = get_field('above_title');
$title = get_field('title');
$cards = get_field('cards');
?>
<?php if ($aboveTitle || $title || $cards) { ?>
    <section class="person-card" id="person-card">
        <div class="row1320">
            <?php if ($aboveTitle) { ?>
                <p class="above">
                    <?php echo $aboveTitle; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($cards) { ?>
                <div class="flex-wrapper">
                    <?php foreach ($cards as $card) {
                        $photo = $card['photo'];
                        $name = $card['name'];
                        $link = $card['link'];
                        $position = $card['position'];
                        $text = $card['text'];
                        if ($photo || $name || $link || $position ||$text) { ?>
                            <div class="card">
                                <?php if (!empty($photo)): ?>
                                    <div class="photo">
                                        <img srcset="<?php echo esc_url($photo['url']); ?> 2x"
                                             src="<?php echo esc_url($photo['url']); ?>"
                                             alt="<?php echo esc_attr($photo['alt']); ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($name) { ?>
                                    <h3><?php echo $name; ?></h3>
                                <?php } ?>
                                <?php if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($link_url); ?>" rel="nofollow"
                                       target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($position) { ?>
                                    <div class="position"><?php echo $position; ?></div>
                                <?php } ?>
                                <?php if ($text) { ?>
                                    <p><?php echo $text; ?></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>