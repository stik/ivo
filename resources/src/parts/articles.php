<section class="articles py-12">
    <div class="container">
        <div class="mb-12">
            <h2 class="like-h2">Objevte novinky</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 mb-12">

            <div class="flex flex-nowrap items-center gap-6">
                <div class="shrink-0">Seøadit od:</div>
                <div class="relative inline-block w-full max-w-[300px]">
                    <select class="appearance-none w-full px-4 py-2 bg-gray-100 text-gray-950 pr-10 focus:outline-none cursor-pointer">
                        <option>Nejnovìjších</option>
                        <option>Nejoblíbenìjších</option>
                        <option>Nejlevnìjších</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19 9.00098L12 16.001L5 9.00098" stroke="#0F111A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex sm:justify-end gap-6">
                <label>
                    <input type="checkbox" class="mr-3">
                    Novinky IVECO
                </label>

                <label>
                    <input type="checkbox" class="mr-3">
                    Novinky dealer
                </label>
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-8 sm:gap-y-12">

            <?php for($i = 1; $i <= 9; $i++): ?>
                <a href="#" class="block no-underline group">
                    <div class="aspect-[8/5] w-full mb-2 sm:mb-6 overflow-hidden">
                        <img src="https://picsum.photos/500/50<?php echo $i; ?>" alt="" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <?php $rand_color = (rand(0,1) == 1)? 'bg-brand-600' : 'bg-black'; ?>
                            <div class="text-base leading-normal text-white <?php echo $rand_color; ?> px-2.5">Novinka IVECO</div>
                        </div>
                        <div>
                            <time class="text-gray-500 text-[13px] leading-[1.3]">21.1.2025</time>
                        </div>
                    </div>

                    <div class="my-2 sm:my-4">
                        <h2 class="like-h6 text-black">IVECO eDaily získalo ocenìní za inovace a efektivitu v soutìži Best Electric Van 2024</h2>
                    </div>

                    <div>
                        <span class="text-brand-600 group-hover:text-brand-700 text-[13px] sm:text-base leading-normal inline-flex items-center gap-1.5">
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
            <?php endfor; ?>

        </div>
        <div class="mt-12 w-full text-center">
            <?php load_part('parts/button', ['link'       => '#', 
                                             'title'      => 'Zobrazit další',
                                             'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_down.svg'),
                                             'size'       => 'lg',
                                             'type'       => 'text',
                                             'theme'      => 'light',
                                             ]); ?>
        </div>


    </div>
</section>