@extends('layouts.master')

@section('title', 'Gallery | N-CEYLON')
@section('meta_description', 'Explore N-CEYLON\'s gallery showcasing our premium Ceylon spices, processing facilities, and quality certifications.')

@section('content')

    {{-- ═══════════════════════════════════════════
         HERO HEADER
    ═══════════════════════════════════════════ --}}
    <section class="relative py-28 lg:py-40 bg-secondary overflow-hidden">
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices.jpg') }}')] bg-cover bg-center opacity-15"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-secondary/80 via-secondary/60 to-secondary"></div>
        <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/40 to-transparent"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 py-1.5 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.25em] rounded-full mb-8">
                <i class="fas fa-camera text-[8px]"></i>
                Visual Journey
            </span>
            <h1 class="text-5xl sm:text-6xl lg:text-8xl font-heading font-black text-white mb-6 leading-none tracking-tight">
                Our <span class="text-accent italic">Gallery</span>
            </h1>
            <p class="text-white/50 text-sm font-semibold max-w-md mx-auto mb-8 leading-relaxed">
                From highland farms to global tables — a visual story of Ceylon's finest spices.
            </p>
            <nav class="flex justify-center items-center gap-2 text-white/40 text-xs font-bold uppercase tracking-wider">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <i class="fas fa-chevron-right text-[8px] opacity-40"></i>
                <span class="text-white/70">Gallery</span>
            </nav>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         STATS STRIP
    ═══════════════════════════════════════════ --}}
    <div class="bg-primary relative overflow-hidden">
        <div class="absolute inset-0 bg-noise-overlay opacity-30"></div>
        <div class="container mx-auto px-4 py-5 relative z-10">
            <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-16">
                @foreach([
                    ['fas fa-images',       $galleries->count() . '+', 'Photos'],
                    ['fas fa-layer-group',  '7',                        'Categories'],
                    ['fas fa-leaf',         '15+',                      'Years of Heritage'],
                    ['fas fa-globe',        '30+',                      'Export Countries'],
                ] as [$icon, $num, $label])
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="{{ $icon }} text-white/80 text-sm"></i>
                    </div>
                    <div>
                        <p class="text-white font-black text-lg leading-none">{{ $num }}</p>
                        <p class="text-white/50 text-[10px] font-semibold uppercase tracking-widest">{{ $label }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         TILE GALLERY
    ═══════════════════════════════════════════ --}}
    <section class="py-20 lg:py-28 bg-surface relative overflow-hidden">
        <div class="absolute inset-0 bg-noise-overlay opacity-40"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[900px] h-[900px] bg-primary/3 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">

            {{-- Section heading --}}
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 text-primary text-[10px] font-black uppercase tracking-[0.25em] mb-4">
                    <span class="w-8 h-[1px] bg-primary/50"></span>
                    Premium Ceylon Spices
                    <span class="w-8 h-[1px] bg-primary/50"></span>
                </span>
                <h2 class="text-3xl lg:text-5xl font-heading font-black text-secondary leading-tight">
                    Captured in Every <span class="text-primary italic">Frame</span>
                </h2>
            </div>

            @if($galleries->count() > 0)

            {{-- ── Tile Grid ──
                 Layout pattern (repeats every 7 tiles):
                 Row A: [2×2 featured] [1×1] [1×1]   (cols 1-4)
                 Row B: [1×1] [1×1]   [2×1 wide]     (cols 1-4)
                 Row C: [1×1] [1×1]   [1×1]  [1×1]   (cols 1-4)
            ── --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 lg:gap-4 auto-rows-[220px] lg:auto-rows-[260px]">

                @foreach($galleries as $index => $gallery)

                @php
                    $pos = $index % 7; // pattern repeats every 7
                @endphp

                {{-- Tile 0 → 2×2 featured (large square) --}}
                @if($pos === 0)
                <div class="col-span-2 row-span-2 group relative overflow-hidden rounded-3xl cursor-pointer shadow-xl"
                     onclick="openLightbox({{ $index }})">
                    <img src="{{ asset($gallery->image_path) }}"
                         alt="{{ $gallery->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/85 via-secondary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    {{-- Featured badge --}}
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-4 bg-accent text-secondary text-[9px] font-black uppercase tracking-wider rounded-full shadow-lg">
                            <i class="fas fa-star text-[7px]"></i> Featured
                        </span>
                    </div>
                    {{-- Expand icon --}}
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                        <div class="w-14 h-14 bg-white/15 backdrop-blur-sm border border-white/25 rounded-full flex items-center justify-center scale-75 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-expand text-white text-base"></i>
                        </div>
                    </div>
                    {{-- Caption --}}
                    <div class="absolute bottom-0 left-0 right-0 p-5 translate-y-3 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-400">
                        <span class="inline-block py-1 px-3 bg-primary text-white text-[9px] font-black uppercase tracking-wider rounded-full mb-2">{{ $gallery->category }}</span>
                        <h3 class="text-white font-black text-lg leading-tight">{{ $gallery->title }}</h3>
                        @if($gallery->description)
                        <p class="text-white/60 text-xs font-semibold mt-1 line-clamp-2">{{ $gallery->description }}</p>
                        @endif
                    </div>
                </div>

                {{-- Tiles 1–6 → standard 1×1 squares --}}
                @else
                <div class="col-span-1 row-span-1 group relative overflow-hidden rounded-2xl cursor-pointer shadow-lg"
                     onclick="openLightbox({{ $index }})">
                    <img src="{{ asset($gallery->image_path) }}"
                         alt="{{ $gallery->title }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-600"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/80 via-secondary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                    {{-- Expand icon --}}
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="w-10 h-10 bg-white/15 backdrop-blur-sm border border-white/25 rounded-full flex items-center justify-center scale-75 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-expand text-white text-xs"></i>
                        </div>
                    </div>
                    {{-- Caption --}}
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="inline-block py-0.5 px-2 bg-primary text-white text-[8px] font-black uppercase tracking-wider rounded-full mb-1">{{ $gallery->category }}</span>
                        <h3 class="text-white font-black text-xs leading-tight line-clamp-2">{{ $gallery->title }}</h3>
                    </div>
                </div>
                @endif

                @endforeach

            </div>

            @else
            <div class="text-center py-24">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-premium">
                    <i class="fas fa-images text-4xl text-gray-200"></i>
                </div>
                <h3 class="text-2xl font-black text-secondary mb-3">No Images Yet</h3>
                <p class="text-gray-400 font-semibold">Check back soon — we're adding more.</p>
            </div>
            @endif

        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         CTA BANNER
    ═══════════════════════════════════════════ --}}
    <section class="relative py-20 bg-secondary overflow-hidden">
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices1.jpg') }}')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/90 to-secondary/80"></div>
        <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent/50 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 text-accent text-[10px] font-black uppercase tracking-[0.25em] mb-6">
                <span class="w-6 h-[1px] bg-accent/50"></span>
                Wholesale Export
                <span class="w-6 h-[1px] bg-accent/50"></span>
            </span>
            <h2 class="text-3xl lg:text-5xl font-heading font-black text-white mb-6 leading-tight">
                Interested in Our <span class="text-accent italic">Spices?</span>
            </h2>
            <p class="text-white/50 text-sm font-semibold max-w-lg mx-auto mb-10 leading-relaxed">
                Get wholesale pricing, samples, and export documentation for any product in our collection.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/quotations') }}"
                   class="inline-flex items-center gap-3 bg-primary hover:bg-accent hover:text-secondary text-white font-black text-xs uppercase tracking-widest px-8 py-4 rounded-full transition-all duration-300 shadow-lg shadow-primary/30 group">
                    <span>Get Wholesale Quote</span>
                    <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="{{ url('/products') }}"
                   class="inline-flex items-center gap-3 bg-white/5 hover:bg-white/10 border border-white/15 text-white font-black text-xs uppercase tracking-widest px-8 py-4 rounded-full transition-all duration-300">
                    <i class="fas fa-box-open text-[10px]"></i>
                    <span>Browse Products</span>
                </a>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         LIGHTBOX
    ═══════════════════════════════════════════ --}}
    <div id="lightbox"
         class="fixed inset-0 z-[9998] hidden"
         role="dialog" aria-modal="true" aria-label="Image viewer">

        {{-- Backdrop --}}
        <div class="absolute inset-0 bg-black/97 backdrop-blur-sm" onclick="closeLightbox()"></div>

        {{-- Close --}}
        <button onclick="closeLightbox()"
                class="absolute top-5 right-5 z-10 w-11 h-11 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full flex items-center justify-center text-white transition-all"
                aria-label="Close">
            <i class="fas fa-times"></i>
        </button>

        {{-- Prev --}}
        <button onclick="prevImage()"
                class="absolute left-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full flex items-center justify-center text-white transition-all"
                aria-label="Previous">
            <i class="fas fa-chevron-left"></i>
        </button>

        {{-- Next --}}
        <button onclick="nextImage()"
                class="absolute right-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full flex items-center justify-center text-white transition-all"
                aria-label="Next">
            <i class="fas fa-chevron-right"></i>
        </button>

        {{-- Content --}}
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4 lg:p-16 pointer-events-none">
            <div class="relative w-full max-w-5xl pointer-events-auto">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-black/40">
                    <img id="lightboxImage" src="" alt=""
                         class="w-full max-h-[72vh] object-contain block mx-auto transition-opacity duration-300">
                </div>
                <div class="mt-5 text-center px-4">
                    <span id="lightboxCategory" class="inline-block py-1 px-3 bg-primary text-white text-[9px] font-black uppercase tracking-wider rounded-full mb-2"></span>
                    <h3 id="lightboxTitle" class="text-xl font-black text-white mb-1"></h3>
                    <p id="lightboxDescription" class="text-white/50 text-sm font-semibold"></p>
                    <p class="text-white/25 text-xs font-semibold mt-3">
                        <span id="lightboxCurrent"></span> / <span id="lightboxTotal"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    const galleryItems = [
        @foreach($galleries as $g)
        {
            src:         "{{ asset($g->image_path) }}",
            title:       "{{ addslashes($g->title) }}",
            description: "{{ addslashes($g->description ?? '') }}",
            category:    "{{ addslashes($g->category) }}"
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ];

    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        renderLightbox();
        document.getElementById('lightbox').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.body.style.overflow = '';
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        renderLightbox();
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        renderLightbox();
    }

    function renderLightbox() {
        const item = galleryItems[currentIndex];
        const img  = document.getElementById('lightboxImage');
        img.style.opacity = '0';
        setTimeout(() => {
            img.src = item.src;
            img.alt = item.title;
            img.onload = () => { img.style.opacity = '1'; };
            if (img.complete) img.style.opacity = '1';
        }, 150);
        document.getElementById('lightboxTitle').textContent       = item.title;
        document.getElementById('lightboxDescription').textContent = item.description;
        document.getElementById('lightboxCategory').textContent    = item.category;
        document.getElementById('lightboxCurrent').textContent     = currentIndex + 1;
        document.getElementById('lightboxTotal').textContent       = galleryItems.length;
    }

    // Keyboard
    document.addEventListener('keydown', (e) => {
        if (document.getElementById('lightbox').classList.contains('hidden')) return;
        if (e.key === 'Escape')     closeLightbox();
        if (e.key === 'ArrowLeft')  prevImage();
        if (e.key === 'ArrowRight') nextImage();
    });

    // Swipe
    let touchStartX = 0;
    document.getElementById('lightbox').addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    document.getElementById('lightbox').addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) diff > 0 ? nextImage() : prevImage();
    }, { passive: true });
</script>
@endpush
