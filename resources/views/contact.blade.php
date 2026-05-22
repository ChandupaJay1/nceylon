@extends('layouts.master')

@section('title', 'Contact Us | N-CEYLON Spices')
@section('meta_description', 'Get in touch with N-CEYLON — Sri Lanka\'s authentic spice exporter. Request a wholesale quotation or trade inquiry today.')

@section('content')
    <!-- Page Header -->
    <section class="relative py-24 lg:py-32 bg-secondary overflow-hidden bg-noise-overlay animate-slide-up">
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices2.jpg') }}')] bg-fixed bg-cover opacity-10"></div>
        <div class="absolute top-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-accent to-transparent opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-block py-1.5 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6">Trade Enquiries</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-6 leading-tight">Get in <span class="text-accent italic">Touch</span></h1>
            <nav class="flex justify-center space-x-2 text-white/60 text-xs font-bold uppercase tracking-wider">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <span class="opacity-30">/</span>
                <span class="text-white">Contact</span>
            </nav>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 lg:py-32 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">
                <!-- Contact Info Cards -->
                <div class="lg:w-1/3 flex flex-col gap-6">
                    <div class="bg-white p-10 rounded-[40px] shadow-premium border border-secondary/5 hover-card-premium group">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30 group-hover:scale-110 transition-transform">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <h4 class="text-xl font-black mb-2 text-secondary">Email Us</h4>
                        <a href="mailto:nceylonspices@gmail.com" class="text-primary font-black text-lg mb-1 block hover:underline">nceylonspices@gmail.com</a>
                        <p class="text-gray-400 text-xs font-semibold">Available Mon – Sat, 8am to 6pm (IST)</p>
                    </div>
                    <div class="bg-white p-10 rounded-[40px] shadow-premium border border-secondary/5 hover-card-premium group">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30 group-hover:scale-110 transition-transform">
                            <i class="fas fa-share-alt text-xl"></i>
                        </div>
                        <h4 class="text-xl font-black mb-2 text-secondary">Follow Us</h4>
                        <div class="flex items-center gap-3 mt-2">
                            <a href="https://www.facebook.com/profile.php?id=100090691998394&mibextid=wwXIfr" target="_blank" aria-label="Facebook" class="w-9 h-9 rounded-xl bg-surface-dark border border-secondary/10 flex items-center justify-center text-secondary/50 hover:bg-primary hover:border-primary hover:text-white transition-all duration-300">
                                <i class="fab fa-facebook-f text-[11px]"></i>
                            </a>
                            <a href="https://www.instagram.com/n_ceylon_spices?igsh=MXUzZGlqdDEyenFsbg==" target="_blank" aria-label="Instagram" class="w-9 h-9 rounded-xl bg-surface-dark border border-secondary/10 flex items-center justify-center text-secondary/50 hover:bg-primary hover:border-primary hover:text-white transition-all duration-300">
                                <i class="fab fa-instagram text-[11px]"></i>
                            </a>
                            <a href="https://www.tiktok.com/@nceylon?_r=1&_t=ZS-96YDdpVqyGL0777308365" target="_blank" aria-label="TikTok" class="w-9 h-9 rounded-xl bg-surface-dark border border-secondary/10 flex items-center justify-center text-secondary/50 hover:bg-primary hover:border-primary hover:text-white transition-all duration-300">
                                <i class="fab fa-tiktok text-[11px]"></i>
                            </a>
                        </div>
                        <p class="text-gray-400 text-xs font-semibold mt-3">We respond within 24 business hours</p>
                    </div>
                    <div class="bg-white p-10 rounded-[40px] shadow-premium border border-secondary/5 hover-card-premium group">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30 group-hover:scale-110 transition-transform">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <h4 class="text-xl font-black mb-2 text-secondary">Our Trade Office</h4>
                        <a href="https://maps.app.goo.gl/Rb8QMgcMj9LHjCHQ8" target="_blank" class="text-primary font-black text-base mb-1 leading-snug block hover:underline">No.2540, Stage 3,<br>Anuradhapura</a>
                        <p class="text-gray-400 text-xs font-semibold">View on Google Maps</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:w-2/3">
                    <div class="bg-white p-10 lg:p-16 rounded-[50px] shadow-premium border border-secondary/5">
                        <div class="mb-10">
                            <span class="text-primary font-black uppercase tracking-[0.2em] text-xs mb-3 block">Send a Trade Enquiry</span>
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-secondary leading-tight">
                                Let's Start a <span class="text-primary italic">Partnership</span>
                            </h2>
                        </div>
                        <form method="post" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-black text-gray-400 ml-4 uppercase tracking-wider">Your Name</label>
                                    <input type="text" name="name"
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="Full name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-black text-gray-400 ml-4 uppercase tracking-wider">Business Email</label>
                                    <input type="email" name="email"
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="company@email.com">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-black text-gray-400 ml-4 uppercase tracking-wider">Phone / WhatsApp</label>
                                    <input type="text" name="phone"
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                           placeholder="+1 234 567 8900">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-black text-gray-400 ml-4 uppercase tracking-wider">Enquiry Type</label>
                                    <select name="subject"
                                            class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm cursor-pointer">
                                        <option value="">Select enquiry type</option>
                                        <option>Wholesale / Bulk Order</option>
                                        <option>Annual Supply Contract</option>
                                        <option>Custom Grinding & Milling</option>
                                        <option>Private Label Packaging</option>
                                        <option>General Enquiry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-black text-gray-400 ml-4 uppercase tracking-wider">Your Message</label>
                                <textarea name="message" rows="6"
                                          class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm resize-none"
                                          placeholder="Tell us about your spice requirements, quantities, and destination country..."></textarea>
                            </div>
                            <div class="pt-4">
                                <button type="submit"
                                        class="group relative px-12 py-5 bg-primary text-white rounded-full font-black text-sm uppercase tracking-widest hover:bg-secondary transition-all shadow-xl shadow-primary/30 flex items-center gap-3 overflow-hidden">
                                    <span class="relative z-10">Send Enquiry</span>
                                    <i class="fas fa-paper-plane relative z-10 text-xs group-hover:translate-x-2 group-hover:-translate-y-1 transition-transform"></i>
                                    <div class="absolute inset-0 bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="h-[450px] w-full bg-secondary/10 relative overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.81779!2d80.4037!3d8.3114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca2b4b1b1b1b1%3A0x411a3818a1e03c37!2sAnuradhapura%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1680000000000!5m2!1sen!2slk"
                class="w-full h-full border-none grayscale hover:grayscale-0 transition-all duration-700"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Quick Contact Stats -->
    <section class="py-16 bg-secondary text-white relative overflow-hidden bg-noise-overlay">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                @foreach([['fa-clock', '24h', 'Response Time'], ['fa-globe', '15+', 'Export Countries'], ['fa-users', '350+', 'Partner Farms'], ['fa-box', '18+', 'Spice Varieties']] as [$icon, $val, $label])
                <div class="group">
                    <div class="w-12 h-12 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center text-accent mx-auto mb-4 group-hover:bg-primary group-hover:border-primary transition-all">
                        <i class="fas {{ $icon }} text-sm"></i>
                    </div>
                    <div class="text-3xl font-heading font-black text-white mb-1">{{ $val }}</div>
                    <div class="text-white/50 text-[10px] font-black uppercase tracking-widest">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
