<?php
/**
 * Block Name: person card
 *
 * This is the template that displays the person card.
 */

$tag = get_field('tag');
$title = get_field('title');
$cards = get_field('cards');
?>
<?php if ($tag || $title || $cards) { ?>
    <section class="person-card" id="person-card">
        <div class="row1320">
            <?php if ($tag) { ?>
                <p class="above">
                    <?php echo $tag; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($cards) { ?>
                <div class="flex-wrapper">
                    <?php foreach ($cards as $card) {
                        $image = $card['image'];
                        $cardTitle = $card['title'];
                        $link = $card['link'];
                        $linkTitle = $card['link_title'];
                        $solutionText = $card['solution_text'];
                        if ($image || $cardTitle || $link || $solutionText) { ?>
                            <div class="card">
                                <?php if (!empty($image)): ?>
                                    <div class="photo">
                                        <img srcset="<?php echo esc_url($image['url']); ?> 2x"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($cardTitle) { ?>
                                    <h3><?php echo $cardTitle; ?></h3>
                                <?php } ?>
                                <?php if ($link):
                                    $link_url = $link['url'];

                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($link_url); ?>" rel="nofollow"
                                       target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($linkTitle); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($solutionText) { ?>
                                    <p><?php echo $solutionText; ?></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>