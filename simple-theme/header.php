<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wpa_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php /* favicon */ ?>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo theme(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo theme(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo theme(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="<?php echo theme(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#181818">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<?php /* end favicon */ ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php
$logo = get_field('logo', 'options');
$button = get_field('button', 'options');

?> 
<div id="wrap">
    <header class="header">
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
			<div class="buttons-wrapper">
				 <a class="btn-transparent" href="https://dashboard.hearstcorporation.io/" target="_blank" style="margin-right:11px">
                    Login
                </a>
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
        
        </div>
    </header>
