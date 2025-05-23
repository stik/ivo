<section class="hero">
    <div class="swiper heroSwiper min-h-[430px] h-[calc(100vh-96px)] max-h-[800px]" x-data="">
        <!-- slider items -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="absolute inset-0 w-full h-full">
                    <img src="https://picsum.photos/id/340/2000/2000" class="object-cover object-center w-full h-full" alt="hero image">
                </div>
                <div class="container h-full relative z-10">
                    <div class="py-8 md:py-[70px] md:px-20 flex flex-col h-full justify-between">

                        <div class="flex h-full items-center justify-start text-white">
                            <h1 class="like-h1 font-light leading-tight tracking-[-2.24px]">Servis a prodej<br>vozù IVECO</h1>
                        </div>

                        <div class="items flex gap-[30px]">
                            <?php for($i = 1; $i <= 2; $i++): ?>
                                <div class="bg-black/50 p-2 md:p-4 inline-flex flex-row items-center gap-8">
                                    <div class="font-secondary like-h6-small leading-snug text-white w-full max-w-24 md:max-w-36">Servis obytných vozù</div>
                                    <div class="h-9 md:h-[75px] aspect-square">
                                        <img src="./imgs/hero-car.svg" alt="item" class="object-contain w-full h-full object-center" loading="lazy">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="absolute inset-0 w-full h-full">
                    <img src="https://picsum.photos/id/120/2000/2000" class="object-cover object-center w-full h-full" alt="hero image">
                </div>
                <div class="container h-full"> 
                    <div class="flex h-full items-center justify-start relative">
                        <h1 class="like-h1 text-white">Servis a prodej<br>vozù IVECO</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider control -->
        <div class="absolute top-8 md:top-auto md:bottom-12 w-full z-10">
            <!-- slide to next section -->
            <div class="absolute left-1/2 -translate-x-1/2 hidden md:block">
                <span class="cursor-pointer" x-data="" x-on:click="document.getElementById('usp').scrollIntoView({ behavior: 'smooth' })">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="34" viewBox="0 0 24 34" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4853 30.1556C18.2346 32.3609 15.1827 33.5998 12.0003 33.6C8.81736 33.6 5.76513 32.3614 3.5147 30.1556C1.26427 27.9498 0 24.9586 0 21.8397V11.7598C0 7.55857 2.28717 3.67623 6.00008 1.57566C9.71253 -0.525219 14.2873 -0.525219 17.9999 1.57566C21.7128 3.67563 24 7.55834 24 11.7598V21.8397C24 24.959 22.7361 27.9502 20.4853 30.1556ZM6.85683 3.03109C3.67427 4.8313 1.71411 8.15908 1.71411 11.7602V21.8401C1.71411 25.4409 3.67427 28.7687 6.85683 30.5693C10.0392 32.3699 13.9602 32.3699 17.1424 30.5693C20.325 28.7691 22.2851 25.4413 22.2851 21.8401V11.7602C22.2851 8.15946 20.325 4.83167 17.1424 3.03109C13.96 1.23051 10.0391 1.23051 6.85683 3.03109ZM11.2197 16.3802H11.1426L11.1426 16.3046L6.2486 11.5166L7.46557 10.324L11.1426 13.936V5.04031H12.8567V13.936L16.534 10.324L17.751 11.5166L12.8567 16.3046V16.3802L12.7796 16.3805L12.6083 16.5568C12.4472 16.7156 12.2283 16.8053 11.9996 16.8053C11.7709 16.8053 11.5521 16.7156 11.391 16.5568V16.5565L11.2197 16.3802Z" fill="white"/>
                    </svg>
                </span>
            </div>
            <!-- pagination -->
            <div class="text-white w-full max-w-[1760px] mx-auto">
                <div class="flex justify-end gap-2.5 px-4 md:px-24"> 
                    <div class="swiper-custom-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M10 12.6667L5.33337 8L10 3.33333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-custom-pagination w-auto! text-base leading-normal"></div>
                    <div class="swiper-custom-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 3.33333L10.6667 8L6 12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                const swiper = new Swiper('.heroSwiper', {
                    //loop: true,
                    effect: 'fade',
                    pagination: {
                        el: '.swiper-custom-pagination',
                        type: "fraction",
                        renderFraction: function (currentClass, totalClass) {
                        return `
                            <span class="${currentClass}"></span>
                            <span class="swiper-pagination-separator">/</span>
                            <span class="${totalClass}"></span>
                        `;
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-custom-next',
                        prevEl: '.swiper-custom-prev',
                    },
                });
            })
        </script>
    </div>
</section>