<?php
/**
 * Block Name: person card
 *
 * This is the template that displays the person card.
 */

$tag = get_field('tag');
$title = get_field('title');
$persons = get_field('persons');
?>
<?php if ($tag || $title || $persons) { ?>
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
            <?php if ($persons) { ?>
                <div class="flex-wrapper">
                    <?php foreach ($persons as $person) {
                        $photo = $person['image'];
                        $name = $person['name'];
                        $link = $person['linkedin'];
                        $position = $person['post'];

                        if ($photo || $name || $link || $position ) { ?>
                            <div class="card">
                                <?php if (!empty($photo)): ?>
                                    <div class="photo">
                                        <img src="<?php echo esc_url($photo); ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($name) { ?>
                                    <h3><?php echo $name; ?></h3>
                                <?php } ?>

                                <?php if ($position) { ?>
                                    <div class="position"><?php echo $position; ?></div>
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
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>