<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'N-CEYLON | Authentic Sri Lankan Spices')</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icon/nceylontp.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icon/nceylontp.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/icon/nceylontp.png') }}" />
    <meta name="description" content="@yield('meta_description', 'Premium and authentic Sri Lankan Spices exported directly from our local plantations.')" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>

<body class="bg-surface font-sans text-secondary overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-gradient-to-br from-secondary via-secondary-light to-secondary transition-opacity duration-500 overflow-hidden">
        <!-- Animated background particles -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-primary rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-40 h-40 bg-accent rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>

        <!-- Main loader content -->
        <div class="relative flex flex-col items-center gap-8">
            <!-- Logo with rotating spice elements -->
            <div class="relative">
                <!-- Outer rotating ring -->
                <div class="absolute inset-0 -m-8">
                    <svg class="w-40 h-40 animate-spin-slow" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="url(#gradient1)" stroke-width="0.5" stroke-dasharray="10 5" opacity="0.3"/>
                        <defs>
                            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#D4AF37;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#8B4513;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Middle rotating ring (opposite direction) -->
                <div class="absolute inset-0 -m-6">
                    <svg class="w-36 h-36 animate-spin-reverse" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="#D4AF37" stroke-width="1" stroke-dasharray="5 10" opacity="0.4"/>
                    </svg>
                </div>

                <!-- Glowing backdrop -->
                <div class="absolute inset-0 bg-primary/20 rounded-full blur-2xl animate-pulse"></div>

                <!-- Logo -->
                <div class="relative w-24 h-24 flex items-center justify-center">
                    <img class="w-full h-full object-contain animate-float" 
                         src="{{ asset('assets/icon/nceylontp.png') }}" 
                         alt="N-CEYLON Loading..." />
                </div>

                <!-- Orbiting spice dots -->
                <div class="absolute inset-0 animate-spin-slow">
                    <div class="absolute top-0 left-1/2 w-2 h-2 bg-accent rounded-full -ml-1 shadow-lg shadow-accent/50"></div>
                </div>
                <div class="absolute inset-0 animate-spin-slow" style="animation-delay: 0.33s;">
                    <div class="absolute top-0 left-1/2 w-2 h-2 bg-primary rounded-full -ml-1 shadow-lg shadow-primary/50"></div>
                </div>
                <div class="absolute inset-0 animate-spin-slow" style="animation-delay: 0.66s;">
                    <div class="absolute top-0 left-1/2 w-2 h-2 bg-accent rounded-full -ml-1 shadow-lg shadow-accent/50"></div>
                </div>
            </div>

            <!-- Loading text -->
            <div class="flex flex-col items-center gap-3">
                <h3 class="text-white font-heading font-black text-xl tracking-wider animate-pulse">
                    N-CEYLON
                </h3>
                <p class="text-white/60 text-xs font-semibold uppercase tracking-[0.3em] animate-pulse" style="animation-delay: 0.2s;">
                    Authentic Ceylon Spices
                </p>
                
                <!-- Progress bar -->
                <div class="w-48 h-1 bg-white/10 rounded-full overflow-hidden mt-2">
                    <div class="h-full bg-gradient-to-r from-primary via-accent to-primary animate-loading-bar rounded-full"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col min-h-screen">
        <!-- Floating Header / Navbar -->
        <header id="main-header" class="fixed top-0 inset-x-0 z-50 w-full transition-all duration-500 px-0 pt-0">
            <nav id="nav-element" class="w-full bg-white/80 backdrop-blur-xl border-b border-secondary/5 py-2 lg:py-3 transition-all duration-500 lg:overflow-visible">
                <div class="container mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center group">
                            <img src="{{ asset('assets/icon/nceylontp.png') }}"
                                 class="h-10 sm:h-11 lg:h-11 w-auto object-contain origin-left lg:scale-[1.8] group-hover:scale-[1.9] transition-transform duration-300"
                                 alt="N-CEYLON">
                        </a>

                        <!-- Desktop Menu -->
                        <div class="hidden lg:flex items-center space-x-8">
                            <a href="{{ url('/') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Home
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('/') ? 'w-full' : '' }}"></span>
                            </a>
                            <a href="{{ url('/about') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Our Story
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('about') ? 'w-full' : '' }}"></span>
                            </a>
                            <a href="{{ url('/products') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Shop Spices
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('products*') ? 'w-full' : '' }}"></span>
                            </a>
                            <a href="{{ url('/gallery') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Gallery
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('gallery*') ? 'w-full' : '' }}"></span>
                            </a>
                            <a href="{{ url('/contact') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Contact
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('contact') ? 'w-full' : '' }}"></span>
                            </a>
                            <a href="{{ url('/quotations') }}" class="relative py-2 text-xs font-black uppercase tracking-widest text-secondary/80 hover:text-primary transition-colors group">
                                Wholesale Plans
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary group-hover:w-full transition-all duration-300 {{ Request::is('quotations') ? 'w-full' : '' }}"></span>
                            </a>
                        </div>

                        <!-- Header CTA Actions -->
                        <div class="hidden lg:flex items-center space-x-6">
                            <a href="tel:+94777308365" class="flex items-center text-xs font-bold text-secondary/75 hover:text-primary transition-all">
                                <div class="w-8 h-8 rounded-full bg-surface-dark border border-secondary/5 flex items-center justify-center mr-2.5">
                                    <i class="fas fa-phone-alt text-primary text-[10px]"></i>
                                </div>
                                <span class="hidden xl:inline">+94 77 730 8365</span>
                            </a>
                            
                            <a href="{{ url('/contact') }}" class="bg-secondary text-white hover:bg-primary text-[10px] font-black uppercase tracking-widest px-6 py-3 rounded-full hover:shadow-premium transition-all hover:scale-105 active:scale-95 duration-300">
                                Get Quotation
                            </a>


                        </div>

                        <!-- Mobile Menu Button -->
                        <button id="mobile-menu-btn" class="lg:hidden text-secondary p-2 focus:outline-none flex items-center justify-center w-10 h-10 rounded-full bg-surface-dark border border-secondary/5" aria-label="Toggle menu">
                            <i class="fas fa-bars text-sm"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden transform translate-x-full transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-secondary/80 backdrop-blur-md" id="mobile-menu-close"></div>
                <div class="absolute right-0 top-0 h-full w-4/5 max-w-sm bg-surface shadow-2xl flex flex-col p-8 bg-spice-pattern bg-noise-overlay border-l border-secondary/5">
                    <button id="mobile-menu-close-btn" class="self-end text-secondary p-2 mb-8 hover:text-primary transition-colors flex items-center justify-center w-10 h-10 rounded-full bg-surface-dark border border-secondary/5">
                        <i class="fas fa-times text-sm"></i>
                    </button>
                    
                    <div class="flex flex-col space-y-6 pt-4">
                        <a href="{{ url('/') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Home</a>
                        <a href="{{ url('/about') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Our Story</a>
                        <a href="{{ url('/products') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Shop Spices</a>
                        <a href="{{ url('/gallery') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Gallery</a>
                        <a href="{{ url('/contact') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Contact</a>
                        <a href="{{ url('/quotations') }}" class="text-xl font-heading font-black text-secondary hover:text-primary border-b border-secondary/5 pb-3">Wholesale Plans</a>
                    </div>

                    <div class="mt-auto space-y-6 pt-8 border-t border-secondary/10">
                        <div class="flex items-center gap-3 text-xs font-semibold text-secondary/60">
                            <i class="fas fa-phone-alt text-primary text-[10px]"></i>
                            <span>+94 77 730 8365</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs font-semibold text-secondary/60">
                            <i class="fas fa-envelope text-primary text-[10px]"></i>
                            <span>nceylonspices@gmail.com</span>
                        </div>
                        <a href="{{ url('/contact') }}" class="w-full bg-primary text-white text-center py-4 rounded-2xl font-black text-xs uppercase tracking-widest shadow-md hover:bg-primary-dark transition-all block">
                            Request Quote
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow pt-24">
            @yield('content')
        </main>

        <!-- ═══════════════════════════════════════════
             FOOTER — N-CEYLON Redesign
        ═══════════════════════════════════════════ -->
        <footer class="relative bg-secondary text-white overflow-hidden">

            <!-- ── Top accent line ── -->
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/60 to-transparent"></div>

            <!-- ── Ambient glow orbs ── -->
            <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-primary/8 rounded-full -translate-x-1/2 -translate-y-1/2 blur-[120px] pointer-events-none"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-accent/6 rounded-full translate-x-1/3 translate-y-1/3 blur-[100px] pointer-events-none"></div>

            <!-- ══════════════════════════════════════
                 SECTION 1 — Newsletter CTA Banner
            ══════════════════════════════════════ -->
            <div class="relative border-b border-white/5 bg-noise-overlay">
                <div class="container mx-auto px-4 py-14 lg:py-16">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-10">

                        <!-- Left copy -->
                        <div class="text-center lg:text-left max-w-lg">
                            <div class="inline-flex items-center gap-2 mb-4">
                                <span class="w-6 h-[1px] bg-accent"></span>
                                <span class="text-accent text-[9px] font-black uppercase tracking-[0.3em]">Trade Intelligence</span>
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white leading-snug">
                                Get harvest reports &amp; <br class="hidden sm:block">
                                <span class="text-accent italic">weekly spot rates</span> in your inbox
                            </h3>
                        </div>

                        <!-- Right form -->
                        <form class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto lg:min-w-[480px]"
                              onsubmit="event.preventDefault(); this.querySelector('button').textContent='Subscribed ✓'; this.querySelector('button').disabled=true;">
                            <input type="email" placeholder="your@company.com" required
                                   class="flex-1 bg-white/8 border border-white/15 text-white placeholder:text-white/35 text-sm font-semibold rounded-2xl py-4 px-6 focus:outline-none focus:border-accent/60 focus:bg-white/12 transition-all">
                            <button type="submit"
                                    class="bg-primary hover:bg-accent hover:text-secondary text-white font-black text-[10px] uppercase tracking-widest px-8 py-4 rounded-2xl transition-all duration-300 shadow-lg shadow-primary/20 whitespace-nowrap cursor-pointer">
                                Subscribe Free
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ══════════════════════════════════════
                 SECTION 3 — Main Footer Grid
            ══════════════════════════════════════ -->
            <div class="container mx-auto px-4 py-16 lg:py-20 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">

                    <!-- Brand column — spans 4 cols -->
                    <div class="lg:col-span-4 space-y-7">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group">
                            <img src="{{ asset('assets/icon/nceylontp.png') }}" class="h-16 w-auto group-hover:scale-105 transition-transform duration-300" alt="N-CEYLON">
                        </a>

                        <!-- Tagline -->
                        <p class="text-white/45 text-xs font-semibold leading-relaxed max-w-xs">
                            Premium grade, hand-harvested authentic Ceylon spices. Sourced ethically from highland forest gardens in Kandy &amp; Matale since 2008.
                        </p>

                        <!-- Certifications row -->
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Grade-1 Certified', 'EDB Approved', 'ISO Compliant', 'Eco Sourced'] as $cert)
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 border border-white/10 rounded-full text-[9px] font-black uppercase tracking-wider text-white/50 hover:border-accent/40 hover:text-accent/80 transition-all cursor-default">
                                <i class="fas fa-check text-[7px] text-primary"></i>
                                {{ $cert }}
                            </span>
                            @endforeach
                        </div>

                        <!-- Social icons -->
                        <div class="flex items-center gap-3 pt-1">
                            <span class="text-[9px] font-black uppercase tracking-widest text-white/25 mr-1">Follow</span>
                            @foreach([
                                ['fab fa-facebook-f', 'https://www.facebook.com/profile.php?id=100090691998394&mibextid=wwXIfr', 'Facebook'],
                                ['fab fa-instagram', 'https://www.instagram.com/n_ceylon_spices?igsh=MXUzZGlqdDEyenFsbg==', 'Instagram'],
                                ['fab fa-tiktok', 'https://www.tiktok.com/@nceylon?_r=1&_t=ZS-96YDdpVqyGL0777308365', 'TikTok'],
                            ] as [$icon, $href, $label])
                            <a href="{{ $href }}" target="_blank" aria-label="{{ $label }}"
                               class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:bg-primary hover:border-primary hover:text-white transition-all duration-300 group">
                                <i class="{{ $icon }} text-[11px] group-hover:scale-110 transition-transform"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Spice Collection — spans 2 cols -->
                    <div class="lg:col-span-2">
                        <h5 class="text-[9px] font-black uppercase tracking-[0.25em] text-white/40 mb-6 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-accent/50"></span>
                            Collection
                        </h5>
                        <ul class="space-y-3">
                            @foreach([
                                ['Ceylon Cinnamon', '/products'],
                                ['Black Pepper', '/products'],
                                ['Green Cardamom', '/products'],
                                ['Cloves & Nutmeg', '/products'],
                                ['Turmeric', '/products'],
                                ['Star Anise', '/products'],
                                ['View All Spices →', '/products'],
                            ] as [$name, $path])
                            <li>
                                <a href="{{ url($path) }}"
                                   class="text-xs font-semibold text-white/45 hover:text-accent transition-colors duration-200 flex items-center gap-2 group">
                                    <span class="w-0 group-hover:w-3 h-[1px] bg-accent transition-all duration-300 overflow-hidden"></span>
                                    {{ $name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Company links — spans 2 cols -->
                    <div class="lg:col-span-2">
                        <h5 class="text-[9px] font-black uppercase tracking-[0.25em] text-white/40 mb-6 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-accent/50"></span>
                            Company
                        </h5>
                        <ul class="space-y-3">
                            @foreach([
                                ['Our Story', '/about'],
                                ['Spice Collection', '/products'],
                                ['Gallery', '/gallery'],
                                ['Wholesale Plans', '/quotations'],
                                ['Get a Quote', '/contact'],
                                ['Privacy Policy', '/privacy-policy'],
                            ] as [$name, $path])
                            <li>
                                <a href="{{ url($path) }}"
                                   class="text-xs font-semibold text-white/45 hover:text-accent transition-colors duration-200 flex items-center gap-2 group">
                                    <span class="w-0 group-hover:w-3 h-[1px] bg-accent transition-all duration-300 overflow-hidden"></span>
                                    {{ $name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Contact column — spans 4 cols -->
                    <div class="lg:col-span-4">
                        <h5 class="text-[9px] font-black uppercase tracking-[0.25em] text-white/40 mb-6 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-accent/50"></span>
                            Trade Hub
                        </h5>

                        <div class="space-y-4 mb-8">
                            @foreach([
                                ['fa-phone-alt', '+94 77 730 8365', 'tel:+94777308365'],
                                ['fa-envelope', 'nceylonspices@gmail.com', 'mailto:nceylonspices@gmail.com'],
                                ['fa-map-marker-alt', 'No.2540, Stage 3, Anuradhapura', 'https://maps.app.goo.gl/Rb8QMgcMj9LHjCHQ8'],
                                ['fa-clock', 'Mon – Sat, 8am – 6pm IST', null],
                            ] as [$icon, $text, $href])
                            <div class="flex items-start gap-4 group">
                                <div class="w-8 h-8 rounded-xl bg-white/5 border border-white/8 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 group-hover:border-primary/30 transition-all">
                                    <i class="fas {{ $icon }} text-accent text-[10px]"></i>
                                </div>
                                @if($href)
                                    <a href="{{ $href }}" class="text-xs font-semibold text-white/50 hover:text-white transition-colors pt-1.5 leading-relaxed">{{ $text }}</a>
                                @else
                                    <span class="text-xs font-semibold text-white/50 pt-1.5 leading-relaxed">{{ $text }}</span>
                                @endif
                            </div>
                            @endforeach
                        </div>

                        <!-- CTA button -->
                        <a href="{{ url('/contact') }}"
                           class="inline-flex items-center gap-3 px-7 py-3.5 bg-primary hover:bg-accent hover:text-secondary text-white rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all duration-300 shadow-lg shadow-primary/20 group">
                            <span>Request a Quote</span>
                            <i class="fas fa-arrow-right text-[9px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- ══════════════════════════════════════
                 SECTION 4 — Bottom Bar
            ══════════════════════════════════════ -->
            <div class="relative border-t border-white/5 bg-black/20">
                <div class="container mx-auto px-4 py-5">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

                        <!-- Copyright -->
                        <p class="text-[10px] font-semibold text-white/30 text-center sm:text-left">
                            © <span id="year"></span> N-CEYLON Spices (Pvt) Ltd. All rights reserved. &nbsp;·&nbsp; Crafted with care in Sri Lanka.
                        </p>

                        <!-- Centre: legal links -->
                        <div class="flex items-center gap-5">
                            <a href="{{ url('/privacy-policy') }}" class="text-[10px] font-semibold text-white/30 hover:text-accent transition-colors">Privacy</a>
                            <span class="w-1 h-1 bg-white/15 rounded-full"></span>
                            <a href="{{ url('/quotations') }}" class="text-[10px] font-semibold text-white/30 hover:text-accent transition-colors">Trade Terms</a>
                            <span class="w-1 h-1 bg-white/15 rounded-full"></span>
                            <a href="{{ url('/contact') }}" class="text-[10px] font-semibold text-white/30 hover:text-accent transition-colors">Contact</a>
                        </div>

                        <!-- Right: cert badge -->
                        <div class="flex items-center gap-2 text-white/20 hover:text-accent/60 transition-colors cursor-default">
                            <i class="fas fa-leaf text-[9px]"></i>
                            <span class="text-[9px] font-black uppercase tracking-widest">EDB Export Certified</span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ══════════════════════════════════════
                 SECTION 5 — Developer Credit
            ══════════════════════════════════════ -->
            <div class="relative border-t border-white/5 bg-black/30">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex items-center justify-center gap-3">
                        <span class="text-[10px] font-semibold text-white/20">Developed &amp; Deployed by Nerdtech Labs</span>
                        <a href="https://www.facebook.com/nerdtechlabs" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-2 opacity-40 hover:opacity-80 transition-opacity duration-300">
                            <img src="{{ asset('assets/icon/logo full.png') }}" alt="NerdTech Labs" class="h-5 w-auto object-contain filter brightness-0 invert">
                        </a>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Swiper Initialization
        const initSwiper = () => {
            const sliders = document.querySelectorAll('.thm-swiper__slider');
            sliders.forEach(slider => {
                const options = slider.dataset.swiperOptions ? JSON.parse(slider.dataset.swiperOptions) : {};
                new Swiper(slider, options);
            });
        };

        // Preloader with visibility delay
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                setTimeout(() => {
                    preloader.classList.add('opacity-0');
                    setTimeout(() => preloader.classList.add('hidden'), 500);
                }, 800);
            }
            initSwiper();
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const menuCloseBtn = document.getElementById('mobile-menu-close-btn');
        const menuCloseOverlay = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');

        const toggleMenu = (show) => {
            if (show) {
                menu.classList.remove('translate-x-full');
            } else {
                menu.classList.add('translate-x-full');
            }
        };

        menuBtn.addEventListener('click', () => toggleMenu(true));
        menuCloseBtn.addEventListener('click', () => toggleMenu(false));
        menuCloseOverlay.addEventListener('click', () => toggleMenu(false));

        // Dynamic Floating Header scroll animation
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            const navElement = document.getElementById('nav-element');
            if (window.scrollY > 40) {
                header.classList.add('px-4', 'sm:px-8', 'pt-4');
                navElement.classList.add('rounded-[24px]', 'shadow-premium', 'bg-white/95', 'border', 'border-primary/10');
                navElement.classList.remove('border-b', 'border-secondary/5');
            } else {
                header.classList.remove('px-4', 'sm:px-8', 'pt-4');
                navElement.classList.remove('rounded-[24px]', 'shadow-premium', 'bg-white/95', 'border', 'border-primary/10');
                navElement.classList.add('border-b', 'border-secondary/5');
            }
        });

        // Current Year
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    @stack('scripts')
</body>

</html>

