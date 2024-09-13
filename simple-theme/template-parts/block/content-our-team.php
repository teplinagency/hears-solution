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
    <section class="our-team" id="our-team">
        <div class="container"> 
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
                                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5418L10.7352 1.67808H3.99243V0.929728L11.2245 0.929728L11.4747 0.929728L11.4747 0.929688L11.4748 0.929728H11.9729H11.9749V1.43585L12.0007 1.462L11.9749 1.48814V1.67808H11.9729V9.00779H11.2245V2.24748L0.526008 13.0741L0 12.5418Z" fill="#757B7A"/>
                                        </svg>
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