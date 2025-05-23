<header class="relative bg-black text-white z-50"> 
    <div class="container hidden lg:flex justify-between gap-4 py-1.5 px-8">
        <ul class="flex">
            <li><a href="#" class="py-2 px-4 text-[13px] text-white hover:text-brand-600">Novinky</a></li>
            <li><a href="#" class="py-2 px-4 text-[13px] text-white hover:text-brand-600">O nás</a></li>
            <li><a href="#" class="py-2 px-4 text-[13px] text-white hover:text-brand-600">Kariéra</a></li>
        </ul>
        <ul class="flex">
            <li>
                <a href="#" class="py-2 px-4 text-[13px] text-white hover:text-brand-600 flex gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M5.09729 2.5H3.26316C2.56554 2.5 2 3.06554 2 3.76316C2 9.69295 6.80705 14.5 12.7368 14.5C13.4345 14.5 14 13.9345 14 13.2368V11.4027C14 10.8575 13.6681 10.3672 13.1619 10.1647L11.4047 9.4619C10.95 9.28001 10.4322 9.36205 10.056 9.67557L9.60207 10.0538C9.0723 10.4953 8.2933 10.46 7.80568 9.97235L6.52765 8.69432C6.04003 8.2067 6.00469 7.4277 6.44617 6.89793L6.82443 6.44402C7.13795 6.06779 7.21999 5.54997 7.0381 5.09525L6.33526 3.33815C6.13277 2.83193 5.6425 2.5 5.09729 2.5Z" stroke="#1A61FF" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Lodìnice</span>
                </a>
            </li>
            <li>
                <a href="#" class="py-2 px-4 text-[13px] text-white hover:text-brand-600 flex gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M5.09729 2.5H3.26316C2.56554 2.5 2 3.06554 2 3.76316C2 9.69295 6.80705 14.5 12.7368 14.5C13.4345 14.5 14 13.9345 14 13.2368V11.4027C14 10.8575 13.6681 10.3672 13.1619 10.1647L11.4047 9.4619C10.95 9.28001 10.4322 9.36205 10.056 9.67557L9.60207 10.0538C9.0723 10.4953 8.2933 10.46 7.80568 9.97235L6.52765 8.69432C6.04003 8.2067 6.00469 7.4277 6.44617 6.89793L6.82443 6.44402C7.13795 6.06779 7.21999 5.54997 7.0381 5.09525L6.33526 3.33815C6.13277 2.83193 5.6425 2.5 5.09729 2.5Z" stroke="#1A61FF" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Nýøany</span>
                </a>
            </li>
        </ul> 
    </div>
    <div class="container flex justify-between gap-4 px-4 lg:px-8 py-4 lg:py-0" x-data="{ open: false }">
        <div class="flex items-center h-[28px] lg:h-auto">
            <ul class="hidden lg:flex">
                <li><a href="#" class="nav-link p-4 block hover:text-brand-600">Pøehled modelù</a></li>

                <li class="relative group hover:bg-brand-600 transition-all" x-data="{ open: false }" x-on:click.outside="open = false" x-bind:class="open && 'bg-brand-600'">
                    
                    <span class="flex justify-center gap-2 p-4">
                        <a href="#" class="nav-link">Nabídka vozù</a>
                        <span class="flex items-center group-hover:rotate-180 transition-all" x-on:click="if(isTouch) open = !open"><?php include('./imgs/menu-chevron.svg'); ?></span>
                    </span>
                    <ul class="absolute top-full left-0 min-w-full invisible opacity-0 flex flex-col bg-brand-600 transition-all -translate-y-10 group-hover:translate-y-0 group-hover:visible group-hover:opacity-100"
                        x-bind:class="open && 'sub_open'">
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Nové</a></li>
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Ojeté</a></li>
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Pronajaté</a></li>
                    </ul>
                </li>

                <li><a href="#" class="nav-link p-4 block hover:text-brand-600">Servis</a></li>
                <li><a href="#" class="nav-link p-4 block hover:text-brand-600">Náhradní díly</a></li>
                <li><a href="#" class="nav-link p-4 block hover:text-brand-600">Nadstavby</a></li>

                <li class="relative group hover:bg-brand-600 transition-all" x-data="{ open: false }" x-on:click.outside="open = false" x-bind:class="open && 'bg-brand-600'">
                    <span class="flex justify-center gap-2 p-4">
                        <a href="#" class="nav-link">Kontakty</a>
                        <span class="flex items-center group-hover:rotate-180 transition-all" x-on:click="if(isTouch) open = !open"><?php include('./imgs/menu-chevron.svg'); ?></span>
                    </span>
                    <ul class="absolute top-full left-0 min-w-full invisible opacity-0 flex flex-col bg-brand-600 transition-all -translate-y-10 group-hover:translate-y-0 group-hover:visible group-hover:opacity-100"
                        x-bind:class="open && 'sub_open'">
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Obecné kontakty</a></li>
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Lodìnice</a></li>
                        <li><a href="#" class="sub-nav-link block px-4 py-2 hover:bg-brand-700">Nýøany</a></li>
                    </ul>
                </li>

            </ul>
            <!-- MOBILE MENU -->
            <div x-on:click.outside="open = false">
            <div class="block lg:hidden">
                <button aria-label="menu" 
                        class="w-6 h-4 relative my-2 mx-0 p-0" 
                        x-on:click="open = !open" 
                        x-effect="document.body.classList.toggle('mobile-noscroll', open)">
                    <span class="absolute left-0 top-0 w-full h-0.5 bg-white transition-all" x-bind:class="open && 'rotate-45 translate-y-1.5'"></span>
                    <span class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-white transition-all" x-bind:class="open && '-translate-x-2 opacity-0'"></span>
                    <span class="absolute left-0 bottom-0 w-full h-0.5 bg-white transition-all" x-bind:class="open && '-rotate-45 -translate-y-2'"></span>
                </button>
            </div>
            <div class="absolute left-0 top-[60px] bg-black w-full h-screen -translate-x-full transition-all lg:hidden z-10 overflow-y-auto" 
                 x-bind:class="open && 'translate-x-0'">
                <div class="p-4">
                    
                    <ul>
                        <li><a href="#" class="mobile-nav-link p-4 block">Pøehled modelù</a></li>
                        <li class="relative" x-data="{ item_open: false }">
                            <div class="flex items-center" x-bind:class="item_open && 'text-brand-600'">
                                <a href="#" class="mobile-nav-link p-4 flex gap-2">Nabídka vozù</a>
                                <span class="group-hover:rotate-180 transition-all" x-on:click="item_open = !item_open" x-bind:class="item_open && 'rotate-180'">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="item_open ? 'stroke-brand-600' : 'stroke-white'">
                                        <path id="Vector" d="M12.6668 6L8.00016 10.6667L3.3335 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                            <ul x-show="item_open"
                                x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-300 ease-in"
                                x-transition:leave-start="opacity-100 max-h-40"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="flex flex-col px-4 overflow-hidden">
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Nové</a></li>
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Ojeté</a></li>
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Pronajaté</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="mobile-nav-link p-4 block hover:text-brand-600">Servis</a></li>
                        <li><a href="#" class="mobile-nav-link p-4 block hover:text-brand-600">Náhradní díly</a></li>
                        <li><a href="#" class="mobile-nav-link p-4 block hover:text-brand-600">Nadstavby</a></li>
                        <li class="relative" x-data="{ item_open: false }">
                            <div class="flex items-center" x-bind:class="item_open && 'text-brand-600'">
                                <a href="#" class="mobile-nav-link p-4 flex gap-2">Kontakty</a>
                                <span class="group-hover:rotate-180 transition-all" x-on:click="item_open = !item_open" x-bind:class="item_open && 'rotate-180'">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="item_open ? 'stroke-brand-600' : 'stroke-white'">
                                        <path id="Vector" d="M12.6668 6L8.00016 10.6667L3.3335 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                            <ul x-show="item_open"
                                x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-300 ease-in"
                                x-transition:leave-start="opacity-100 max-h-40"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="flex flex-col px-4 overflow-hidden">
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Obecné kontakty</a></li>
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Lodìnice</a></li>
                                <li><a href="#" class="mobile-sub-nav-link block px-4 py-2 text-gray-600">Nýøany</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="mt-4 pt-4 border-t border-gray-100 border-0.5 block">
                        <ul class="flex flex-col">
                            <li><a href="#" class="mobile-sub-nav-link py-2 px-4 text-gray-600 block">Novinky</a></li>
                            <li><a href="#" class="mobile-sub-nav-link py-2 px-4 text-gray-600 block">O nás</a></li>
                            <li><a href="#" class="mobile-sub-nav-link py-2 px-4 text-gray-600 block">Kariéra</a></li>
                        </ul>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 border-0.5 block">
                        <ul class="flex">
                            <li>
                                <a href="#" class="mobile-sub-nav-link py-2 px-4 text-white hover:text-brand-600 flex gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path id="Vector" d="M5.09729 2.5H3.26316C2.56554 2.5 2 3.06554 2 3.76316C2 9.69295 6.80705 14.5 12.7368 14.5C13.4345 14.5 14 13.9345 14 13.2368V11.4027C14 10.8575 13.6681 10.3672 13.1619 10.1647L11.4047 9.4619C10.95 9.28001 10.4322 9.36205 10.056 9.67557L9.60207 10.0538C9.0723 10.4953 8.2933 10.46 7.80568 9.97235L6.52765 8.69432C6.04003 8.2067 6.00469 7.4277 6.44617 6.89793L6.82443 6.44402C7.13795 6.06779 7.21999 5.54997 7.0381 5.09525L6.33526 3.33815C6.13277 2.83193 5.6425 2.5 5.09729 2.5Z" stroke="#1A61FF" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Lodìnice</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mobile-sub-nav-link py-2 px-4 text-white hover:text-brand-600 flex gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path id="Vector" d="M5.09729 2.5H3.26316C2.56554 2.5 2 3.06554 2 3.76316C2 9.69295 6.80705 14.5 12.7368 14.5C13.4345 14.5 14 13.9345 14 13.2368V11.4027C14 10.8575 13.6681 10.3672 13.1619 10.1647L11.4047 9.4619C10.95 9.28001 10.4322 9.36205 10.056 9.67557L9.60207 10.0538C9.0723 10.4953 8.2933 10.46 7.80568 9.97235L6.52765 8.69432C6.04003 8.2067 6.00469 7.4277 6.44617 6.89793L6.82443 6.44402C7.13795 6.06779 7.21999 5.54997 7.0381 5.09525L6.33526 3.33815C6.13277 2.83193 5.6425 2.5 5.09729 2.5Z" stroke="#1A61FF" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Nýøany</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- // MOBILE MENU -->
            </div>
        </div>
        <div class="flex items-center">
            <a href="?page=homepage" class="h-[28px] lg:h-10 block">
                <img src="./imgs/iveco-logo.svg" alt="IVECO logo" class="object-contain w-full h-full">
            </a>
        </div>
    </div>
</header>