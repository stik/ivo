<section class="bg-black py-12 lg:py-24">
    <div class="container">
        <div>
            <h2 class="text-white like-h2 leading-tight">Objevte novinky</h2>
        </div>
        <div class="flex flex-col sm:flex-row gap-8 mt-10">
            <div class="w-full sm:w-[300px] shrink-0 space-y-4">
                <p class="text-base text-gray-300">Short paragraph lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim varius accumsan.</p>
                <div class="space-y-4">
                    <?php load_part('parts/button', [
                        'link'       => '#',
                        'title'      => 'Ze svìta Iveco',
                        'icon_after' => file_get_contents(__DIR__ . '/../imgs/arrow_large.svg'),
                        'size'       => 'lg',
                        'type'       => 'primary',
                        'theme'      => 'light',
                    ]); ?>

                    <?php load_part('parts/button', [
                        'link'       => '#',
                        'title'      => 'Od dealera Truck Centrum',
                        'icon_after' => file_get_contents(__DIR__ . '/../imgs/arrow_large.svg'),
                        'size'       => 'lg',
                        'type'       => 'primary',
                        'theme'      => 'light',
                    ]); ?>
                </div>
            </div>
            <div class="w-full sm:flex-1 sm:min-h-[445px] md:min-h-[540px]">

                <div class="articleSwiper-container relative h-full w-full sm:w-[calc((((100vw-100%)/2)-180px)+100%)]"> 
                    <div class="relative sm:absolute w-full h-full inset-0">

                        <div class="swiper articleSwiper w-full h-full pb-7! sm:pb-0"> 
                            <div class="swiper-wrapper w-full">
                                <?php for($i = 1; $i <= 10; $i++): ?>
                                    <div class="swiper-slide w-[269px]! md:w-[413px]! h-full">
                                        <a href="#" class="block no-underline group">
                                            <div class="w-full aspect-[4/3] mb-6 overflow-hidden">
                                                <img src="./imgs/iveco-slider-car.jpg" alt="" class="w-full h-full object-cover object-center group-hover:scale-110 transition-all duration-500">
                                            </div>
                                            <div class="flex justify-between">
                                                <div>
                                                    <div class="text-base leading-normal text-white bg-brand-600 px-2.5 group-hover:bg-white group-hover:text-gray-200 transition-all duration-500">Novinka IVECO</div>
                                                </div>
                                                <div class="text-right text-gray-300 text-[13px] leading-[13px] flex items-center">
                                                    <time>27.1.2025</time>
                                                </div>
                                            </div>
                                            <div class="py-4">
                                                <h2 class="like-h6-medium text-white line-clamp-3">IVECO eDaily získalo ocenìní za inovace a efektivitu v soutìži Best Electric Van 2024</h2>
                                            </div>
                                            <div>
                                                <span class="text-brand-600 text-[13px] sm:text-base leading-normal inline-flex items-center gap-1.5">
                                                    Èíst dál
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M3.33334 8H12.6667" stroke="#1A61FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M8.66666 4L12.6667 8L8.66666 12" stroke="#1A61FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var swiper2 = new Swiper(".articleSwiper", {
            slidesPerView: "auto",
            loop: false,
            spaceBetween: 32,
            observer: true,
            observeParents: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            on: {
                init: function () {
                    this.emit('slideChange');
                },
                resize: function () {
                    this.emit('slideChange');
                },
                slideChange: function () {

                    const swiperEl = this.el;
                    const wrapperRect = this.wrapperEl.getBoundingClientRect();
                    const visibleSlides = this.slides.filter(slide => {
                    const slideRect = slide.getBoundingClientRect();
                        return (
                        slideRect.left >= wrapperRect.left &&
                        slideRect.right <= wrapperRect.right
                        );
                    });

                    const visibleCount = visibleSlides.length;
                    const activeIndex  = this.activeIndex;
                    const bullets      = document.querySelectorAll('.swiper-pagination span');
                    const totalBullets = this.slides.length;


                    bullets.forEach((bullet, i) => {
                        if (i > activeIndex && i < activeIndex + visibleCount) {
                            bullet.classList.add('swiper-pagination-bullet-alter-active');
                        } else {
                            bullet.classList.remove('swiper-pagination-bullet-alter-active');
                        }
                    });

                    /*
                    const totalSlides = swiper.slides.length;
                    if (activeIndex + visibleCount >= totalSlides) {
                        swiper.allowSlideNext = false;
                    } else {
                        swiper.allowSlideNext = true;
                    }

                    // (volitelnì) zakázat i posun zpìt, pokud jsme na zaèátku
                    swiper.allowSlidePrev = activeIndex > 0;
                    */
                },
            },
        });

    });
</script>