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
                    <form action="">
                        <div class="form-row"> 
                            <div class="form-item">
                                <input type="text" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn-gren">
                                Start Mining
                                <svg class="ico" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1989 10.1953V10.1953C20.1929 10.1953 20.9999 11.0013 20.9999 11.9963V11.9963C20.9999 12.9903 20.1939 13.7973 19.1989 13.7973V13.7973C18.2049 13.7973 17.3979 12.9913 17.3979 11.9963V11.9963C17.3999 11.0013 18.2059 10.1953 19.1989 10.1953Z" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 5.83594V5.83594C12.9942 5.83594 13.8012 6.64194 13.8012 7.63694V7.63694C13.8012 8.63094 12.9952 9.43794 12.0002 9.43794V9.43794C11.0062 9.43694 10.1992 8.63194 10.1992 7.63694V7.63694C10.1992 6.64194 11.0052 5.83594 12.0002 5.83594Z" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 14.5625V14.5625C12.9942 14.5625 13.8012 15.3685 13.8012 16.3635V16.3635C13.8012 17.3575 12.9952 18.1645 12.0002 18.1645V18.1645C11.0062 18.1645 10.1992 17.3585 10.1992 16.3635V16.3635C10.1992 15.3675 11.0052 14.5625 12.0002 14.5625Z" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.2999 9.50188L13.6099 8.42188" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.69 12.9688L16 14.0488" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.801 13.8041V13.8041C3.807 13.8041 3 12.9981 3 12.0031V12.0031C3 11.0091 3.806 10.2031 4.801 10.2031V10.2031C5.795 10.2031 6.602 11.0091 6.602 12.0041V12.0041C6.6 12.9981 5.794 13.8041 4.801 13.8041Z" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.7002 14.5L10.3902 15.58" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.31006 11.0331L8.00006 9.95312" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 18V19C3 20.105 3.895 21 5 21H6" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 6V5C21 3.895 20.105 3 19 3H18" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 3H5C3.895 3 3 3.895 3 5V6" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18 21H19C20.105 21 21 20.105 21 19V18" stroke="#11BA5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> 
                            </button>
                        </div>   
                    </form>
                </div>
 
                <img src="http://hearts-solution.local/wp-content/uploads/2024/09/Frame-2147227644.png" alt="" class="main-banner__image">  
            </div>
        </div>
    </section>
<?php } ?>