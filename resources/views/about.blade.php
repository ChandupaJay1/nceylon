@extends('layouts.master')

@section('title', 'Our Story | NCEYLON Spices')
@section('meta_description', 'Learn about NCEYLON — Sri Lanka\'s authentic spice exporter sourcing premium Ceylon cinnamon, pepper, cardamom and more from highland farms in Kandy & Matale.')

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
                             alt="NCEYLON Spice Plantation in Sri Lanka">
                        <!-- Floating badge -->
                        <div class="absolute -bottom-8 -right-8 bg-primary text-white p-8 rounded-[30px] shadow-premium z-20 hidden xl:block animate-floating">
                            <div class="text-4xl font-heading font-black leading-none">15+</div>
                            <div class="text-xs font-black uppercase tracking-widest text-white/70 mt-1">Years of Export</div>
                        </div>
                    </div>
                </div>

                <!-- Text Block -->
                <div class="lg:w-1/2 reveal-right">
                    <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-4 block">Get to Know Us</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-6xl font-heading font-black text-secondary mt-4 mb-8 leading-tight">
                        Authentic Ceylon Spices, <span class="text-primary italic">Straight from the Source</span>
                    </h2>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                        Founded in 2008, NCEYLON was born from a simple belief — the world deserves to taste Sri Lanka's spices in their most authentic, unadulterated form. We partner directly with over 350 smallholder farmers in the misty highlands of Kandy and Matale, where the volcanic soil and tropical climate produce the world's finest cinnamon, pepper, cardamom, and cloves.
                    </p>
                    <p class="text-gray-500 mb-10 leading-relaxed text-sm">
                        Every batch we export is hand-harvested, sun-dried on elevated wooden tables, and vacuum-sealed within hours of sorting to lock in the essential aromatic oils that make Ceylon spices legendary. We hold Grade-1 certification and supply to food manufacturers, spice blenders, and premium retailers across 15+ countries.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-10">
                        @foreach([['fa-certificate', '100% Grade-1 Certified'], ['fa-globe', 'Exported to 15+ Nations'], ['fa-leaf', 'Ethical Agroforestry'], ['fa-flask', 'Lab Verified Quality']] as [$icon, $label])
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                                <i class="fas {{ $icon }}"></i>
                            </div>
                            <span class="font-black text-secondary text-sm">{{ $label }}</span>
                        </div>
                        @endforeach
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
                    ['fa-seedling', 'Sustainable Sourcing', 'We work exclusively with agroforestry farms that grow spices alongside native trees, preserving biodiversity and enriching the soil naturally without synthetic chemicals.'],
                    ['fa-handshake', 'Farmer Partnerships', 'Our direct trade model ensures that 300+ farming families in Kandy and Matale receive fair, above-market prices for their premium harvests every single season.'],
                    ['fa-award', 'Uncompromising Quality', 'From field to freight, every lot undergoes moisture testing, volatile oil analysis, and visual grading before it earns the NCEYLON seal of approval.']
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
                    ['2008', 'Company Founded', 'NCEYLON was established in Kandy with a mission to bring authentic, unadulterated Ceylon spices to global markets with full traceability.'],
                    ['2012', 'First Export Certification', 'Received Grade-1 export certification from the Sri Lanka Export Development Board, opening doors to premium buyers in Europe and the Middle East.'],
                    ['2016', 'Farmer Network Expanded', 'Grew our direct-trade farmer network to 200+ families across Matale and Kandy highlands, introducing fair-price contracts and agroforestry training.'],
                    ['2020', 'Lab Testing Facility', 'Opened our in-house quality lab for moisture, volatile oil, and microbial testing — ensuring every batch meets international food safety standards.'],
                    ['2024', '15 Export Nations', 'Now supplying premium Ceylon spices to food manufacturers, spice blenders, and retailers across 15 countries on 4 continents.']
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
                        Ready to Partner with <span class="italic text-secondary">NCEYLON?</span>
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
