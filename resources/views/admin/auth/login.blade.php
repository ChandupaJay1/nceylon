<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login | N-CEYLON</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/icon/nceylontp.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-secondary flex items-center justify-center min-h-screen relative overflow-hidden">

    {{-- Background ambient orbs --}}
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-accent/8 rounded-full translate-x-1/3 translate-y-1/3 blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(rgba(168,63,44,0.8)_1px,transparent_0),radial-gradient(rgba(226,158,48,0.5)_1px,transparent_0)] bg-[size:24px_24px] bg-[position:0_0,12px_12px] pointer-events-none"></div>

    <div class="relative w-full max-w-md mx-4">

        {{-- Card --}}
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[40px] p-10 shadow-2xl">

            {{-- Logo --}}
            <div class="flex flex-col items-center mb-10">
                <a href="{{ url('/') }}" class="mb-6 group">
                    <img src="{{ asset('assets/icon/nceylontp.png') }}"
                         class="h-16 w-auto object-contain group-hover:scale-105 transition-transform duration-300"
                         alt="N-CEYLON">
                </a>
                <h1 class="text-2xl font-heading font-black text-white tracking-tight">Admin Panel</h1>
                <p class="text-white/40 text-xs font-semibold mt-1 uppercase tracking-widest">Sign in to continue</p>
            </div>

            {{-- Session error --}}
            @if(session('error'))
            <div class="mb-6 flex items-center gap-3 bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-semibold rounded-2xl px-5 py-4">
                <i class="fas fa-exclamation-circle flex-shrink-0"></i>
                <span>{{ session('error') }}</span>
            </div>
            @endif

            {{-- Form --}}
            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-white/40 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-white/25 text-xs"></i>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full bg-white/8 border @error('email') border-red-500/50 @else border-white/10 @enderror text-white placeholder:text-white/25 text-sm font-semibold rounded-2xl py-4 pl-11 pr-5 focus:outline-none focus:border-primary/60 focus:bg-white/12 transition-all"
                               placeholder="admin@nceylon.com">
                    </div>
                    @error('email')
                    <p class="mt-2 text-xs text-red-400 font-semibold flex items-center gap-1.5">
                        <i class="fas fa-circle-exclamation text-[10px]"></i> {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-white/40 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-white/25 text-xs"></i>
                        </div>
                        <input type="password" name="password" id="password" required
                               class="w-full bg-white/8 border @error('password') border-red-500/50 @else border-white/10 @enderror text-white placeholder:text-white/25 text-sm font-semibold rounded-2xl py-4 pl-11 pr-12 focus:outline-none focus:border-primary/60 focus:bg-white/12 transition-all"
                               placeholder="••••••••">
                        {{-- Toggle visibility --}}
                        <button type="button" onclick="togglePassword()"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-white/25 hover:text-white/60 transition-colors">
                            <i id="eye-icon" class="fas fa-eye text-xs"></i>
                        </button>
                    </div>
                    @error('password')
                    <p class="mt-2 text-xs text-red-400 font-semibold flex items-center gap-1.5">
                        <i class="fas fa-circle-exclamation text-[10px]"></i> {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- Remember me --}}
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="remember" id="remember"
                           class="w-4 h-4 rounded border-white/20 bg-white/8 text-primary focus:ring-primary/50 cursor-pointer">
                    <label for="remember" class="text-xs font-semibold text-white/50 cursor-pointer select-none">
                        Keep me signed in
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-primary hover:bg-primary-dark text-white font-black text-sm uppercase tracking-widest py-4 rounded-2xl transition-all duration-300 shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:scale-[1.02] active:scale-[0.98] mt-2 flex items-center justify-center gap-2 group">
                    <span>Sign In</span>
                    <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </button>
            </form>

            {{-- Back to site --}}
            <div class="mt-8 text-center">
                <a href="{{ url('/') }}" class="text-[10px] font-semibold text-white/25 hover:text-white/60 uppercase tracking-widest transition-colors flex items-center justify-center gap-2">
                    <i class="fas fa-arrow-left text-[9px]"></i>
                    Back to Website
                </a>
            </div>
        </div>

        {{-- Footer note --}}
        <p class="text-center text-[10px] text-white/15 font-semibold mt-6 uppercase tracking-widest">
            N-CEYLON Spices &copy; {{ date('Y') }} — Restricted Access
        </p>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon  = document.getElementById('eye-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>
