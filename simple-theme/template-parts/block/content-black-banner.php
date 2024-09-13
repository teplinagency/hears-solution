<?php
/**
 * Block Name: black-banner
 *
 * This is the template that displays the banner.
 */

$background = get_field('background');
$tag = get_field('tag');
$title = get_field('title');
$description = get_field('subtext');
$button = get_field('button');
$icons = get_field('icons');
$order = get_field('class');


?>
<?php if ($background || $tag || $title || $button) { ?>
    <section class="black-banner">
        <div class="main_info"
             style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
            <div class="container <?php echo $order;?>">
                <div class="first-column">
                    <?php if ($tag) { ?>
                        <p class="above">
                            <?php echo $tag; ?>
                        </p>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <h3><?php echo $title; ?></h3>
                    <?php } ?>
                    <?php if ($description) { ?>
                        <p><?php echo $description; ?></p>
                    <?php } ?>
                </div>
                <div class="second-column">
                    <?php if ($icons): 
                         ?><div class="black_banner">
                             <?php foreach ($icons as $icon){
                                 if ($icon){
                                     $iconName = $icon['name'];
                                     $iconImage = $icon['image'];
                                     ?><div class="black_banner-icon">
                                         <img src="<?php echo $iconImage?>">
                                         <span><?php echo $iconName; ?></span>
                                     </div><?php
                                 }
                             }
                        ?></div><?php
                    endif; ?>
                    <?php if ($button):
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <a class="btn-green" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
                           target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                            <svg class="ico" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21L8 17.001V17H5C3.895 17 3 16.105 3 15V5C3 3.895 3.895 3 5 3H19C20.105 3 21 3.895 21 5V15C21 16.105 20.105 17 19 17H16L12 20.999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 12H8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 8H16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <svg class="bg-el-1" width="501" height="311" viewBox="0 0 501 311" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.4">
                <g filter="url(#filter0_f_862_10502)">
                <path d="M370.554 304.971L-104.683 -3.61298C-113.034 -9.03534 -109.194 -22 -99.237 -22H-26.37C-24.1761 -22 -22.043 -21.2785 -20.2996 -19.9467L382.07 287.419C384.547 289.31 386 292.249 386 295.365V296.584C386 304.516 377.207 309.29 370.554 304.971Z" fill="#11BA5F"/>
                <path d="M370.554 304.971L-104.683 -3.61298C-113.034 -9.03534 -109.194 -22 -99.237 -22H-26.37C-24.1761 -22 -22.043 -21.2785 -20.2996 -19.9467L382.07 287.419C384.547 289.31 386 292.249 386 295.365V296.584C386 304.516 377.207 309.29 370.554 304.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter1_f_862_10502)">
                <path d="M357.554 155.971L-117.683 -152.613C-126.034 -158.035 -122.194 -171 -112.237 -171H-39.37C-37.1761 -171 -35.043 -170.279 -33.2996 -168.947L369.07 138.419C371.547 140.31 373 143.249 373 146.365V147.584C373 155.516 364.207 160.29 357.554 155.971Z" fill="#028BE7"/>
                <path d="M357.554 155.971L-117.683 -152.613C-126.034 -158.035 -122.194 -171 -112.237 -171H-39.37C-37.1761 -171 -35.043 -170.279 -33.2996 -168.947L369.07 138.419C371.547 140.31 373 143.249 373 146.365V147.584C373 155.516 364.207 160.29 357.554 155.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter2_f_862_10502)">
                <path d="M214.561 124.995L-261.621 -183.608C-269.98 -189.026 -266.144 -202 -256.182 -202H-183.153C-180.962 -202 -178.832 -201.281 -177.09 -199.952L226.063 107.419C228.544 109.31 230 112.251 230 115.371V116.603C230 124.531 221.215 129.306 214.561 124.995Z" fill="#04CA95"/>
                <path d="M214.561 124.995L-261.621 -183.608C-269.98 -189.026 -266.144 -202 -256.182 -202H-183.153C-180.962 -202 -178.832 -201.281 -177.09 -199.952L226.063 107.419C228.544 109.31 230 112.251 230 115.371V116.603C230 124.531 221.215 129.306 214.561 124.995Z" stroke="white"/>
                </g>
                </g>
                <defs>
                <filter id="filter0_f_862_10502" x="-223.756" y="-136.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10502"/>
                </filter>
                <filter id="filter1_f_862_10502" x="-236.756" y="-285.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10502"/>
                </filter>
                <filter id="filter2_f_862_10502" x="-380.701" y="-316.5" width="725.201" height="557.617" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10502"/>
                </filter>
                </defs>
            </svg>
            <svg class="bg-el-2" width="561" height="302" viewBox="0 0 561 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.4">
                <g filter="url(#filter0_f_862_10506)">
                <path d="M130.446 621.971L605.683 313.387C614.034 307.965 610.194 295 600.237 295H527.37C525.176 295 523.043 295.721 521.3 297.053L118.93 604.419C116.453 606.31 115 609.249 115 612.365V613.584C115 621.516 123.793 626.29 130.446 621.971Z" fill="#11BA5F"/>
                <path d="M130.446 621.971L605.683 313.387C614.034 307.965 610.194 295 600.237 295H527.37C525.176 295 523.043 295.721 521.3 297.053L118.93 604.419C116.453 606.31 115 609.249 115 612.365V613.584C115 621.516 123.793 626.29 130.446 621.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter1_f_862_10506)">
                <path d="M143.446 472.971L618.683 164.387C627.034 158.965 623.194 146 613.237 146H540.37C538.176 146 536.043 146.721 534.3 148.053L131.93 455.419C129.453 457.31 128 460.249 128 463.365V464.584C128 472.516 136.793 477.29 143.446 472.971Z" fill="#028BE7"/>
                <path d="M143.446 472.971L618.683 164.387C627.034 158.965 623.194 146 613.237 146H540.37C538.176 146 536.043 146.721 534.3 148.053L131.93 455.419C129.453 457.31 128 460.249 128 463.365V464.584C128 472.516 136.793 477.29 143.446 472.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter2_f_862_10506)">
                <path d="M286.439 441.995L762.621 133.392C770.98 127.974 767.144 115 757.182 115H684.153C681.962 115 679.832 115.719 678.09 117.048L274.937 424.419C272.456 426.31 271 429.251 271 432.371V433.603C271 441.531 279.785 446.306 286.439 441.995Z" fill="#04CA95"/>
                <path d="M286.439 441.995L762.621 133.392C770.98 127.974 767.144 115 757.182 115H684.153C681.962 115 679.832 115.719 678.09 117.048L274.937 424.419C272.456 426.31 271 429.251 271 432.371V433.603C271 441.531 279.785 446.306 286.439 441.995Z" stroke="white"/>
                </g>
                </g>
                <defs>
                <filter id="filter0_f_862_10506" x="0.5" y="180.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10506"/>
                </filter>
                <filter id="filter1_f_862_10506" x="13.5" y="31.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10506"/>
                </filter>
                <filter id="filter2_f_862_10506" x="156.5" y="0.5" width="725.202" height="557.617" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_862_10506"/>
                </filter>
                </defs>
            </svg>
        </div>
    </section>
<?php } ?>