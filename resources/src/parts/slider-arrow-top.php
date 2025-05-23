<?php
    //positions: top, normal
    $arrow_position = 'top';

    //option set responsive breakpoints
    $responsive = '{"0": { "slidesPerView": 1.6, "spaceBetween": 2 }, "768": { "slidesPerView": 1.8, "spaceBetween": 10 },"1024": { "slidesPerView": 2.5 }}';
?>
<section class="slider-arrow">
    <div class="container">
        <div class="slider-arrow__container">
            <div class="flex justify-between items-center mb-8 md:mb-12">
                <div class="text-left">
                    <h2 class="like-h4 mb-0">Jak to u nás vypadá</h2>
                </div>
                <?php if($arrow_position == 'top') : ?>
                    <div class="relative flex gap-4">
                        <div class="swiper-custom-prev bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.3334 8L4.66675 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.33341 10.6668L4.66675 8.00016L7.33342 5.3335" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-custom-next bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M4.66675 8H11.3334" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.66675 5.3335L11.3334 8.00016L8.66675 10.6668" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="swiper myswiper" data-breakpoints='<?php echo $responsive; ?>'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/500" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/501" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/503" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/504" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/505" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/506" alt="" class="object-cover w-full h-full"></div>
                </div>
                <?php if($arrow_position == 'normal') : ?>
                    <div class="swiper-custom-prev bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M11.3334 8L4.66675 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.33341 10.6668L4.66675 8.00016L7.33342 5.3335" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-custom-next bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M4.66675 8H11.3334" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.66675 5.3335L11.3334 8.00016L8.66675 10.6668" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        document.querySelectorAll('.myswiper').forEach(swiper => {

            const breakpointsData = swiper.dataset.breakpoints;
            const parsedBreakpoints = breakpointsData ? JSON.parse(breakpointsData) : {};

            const item = new Swiper(swiper, {
                slidesPerView: 2.5,
                spaceBetween: 10,
                navigation: {
                    nextEl: swiper.parentElement.querySelector('.swiper-custom-next'),
                    prevEl: swiper.parentElement.querySelector('.swiper-custom-prev'),
                },
                breakpoints: parsedBreakpoints
            });
        });

    });
</script>


<?php
    //positions: top, normal
    $arrow_position = 'normal';

    //option set responsive breakpoints
    $responsive = '{"0": { "slidesPerView": 1.6, "spaceBetween": 2 }, "768": { "slidesPerView": 1.8, "spaceBetween": 10 },"1024": { "slidesPerView": 2.5 }}';
?>
<section class="slider-arrow">
    <div class="container">
        <div class="slider-arrow__container">
            <div class="flex justify-between items-center mb-8 md:mb-12">
                <div class="text-left">
                    <h2 class="like-h4 mb-0">Jak to u nás vypadá</h2>
                </div>
                <?php if($arrow_position == 'top') : ?>
                    <div class="relative flex gap-4">
                        <div class="swiper-custom-prev bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.3334 8L4.66675 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.33341 10.6668L4.66675 8.00016L7.33342 5.3335" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-custom-next bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M4.66675 8H11.3334" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.66675 5.3335L11.3334 8.00016L8.66675 10.6668" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="swiper myswiper" data-breakpoints='<?php echo $responsive; ?>'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/500" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/501" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/503" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/504" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/505" alt="" class="object-cover w-full h-full"></div>
                    <div class="swiper-slide aspect-[7/5] max-h-[500px]"><img src="https://picsum.photos/500/506" alt="" class="object-cover w-full h-full"></div>
                </div>
                <?php if($arrow_position == 'normal') : ?>
                    <div class="swiper-custom-prev bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M11.3334 8L4.66675 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.33341 10.6668L4.66675 8.00016L7.33342 5.3335" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-custom-next bg-brand-600 hover:bg-brand-700 p-3 cursor-pointer absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M4.66675 8H11.3334" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.66675 5.3335L11.3334 8.00016L8.66675 10.6668" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>