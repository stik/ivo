<div class="max-w-[1920px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2.5">
        <div class="relative">
            <div class="md:aspect-[4/3] relative group overflow-hidden">
                <div class="absolute inset-0 z-0 w-full h-full">
                    <img src="https://picsum.photos/1000/1000" class="object-cover w-full h-full group-hover:scale-110 transition-all duration-500" alt="Image" loading="lazy"/>
                </div>
                <div class="px-8 py-12 flex flex-col items-start justify-center relative z-10 w-full h-full">
                    <h2 class="text-white text-[32px] md:text-[64px] font-normal leading-[1.2]">Sladové<br> vozy</h2>
                    <p class="my-6 text-white text-base font-normal leading-normal">Skladem více než 200 vozù IVECO.</p>

                    <div>
                        <?php load_part('parts/button', ['link'       => '#', 
                                                         'title'      => 'Pøejít do nabídky',
                                                         'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_large.svg'),
                                                         'size'       => 'lg',
                                                         'type'       => 'primary',
                                                         'theme'      => 'light',
                                                         ]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="md:aspect-[4/3] relative group overflow-hidden">
                <div class="absolute inset-0 z-0 w-full h-full">
                    <img src="https://picsum.photos/1000/1001" class="object-cover w-full h-full group-hover:scale-110 transition-all duration-500" alt="Image" loading="lazy"/>
                </div>
                <div class="px-8 py-12 flex flex-col items-start justify-center relative z-10 w-full h-full">
                    <h2 class="text-white text-[32px] md:text-[64px] font-normal leading-[1.2]">Pronájem<br> vozù</h2>
                    <p class="my-6 text-white text-base font-normal leading-normal">Pronajmeme vám jakýkoli vùz IVECO.</p>

                    <div>
                        <?php load_part('parts/button', ['link'       => '#', 
                                                         'title'      => 'Pøejít do nabídky',
                                                         'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_large.svg'),
                                                         'size'       => 'lg',
                                                         'type'       => 'primary',
                                                         'theme'      => 'light',
                                                         ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>