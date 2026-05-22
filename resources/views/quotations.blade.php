@extends('layouts.master')

@section('title', 'Wholesale Plans & Quotations | NCEYLON')
@section('meta_description', 'Explore NCEYLON wholesale spice supply plans — LCL spot orders, FCL monthly contracts, custom grinding, and annual price-lock agreements.')

@section('content')

{{-- ═══════════════════════════════════════════════
     HERO HEADER
═══════════════════════════════════════════════ --}}
<section class="relative py-28 lg:py-40 bg-secondary overflow-hidden bg-noise-overlay">
    {{-- Background spice image --}}
    <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/chilli.jpg') }}')] bg-fixed bg-cover opacity-[0.07]"></div>

    {{-- Gradient lines --}}
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent/60 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/40 to-transparent"></div>

    {{-- Glow orbs --}}
    <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-flex items-center gap-2 py-2 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.25em] rounded-full mb-8">
                <span class="w-1.5 h-1.5 bg-accent rounded-full animate-ping"></span>
                Wholesale Partnerships
            </span>
            <h1 class="text-5xl sm:text-6xl lg:text-8xl font-heading font-black text-white leading-[0.9] mb-6 tracking-tight">
                Plans &amp; <br><span class="text-accent italic">Quotations</span>
            </h1>
            <p class="text-white/60 text-sm sm:text-base font-semibold max-w-xl mx-auto leading-relaxed mb-10">
                Flexible supply contracts designed for importers, food manufacturers, and spice blenders worldwide. Choose the plan that fits your volume.
            </p>
            <nav class="flex justify-center items-center gap-2 text-white/40 text-[10px] font-black uppercase tracking-widest">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                <span class="text-white/70">Wholesale Plans</span>
            </nav>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     INTRO STATS STRIP
═══════════════════════════════════════════════ --}}
<div class="bg-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-[0.04]"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-white/10">
            @foreach([
                ['fa-weight-hanging', '100 kg', 'Minimum Order Qty'],
                ['fa-globe', '15+', 'Export Destinations'],
                ['fa-certificate', 'Grade-1', 'Quality Standard'],
                ['fa-clock', '48 hrs', 'Quote Turnaround'],
            ] as [$icon, $val, $label])
            <div class="py-8 px-6 lg:px-10 text-center group">
                <i class="fas {{ $icon }} text-white/30 text-lg mb-3 block group-hover:text-accent transition-colors"></i>
                <div class="text-2xl font-heading font-black text-white mb-1">{{ $val }}</div>
                <div class="text-white/40 text-[9px] font-black uppercase tracking-widest">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════
     PLAN CARDS
═══════════════════════════════════════════════ --}}
<section class="py-24 lg:py-36 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
    <div class="absolute -top-40 right-0 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-40 left-0 w-[600px] h-[600px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Section heading --}}
        <div class="text-center mb-16 lg:mb-20 max-w-2xl mx-auto reveal-section">
            <span class="text-primary font-black uppercase tracking-[0.2em] text-[10px] mb-3 block">Supply Contracts</span>
            <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none">
                Choose Your <span class="text-primary italic">Supply Plan</span>
            </h2>
            <p class="text-gray-400 text-sm mt-5 leading-relaxed font-semibold">
                All plans include phytosanitary certificates, lab quality reports, and dedicated trade support.
            </p>
        </div>

        {{-- Cards grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 items-stretch">

            {{-- ── Card 1: LCL Spot ── --}}
            <div class="group relative bg-white rounded-[36px] p-8 shadow-premium border border-secondary/5 flex flex-col reveal-up hover:-translate-y-2 transition-all duration-500">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-primary text-xl group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <span class="text-[9px] font-black uppercase tracking-widest text-gray-300 border border-secondary/10 rounded-full px-3 py-1">Spot</span>
                </div>
                <h3 class="text-xl font-heading font-black text-secondary mb-1">LCL Consignments</h3>
                <p class="text-gray-400 text-xs font-semibold mb-6 leading-relaxed">Flexible less-than-container loads. Ideal for buyers testing new spice varieties.</p>

                <div class="border-t border-secondary/5 pt-6 mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-heading font-black text-secondary">Spot</span>
                        <span class="text-xs text-gray-400 font-semibold mb-1.5">/ order basis</span>
                    </div>
                    <span class="text-[10px] text-primary font-black uppercase tracking-widest">Weekly market rate</span>
                </div>

                <ul class="space-y-3 mb-10 flex-grow">
                    @foreach(['100 kg MOQ per spice', 'Multi-variety packages', 'Weekly spot pricing', 'Moisture quality cert', 'Air or sea freight'] as $feat)
                    <li class="flex items-center gap-3 text-xs font-semibold text-gray-500">
                        <span class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-primary text-[8px]"></i>
                        </span>
                        {{ $feat }}
                    </li>
                    @endforeach
                </ul>

                <a href="{{ url('/contact') }}"
                   class="w-full py-4 bg-surface text-secondary rounded-2xl font-black text-[10px] uppercase tracking-widest text-center hover:bg-secondary hover:text-white transition-all duration-300 border border-secondary/10 group-hover:border-transparent">
                    Request Quote
                </a>
            </div>

            {{-- ── Card 2: FCL Monthly — FEATURED ── --}}
            <div class="group relative bg-secondary rounded-[36px] p-8 shadow-spice-gold border border-accent/20 flex flex-col reveal-up md:scale-[1.03] z-10 hover:-translate-y-2 transition-all duration-500">
                {{-- Popular ribbon --}}
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <span class="bg-accent text-secondary text-[9px] font-black uppercase tracking-widest px-5 py-1.5 rounded-full shadow-spice-gold whitespace-nowrap">
                        ★ Most Popular
                    </span>
                </div>

                <div class="flex items-start justify-between mb-8 mt-4">
                    <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-accent text-xl group-hover:bg-accent group-hover:text-secondary transition-all duration-300">
                        <i class="fas fa-ship"></i>
                    </div>
                    <span class="text-[9px] font-black uppercase tracking-widest text-white/30 border border-white/10 rounded-full px-3 py-1">Contract</span>
                </div>
                <h3 class="text-xl font-heading font-black text-white mb-1">FCL Shipments</h3>
                <p class="text-white/50 text-xs font-semibold mb-6 leading-relaxed">Full container loads with monthly dispatch schedules and price stability.</p>

                <div class="border-t border-white/10 pt-6 mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-heading font-black text-accent">Contract</span>
                        <span class="text-xs text-white/40 font-semibold mb-1.5">/ monthly batch</span>
                    </div>
                    <span class="text-[10px] text-accent/70 font-black uppercase tracking-widest">Price hedging included</span>
                </div>

                <ul class="space-y-3 mb-10 flex-grow">
                    @foreach(['20ft / 40ft container options', 'Price hedging stability', 'Phytosanitary certificates', 'Custom branding & bags', 'Dedicated trade manager'] as $feat)
                    <li class="flex items-center gap-3 text-xs font-semibold text-white/70">
                        <span class="w-5 h-5 bg-accent/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-accent text-[8px]"></i>
                        </span>
                        {{ $feat }}
                    </li>
                    @endforeach
                </ul>

                <a href="{{ url('/contact') }}"
                   class="w-full py-4 bg-accent text-secondary rounded-2xl font-black text-[10px] uppercase tracking-widest text-center hover:bg-white hover:text-secondary transition-all duration-300 shadow-spice-gold">
                    Get Started
                </a>
            </div>

            {{-- ── Card 3: Custom Grinds ── --}}
            <div class="group relative bg-white rounded-[36px] p-8 shadow-premium border border-secondary/5 flex flex-col reveal-up hover:-translate-y-2 transition-all duration-500">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-primary text-xl group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <i class="fas fa-mortar-pestle"></i>
                    </div>
                    <span class="text-[9px] font-black uppercase tracking-widest text-gray-300 border border-secondary/10 rounded-full px-3 py-1">Processing</span>
                </div>
                <h3 class="text-xl font-heading font-black text-secondary mb-1">Custom Grinds</h3>
                <p class="text-gray-400 text-xs font-semibold mb-6 leading-relaxed">Tailored grinding, milling, and essential oil extraction to your exact spec.</p>

                <div class="border-t border-secondary/5 pt-6 mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-heading font-black text-secondary">Spot</span>
                        <span class="text-xs text-gray-400 font-semibold mb-1.5">/ grinding batch</span>
                    </div>
                    <span class="text-[10px] text-primary font-black uppercase tracking-widest">Per batch pricing</span>
                </div>

                <ul class="space-y-3 mb-10 flex-grow">
                    @foreach(['Custom sorting & sizing', 'Grinding & milling options', 'Essential oil extraction', 'Sealed foil-barrier bags', 'Private label ready'] as $feat)
                    <li class="flex items-center gap-3 text-xs font-semibold text-gray-500">
                        <span class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-primary text-[8px]"></i>
                        </span>
                        {{ $feat }}
                    </li>
                    @endforeach
                </ul>

                <a href="{{ url('/contact') }}"
                   class="w-full py-4 bg-surface text-secondary rounded-2xl font-black text-[10px] uppercase tracking-widest text-center hover:bg-secondary hover:text-white transition-all duration-300 border border-secondary/10 group-hover:border-transparent">
                    Request Quote
                </a>
            </div>

            {{-- ── Card 4: Annual Contract ── --}}
            <div class="group relative bg-white rounded-[36px] p-8 shadow-premium border border-secondary/5 flex flex-col reveal-up hover:-translate-y-2 transition-all duration-500">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-primary text-xl group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <span class="text-[9px] font-black uppercase tracking-widest text-gray-300 border border-secondary/10 rounded-full px-3 py-1">Annual</span>
                </div>
                <h3 class="text-xl font-heading font-black text-secondary mb-1">Annual Contract</h3>
                <p class="text-gray-400 text-xs font-semibold mb-6 leading-relaxed">12-month price-lock agreement for maximum budget certainty and supply security.</p>

                <div class="border-t border-secondary/5 pt-6 mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-heading font-black text-secondary">Fixed</span>
                        <span class="text-xs text-gray-400 font-semibold mb-1.5">/ annual locked rate</span>
                    </div>
                    <span class="text-[10px] text-primary font-black uppercase tracking-widest">12-month price lock</span>
                </div>

                <ul class="space-y-3 mb-10 flex-grow">
                    @foreach(['Price lock guarantee', 'Scheduled monthly dispatches', 'Flexible logistics routes', 'Dedicated trade manager', 'Priority harvest allocation'] as $feat)
                    <li class="flex items-center gap-3 text-xs font-semibold text-gray-500">
                        <span class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-primary text-[8px]"></i>
                        </span>
                        {{ $feat }}
                    </li>
                    @endforeach
                </ul>

                <a href="{{ url('/contact') }}"
                   class="w-full py-4 bg-surface text-secondary rounded-2xl font-black text-[10px] uppercase tracking-widest text-center hover:bg-secondary hover:text-white transition-all duration-300 border border-secondary/10 group-hover:border-transparent">
                    Request Quote
                </a>
            </div>

        </div>{{-- /grid --}}
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     COMPARISON TABLE
═══════════════════════════════════════════════ --}}
<section class="py-20 lg:py-32 bg-white relative overflow-hidden border-t border-secondary/5">
    <div class="absolute -top-40 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-14 reveal-section">
            <span class="text-primary font-black uppercase tracking-[0.2em] text-[10px] mb-3 block">Side by Side</span>
            <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none">
                Plan <span class="text-primary italic">Comparison</span>
            </h2>
        </div>

        <div class="overflow-x-auto rounded-[32px] shadow-premium border border-secondary/5 reveal-section">
            <table class="w-full min-w-[700px] text-sm">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th class="text-left py-6 px-8 font-black text-xs uppercase tracking-widest text-white/50 w-1/3">Feature</th>
                        <th class="py-6 px-6 font-black text-xs uppercase tracking-widest text-white/70">LCL Spot</th>
                        <th class="py-6 px-6 font-black text-xs uppercase tracking-widest text-accent bg-white/5">FCL Monthly</th>
                        <th class="py-6 px-6 font-black text-xs uppercase tracking-widest text-white/70">Custom Grinds</th>
                        <th class="py-6 px-6 font-black text-xs uppercase tracking-widest text-white/70">Annual</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-secondary/5">
                    @php
                    $rows = [
                        ['Minimum Order Qty',   '100 kg',       '1 × 20ft FCL',  '50 kg',        '500 kg/mo'],
                        ['Pricing Model',       'Spot weekly',  'Hedged fixed',  'Per batch',    '12-mo lock'],
                        ['Container Type',      'LCL shared',   'FCL dedicated', 'LCL / Air',    'FCL dedicated'],
                        ['Lab Quality Report',  true,           true,            true,           true],
                        ['Phytosanitary Cert',  true,           true,            false,          true],
                        ['Custom Packaging',    false,          true,            true,           true],
                        ['Private Label',       false,          true,            true,           true],
                        ['Dedicated Manager',   false,          true,            false,          true],
                        ['Price Lock',          false,          false,           false,          true],
                        ['Essential Oil Ext.',  false,          false,           true,           false],
                    ];
                    @endphp

                    @foreach($rows as $i => $row)
                    <tr class="{{ $i % 2 === 0 ? 'bg-surface/50' : 'bg-white' }} hover:bg-primary/5 transition-colors group">
                        <td class="py-5 px-8 font-black text-secondary text-xs">{{ $row[0] }}</td>
                        @foreach(array_slice($row, 1) as $j => $cell)
                        <td class="py-5 px-6 text-center {{ $j === 1 ? 'bg-accent/5' : '' }}">
                            @if(is_bool($cell))
                                @if($cell)
                                    <span class="inline-flex items-center justify-center w-6 h-6 bg-primary/10 rounded-full">
                                        <i class="fas fa-check text-primary text-[9px]"></i>
                                    </span>
                                @else
                                    <span class="inline-flex items-center justify-center w-6 h-6 bg-secondary/5 rounded-full">
                                        <i class="fas fa-minus text-gray-300 text-[9px]"></i>
                                    </span>
                                @endif
                            @else
                                <span class="text-xs font-black text-secondary/80">{{ $cell }}</span>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     QUICK QUOTE REQUEST FORM
═══════════════════════════════════════════════ --}}
<section class="py-20 lg:py-32 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
    <div class="absolute -bottom-40 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-start">

                {{-- Left: copy --}}
                <div class="lg:w-2/5 reveal-left lg:sticky lg:top-32">
                    <span class="text-primary font-black uppercase tracking-[0.2em] text-[10px] mb-4 block">Fast Track</span>
                    <h2 class="text-4xl sm:text-5xl font-heading font-black text-secondary leading-none mb-6">
                        Request a <span class="text-primary italic">Quote</span>
                    </h2>
                    <p class="text-gray-500 text-sm leading-relaxed font-semibold mb-10">
                        Fill in your requirements and our trade team will respond with a detailed quotation within 48 hours.
                    </p>

                    <div class="space-y-5">
                        @foreach([
                            ['fa-bolt', 'Fast Response', '48-hour quote turnaround guaranteed'],
                            ['fa-lock', 'Confidential', 'Your trade data is fully protected'],
                            ['fa-headset', 'Dedicated Support', 'A trade officer assigned to your account'],
                        ] as [$icon, $title, $desc])
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center text-primary flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-all">
                                <i class="fas {{ $icon }} text-sm"></i>
                            </div>
                            <div>
                                <div class="font-black text-secondary text-sm">{{ $title }}</div>
                                <div class="text-gray-400 text-xs font-semibold mt-0.5">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right: form --}}
                <div class="lg:w-3/5 reveal-right">
                    <div class="bg-white rounded-[40px] p-8 sm:p-12 shadow-premium border border-secondary/5">
                        <form method="post" action="{{ url('/contact') }}" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Full Name</label>
                                    <input type="text" name="name" required
                                           class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="Your name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Company</label>
                                    <input type="text" name="company"
                                           class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="Company name">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Business Email</label>
                                    <input type="email" name="email" required
                                           class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="you@company.com">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Country</label>
                                    <input type="text" name="country"
                                           class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="Destination country">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Plan Interest</label>
                                    <select name="plan"
                                            class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm cursor-pointer">
                                        <option value="">Select a plan</option>
                                        <option>LCL Spot Consignment</option>
                                        <option>FCL Monthly Contract</option>
                                        <option>Custom Grinds & Milling</option>
                                        <option>Annual Price-Lock Contract</option>
                                        <option>Not sure — advise me</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Est. Monthly Volume</label>
                                    <select name="volume"
                                            class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm cursor-pointer">
                                        <option value="">Select volume</option>
                                        <option>100 – 500 kg</option>
                                        <option>500 kg – 2 MT</option>
                                        <option>2 MT – 10 MT</option>
                                        <option>10 MT – 20 MT (1 × FCL)</option>
                                        <option>20 MT+ (multi-FCL)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Spices Required</label>
                                <input type="text" name="spices"
                                       class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                       placeholder="e.g. Ceylon Cinnamon, Black Pepper, Cardamom...">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 ml-1 uppercase tracking-widest">Additional Notes</label>
                                <textarea name="message" rows="4"
                                          class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm resize-none"
                                          placeholder="Packaging requirements, certifications needed, delivery port..."></textarea>
                            </div>

                            <button type="submit"
                                    class="group w-full py-5 bg-primary text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-secondary transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 relative overflow-hidden">
                                <span class="relative z-10">Submit Quote Request</span>
                                <i class="fas fa-arrow-right relative z-10 text-xs group-hover:translate-x-2 transition-transform"></i>
                                <div class="absolute inset-0 bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                            </button>

                            <p class="text-center text-gray-400 text-[10px] font-semibold">
                                By submitting you agree to our <a href="{{ url('/privacy-policy') }}" class="text-primary hover:underline">Privacy Policy</a>. We never share your data.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     TERMS & CONDITIONS
═══════════════════════════════════════════════ --}}
<section class="py-20 lg:py-32 bg-secondary relative overflow-hidden bg-noise-overlay">
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent/40 to-transparent"></div>
    <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 reveal-section">
            <span class="text-accent font-black uppercase tracking-[0.2em] text-[10px] mb-3 block">Legal Agreement</span>
            <h2 class="text-4xl sm:text-5xl font-heading font-black text-white leading-none">
                Terms &amp; <span class="text-accent italic">Conditions</span>
            </h2>
            <div class="w-16 h-[2px] bg-accent/30 mx-auto mt-6"></div>
        </div>

        @php
        $terms = [
            ['fa-lock', 'Price Contracts', 'Fixed pricing contracts are secured for the full duration of monthly and annual agreements with no mid-term revisions.'],
            ['fa-calendar-week', 'Spot Updates', 'Weekly LCL consignments are subject to spot market rate updates published every Monday at 09:00 IST.'],
            ['fa-undo-alt', 'Quality Returns', 'Full returns and replacements are guaranteed for any batch that fails our moisture content or volatile oil standard tests.'],
            ['fa-file-alt', 'Customs & Certs', 'We coordinate full customs clearance and provide phytosanitary certificates, COA, and fumigation certificates on every shipment.'],
            ['fa-box', 'Packaging', 'Eco-friendly, vacuum-sealed multi-layer barrier packaging is standard on all exports to preserve essential oil integrity.'],
            ['fa-seedling', 'Ethical Sourcing', 'All spices are sourced directly from certified ethical partner plantations in the Matale and Kandy highland regions.'],
            ['fa-microscope', 'Quality Checks', 'Continuous inspection at cleaning, sun-drying, grading, and packing stages with full traceability documentation.'],
            ['fa-clock', 'Order Processing', 'Bulk order requests are accepted and processed 24/7 via our trade portal with a 48-hour confirmation guarantee.'],
            ['fa-user-tie', 'Trade Officers', 'Dedicated trade officers are assigned to FCL and annual contract clients for door-to-port and door-to-door coordination.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-16">
            @foreach($terms as $i => $term)
            <div class="group flex gap-5 bg-white/5 hover:bg-white/10 border border-white/5 hover:border-accent/20 rounded-[24px] p-6 transition-all duration-300 reveal-up cursor-default">
                <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 text-accent group-hover:bg-accent group-hover:text-secondary transition-all">
                    <i class="fas {{ $term[0] }} text-sm"></i>
                </div>
                <div>
                    <div class="text-white font-black text-sm mb-1.5">{{ $term[1] }}</div>
                    <p class="text-gray-400 text-xs leading-relaxed font-semibold group-hover:text-gray-300 transition-colors">{{ $term[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Agreement CTA --}}
        <div class="max-w-2xl mx-auto text-center bg-white/5 border border-white/10 rounded-[32px] p-10 reveal-section">
            <i class="fas fa-handshake text-accent/30 text-5xl mb-6 block"></i>
            <p class="text-gray-400 text-sm font-semibold italic leading-relaxed mb-8">
                By subscribing to any NCEYLON supply plan, you confirm that you have read, understood, and agreed to all trade terms listed above.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}"
                   class="px-10 py-4 bg-primary text-white rounded-full font-black text-[10px] uppercase tracking-widest hover:bg-accent hover:text-secondary transition-all shadow-xl shadow-primary/20 hover:shadow-spice-gold">
                    I Agree — Let's Begin
                </a>
                <a href="{{ url('/privacy-policy') }}"
                   class="px-10 py-4 bg-transparent border border-white/20 text-white/70 rounded-full font-black text-[10px] uppercase tracking-widest hover:border-white/50 hover:text-white transition-all">
                    Read Privacy Policy
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     BOTTOM CTA BAND
═══════════════════════════════════════════════ --}}
<section class="py-16 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-[0.04]"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 max-w-5xl mx-auto">
            <div>
                <h3 class="text-2xl sm:text-3xl font-heading font-black text-white leading-tight">
                    Still unsure which plan fits? <span class="italic text-secondary">Talk to us.</span>
                </h3>
                <p class="text-white/60 text-sm font-semibold mt-2">Our trade team will recommend the right contract for your volume and destination.</p>
            </div>
            <div class="flex items-center gap-4 flex-shrink-0">
                <a href="{{ url('/contact') }}"
                   class="px-8 py-4 bg-white text-secondary rounded-full font-black text-[10px] uppercase tracking-widest hover:bg-secondary hover:text-white transition-all shadow-lg hover:scale-105 active:scale-95">
                    Contact Trade Team
                </a>
                <a href="tel:+94771234567"
                   class="flex items-center gap-3 text-white/70 hover:text-white transition-colors group">
                    <div class="w-10 h-10 bg-white/10 border border-white/20 rounded-full flex items-center justify-center group-hover:bg-white/20 transition-all">
                        <i class="fas fa-phone text-xs"></i>
                    </div>
                    <span class="text-xs font-black hidden sm:block">+94 77 123 4567</span>
                </a>
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
        }, { threshold: 0.08 });
        reveals.forEach(r => observer.observe(r));
    });
</script>
@endpush
