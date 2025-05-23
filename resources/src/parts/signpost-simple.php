<?php

    $buttons        = ['Servisní dílna','Diagnostika a tachografy','Myèka','Pneuservis','Servis klimatizací','Diesel servis','Lakovna','Emise','Odtahováslužba'];
    $pocet_sloupcu  = 2;
    $button_list    = (count($buttons) > 0)? array_chunk($buttons, ceil(count($buttons) / $pocet_sloupcu)) : [];
?>
<section>
    <div class="container py-12">

        <div class="mb-12">
            <h2 class="like-h2">Nabídka služeb</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-24 gap-8">
            <div class="col-span-1">
                <p>The answer you need might be available already.</p>
                <div class="mt-6">
                    <?php load_part('parts/button', ['link'       => '#', 
                                                    'title'      => 'Pøejít na kontakty',
                                                    'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_large.svg'),
                                                    'size'       => 'lg',
                                                    'type'       => 'primary',
                                                    'theme'      => 'light',
                                                    ]); ?>
                                                 
                </div>
            </div>
            <div class="col-span-1 md:col-span-2"> 
                <div class="flex flex-wrap gap-x-8 md:gap-x-24">
                    <?php if(count($button_list) > 0): ?>
                        <?php foreach($button_list as $button_items): ?>
                            <div class="flex flex-col gap-y-2.5"> 
                                <?php foreach($button_items as $button): ?>
                                    <?php load_part('parts/button', ['link'       => '#', 
                                                                    'title'      => $button,
                                                                    'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_medium.svg'),
                                                                    'size'       => 'md',
                                                                    'type'       => 'text',
                                                                    'theme'      => 'light',
                                                                    ]); ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-black text-white">
    <div class="container py-12">

        <div class="mb-12">
            <h2 class="like-h2">Nabídka služeb</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-24 gap-8">
            <div class="grid-col-1 md:col-span-3">
                <div class="flex flex-wrap gap-x-8 md:gap-x-24">
                    <?php if(count($button_list) > 0): ?>
                        <?php foreach($button_list as $button_items): ?>
                            <div class="flex flex-col gap-y-2.5"> 
                                <?php foreach($button_items as $button): ?>
                                    <?php load_part('parts/button', ['link'       => '#', 
                                                                    'title'      => $button,
                                                                    'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_medium.svg'),
                                                                    'size'       => 'md',
                                                                    'type'       => 'text',
                                                                    'theme'      => 'dark',
                                                                    ]); ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>