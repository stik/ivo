<?php
//pozice ikony mùže být: items-center / items-end
$arrow_position = 'items-end';
?>
<section class="container">

    <div class="accordion flex flex-col">

        <?php for($i = 0; $i < 10; $i++){ ?>
            <div x-data="{ open: false }" class="border-b-2 border-gray-100">
                <div class="flex justify-between <?php echo $arrow_position; ?> py-4 cursor-pointer gap-4" x-on:click="open = !open">
                    <div>
                        <div class="flex flex-row items-center gap-2.5 md:gap-8">
                            <img src="https://picsum.photos/500/500" class="aspect-[4/3] w-[100px] md:w-80">
                            <div>
                                <h2 class="text-[13px] md:text-2xl leading-snug font-normal"><strong>Pøijímací technik IVECO</strong></h2>
                                <p class="text-[13px] md:text-base hidden md:block">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="VARIANTA-2 mt-4 md:hidden">
                            <p class="text-[13px] md:text-base">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="transition-all w-8 h-8 md:w-12 md:h-12" x-bind:class="open ? 'rotate-180' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none" class="object-contain w-full h-full">
                            <path d="M38 18L24 32L10 18" stroke="#0F111A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div x-show="open"
                    x-transition:enter="transition-all duration-300 ease-out"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-40"
                    x-transition:leave="transition-all duration-300 ease-in"
                    x-transition:leave-start="opacity-100 max-h-40"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="overflow-hidden pb-8">

                        <div class="text-[13px] md:text-base">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, eum.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, eum.</p>
                            <p>Lorem ip sum dolor sit amet consectetur adipisicing elit. Quos, eum.</p>
                        </div>
                </div>
            </div>
        <?php } ?>

    </div>

</section>