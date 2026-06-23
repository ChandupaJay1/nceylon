@extends('layouts.master')

@section('title', 'N-CEYLON | Premium Sri Lankan Spices')

@section('content')
    <!-- [HERO] Version 2.0: Cinematic Immersive Slider -->
    <section class="relative h-screen min-h-[700px] overflow-hidden bg-secondary">
        <div class="swiper thm-swiper__slider h-full bg-noise-overlay" data-swiper-options='{
            "slidesPerView": 1,
            "loop": true,
            "effect": "fade",
            "speed": 1500,
            "autoplay": { "delay": 7000, "disableOnInteraction": false },
            "pagination": { "el": ".hero-pagination", "clickable": true }
        }'>
            <div class="swiper-wrapper h-full">
                <!-- Slide 1: Pure Origin -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="{{ asset('assets/spices/imag/spices1.jpg') }}" 
                             class="w-full h-full object-cover" alt="Authentic Ceylon Spices">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/20 backdrop-blur-md border border-primary/20 text-accent rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-2 h-2 bg-accent rounded-full animate-ping"></span>
                                Direct from Sri Lanka
                            </span>
                            <h1 class="text-5xl sm:text-7xl lg:text-[90px] xl:text-[100px] font-heading font-black text-white leading-[0.95] mb-8 tracking-tight">
                                Authentic <br> <span class="text-primary italic">Ceylon</span> <br> Spices
                            </h1>
                            <p class="text-xl sm:text-2xl font-medium text-surface/90 mb-12 max-w-xl leading-relaxed">
                                Sourced directly from local plantations in Kandy & Matale. Hand-harvested, premium grade, and certified pure.
                            </p>
                            <div class="flex items-center gap-6">
                                <a href="{{ url('/products') }}" class="group relative px-9 py-4.5 bg-primary text-white rounded-full font-black text-sm tracking-wider uppercase overflow-hidden transition-all shadow-lg shadow-primary/30 flex items-center justify-center scale-100 hover:scale-105 active:scale-95">
                                    <span class="relative z-10 transition-all duration-300 group-hover:-translate-y-12 group-hover:opacity-0">Explore Collection</span>
                                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-primary font-black translate-y-12 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">Discover Now</span>
                                </a>
                                <div class="hidden sm:flex items-center gap-4 text-white/50">
                                    <div class="w-12 h-[1px] bg-white/20"></div>
                                    <span class="text-xs font-bold uppercase tracking-widest italic">Since 2008</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Global Reach -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="{{ asset('assets/spices/imag/spices2.jpg') }}" 
                             class="w-full h-full object-cover" alt="Global Spice Exports">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-accent/20 backdrop-blur-md border border-accent/20 text-white rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-2 h-2 bg-accent rounded-full animate-ping"></span>
                                Global Logistics
                            </span>
                            <h2 class="text-5xl sm:text-7xl lg:text-[90px] xl:text-[100px] font-heading font-black text-white leading-[0.95] mb-8 tracking-tight">
                                Premium <br> <span class="text-accent italic">Consignments</span>
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-surface/90 mb-12 max-w-xl leading-relaxed">
                                Vacuum-packed fresh cargo shipped worldwide with perfect temperature control and rapid logistics.
                            </p>
                            <div class="flex items-center gap-6">
                                <a href="{{ url('/contact') }}" class="px-9 py-4.5 bg-transparent border-2 border-white text-white rounded-full font-black text-sm tracking-wider uppercase hover:bg-white hover:text-secondary transition-all shadow-lg hover:scale-105 active:scale-95">
                                    Request a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Sustainable Future -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="{{ asset('assets/spices/imag/spices3.jpg') }}" 
                             class="w-full h-full object-cover" alt="Sustainable Spice Farming">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/20 backdrop-blur-md border border-primary/20 text-accent rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-2 h-2 bg-primary rounded-full animate-ping"></span>
                                Agroforestry & Sourcing
                            </span>
                            <h2 class="text-5xl sm:text-7xl lg:text-[90px] xl:text-[100px] font-heading font-black text-white leading-[0.95] mb-8 tracking-tight">
                                Sustainable <br> <span class="text-primary italic">Farming</span>
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-surface/90 mb-12 max-w-xl leading-relaxed">
                                Certified eco-friendly and ethical cultivation supporting over 300+ local families.
                            </p>
                            <div class="flex items-center gap-6">
                                <a href="{{ url('/products') }}" class="px-9 py-4.5 bg-white text-secondary rounded-full font-black text-sm tracking-wider uppercase hover:bg-primary hover:text-white transition-all shadow-xl hover:scale-105 active:scale-95">
                                    Join the Movement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Extras -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-20 container mx-auto px-4 flex justify-between items-end pointer-events-none">
                <div class="hero-pagination flex gap-2 pointer-events-auto"></div>
                <div class="hidden lg:block animate-bounce opacity-30">
                    <div class="w-px h-24 bg-gradient-to-b from-white to-transparent"></div>
                </div>
            </div>
        </div>
    </section>



    <!-- [BENTO GRID] Why Choose Us — Redesigned -->
    <section class="py-20 lg:py-32 bg-surface relative overflow-hidden">

        {{-- Background texture --}}
        <div class="absolute inset-0 bg-spice-pattern bg-noise-overlay pointer-events-none"></div>
        <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-40 -left-40 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">

            {{-- Section heading --}}
            <div class="text-center mb-16 max-w-2xl mx-auto reveal-section">
                <span class="inline-flex items-center gap-2 text-primary font-black uppercase tracking-[0.25em] text-[10px] mb-5">
                    <span class="w-6 h-[1px] bg-primary"></span>
                    Purity &amp; Standard
                    <span class="w-6 h-[1px] bg-primary"></span>
                </span>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-black text-secondary leading-[1.05]">
                    Where Purity Meets <br><span class="text-primary italic">Perfection.</span>
                </h2>
            </div>

            {{-- ── ROW 1: Big hero card + two stacked cards ── --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-5">

                {{-- Hero card — spans 2 cols, tall --}}
                <div class="lg:col-span-2 relative rounded-[40px] overflow-hidden min-h-[420px] group reveal-left shadow-premium">
                    {{-- Background image --}}
                    <img src="{{ asset('assets/spices/imag/spices4.jpg') }}"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-[3000ms]" alt="Ceylon Spice Harvest">
                    <div class="absolute inset-0 bg-gradient-to-tr from-secondary/95 via-secondary/60 to-transparent"></div>

                    {{-- Content --}}
                    <div class="relative z-10 h-full flex flex-col justify-between p-10 lg:p-14">
                        <div>
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 border border-white/15 backdrop-blur-md rounded-full text-white/70 text-[9px] font-black uppercase tracking-[0.25em] mb-8">
                                <i class="fas fa-map-marker-alt text-accent text-[8px]"></i>
                                Kandy &amp; Matale Highlands
                            </span>
                            <h3 class="text-4xl sm:text-5xl font-heading font-black text-white leading-tight mb-5">
                                Harvested with <br><span class="text-accent italic">Care.</span>
                            </h3>
                            <p class="text-white/60 text-sm leading-relaxed max-w-md font-semibold">
                                Direct partnerships with 300+ local smallholder spice farmers ensuring ethical practices and premium grade quality in every single batch.
                            </p>
                        </div>
                        <div class="flex items-center gap-4 mt-10 group-hover:translate-x-2 transition-transform duration-500">
                            <div class="w-14 h-14 bg-accent/20 border border-accent/30 backdrop-blur-md rounded-2xl flex items-center justify-center">
                                <i class="fas fa-certificate text-2xl text-accent"></i>
                            </div>
                            <div>
                                <div class="text-white font-black text-sm">Pure Grade-1 Certified</div>
                                <div class="text-white/40 text-[10px] font-semibold uppercase tracking-widest">EDB Approved Export</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right column: two stacked cards --}}
                <div class="flex flex-col gap-5">

                    {{-- Air & Sea Cargo --}}
                    <div class="flex-1 bg-secondary rounded-[32px] p-8 lg:p-10 flex flex-col justify-between group hover:bg-secondary-light transition-colors duration-500 reveal-right shadow-premium border border-white/5 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-12 h-12 bg-white/8 border border-white/10 rounded-2xl flex items-center justify-center text-accent text-xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-plane-departure"></i>
                            </div>
                            <span class="text-white/25 font-black uppercase tracking-widest text-[9px] border border-white/10 rounded-full px-3 py-1">Logistics</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-black text-white mb-2">Air &amp; Sea Global Cargo</h4>
                            <p class="text-white/45 text-xs font-semibold leading-relaxed">Vacuum-packed custom shipping designed to protect essential oils and preserve freshness worldwide.</p>
                        </div>
                    </div>

                    {{-- Lab Verified --}}
                    <div class="flex-1 bg-white rounded-[32px] p-8 lg:p-10 flex flex-col justify-between group hover:shadow-premium border border-secondary/5 transition-all reveal-right shadow-premium relative overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-32 h-32 bg-primary/5 rounded-full mr-[-2rem] mb-[-2rem] blur-2xl"></div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-12 h-12 bg-surface-dark border border-secondary/5 rounded-2xl flex items-center justify-center text-primary text-xl group-hover:bg-primary group-hover:text-white transition-all">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <span class="text-secondary/20 font-black uppercase tracking-widest text-[9px] border border-secondary/10 rounded-full px-3 py-1">Quality</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-black text-secondary mb-2">Lab Verified Grade</h4>
                            <p class="text-gray-400 text-xs font-semibold leading-relaxed">Full chemical analysis, moisture levels, and oil content certification with every dispatch.</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ── ROW 2: Three equal cards ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

                {{-- Bespoke Pack --}}
                <div class="bg-accent rounded-[32px] p-8 lg:p-10 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 reveal-up shadow-spice-gold relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-secondary/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                    <div class="w-12 h-12 bg-secondary/15 rounded-2xl flex items-center justify-center text-secondary text-xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-secondary mb-2">Bespoke Pack</h4>
                        <p class="text-secondary/60 text-xs font-semibold leading-relaxed">Tailored grinding, sorting, and private-label retail-ready packaging solutions.</p>
                    </div>
                </div>

                {{-- Ethical Sourcing --}}
                <div class="bg-surface-dark rounded-[32px] p-8 lg:p-10 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 reveal-up border border-secondary/5 shadow-premium relative overflow-hidden">
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-primary/5 rounded-full -ml-20 -mb-20 blur-3xl"></div>
                    <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl mb-8 group-hover:bg-primary group-hover:text-white transition-all">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-secondary mb-2">Ethical Agroforestry</h4>
                        <p class="text-gray-500 text-xs font-semibold leading-relaxed">Chemical-free cultivation alongside native trees, enriched by tropical volcanic mineral soils.</p>
                    </div>
                </div>

                {{-- CTA card --}}
                <div class="bg-primary rounded-[32px] p-8 lg:p-10 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 reveal-up shadow-premium relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-white/5 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                    <div class="w-12 h-12 bg-white/15 rounded-2xl flex items-center justify-center text-white text-xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-white mb-2">Start a Partnership</h4>
                        <p class="text-white/60 text-xs font-semibold leading-relaxed mb-6">Ready to source authentic Ceylon spices? Let's build a supply contract together.</p>
                        <a href="{{ url('/contact') }}"
                           class="inline-flex items-center gap-2 text-accent font-black text-[10px] uppercase tracking-widest hover:gap-4 transition-all group-hover:text-white">
                            <span>Get a Quote</span>
                            <i class="fas fa-arrow-right text-[9px]"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- [STORY & TIMELINE] The Organic Journey -->
    <section class="py-24 lg:py-36 bg-surface relative overflow-hidden border-t border-secondary/5">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-20 lg:gap-24">
                <!-- Visual Story -->
                <div class="lg:w-1/2 relative reveal-left">
                    <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">Highland Heritage</span>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-black text-secondary mb-10 leading-[1.05]">The Cultivation <br> of <span class="text-primary italic">Ceylon Spices</span></h2>
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-primary/10 rounded-[50px] blur-2xl group-hover:bg-primary/20 transition-all opacity-0 group-hover:opacity-100"></div>
                        <img src="{{ asset('assets/spices/imag/spices5.jpg') }}" 
                             class="rounded-[50px] shadow-premium relative z-10 transition-all duration-700 group-hover:scale-[1.01]" alt="Sri Lankan Highland Spice Harvesting">
                        
                        <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-[30px] shadow-premium z-20 max-w-[260px] hidden xl:block animate-floating border border-secondary/5">
                            <p class="text-secondary font-bold text-sm italic leading-relaxed">"We don't just export spices; we share the rich volcanic soil and centuries-old agricultural soul of Sri Lanka."</p>
                            <span class="text-primary text-[10px] font-black uppercase tracking-widest mt-4 block">- Founder's Promise</span>
                        </div>
                    </div>
                </div>

                <!-- Timeline Journey -->
                <div class="lg:w-1/2 space-y-12 py-10">
                    <div class="relative pl-12 reveal-up">
                        <div class="absolute left-0 top-0 w-[2px] h-full bg-primary/20"></div>
                        <div class="absolute left-[-5px] top-1.5 w-[12px] h-[12px] rounded-full bg-primary shadow-spice-gold"></div>
                        <h4 class="text-2xl font-black text-secondary mb-3">Highland Forest Sourcing</h4>
                        <p class="text-gray-500 leading-relaxed text-sm">We hand-select the finest spice crops from the mist-covered, high-altitude forest gardens of Kandy and Matale, selecting only premium heirloom varieties.</p>
                    </div>

                    <div class="relative pl-12 reveal-up">
                        <div class="absolute left-0 top-0 w-[2px] h-full bg-primary/20"></div>
                        <div class="absolute left-[-5px] top-1.5 w-[12px] h-[12px] rounded-full bg-primary animate-pulse"></div>
                        <h4 class="text-2xl font-black text-secondary mb-3">Biodiverse Agroforestry</h4>
                        <p class="text-gray-500 leading-relaxed text-sm">Using clean, chemical-free traditional methods, our spices are grown side-by-side with wild plants and trees, naturally enriched by tropical mineral soils.</p>
                    </div>

                    <div class="relative pl-12 reveal-up">
                        <div class="absolute left-[-5px] top-1.5 w-[12px] h-[12px] rounded-full bg-secondary"></div>
                        <h4 class="text-2xl font-black text-secondary mb-3">Sun-Dried & Sealed Fresh</h4>
                        <p class="text-gray-500 leading-relaxed text-sm">Spices are sun-dried naturally on elevated wood tables and vacuum-sealed in thick barrier bags within hours of sorting to fully lock in essential aromatic oils.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [QUOTE] Brand Philosophy Section -->
    <section class="py-24 lg:py-36 bg-surface relative overflow-hidden border-t border-secondary/5 bg-spice-pattern bg-noise-overlay">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-5xl mx-auto text-center bg-secondary text-white rounded-[50px] p-12 lg:p-20 shadow-premium border border-white/5 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-80 h-80 bg-primary/10 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
                <i class="fas fa-quote-left text-accent/10 text-8xl mb-8"></i>
                <h2 class="text-2xl sm:text-3xl lg:text-5xl font-heading font-bold leading-snug italic mb-10 tracking-tight max-w-4xl mx-auto">
                    "A dish without spices is like a song without notes. <br> <span class="text-accent underline decoration-accent/20">Ceylon Spices</span> are the beautiful melody of the culinary world."
                </h2>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-[2px] bg-accent/30"></div>
                    <span class="text-accent font-black tracking-[0.3em] uppercase text-[10px]">N-CEYLON Spices Manifesto</span>
                </div>
            </div>
        </div>
    </section>

    <!-- [STATS] Dynamic Impact -->
    <section class="py-20 bg-primary relative overflow-hidden shadow-premium">
        <div class="absolute inset-0 opacity-5 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16">
                @foreach([['8', 'Spice Grades'], ['100', 'Partner Farms'], ['10', 'Export Nations'], ['80', 'Bulk Buyers']] as [$count, $label])
                <div class="text-center group">
                    <div class="text-5xl sm:text-6xl font-heading font-black text-white mb-3 transition-transform group-hover:scale-105">
                        <span class="odometer" data-count="{{ $count }}">0</span><span class="text-2xl text-accent inline-block -ml-1">+</span>
                    </div>
                    <span class="text-white/70 font-black uppercase tracking-[0.2em] text-[10px] block">{{ $label }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- [PRICING] Harvesting Plans -->
    <section class="py-24 lg:py-36 bg-surface relative overflow-hidden">
        <div class="container mx-auto px-4 bg-noise-overlay bg-spice-pattern">
            <div class="text-center mb-16 lg:mb-24 max-w-3xl mx-auto">
                <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">Tailored Sourcing</span>
                <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none">Choose Your <br> <span class="text-primary italic">Supply Contract</span></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Weekly -->
                <div class="group relative bg-white rounded-[40px] p-4 overflow-hidden hover-card-premium shadow-premium border border-secondary/5 reveal-left">
                    <div class="aspect-[16/10] overflow-hidden rounded-[32px] relative shadow-md">
                         <img src="{{ asset('assets/spices/imag/spices6.jpg') }}" 
                              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-[2000ms]" alt="Weekly Ceylon Spices">
                         <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent"></div>
                         <div class="absolute top-6 right-6 px-6 py-2 bg-white/20 backdrop-blur-md rounded-full text-white font-black text-[10px] uppercase tracking-widest border border-white/20">Flexible MOQ</div>
                    </div>
                    <div class="p-8 lg:p-12">
                        <h4 class="text-3xl font-heading font-black text-secondary mb-4">LCL & FCL Wholesale</h4>
                        <p class="text-gray-500 mb-8 text-sm leading-relaxed">Spot market pricing updated weekly. Perfect for food service, manufacturers, and buyers requiring highly flexible consignments.</p>
                        <a href="{{ url('/quotations') }}" class="inline-flex items-center gap-3 text-primary font-black text-sm tracking-widest uppercase hover:gap-5 transition-all">
                            <span>Check Spot Rates</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Monthly -->
                <div class="group relative bg-secondary rounded-[40px] p-4 overflow-hidden hover-card-premium shadow-premium border border-white/5 reveal-right">
                    <div class="aspect-[16/10] overflow-hidden rounded-[32px] relative shadow-md">
                         <img src="{{ asset('assets/spices/imag/spices7.jpg') }}" 
                              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-[2000ms]" alt="Year-Round Spice Supply">
                         <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>
                         <div class="absolute top-6 right-6 px-6 py-2 bg-primary rounded-full text-white font-black text-[10px] uppercase tracking-widest">Steady Price Lock</div>
                    </div>
                    <div class="p-8 lg:p-12 text-white">
                        <h4 class="text-3xl font-heading font-black mb-4">Annual Price Hedging</h4>
                        <p class="text-gray-400 mb-8 text-sm leading-relaxed">Fixed price contracts locked for 12 months. Fully protects your business from seasonal spice market volatility with a guaranteed steady dispatch.</p>
                        <a href="{{ url('/quotations') }}" class="inline-flex items-center gap-3 text-accent font-black text-sm tracking-widest uppercase hover:gap-5 transition-all">
                            <span>Explore Annual Plans</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [CTA] Global Invitation -->
    <section class="py-12 lg:py-24 bg-surface">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="bg-primary rounded-[40px] p-12 lg:p-20 text-center relative overflow-hidden reveal-section shadow-premium">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-[0.03]"></div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white/10 to-transparent"></div>
                <div class="absolute -top-32 -left-32 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
                
                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-black text-white mb-6 leading-none">Ready to Source the Finest <span class="italic text-accent">Ceylon Spices?</span></h2>
                    <p class="text-white/80 mb-10 text-sm sm:text-base leading-relaxed">Partner with Sri Lanka's leading ethical exporter. Request detailed product specifications and a custom wholesale quotation today.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-5 bg-white text-secondary rounded-full font-black text-sm tracking-wider uppercase hover:bg-secondary hover:text-white transition-all shadow-lg scale-100 hover:scale-105 active:scale-95">
                            Start Partnership
                        </a>
                        <a href="tel:+94771234567" class="flex items-center gap-3 text-white font-black text-sm tracking-wider uppercase group hover:text-accent transition-colors">
                            <div class="w-12 h-12 bg-white/10 border border-white/25 rounded-full flex items-center justify-center group-hover:bg-white/20 transition-all shadow-md">
                                <i class="fas fa-phone text-xs"></i>
                            </div>
                            Call Our Concierge
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-minimal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"></script>
    <style>
        @keyframes marquee {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .marquee-track:hover { animation-play-state: paused; }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Odometer Logic
            const odometers = document.querySelectorAll('.odometer');
            const oObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        target.innerHTML = target.getAttribute('data-count');
                        oObserver.unobserve(target);
                    }
                });
            }, { threshold: 0.5 });
            odometers.forEach(o => oObserver.observe(o));

            // Reveal Anim Logic
            const reveals = document.querySelectorAll('.reveal-section, .reveal-left, .reveal-right, .reveal-up');
            const rObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        rObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(r => rObserver.observe(r));
        });
    </script>
@endpush
