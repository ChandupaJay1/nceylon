@extends('layouts.master')

@section('title', 'Our Story | N-CEYLON Spices')
@section('meta_description', 'Learn about N-Ceylon Food & Spice Company — a family-run Sri Lankan spice business founded in 2023 by Mrs. T.M. Priyani Tennakoon and Mr. U.D.W. Nandana Rodrigo, offering 32+ authentic Ceylon spices.')

@section('content')
    <!-- Page Header -->
    <section class="relative py-24 lg:py-32 bg-secondary overflow-hidden bg-noise-overlay animate-slide-up">
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices3.jpg') }}')] bg-fixed bg-cover opacity-10"></div>
        <div class="absolute top-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-accent to-transparent opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-block py-1.5 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6">Highland Heritage</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-6 leading-tight">Our <span class="text-accent italic">Story</span></h1>
            <nav class="flex justify-center space-x-2 text-white/60 text-xs font-bold uppercase tracking-wider">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <span class="opacity-30">/</span>
                <span class="text-white">Our Story</span>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 lg:py-32 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
        <div class="absolute -top-40 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                <!-- Image Block -->
                <div class="lg:w-1/2 relative reveal-left">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-primary/10 rounded-[50px] blur-2xl opacity-0 group-hover:opacity-100 transition-all"></div>
                        <img src="{{ asset('assets/spices/imag/spices4.jpg') }}"
                             class="rounded-[50px] shadow-premium w-full relative z-10 transition-all duration-700 group-hover:scale-[1.01]"
                             alt="N-CEYLON Spice Plantation in Sri Lanka">
                        <!-- Floating badge -->
                        <div class="absolute -bottom-8 -right-8 bg-primary text-white p-8 rounded-[30px] shadow-premium z-20 hidden xl:block animate-floating">
                            <div class="text-4xl font-heading font-black leading-none">32+</div>
                            <div class="text-xs font-black uppercase tracking-widest text-white/70 mt-1">Spice Varieties</div>
                        </div>
                    </div>
                </div>

                <!-- Text Block -->
                <div class="lg:w-1/2 reveal-right">
                    <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">Get to Know Us</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-6xl font-heading font-black text-secondary mt-4 mb-8 leading-tight">
                        A Family Legacy of <span class="text-primary italic">Authentic Ceylon Spices</span>
                    </h2>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                        Originating from a country with a long history and legacy for world-class spices, N-Ceylon Food & Spice Company carries a wide scope of products — from re-cleaned ground spices and herbs, seasonings, and aromatic seeds, to dehydrated food items.
                    </p>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                        N-Ceylon Spices is a family-run business initiated in February 2023, incorporating 32 spices from the very start. The founder, <strong class="text-secondary font-black">Mrs. T.M. Priyani Tennakoon</strong>, together with her husband and co-founder <strong class="text-secondary font-black">Mr. U.D.W. Nandana Rodrigo</strong>, envisioned a business that would hand-package and deliver ground spices and herbs directly to local clientele. That vision grew into a thriving company — and N-Ceylon Food & Spice Company was born.
                    </p>
                    <p class="text-gray-500 mb-10 leading-relaxed text-sm">
                        We cater the best quality products, captivating spices and tastes, and striking outcomes for our clients. We invest a huge amount of time and resources — alongside our team and supervisory crew — into frameworks designed to guarantee that every product meets the absolute highest standards.
                    </p>

                    <!-- Features + Owner Cards grid -->
                    <div class="mt-10 space-y-8">
                        <!-- Features list -->
                        <div class="grid grid-cols-2 gap-4">
                            @foreach([['fa-certificate', 'GMP Certification'], ['fa-globe', 'Local & Export Ready'], ['fa-leaf', 'Hand-Packaged Quality'], ['fa-flask', 'Lab Verified Standards']] as [$icon, $label])
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all flex-shrink-0">
                                    <i class="fas {{ $icon }} text-sm"></i>
                                </div>
                                <span class="font-black text-secondary text-xs sm:text-sm">{{ $label }}</span>
                            </div>
                            @endforeach
                        </div>

                        <!-- Owner Cards — side by side -->
                        <div class="grid grid-cols-2 gap-4 sm:gap-6">

                            {{-- Founder Card --}}
                            <div class="group relative bg-white rounded-3xl shadow-premium border border-secondary/5 hover:border-primary/20 transition-all duration-500 overflow-hidden">
                                <div class="h-1.5 w-full bg-gradient-to-r from-primary via-accent to-primary"></div>
                                <div class="p-3 sm:p-4 flex flex-col items-center text-center">
                                    <div class="relative mb-3 w-full">
                                        <div class="absolute -inset-2 bg-gradient-to-br from-primary via-accent to-primary rounded-[22px] opacity-20 blur-lg group-hover:opacity-50 transition-all duration-500"></div>
                                        <div class="relative w-full h-[200px] sm:h-[260px] md:h-[300px] rounded-[14px] overflow-hidden border-4 border-white shadow-xl">
                                            <img src="{{ asset('assets/owner/owner2.PNG') }}"
                                                 onerror="this.src='{{ asset('assets/userfemale.png') }}'"
                                                 alt="Mrs. T.M. Priyani Tennakoon"
                                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                                 style="object-position: center 10%;">
                                        </div>
                                        <span class="absolute bottom-2 right-2 w-3 h-3 bg-green-400 border-2 border-white rounded-full shadow-md"></span>
                                    </div>
                                    <span class="inline-block text-[7px] sm:text-[8px] font-black uppercase tracking-[0.2em] text-white bg-accent px-2.5 py-1 rounded-full mb-1.5">Founder</span>
                                    <h5 class="text-secondary font-black text-[10px] sm:text-xs leading-snug">Mrs. T.M. Priyani Tennakoon</h5>
                                    <p class="text-gray-400 text-[9px] sm:text-[10px] mt-1">N-Ceylon Spices</p>
                                    <div class="w-8 h-0.5 bg-gradient-to-r from-accent to-primary rounded-full mt-2.5"></div>
                                </div>
                            </div>

                            {{-- Co-Founder Card --}}
                            <div class="group relative bg-white rounded-3xl shadow-premium border border-secondary/5 hover:border-primary/20 transition-all duration-500 overflow-hidden">
                                <div class="h-1.5 w-full bg-gradient-to-r from-primary via-accent to-primary"></div>
                                <div class="p-3 sm:p-4 flex flex-col items-center text-center">
                                    <div class="relative mb-3 w-full">
                                        <div class="absolute -inset-2 bg-gradient-to-br from-primary via-accent to-primary rounded-[22px] opacity-20 blur-lg group-hover:opacity-50 transition-all duration-500"></div>
                                        <div class="relative w-full h-[200px] sm:h-[260px] md:h-[300px] rounded-[14px] overflow-hidden border-4 border-white shadow-xl">
                                            <img src="{{ asset('assets/owner/owner.jpeg') }}"
                                                 onerror="this.src='{{ asset('assets/usermale2.png') }}'"
                                                 alt="Mr. U.D.W. Nandana Rodrigo"
                                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                                 style="object-position: center 15%;">
                                        </div>
                                        <span class="absolute bottom-2 right-2 w-3 h-3 bg-green-400 border-2 border-white rounded-full shadow-md"></span>
                                    </div>
                                    <span class="inline-block text-[7px] sm:text-[8px] font-black uppercase tracking-[0.2em] text-white bg-primary px-2.5 py-1 rounded-full mb-1.5">Co-Founder</span>
                                    <h5 class="text-secondary font-black text-[10px] sm:text-xs leading-snug">Mr. U.D.W. Nandana Rodrigo</h5>
                                    <p class="text-gray-400 text-[9px] sm:text-[10px] mt-1">N-Ceylon Spices</p>
                                    <div class="w-8 h-0.5 bg-gradient-to-r from-primary to-accent rounded-full mt-2.5"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-20 lg:py-32 bg-white relative overflow-hidden border-t border-secondary/5">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 max-w-3xl mx-auto reveal-section">
                <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">What Drives Us</span>
                <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none">Our Mission & <span class="text-primary italic">Core Values</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['fa-seedling', 'Freshest Quality Products', 'It is vital that the products we obtain are the freshest, most outstanding quality available. We source directly to ensure nothing but the best reaches our clients.'],
                    ['fa-handshake', 'Family-Run with Heart', 'Founded by Mrs. T.M. Priyani Tennakoon and Mr. U.D.W. Nandana Rodrigo, N-Ceylon is built on family values — personal care, trust, and a genuine passion for Sri Lankan spices.'],
                    ['fa-award', 'GMP Certified Standards', 'We are in the final stages of GMP (Good Manufacturing Practices) certification under the "Strengthening Quality Infrastructure in Sri Lanka" project, supported by PTB, the German National Metrology Institute.']
                ] as [$icon, $title, $desc])
                <div class="bg-surface rounded-[40px] p-10 lg:p-12 group hover:bg-primary transition-all duration-500 reveal-up shadow-premium border border-secondary/5">
                    <div class="w-16 h-16 bg-primary/10 group-hover:bg-white/20 rounded-2xl flex items-center justify-center text-primary group-hover:text-white text-2xl mb-8 transition-all">
                        <i class="fas {{ $icon }}"></i>
                    </div>
                    <h4 class="text-xl font-black text-secondary group-hover:text-white mb-4 transition-colors">{{ $title }}</h4>
                    <p class="text-gray-500 group-hover:text-white/80 text-sm leading-relaxed transition-colors">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video / Parallax Section -->
    <section class="py-24 lg:py-40 relative text-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-fixed bg-center" style="background-image: url('{{ asset('assets/spices/imag/spices5.jpg') }}');"></div>
        <div class="absolute inset-0 bg-secondary/75 backdrop-blur-[2px]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <a href="https://www.youtube.com/watch?v=u5l4cdUjau4" target="_blank"
               class="w-24 h-24 bg-white text-primary rounded-full flex items-center justify-center mx-auto mb-10 shadow-2xl hover:scale-110 transition-transform group">
                <i class="fa fa-play text-2xl ml-1 group-hover:text-primary-dark transition-colors"></i>
            </a>
            <span class="text-accent font-black uppercase tracking-[0.2em] text-xs mb-4 block">Watch Our Story</span>
            <h2 class="text-3xl sm:text-4xl lg:text-6xl font-heading font-black mb-6 leading-tight">
                From Highland Farms <br> to the <span class="text-accent italic">World's Tables</span>
            </h2>
            <p class="text-xl text-white/80 max-w-2xl mx-auto leading-relaxed text-sm">
                Discover the journey of authentic Ceylon spices — from the mist-covered gardens of Kandy to premium kitchens and spice blenders across the globe.
            </p>
        </div>
    </section>

    <!-- Timeline Journey -->
    <section class="py-20 lg:py-32 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 max-w-3xl mx-auto reveal-section">
                <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">Our Journey</span>
                <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none">From Seed to <span class="text-primary italic">Shipment</span></h2>
            </div>

            <div class="max-w-3xl mx-auto space-y-0">
                @foreach([
                    ['Feb 2023', 'N-Ceylon Founded', 'N-Ceylon Food & Spice Company was established by Mrs. T.M. Priyani Tennakoon and Mr. U.D.W. Nandana Rodrigo with a vision to hand-package and deliver authentic ground spices and herbs to local clientele, starting with 32 spice varieties.'],
                    ['2023', 'Growing the Range', 'The company expanded its product range to include re-cleaned ground spices, herbs, seasonings, sweet-smelling seeds, and dehydrated food items — building a comprehensive spice portfolio.'],
                    ['2023–2024', 'Building Quality Frameworks', 'Invested heavily in team training and supervisory systems to guarantee every product meets the absolute highest standards of freshness and quality before reaching clients.'],
                    ['2024', 'GMP Certification Journey', 'Entered the final stages of GMP (Good Manufacturing Practices) certification under the "Strengthening Quality Infrastructure in Sri Lanka" project, supported by PTB — the German National Metrology Institute.'],
                    ['Today', 'A Thriving Family Business', 'What began as a family vision has grown into a thriving company, delivering premium Ceylon spices with the personal care and quality commitment that only a family-run business can offer.']
                ] as [$year, $title, $desc])
                <div class="relative pl-16 pb-12 reveal-up">
                    <div class="absolute left-0 top-0 w-[2px] h-full bg-primary/20"></div>
                    <div class="absolute left-[-9px] top-1.5 w-[20px] h-[20px] rounded-full bg-primary shadow-spice-gold border-4 border-surface"></div>
                    <span class="text-primary font-black text-xs uppercase tracking-widest mb-2 block">{{ $year }}</span>
                    <h4 class="text-xl font-black text-secondary mb-2">{{ $title }}</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- GMP Certification Highlight -->
    <section class="py-16 bg-secondary relative overflow-hidden bg-noise-overlay">
        <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/60 to-transparent"></div>
        <div class="absolute -left-24 top-1/2 -translate-y-1/2 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 max-w-5xl mx-auto">
                <div class="w-20 h-20 bg-primary/20 border border-primary/30 rounded-[24px] flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-medal text-4xl text-accent"></i>
                </div>
                <div class="text-center lg:text-left">
                    <span class="text-accent text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Quality Milestone</span>
                    <h3 class="text-xl sm:text-2xl font-heading font-black text-white mb-3 leading-snug">
                        GMP Certification — Final Stages
                    </h3>
                    <p class="text-white/55 text-sm leading-relaxed max-w-2xl">
                        We're excited to announce that N-Ceylon is in the final stages of <strong class="text-white/80">Good Manufacturing Practices (GMP)</strong> certification under the project <em>"Strengthening Quality Infrastructure in Sri Lanka,"</em> supported by <strong class="text-white/80">PTB — the German National Metrology Institute</strong>. We're dedicated to upholding the highest quality standards in everything we do.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Logos Carousel -->
    <div class="py-16 bg-white border-t border-secondary/5">
        <div class="container mx-auto px-4">
            <p class="text-center text-xs font-black uppercase tracking-[0.3em] text-gray-300 mb-10">Trusted by Global Buyers & Certifiers</p>
            <div class="swiper thm-swiper__slider" data-swiper-options='{
                "spaceBetween": 80,
                "slidesPerView": 3,
                "loop": true,
                "autoplay": { "delay": 2500, "disableOnInteraction": false },
                "breakpoints": {
                    "768": { "slidesPerView": 4 },
                    "1024": { "slidesPerView": 6 }
                }
            }'>
                <div class="swiper-wrapper flex items-center">
                    @for ($i = 0; $i < 12; $i++)
                    <div class="swiper-slide transition-all duration-500 opacity-30 hover:opacity-80">
                        <img src="{{ asset('assets/icon/nceylontp.png') }}" class="h-12 w-auto mx-auto filter grayscale" alt="Partner">
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-primary rounded-[40px] p-12 lg:p-20 text-center relative overflow-hidden reveal-section shadow-premium">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-[0.03]"></div>
                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-white mb-6 leading-none">
                        Ready to Partner with <span class="italic text-accent"> <br>N-CEYLON?</span>
                    </h2>
                    <p class="text-white/80 mb-10 text-sm leading-relaxed">
                        Whether you're a food manufacturer, spice blender, or premium retailer — we have the right supply contract for your needs.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-5 bg-white text-secondary rounded-full font-black text-sm tracking-wider uppercase hover:bg-secondary hover:text-white transition-all shadow-lg hover:scale-105 active:scale-95">
                            Contact Our Team
                        </a>
                        <a href="{{ url('/products') }}" class="w-full sm:w-auto px-10 py-5 bg-transparent border-2 border-white text-white rounded-full font-black text-sm tracking-wider uppercase hover:bg-white hover:text-secondary transition-all hover:scale-105 active:scale-95">
                            Browse Spices
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal-section, .reveal-left, .reveal-right, .reveal-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        reveals.forEach(r => observer.observe(r));
    });
</script>
@endpush
