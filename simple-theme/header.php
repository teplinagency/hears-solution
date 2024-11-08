<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NDBTZM7Q');</script>
    <!-- End Google Tag Manager -->

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDBTZM7Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
$logo = get_field('logo', 'options');
$button = get_field('button', 'options');

?> 
<div id="wrap">
    <header class="header">
        <div class="container flex v-center">
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
				 <a class="btn-gren" href="https://dashboard.hearstcorporation.io/" target="_blank" style="margin-right:11px">
                    Login 
                    <svg class="ico" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 17V18C3 19.6569 4.34315 21 6 21H7" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 3H18C19.6569 3 21 4.34315 21 6V7" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 3H6C4.34315 3 3 4.34315 3 6V7" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 17V18C21 19.6569 19.6569 21 18 21H17" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 14H14.75" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="9.5" cy="11.5" r="2.5" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 11.5H12" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                </a>
            <?php endif; ?>
			</div>
            <svg class="burger-btn" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.32812 15.9951H24.6682" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.32812 21.3388H24.6682" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.32812 10.6669H24.6682" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
        </div>
    </header>
