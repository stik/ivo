<section class="hero-model my-6 md:my-12">


    <div class="max-w-[1920px] mx-auto">
        <div>
            <div class="*:mx-auto mb-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="306" height="55" viewBox="0 0 306 55" fill="none">
                    <path d="M110.013 17.3734C110.013 17.3734 108.803 13.6737 105.897 13.6737C102.933 13.6737 101.867 17.3734 101.867 17.3734L84.195 54.4129H68.4634L89.9045 11.8932C90.0246 11.6573 90.1601 11.3651 90.316 11.0289C91.8617 7.69564 95.4132 0.0371094 105.897 0.0371094C116.461 0.0371094 120.058 7.81215 121.581 11.1039C121.722 11.4087 121.845 11.675 121.954 11.8932L143.411 54.4129H127.68L110.013 17.3734Z" fill="#1A171B"/>
                    <path d="M157.927 0.682155H172.113L172.124 54.4129H157.927V0.682155Z" fill="#1A171B"/>
                    <path d="M193.048 54.4129V0.682155L207.244 0.692817V41.7412H242.823V54.4129H193.048Z" fill="#1A171B"/>
                    <path d="M279.681 54.4129H265.08L271.061 41.4266C261.442 41.4266 257.729 33.6915 256.307 30.7291C256.178 30.4605 256.068 30.2312 255.974 30.0504L240.888 0.682155H256.619L267.916 24.5595C268.801 26.468 271.066 27.7581 273.647 27.7581C276.227 27.7581 278.482 26.484 279.372 24.5595L290.343 0.682155H305.43L279.681 54.4129Z" fill="#1A171B"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1319 54.413H0.916504V0.687598H38.8569C38.8569 0.687598 62.537 -0.437233 62.537 27.9128C62.537 54.9781 38.1319 54.413 38.1319 54.413ZM15.0915 13.258V41.8479H35.0666C35.0666 41.8479 48.7618 42.9088 48.7618 27.8382C48.7618 12.7675 35.0666 13.258 35.0666 13.258H15.0915Z" fill="#1A171B"/>
                </svg>
            </div>
            <div>
                <h2 class="text-base sd:text-2xl md:text-5xl text-center m-0">Schopný. Bezpeèný. Vždycky DAILY</h2>
            </div>
            <div class="my-6 text-center hidden md:block">
                <div class="inline-flex items-center gap-3 py-1 pl-3.5 pr-1.5 rounded-full bg-gray-50 border border-gray-100 text-[13px] leading-[1.3]">
                    <span class="text-gray-650">Objevte Daily s elektrickým motorem</span>
                    <a href="#" class="bg-white border border-gray-100 rounded-full px-2.5 py-0.5 no-underline text-black font-semibold">Pøepnout na eDAILY</a>
                </div>
            </div>
        </div>
        <div class="swiper productSwiper w-full h-fit py-12 text-center">
            <div class="swiper-wrapper w-full">
                <?php for ($i = 1; $i <= 7; $i++): ?>
                    
                    <div class="swiper-slide w-[60vw]! md:w-[40vw]!" data-label="Furgone <?php echo $i; ?>">
                        <div class="h-full flex flex-col">
                            
                            <div class="relative flex justify-center items-center overflow-hidden max-h-full max-w-[600px]">
                                <img src="./imgs/model-car.png" alt="" class="w-full h-full object-center object-contain">
                            </div>
                        </div>
                    </div>

                <?php endfor; ?>
            </div>
            <div class="productSwiper-pagination"></div>
        </div>
    </div>


</section>


<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const AllProductSwipers = document.querySelectorAll('.productSwiper');
        AllProductSwipers.forEach((swiper) => {

            const labels = Array.from(swiper.querySelectorAll('.swiper-slide')).map(slide =>
                slide.getAttribute('data-label') || '-'
            );

            var swiperx = new Swiper(swiper, {
                slidesPerView: "auto",
                loop: false,
                spaceBetween: 32,
                centeredSlides: true,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".productSwiper-pagination",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return `<span class="${className}">${labels[index]}</span>`;
                    },
                },
                on: {
                    slideChange(swiper) {
                    const bullets = swiper.pagination.bullets;
                    const activeBullet = bullets[swiper.realIndex];
                    if (activeBullet && typeof activeBullet.scrollIntoView === 'function') {
                        activeBullet.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center',
                        block: 'nearest',
                        });
                    }
                    }
                }
            });
        });
        
    });
</script>