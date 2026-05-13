<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTIC Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        
        /* Jaring-jaring sidebar yang hanya di atas dan memudar */
        .sidebar-grid {
            background-image: 
                linear-gradient(rgba(255,255,255,0.15) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.15) 1px, transparent 1px);
            background-size: 15px 15px;
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
        }

        .banner-grid {
            background-image: radial-gradient(circle at top right, rgba(255,255,255,0.1) 0%, transparent 60%),
            repeating-linear-gradient(45deg, rgba(255,255,255,0.03) 0px, rgba(255,255,255,0.03) 1px, transparent 1px, transparent 10px);
        }

        /* Dekorasi Elips Sidebar agar persis seperti gambar */
        .sidebar-ellipse-1 {
            position: absolute; width: 103px; height: 97px; top: 113px; left: 219px; opacity: 1; border-radius: 9999px; background: linear-gradient( 180deg, rgba(128, 200, 159, 0.21) -64.54%, rgba(48, 126, 82, 0.21) 21.69%, rgba(6, 41, 30, 0.21) 100% ); pointer-events: none;
        }

        .sidebar-ellipse-2 {
            position: absolute; width: 103px; height: 97px; top: 694px; left: -59px; opacity: 0.76; border-radius: 9999px; background: linear-gradient( 180deg, #80C89F -64.54%, #114B2A 21.69%, #06291E 100% ); pointer-events: none;
        }

        .sidebar-ellipse-3 {
            position: absolute; width: 103px; height: 97px; top: 920px; left: 192px; opacity: 0.4; border-radius: 9999px; background: linear-gradient( 180deg, #80C89F -64.54%, #114B2A 21.69%, #06291E 100% ); pointer-events: none;
        }

        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.1); border-radius: 10px; }
    </style>
</head>
<body class="bg-[#f4f6f5] overflow-x-hidden">

    <!-- ================= HEADER (Full Width) ================= -->
    <header class="fixed top-0 left-0 right-0 h-[80px] bg-white border-b border-gray-100 flex items-center justify-between px-10 z-50 shadow-sm">
        <div class="flex items-center gap-5">
            <!-- Logo -->
            <div class="w-20 h-20 ">
                <img src="{{ asset('images/Group 70.png') }}" alt="Logo PROTIC">
            </div>
            <span class="text-3xl font-bold text-[#1f2937] tracking-tight">PROTIC</span>
        </div>

        <div class="flex items-center gap-8">
            <!-- Search -->
            <button class="p-3 bg-gray-50 rounded-full text-gray-400 hover:text-gray-600 transition-all border border-gray-100 hover:bg-gray-100">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" color="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>
            </button>
            
            <!-- Profile -->
            <div class="flex items-center gap-4 cursor-pointer group">
                <div class="relative">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2AAC63&color=fff" class="w-12 h-12 rounded-full border-2 border-gray-100 object-cover shadow-sm transition-transform group-hover:scale-105" alt="Profile">
                    <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
                </div>
                <div class="hidden sm:block">
                    <p class="text-[14px] font-bold text-gray-800 leading-tight">{{ Auth::user()->name }}</p>
                    <p class="text-[12px] text-gray-500 font-medium">{{ Auth::user()->email }}</p>
                </div>
                <svg class="text-gray-400 group-hover:translate-y-0.5 transition-transform" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
            </div>
        </div>
    </header>

    <div class="flex pt-[80px] min-h-screen">
        
        <!-- ================= SIDEBAR ================= -->
        <aside class="w-[260px] fixed left-0 top-[80px] bottom-0 flex flex-col z-40 overflow-hidden" 
               style="background: linear-gradient(180deg, #2AAC63 -28.15%, #051A13 87.34%);">
            <!-- Background Decorative Items -->
            <div class="absolute top-0 w-full h-24 sidebar-grid opacity-80"></div>
            <div class="sidebar-ellipse-1"></div>
            <div class="sidebar-ellipse-2"></div>
            <div class="sidebar-ellipse-3"></div>
            
            <nav class="flex-1 px-5 mt-8 overflow-y-auto custom-scrollbar relative z-10">
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-4 px-5 py-4 bg-white/10 text-white rounded-2xl font-semibold transition-all shadow-lg shadow-black/10">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                            <span class="text-[16px]">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            <span class="text-[16px]">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="text-[16px]">Divisi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            <span class="text-[16px]">Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                            <span class="text-[16px]">Prestasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            <span class="text-[16px]">Artikel</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                            <span class="text-[16px]">Galery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="text-[16px]">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 px-5 py-4 text-white hover:text-white/70 hover:bg-white/5 rounded-2xl transition-all">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                            <span class="text-[16px]">Setting</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Sign Out -->
            <div class="p-8 relative z-10 mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-3 py-4 bg-[#b91c1c] hover:bg-[#991b1b] text-white rounded-2xl font-bold shadow-xl shadow-black/20 transition-all text-base transform hover:scale-[1.02]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        Sign Out
                    </button>
                </form>
            </div>
        </aside>

        <!-- ================= MAIN CONTENT ================= -->
        <main class="flex-1 ml-[260px] p-10">

            <!-- Dynamic Content Yield -->
            <div>
                @yield('content')
            </div>

        </main>
    </div>

</body>
</html>