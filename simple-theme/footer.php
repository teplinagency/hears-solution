</div>
<?php
$background = get_field('background', 'options');
$image = get_field('image_pop_up', 'options');
$button = get_field('button', 'options');
$logo = get_field('logo', 'options');
$aboveTitle = get_field('above_title_cf', 'options');
$title = get_field('title_cf', 'options');
$form = get_field('form', 'options');
$topText = get_field('top_text', 'options');
$bottomText = get_field('bottom_text', 'options');
$btnBack = get_field('btn_back', 'options');
?>
<footer>
    <div class="row1320 flex v-center">
        <a href="<?php echo site_url(); ?>/" id="logo" class="logo">
            <?php if ( $logo ): ?>
                <img src="<?php echo $logo ?>" alt="logo">
            <?php endif; ?>
        </a>
        <nav class="main_nav  mobile_hide">
            <?php
            $main_nav = array(
                'theme_location' => 'main_menu',
                'menu'           => '',
                'container'      => false,
                'menu_class'     => 'level_a'
            );
            wp_nav_menu( $main_nav );
            ?>
        </nav>
        <?php if ($button):
            $link_url = $button['url'];
            $link_title = $button['title'];
            $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <a class="btn-transparent" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?>
            </a>
        <?php endif; ?>
    </div>
</footer>
<a href="#" class="burger desctop_hide"><span class="burger-icon "></span></a>
<div class="mobile_menu_container desctop_hide cfx"
     style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
<nav class="mobile_nav">
	<?php
	$mobile_nav = array(
		'theme_location' => 'main_menu',
		'menu'           => '',
		'container'      => false,
		'menu_class'     => 'level_a'
	);
	wp_nav_menu( $mobile_nav );
	?>
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
</nav>
</div>
<div class="pop-up-contact" id="contact-us">
    <div class="flex-wrapper">
        <?php if ($topText || $bottomText || $btnBack) { ?>
            <div class="left-content thank-you">
                <div class="wrapper">
                    <div class="top-content">
                        <p class="above" id="name-output"></p>
                        <?php if ($topText) { ?>
                            <div class="top-text"><?php echo $topText; ?></div>
                        <?php } ?>
                    </div>
                    <div class="bottom-content">
                        <?php if ($bottomText) { ?>
                            <div class="bottom-text"><?php echo $bottomText; ?></div>
                        <?php } ?>
                        <?php if ($btnBack): ?>
                            <a class="btn-white" href="/">
                                <?php echo $btnBack; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($aboveTitle || $title || $form) { ?>
            <div class="left-content cf">
                <?php if ($aboveTitle) { ?>
                    <p class="above">
                        <?php echo $aboveTitle; ?>
                    </p>
                <?php } ?>
                <?php if ($title) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } ?>
                <?php if ($form) { ?>
                    <div class="form-wrapper">
                        <?php echo $form; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if ($image || $logo) { ?>
            <div class="right-content"
                 style="<?php if ($image){ ?>background-image: url(<?php echo $image; ?>)<?php } ?>">
                <div id="logo" class="logo">
                    <?php if ( $logo ): ?>
                        <img src="<?php echo $logo ?>" alt="logo">
                    <?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>