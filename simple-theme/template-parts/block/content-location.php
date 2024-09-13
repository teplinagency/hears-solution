<?php
/**
 * Block Name: person card
 *
 * This is the template that displays the person card.
 */

$tag = get_field('tag');
$title = get_field('title');
$backgroundUrl = get_field('background');
$blockBackgroundUrl = get_field('image_of_block');
$offices = get_field('offices')
?>
<?php if ( $title || $offices) { ?>
    <section class="map-block" id="">
        <div class="map-block__body" style="<?php if ($backgroundUrl){ ?>background-image: url(<?php echo $backgroundUrl; ?>)<?php } ?>"> 
            <div class="container">
                <?php if ($tag) { ?>
                    <p class="above">
                        <?php echo $tag; ?>
                    </p>
                <?php } ?>
                <?php if ($title) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } ?>
                <?php if ($offices) { ?>

                    <div class="flex-wrapper">
                    <?php if ($blockBackgroundUrl){ ?>
                        <div class="map-block__img">
                            <img  src="<?php echo $blockBackgroundUrl; ?>" alt=""> 
                            
                            <?php foreach ($offices as $office) {
                                $name = $office['name'];
                                $titleOffice = $office['title'];
                                $subtitle = $office['subtitle'];
                                $address = $office['address'];
                                $class = $office['class'];
                                ?>
                             <?php if (!empty($name)): ?>
                                        <div class="<?php echo $class;?>">
                                            <div class="name"><?php echo $name;?></div>
                                            <div class="icon">
                                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.231445 14.2266C0.231445 6.49458 6.49946 0.226562 14.2314 0.226562C21.9634 0.226562 28.2314 6.49458 28.2314 14.2266C28.2314 21.9585 21.9634 28.2266 14.2314 28.2266C6.49946 28.2266 0.231445 21.9585 0.231445 14.2266Z" fill="url(#paint0_linear_1069_70129)"/>
                                                <circle cx="14.2311" cy="14.2253" r="4.66667" fill="#11BA5F"/>
                                                <defs>
                                                <linearGradient id="paint0_linear_1069_70129" x1="14.2314" y1="0.226562" x2="14.2314" y2="28.2266" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="white"/>
                                                <stop offset="1" stop-color="#FAFAFA"/>
                                                </linearGradient>
                                                </defs>
                                            </svg> 
                                            </div>
                                        </div>
                                <?php endif; ?>
                            <?php } ?> 
                        </div><?php } ?>
                       <div class="right-container">
                            <?php foreach ($offices as $office) {
                                $name = $office['name'];
                                $titleOffice = $office['title'];
                                $subtitle = $office['subtitle'];
                                $address = $office['address'];
                                $class = $office['class'];

                                if ($name || $titleOffice || $subtitle || $address ||$class) { ?>
                                    <div class="card <?php echo $class;?>"> 
                                        <div class="offices_info">
                                            <?php if ($titleOffice) { ?>
                                                <h3><?php echo $titleOffice; ?></h3>
                                            <?php } ?>
                                            <?php if ($subtitle) { ?>
                                                <div class="subtitle"><?php echo $subtitle; ?></div>
                                            <?php } ?>
                                            <?php if ($address) { ?>
                                                <p><?php echo $address; ?></p>
                                            <?php } ?>
                                        </div>


                                    </div>
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    </div>
                <?php } ?>

            </div>
            <svg class="bg-el-1" width="501" height="432" viewBox="0 0 501 432" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.4">
                <g filter="url(#filter0_f_1069_77525)">
                <path d="M130.446 314.971L605.683 6.38702C614.034 0.964655 610.194 -12 600.237 -12H527.37C525.176 -12 523.043 -11.2785 521.3 -9.94672L118.93 297.419C116.453 299.31 115 302.249 115 305.365V306.584C115 314.516 123.793 319.29 130.446 314.971Z" fill="#11BA5F"/>
                <path d="M130.446 314.971L605.683 6.38702C614.034 0.964655 610.194 -12 600.237 -12H527.37C525.176 -12 523.043 -11.2785 521.3 -9.94672L118.93 297.419C116.453 299.31 115 302.249 115 305.365V306.584C115 314.516 123.793 319.29 130.446 314.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter1_f_1069_77525)">
                <path d="M143.446 165.971L618.683 -142.613C627.034 -148.035 623.194 -161 613.237 -161H540.37C538.176 -161 536.043 -160.279 534.3 -158.947L131.93 148.419C129.453 150.31 128 153.249 128 156.365V157.584C128 165.516 136.793 170.29 143.446 165.971Z" fill="#028BE7"/>
                <path d="M143.446 165.971L618.683 -142.613C627.034 -148.035 623.194 -161 613.237 -161H540.37C538.176 -161 536.043 -160.279 534.3 -158.947L131.93 148.419C129.453 150.31 128 153.249 128 156.365V157.584C128 165.516 136.793 170.29 143.446 165.971Z" stroke="white"/>
                </g>
                <g filter="url(#filter2_f_1069_77525)">
                <path d="M286.439 134.995L762.621 -173.608C770.98 -179.026 767.144 -192 757.182 -192H684.153C681.962 -192 679.832 -191.281 678.09 -189.952L274.937 117.419C272.456 119.31 271 122.251 271 125.371V126.603C271 134.531 279.785 139.306 286.439 134.995Z" fill="#04CA95"/>
                <path d="M286.439 134.995L762.621 -173.608C770.98 -179.026 767.144 -192 757.182 -192H684.153C681.962 -192 679.832 -191.281 678.09 -189.952L274.937 117.419C272.456 119.31 271 122.251 271 125.371V126.603C271 134.531 279.785 139.306 286.439 134.995Z" stroke="white"/>
                </g>
                </g>
                <defs>
                <filter id="filter0_f_1069_77525" x="0.5" y="-126.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_1069_77525"/>
                </filter>
                <filter id="filter1_f_1069_77525" x="13.5" y="-275.5" width="724.256" height="557.602" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_1069_77525"/>
                </filter>
                <filter id="filter2_f_1069_77525" x="156.5" y="-306.5" width="725.202" height="557.621" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="57" result="effect1_foregroundBlur_1069_77525"/>
                </filter>
                </defs>
            </svg> 
        </div>
    </section>
<?php } ?>
 