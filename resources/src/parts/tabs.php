<?php
    /**
     * 
     * TAB musí mít nìjaké ID pøes které se bude odkazovat na pøípadné taby.
     * odkazuje se ve tvaru #tabID-tabIndex, takže napø. #tabProdukty-4 ( tab s ID tabProdukty a otevøi záložku s ID=4)
     * 
     */
    $tabId = 'pobocka';
    $tabs = [
        1 => 'Kaznìjov',
        2 => 'Ejpovice',
        3 => 'Most',
        4 => 'Sokolov',
    ];
?>
<section class="container">

    <div x-data="{ 
            activeTab: 1,
            tabId: '<?php echo $tabId; ?>',
            countTabs: <?php echo count($tabs); ?>, 
            showScrollButtons: false,
            init() {
                this.checkHash();
                window.addEventListener('hashchange', () => this.checkHash());

                const tabList = this.$refs.tabList;
                const checkOverflow = () => {
                    this.showScrollButtons = tabList.scrollWidth > tabList.clientWidth;
                };
                checkOverflow();
                window.addEventListener('resize', checkOverflow);
            },
            checkHash() {
                const hash = window.location.hash.replace('#', '');
                const parts = hash.split('-');

                if (parts.length === 2) {
                    const [hashTabId, tabIndexStr] = parts;
                    const tabIndex = parseInt(tabIndexStr);

                    if (hashTabId === this.tabId && !isNaN(tabIndex)) {
                        this.activeTab = tabIndex;

                        this.$root.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            },
            setTab(tab, scrollToPos = true) {

                this.activeTab = tab;

                const newHash = `${this.tabId}-${tab}`;
                const baseUrl = window.location.href.split('#')[0];
                history.replaceState(null, null, `${baseUrl}#${newHash}`);

                if (scrollToPos) this.$root.scrollIntoView({ behavior: 'smooth' });
            }  
        }" 
        x-on:hashchange.window="checkHash()">
        <div class="relative">
            <div x-ref="tabList" class="flex flex-nowrap overflow-x-auto scrollbar-hidden mb-5 tab_list">
                <?php foreach ($tabs as $key => $tab) : ?>
                    <div class="flex-1 border-b-2 p-3 cursor-pointer font-semibold text-center text-base leading-normal" 
                        x-bind:class="activeTab == <?php echo $key; ?> ? 'border-brand-600 text-brand-600 hover:border-brand-600' : 'border-gray-100 text-gray-800 hover:border-gray-250'" 
                        x-ref="tab<?php echo $key; ?>"
                        x-on:click="setTab(<?php echo $key; ?>)"><?php echo $tab; ?></div>
                <?php endforeach; ?>
            </div>
            <button class="absolute right-0 top-0 bottom-0 h-full w-6 cursor-pointer bg-brand-600 hover:bg-brand-700 flex items-center justify-center" 
                    x-on:click="if (activeTab < countTabs) {
                                    const newActive = activeTab + 1;
                                    setTab(activeTab + 1, false);
                                    $refs['tab' + activeTab].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                                }" 
                    x-bind:class="activeTab == countTabs || !showScrollButtons ? 'hidden' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path d="M6.66667 6.62219L9.33334 9.46664L6.66667 12.3111" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
            </button>
            <button class="absolute left-0 top-0 bottom-0 h-full w-6 cursor-pointer bg-brand-600 hover:bg-brand-700 rotate-180 flex items-center justify-center" 
                    x-on:click="if (activeTab > 1) {
                                    setTab(activeTab - 1, false);
                                    $refs['tab' + activeTab].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                                }" 
                    x-bind:class="activeTab == 1 || !showScrollButtons ? 'hidden' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path d="M6.66667 6.62219L9.33334 9.46664L6.66667 12.3111" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
            </button>
        </div>
        <div>

            <?php foreach($tabs as $key => $tab) : ?>
                <div x-show="activeTab == <?php echo $key; ?>">   
                    Tab <?php echo $key; ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</section>

<!-- varianta 2 - vertikalni -->
<?php
    $tabId = rand(1000, 9999);
    $tabs = [
        1 => 'Kaznìjov',
        2 => 'Ejpovice',
        3 => 'Most',
        4 => 'Sokolov',
    ];
?>
<section class="container">
    <div x-data="{ 
            activeTab: 1,
            tabId: '<?php echo $tabId; ?>',
            countTabs: <?php echo count($tabs); ?>, 
            showScrollButtons: false,
            init() {
                this.checkHash();
                window.addEventListener('hashchange', () => this.checkHash());

                const tabList = this.$refs.tabList;
                const checkOverflow = () => {
                    this.showScrollButtons = tabList.scrollWidth > tabList.clientWidth;
                };
                checkOverflow();
                window.addEventListener('resize', checkOverflow);
            },
            checkHash() {
                const hash = window.location.hash.replace('#', '');
                const parts = hash.split('-');

                if (parts.length === 2) {
                    const [hashTabId, tabIndexStr] = parts;
                    const tabIndex = parseInt(tabIndexStr);

                    if (hashTabId === this.tabId && !isNaN(tabIndex)) {
                        this.activeTab = tabIndex;
                    }
                }
            },
            setTab(tab) {
                this.activeTab = tab;
                history.replaceState(null, null, '#' + tab);
            }   
        }" 
        x-on:hashchange.window="checkHash()"
        class="grid grid-cols-1 md:grid-cols-3">
        <div class="col-span-1 relative">
            <div x-ref="tabList" class="relative flex md:flex-col overflow-x-auto md:mb-5 scrollbar-hidden tab_list">

                <?php foreach ($tabs as $key => $tab) : ?>
                    <div class="flex-1 border-r-2 md:border-r-0 md:border-b-2 border-gray-100 py-3 px-2 md:p-8 cursor-pointer md:font-semibold md:text-center text-[13px] md:text-base text-brand-600 leading-normal" 
                        x-bind:class="activeTab == <?php echo $key; ?> ? 'bg-gray-50' : ''" 
                        x-ref="tab<?php echo $key; ?>"
                        x-on:click="activeTab = <?php echo $key; ?>"><?php echo $tab; ?></div>
                <?php endforeach; ?>

            </div>
            <button class="absolute right-0 top-0 bottom-0 h-full w-6 cursor-pointer bg-brand-600 hover:bg-brand-700 flex items-center justify-center" 
                    x-on:click="if (activeTab < countTabs) {
                                    activeTab++;
                                    $refs['tab' + activeTab].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                                }" 
                    x-bind:class="activeTab == countTabs || !showScrollButtons ? 'hidden' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path d="M6.66667 6.62219L9.33334 9.46664L6.66667 12.3111" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
            </button>
            <button class="absolute left-0 top-0 bottom-0 h-full w-6 cursor-pointer bg-brand-600 hover:bg-brand-700 rotate-180 flex items-center justify-center" 
                    x-on:click="if (activeTab > 1) {
                                    activeTab--;
                                    $refs['tab' + activeTab].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                                }" 
                    x-bind:class="activeTab == 1 || !showScrollButtons ? 'hidden' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path d="M6.66667 6.62219L9.33334 9.46664L6.66667 12.3111" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
            </button>
        </div>
        <div class="col-span-2">

            <?php foreach($tabs as $key => $tab) : ?>
                <div x-show="activeTab == <?php echo $key; ?>" class="bg-gray-50 p-12">   
                    Tab <?php echo $key; ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</section>