<section class="py-12">
    <div class="container">
        <div class="flex flex-col md:flex-row items-stretch gap-x-24 gap-y-8">

            <div class="w-full md:w-[390px]">
                <div class="w-full h-full bg-brand-600 p-6 flex flex-col text-white">
                    <h3 class="like-h3 mb-8">Objednávka do servisu</h3>

                    <p class="mb-8">Zanechte nám své kontaktní údaje a my se vám do dvou pracovních dnù ozveme a pomùžeme vám najít správné øešení pro vaše potøeby.</p>

                    <div class="space-y-4 md:pace-y-8">
                        <div x-data="{ open: false, 
                                    width: window.innerWidth,
                                    init() {
                                            window.addEventListener('resize', () => {
                                                this.width = window.innerWidth;
                                            });
                                    }
                                    }">
                            <h4 class="like-h6 mb-4 pr-6 relative">
                                Otevírací doba
                                <div class="absolute top-1 right-0 w-6 h-6 transition-all cursor-pointer md:hidden" x-on:click="open = !open" x-bind:class="open ? 'rotate-180' : ''">
                                    <?php include('./imgs/arrow_white.svg'); ?>
                                </div>
                            </h4>
                            <div class="px-4 inline-flex gap-4" x-show="open || width >= 768" x-transition>
                                <span>Po - Pá</span>
                                <span>6.00–16.00</span>
                            </div>
                        </div>

                        <div x-data="{ open: false, 
                                    width: window.innerWidth,
                                    init() {
                                            window.addEventListener('resize', () => {
                                                this.width = window.innerWidth;
                                            });
                                    }
                                    }">
                            <h4 class="like-h6 mb-4 pr-6 relative">
                                Adresa
                                <div class="absolute top-1 right-0 w-6 h-6 transition-all cursor-pointer md:hidden" x-on:click="open = !open" x-bind:class="open ? 'rotate-180' : ''">
                                    <?php include('./imgs/arrow_white.svg'); ?>
                                </div>
                            </h4>
                            <div class="px-4 inline-flex gap-4" x-show="open || width >= 768" x-transition>
                                <span>Lžovická 301<br>281 26 Týnec nad Labem</span>
                            </div>
                        </div>

                        <div x-data="{ open: false, 
                                    width: window.innerWidth,
                                    init() {
                                            window.addEventListener('resize', () => {
                                                this.width = window.innerWidth;
                                            });
                                    }
                                    }">
                            <h4 class="like-h6 mb-4 pr-6 relative">
                                Zobrazit na mapì
                                <div class="absolute top-1 right-0 w-6 h-6 transition-all cursor-pointer md:hidden" x-on:click="open = !open" x-bind:class="open ? 'rotate-180' : ''">
                                    <?php include('./imgs/arrow_white.svg'); ?>
                                </div>
                            </h4>
                            <div class="px-4 inline-flex gap-4" x-show="open || width >= 768" x-transition>
                                <div class="inline-flex gap-6">
                                    <a href="#">
                                        <img src="./imgs/gmap.svg" alt="Map" loading="lazy"/>
                                    </a>
                                    <a href="#">
                                        <img src="./imgs/mapycz.svg" alt="Map" loading="lazy"/>
                                    </a>
                                    <a href="#">
                                        <img src="./imgs/waze.svg" alt="Map" loading="lazy"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full md:w-auto flex flex-col justify-center">
                <div class="flex flex-row flex-wrap md:my-24 gap-12 md:gap-24">

                    <?php for($i = 1; $i <= 3; $i++): ?>
                        <div class="min-w-fit">
                            <h3 class="like-h6 mb-4">Servisní technik IVECO</h3>
                            <p class="mb-4">Lukáš Sládek</p>
                            <div class="flex flex-col">
                                <?php load_part('parts/button', ['link'       => '#', 
                                                                'title'      => '724 289 092',
                                                                'icon_before' => file_get_contents(__DIR__.'/../imgs/contact-phone.svg'),
                                                                'size'       => 'lg',
                                                                'type'       => 'text',
                                                                'theme'      => 'light',
                                                                'customcss'  => 'break-all',
                                                                ]); ?>
                                <?php load_part('parts/button', ['link'       => '#', 
                                                                'title'      => '321 781 169',
                                                                'icon_before' => file_get_contents(__DIR__.'/../imgs/contact-phone.svg'),
                                                                'size'       => 'lg',
                                                                'type'       => 'text',
                                                                'theme'      => 'light',
                                                                'customcss'  => 'break-all',
                                                                ]); ?>
                                <?php load_part('parts/button', ['link'       => '#', 
                                                                'title'      => 'lukassladek@ivecohajek.cz',
                                                                'icon_before' => file_get_contents(__DIR__.'/../imgs/contact-mail.svg'),
                                                                'size'       => 'lg',
                                                                'type'       => 'text',
                                                                'theme'      => 'light',
                                                                'customcss'  => 'break-all',
                                                                ]); ?>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>

        </div>
    </div>
</section>