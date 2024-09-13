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
    <section class="person-card" id="<?php echo $tag == 'Expertise' ? 'expertise' : 'person-card'?>">
        <div class="container">
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
                        $solutionText = $card['solution_text'];
                        if ($image || $cardTitle || $link || $solutionText) { ?>
                            <div class="card">
                                <?php if (!empty($image)): ?>
                                    <div class="photo">
                                        <img src="<?php echo esc_url($image['url']); ?>" "/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($cardTitle) { ?>
                                    <h3><?php echo $cardTitle; ?></h3>
                                <?php } ?>
                                
                                <?php if ($solutionText) { ?>
                                    <p><?php echo $solutionText; ?></p>
                                <?php } ?>

                                <?php if ($link):
                                    $link_url = $link['url'];

                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($link_url); ?>" rel="nofollow" class="link"
                                        target="<?php echo esc_attr($link_target); ?>">
                                        Learn more
                                        <svg class="ico" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.49967 4.00063C12.9179 6.20974 18.2905 11.5823 20.4996 16.0005C22.7087 20.4188 20.9179 22.2096 16.4996 20.0005C12.0814 17.7914 6.70883 12.4188 4.49971 8.00059C2.2906 3.58235 4.08144 1.79151 8.49967 4.00063" stroke="#11BA5F" stroke-width="1.49999" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.4996 3.9995C20.9179 1.79039 22.7087 3.58123 20.4996 7.99946C18.2905 12.4177 12.9179 17.7903 8.49967 19.9994C4.08143 22.2085 2.29059 20.4176 4.49971 15.9994C6.70883 11.5812 12.0814 6.20862 16.4996 3.9995" stroke="#11BA5F" stroke-width="1.49999" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.862 12C12.862 12.207 12.7 12.375 12.5 12.375C12.3 12.375 12.138 12.207 12.138 12C12.138 11.793 12.3 11.625 12.5 11.625C12.7 11.625 12.862 11.793 12.862 12" stroke="#11BA5F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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