<section class="contact-card">
    <div class="container">
        <div class="flex flex-wrap gap-8">
            
            <?php for($i = 1; $i <= 2; $i++) : ?>
                <div class="bg-gray-100 sm:p-4 sm:pr-8">
                    <div class="flex flex-row gap-2 sm:gap-8 items-center">
                        <div class="w-full max-w-[76px] sm:max-w-[122px] aspect-[14/19] shrink-0">
                            <img src="https://picsum.photos/500/500" alt="" class="object-cover w-full h-full">
                        </div>
                        <div class="flex-1 flex flex-col justify-center items-start py-2 pr-2 sm:pr-0">
                            <div class="font-semibold text-gray-800 mb-2">Petra Holotinová</div>
                            <div class="flex flex-col items-start">

                                <a href="#" class="text-base leading-normal sm:text-lg sm:leading-[1.3] inline-flex gap-2.5 no-underline text-brand-600 hover:text-brand-700 py-1.5">
                                    <?php echo file_get_contents(__DIR__.'/../imgs/contact-phone.svg'); ?>
                                    <span class="break-all">724 289 092</span>
                                </a>
                                <a href="#" class="text-base leading-normal sm:text-lg sm:leading-[1.3] inline-flex gap-2.5 no-underline text-brand-600 hover:text-brand-700 py-1.5">
                                    <?php echo file_get_contents(__DIR__.'/../imgs/contact-mail.svg'); ?>
                                    <span class="break-all">lukassladek@ivecohajek.cz</span>
                                </a>

                                <?php /*
                                <?php load_part('parts/button', ['link'       => '#', 
                                                                'title'      => '724 289 092',
                                                                'icon_before' => file_get_contents(__DIR__.'/../imgs/contact-phone.svg'),
                                                                'size'       => 'lg',
                                                                'type'       => 'text',
                                                                'theme'      => 'light',
                                                                'customcss'  => 'py-[7px]',
                                                                ]); ?>
                                                                
                                <?php load_part('parts/button', ['link'       => '#', 
                                                                'title'      => 'lukassladek@ivecohajek.cz',
                                                                'icon_before' => file_get_contents(__DIR__.'/../imgs/contact-mail.svg'),
                                                                'size'       => 'lg',
                                                                'type'       => 'text',
                                                                'theme'      => 'light',
                                                                'customcss'  => 'py-[7px]',
                                                                ]); ?>
                                */ ?> 
                                       
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</section>