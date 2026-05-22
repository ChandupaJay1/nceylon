@extends('layouts.master')

@section('title', 'Privacy Policy | N-CEYLON')

@section('content')
    <!-- Page Header -->
    <section class="relative py-24 lg:py-32 bg-secondary overflow-hidden bg-noise-overlay animate-slide-up">
        <!-- Decoration background -->
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices8.jpg') }}')] bg-fixed bg-cover opacity-10"></div>
        <div class="absolute top-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-accent to-transparent opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-block py-1.5 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6">Security & Care</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-6 leading-tight">Privacy <span class="text-accent italic">Policy</span></h1>
            <nav class="flex justify-center space-x-2 text-white/60 text-xs font-bold uppercase tracking-wider">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <span class="opacity-30">/</span>
                <span class="text-white">Privacy Policy</span>
            </nav>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 lg:py-32 bg-surface relative bg-spice-pattern bg-noise-overlay overflow-hidden">
        <div class="container mx-auto px-4 max-w-4xl relative z-10 animate-slide-up">
            <div class="bg-white/90 backdrop-blur-md p-8 sm:p-16 rounded-[48px] shadow-premium border border-secondary/5 space-y-12">
                
                <div>
                    <h2 class="text-2xl font-heading font-black text-secondary mb-6 border-l-4 border-primary pl-6">Information We Collect</h2>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        We collect information from you when you register on our site, place an order, subscribe to our newsletter, or fill out a form. When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, or phone number.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-heading font-black text-secondary mb-6 border-l-4 border-primary pl-6">How We Use Your Information</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 text-sm">Any of the information we collect from you may be used in one of the following ways:</p>
                    <ul class="space-y-4 text-gray-500 list-none pl-0 text-sm font-semibold">
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center text-primary flex-shrink-0 mt-0.5">
                                <i class="fas fa-check text-[10px]"></i>
                            </div>
                            <span class="text-gray-500">To personalize your experience (your information helps us to better respond to your individual needs).</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center text-primary flex-shrink-0 mt-0.5">
                                <i class="fas fa-check text-[10px]"></i>
                            </div>
                            <span class="text-gray-500">To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you).</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center text-primary flex-shrink-0 mt-0.5">
                                <i class="fas fa-check text-[10px]"></i>
                            </div>
                            <span class="text-gray-500">To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs).</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-heading font-black text-secondary mb-6 border-l-4 border-primary pl-6">Information Protection</h2>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. High-grade encryption technologies are used throughout processing.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-heading font-black text-secondary mb-6 border-l-4 border-primary pl-6">Cookies Usage</h2>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        Yes, we use cookies. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enable the site's or service provider's systems to recognize your browser, and capture and remember certain key preferences.
                    </p>
                </div>

                <div class="bg-surface-dark/60 p-8 rounded-3xl border-l-4 border-accent italic text-gray-500 text-center font-semibold text-sm">
                    "We are passionately committed to protecting your privacy and ensuring your trade data is handled with maximum care and transparency."
                </div>
            </div>
        </div>
    </section>
@endsection

