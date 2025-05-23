<section class="py-10">
    <div class="container px-0">
        <div class="grid grid-cols-2 md:grid-cols-12 gap-4 relative"
            x-data="{
                        open: 0,
                        toggle(id) {
                            if (this.open !== 0) {
                                const oldItem = document.getElementById('item-' + this.open);
                                if (oldItem) oldItem.style.paddingBottom = '';
                            }

                            if (this.open === id) {
                                this.open = 0;
                            } else {
                                let waitSec = (this.open !== id && this.open !== 0)? 400 : 0;
                                this.open = 0;

                                setTimeout(() => {
                                    this.open = id;
                                    this.updateHeight();
                                }, waitSec);
                            }                            
                        },
                        updateHeight() {
                            if (this.open === 0) return;
                            const item = document.getElementById('item-' + this.open);
                            const content = document.getElementById('item-' + this.open + '__content');
                            if (item && content) {
                                item.style.paddingBottom = content.offsetHeight + 'px';
                            }
                        }
                    }"
            x-init="window.addEventListener('resize', () => updateHeight());">
            
            <div class="col-span-2 md:col-span-12 bg-gray-25">
                <div class="text-center text-gray-500 text-[13px] leading-[1.3] py-1.5">Lehká (3.5 – 7.2. tun)</div>
            </div>

            <?php for ($i = 1; $i <= 8; $i++) { ?>

                <div id="item-<?php echo $i; ?>" class="col-span-1 md:col-span-3 transition-all">
                    <div class="mx-auto w-full max-w-[250px] relative flex flex-col items-center justify-center hover:cursor-pointer border-b-2 transition-all
                    after::content-[''] after:absolute after:bottom-[-2px] after:left-1/2 after:translate-x-[-50%] after:w-0 after:h-0.5 after:bg-brand-600 after:transition-all hover:after:w-full" x-on:click="toggle(<?php echo $i; ?>)" x-bind:class="open == <?php echo $i; ?> ? 'border-brand-600' : 'border-transparent'">
                    
                        <div class="h-[120px] w-full max-w-[200px] p-2.5 flex items-center justify-center">
                            <img src="./imgs/iveco-car.png" class="object-contain h-full w-auto" alt="iveco car">
                        </div>
                        <div class="pb-[30px]">
                            <h3 class="text-[20px] font-normal text-center leading-[1.3] text-gray-800">Model Name</h3>
                        </div>

                    </div>
                    <div class="absolute left-0 right-0 w-full transition-all"
                        id="item-<?php echo $i; ?>__content"
                        x-bind:class="open == <?php echo $i; ?> ? 'visible opacity-100' : 'invisible opacity-0'">

                        <div class="w-full grid grid-cols-1 sm:grid-cols-12 gap-4 px-4 sm:px-0 my-8 sm:my-0 bg-gray-50">
                            <div class="col-span-1 sm:col-span-6">
                                <div class="p-4 sm:p-8 text-gray-500 w-full">
                                    <h5 class="like-h5 text-black mb-2.5">Dodávka, která zmìní perspektivu vašeho podnikání</h5>
                                    <p class="text-[13px] md:text-base leading-[1.3] md:leading-normal">Mnohem více než užitkové vozidlo. Nová dodávka Daily je navržena tak, aby vám pomohla provozovat vaše podnikání udržitelnì a ziskovì.</p>

                                    <div class="flex flex-wrap gap-2.5 mt-5">
                                        <div class="bg-white rounded-md text-gray-500 p-1.5 text-[13px] leading-[1.3]">Objem nákl. prostoru až 19,6 m3</div>
                                        <div class="bg-white rounded-md text-gray-500 p-1.5 text-[13px] leading-[1.3]">3,3 – 7 tun</div>
                                        <div class="bg-white rounded-md text-gray-500 p-1.5 text-[13px] leading-[1.3]">Až 10 % úspora paliva</div>
                                    </div>

                                    <div class="mt-8 flex flex-col gap-2.5 *:w-full sm:*:w-auto sm:block sm:gap-0 space-x-2.5 space-y-2.5">
                                        <?php load_part('parts/button', ['link'       => '#', 
                                                                         'title'      => 'Objevujte',
                                                                         'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_medium.svg'),
                                                                         'size'       => 'md',
                                                                         'type'       => 'primary',
                                                                         'theme'      => 'light',
                                                                         ]); ?>

                                        <?php load_part('parts/button', ['link'       => '#', 
                                                                         'title'      => 'Kontaktujte prodejce',
                                                                         'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_medium.svg'),
                                                                         'size'       => 'md',
                                                                         'type'       => 'secondary',
                                                                         'theme'      => 'light',
                                                                         ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 sm:col-span-6 order-first sm:order-last">
                                <div class="w-full h-full">
                                    <img src="./imgs/iveco-item-bg.jpg" class="object-cover h-full w-auto" alt="iveco car">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>