<div>
    <!-- ========================================================
         HEADER / NAVBAR  —  Preline UI + Tailwind CSS + Dark Mode
         Requires: preline JS ( npm install preline )
         In app.js: import 'preline';
         In tailwind.config.js: darkMode: 'class'  (or 'media')
         ======================================================== -->

    <header class="sticky top-0 z-50 flex flex-wrap md:justify-start md:flex-nowrap w-full
                   bg-white border-b border-gray-200
                   dark:bg-neutral-900 dark:border-neutral-700">

        <nav class="relative max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8
                    flex flex-wrap md:grid md:grid-cols-12 basis-full items-center py-3"
             aria-label="Global">

            <!-- ── Brand / Logo ────────────────────────────────── -->
            <div class="md:col-span-3 flex items-center gap-x-3">

                <!-- Crest mark -->
                <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-emerald-700 flex flex-col
                            items-center justify-center shadow-sm">
                    <span class="text-white font-extrabold text-[10px] leading-none tracking-wide">NHS</span>
                    <div class="w-5 h-px bg-white/60 my-0.5"></div>
                    <span class="text-white/70 text-[6px] tracking-widest">BNS</span>
                </div>

                <a href="#" class="flex-none">
                    <p class="text-sm font-bold text-gray-900 dark:text-white leading-tight">
                        Banquerohan NHS
                    </p>
                    <p class="text-[10px] text-gray-400 dark:text-neutral-500 leading-tight">
                        DepEd · Cadiz City
                    </p>
                </a>
            </div>
            <!-- ── END Brand ────────────────────────────────────── -->

            <!-- ── Mobile Toggle + Dark Toggle (right side small) ── -->
            <div class="flex items-center gap-x-2 ms-auto md:hidden">

                <!-- Dark mode toggle (mobile) -->
                <button type="button"
                        onclick="document.documentElement.classList.toggle('dark')"
                        class="size-9 flex justify-center items-center rounded-lg
                               text-gray-500 hover:bg-gray-100
                               dark:text-neutral-400 dark:hover:bg-neutral-800
                               transition">
                    <!-- Sun icon -->
                    <svg class="hidden dark:block size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                    </svg>
                    <!-- Moon icon -->
                    <svg class="block dark:hidden size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75
                                 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21
                                 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                    </svg>
                </button>

                <!-- Hamburger (Preline collapse trigger) -->
                <button type="button"
                        class="hs-collapse-toggle size-9 flex justify-center items-center
                               rounded-lg border border-gray-200 text-gray-800
                               hover:bg-gray-100 focus:outline-none focus:bg-gray-100
                               dark:border-neutral-700 dark:text-white
                               dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
                               transition"
                        id="hs-navbar-collapse"
                        aria-expanded="false"
                        aria-controls="hs-navbar-collapse-target"
                        aria-label="Toggle navigation">
                    <!-- Hamburger -->
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <!-- Close X -->
                    <svg class="hs-collapse-open:block hidden size-4" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <!-- ── END Mobile Toggle ─────────────────────────────── -->

            <!-- ── Collapsible Nav Links ─────────────────────────── -->
            <div id="hs-navbar-collapse-target"
                 class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow
                        md:block md:w-auto md:basis-auto md:col-span-6">

                <div class="flex flex-col gap-y-4 gap-x-0 mt-5
                            md:flex-row md:justify-center md:items-center
                            md:gap-x-7 md:mt-0">

                    <a href="/"
                       class="relative inline-flex items-center gap-x-1 text-sm font-medium
                              text-emerald-600 dark:text-emerald-400
                              after:absolute after:-bottom-1 after:start-0 after:w-full
                              after:h-0.5 after:bg-emerald-600 dark:after:bg-emerald-400">
                        Home
                    </a>

                    <a href="#"
                       class="inline-flex items-center gap-x-1 text-sm font-medium text-gray-600
                              hover:text-emerald-600 focus:outline-none focus:text-emerald-600
                              dark:text-neutral-300 dark:hover:text-emerald-400
                              dark:focus:text-emerald-400 transition">
                        About
                    </a>

                    <!-- Dropdown: Academics -->
                    <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed]
                                [--adaptive:none] md:[--trigger:hover] [--is-collapse:true]
                                md:[--is-collapse:false]">

                        <button type="button"
                                class="hs-dropdown-toggle inline-flex items-center gap-x-1 text-sm
                                       font-medium text-gray-600 hover:text-emerald-600
                                       focus:outline-none focus:text-emerald-600
                                       dark:text-neutral-300 dark:hover:text-emerald-400
                                       dark:focus:text-emerald-400 transition">
                            Academics
                            <svg class="hs-dropdown-open:rotate-180 size-4 transition" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-200
                                    hs-dropdown-open:opacity-100 opacity-0 hidden z-50
                                    min-w-48 bg-white shadow-lg rounded-xl py-2 px-1
                                    dark:bg-neutral-800 dark:border dark:border-neutral-700
                                    md:mt-2">
                            <a href="#"
                               class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm
                                      text-gray-800 hover:bg-gray-100 focus:outline-none
                                      focus:bg-gray-100 dark:text-neutral-300
                                      dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                Programs
                            </a>
                            <a href="#"
                               class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm
                                      text-gray-800 hover:bg-gray-100 focus:outline-none
                                      focus:bg-gray-100 dark:text-neutral-300
                                      dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                Curriculum
                            </a>
                            <a href="#"
                               class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm
                                      text-gray-800 hover:bg-gray-100 focus:outline-none
                                      focus:bg-gray-100 dark:text-neutral-300
                                      dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                Honor Roll
                            </a>
                        </div>
                    </div>
                    <!-- END Dropdown -->

                    <a href="#"
                       class="inline-flex items-center gap-x-1 text-sm font-medium text-gray-600
                              hover:text-emerald-600 focus:outline-none focus:text-emerald-600
                              dark:text-neutral-300 dark:hover:text-emerald-400
                              dark:focus:text-emerald-400 transition">
                        News &amp; Events
                    </a>

                    <a href="#"
                       class="inline-flex items-center gap-x-1 text-sm font-medium text-gray-600
                              hover:text-emerald-600 focus:outline-none focus:text-emerald-600
                              dark:text-neutral-300 dark:hover:text-emerald-400
                              dark:focus:text-emerald-400 transition">
                        Contact
                    </a>
                </div>
            </div>
            <!-- ── END Nav Links ─────────────────────────────────── -->

            <!-- ── Right Actions ─────────────────────────────────── -->
            <div class="hidden md:flex md:col-span-3 md:justify-end md:items-center gap-x-2">

                <!-- Dark mode toggle (desktop) -->
                <button type="button"
                        onclick="document.documentElement.classList.toggle('dark')"
                        class="size-9 flex justify-center items-center rounded-lg
                               text-gray-500 hover:bg-gray-100
                               dark:text-neutral-400 dark:hover:bg-neutral-800
                               transition"
                        title="Toggle dark mode">
                    <svg class="hidden dark:block size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                    </svg>
                    <svg class="block dark:hidden size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75
                                 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21
                                 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                    </svg>
                </button>

                <!-- Login button -->
                <a href="#"
                   class="py-2 px-3 text-sm font-medium text-gray-700 rounded-lg
                          hover:bg-gray-100 focus:outline-none focus:bg-gray-100
                          dark:text-neutral-300 dark:hover:bg-neutral-700
                          dark:focus:bg-neutral-700 transition">
                    Log in
                </a>

                <!-- Enroll CTA -->
                <a href="#"
                   class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold
                          rounded-lg border border-transparent bg-emerald-700 text-white
                          hover:bg-emerald-800 focus:outline-none focus:bg-emerald-800
                          dark:bg-emerald-600 dark:hover:bg-emerald-700
                          dark:focus:bg-emerald-700 transition">
                    Enroll Now
                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <!-- ── END Right Actions ──────────────────────────────── -->

        </nav>
    </header>
</div>
