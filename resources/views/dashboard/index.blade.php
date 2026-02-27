@extends('dashboard.app')

@section('content')

<!-- Welcome Banner -->
<section class="w-full h-[200px] bg-gradient-to-r from-[#114B2F] to-[#0B3B23] rounded-[28px] px-12 flex flex-col justify-center mb-8 relative overflow-hidden">
    <h1 class="text-[40px] font-extrabold text-white mb-2 tracking-tight">
        Selamat Datang, Admin!
    </h1>
    <p class="text-white/70 text-[15px] max-w-lg">
        Pantau dan kelola informasi melalui dashboard ini.
    </p>

    <!-- subtle grid -->
    <div class="absolute right-0 top-0 w-60 rotate-45 h-full opacity-30 pointer-events-none sidebar-grid"></div>
</section>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

    <!-- Recent Activity -->
    <div class="lg:col-span-2 bg-white rounded-[24px] p-8 border border-gray-200 shadow-[0_10px_30px_rgba(0,0,0,0.04)]">

        <div class="flex flex-col items-center mb-8">
            <h2 class="text-[22px] font-bold text-gray-800">
                Recent Activity
            </h2>
            <div class="w-48 h-[2px] bg-gradient-to-r from-transparent via-green-500 to-transparent mt-3"></div>
        </div>

        <div class="space-y-4">

            <!-- Item -->
            <div class="group flex items-center justify-between p-5 bg-[#F5F7F6] border-l-[6px] border-green-700 rounded-[16px] hover:bg-white hover:shadow-md transition-all">
                <div>
                    <h4 class="font-semibold text-gray-800 text-[16px]">
                        Artikel Baru Dipublish
                    </h4>
                    <p class="text-[13px] text-gray-500 mt-1">
                        Kolaborasi Protic dengan UKM lain dalam rangka party
                    </p>
                </div>
                <span class="text-[12px] font-semibold text-gray-400 whitespace-nowrap">
                    Hari ini
                </span>
            </div>

            <!-- Duplicate items -->
            <div class="group flex items-center justify-between p-5 bg-[#F5F7F6] border-l-[6px] border-green-700 rounded-[16px] hover:bg-white hover:shadow-md transition-all">
                <div>
                    <h4 class="font-semibold text-gray-800 text-[16px]">
                        Artikel Baru Dipublish
                    </h4>
                    <p class="text-[13px] text-gray-500 mt-1">
                        Kolaborasi Protic dengan UKM lain dalam rangka party
                    </p>
                </div>
                <span class="text-[12px] font-semibold text-gray-400">
                    Kemarin
                </span>
            </div>

            <div class="group flex items-center justify-between p-5 bg-[#F5F7F6] border-l-[6px] border-green-700 rounded-[16px] hover:bg-white hover:shadow-md transition-all">
                <div>
                    <h4 class="font-semibold text-gray-800 text-[16px]">
                        Artikel Baru Dipublish
                    </h4>
                    <p class="text-[13px] text-gray-500 mt-1">
                        Kolaborasi Protic dengan UKM lain dalam rangka party
                    </p>
                </div>
                <span class="text-[12px] font-semibold text-gray-400 whitespace-nowrap">
                    10 Januari 2026
                </span>
            </div>

            <div class="group flex items-center justify-between p-5 bg-[#F5F7F6] border-l-[6px] border-green-700 rounded-[16px] hover:bg-white hover:shadow-md transition-all">
                <div>
                    <h4 class="font-semibold text-gray-800 text-[16px]">
                        Artikel Baru Dipublish
                    </h4>
                    <p class="text-[13px] text-gray-500 mt-1">
                        Kolaborasi Protic dengan UKM lain dalam rangka party
                    </p>
                </div>
                <span class="text-[12px] font-semibold text-gray-400 whitespace-nowrap">
                    19 Januari 2026
                </span>
            </div>

        </div>
    </div>

    <!-- Right Side -->
    <div class="space-y-6">

        <!-- Quick Actions -->
        <div class="bg-white rounded-[24px] p-8 border border-gray-200 shadow-[0_10px_30px_rgba(0,0,0,0.04)]">
            <h2 class="text-[22px] font-bold text-gray-800 mb-6">
                Quick Actions
            </h2>

            <div class="space-y-4">

                <!-- Button -->
                <button class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 rounded-[14px] hover:border-green-600 hover:shadow-sm transition">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-gray-50 rounded-xl">
                            <!-- icon -->
                        </div>
                        <span class="text-[14px] font-semibold text-gray-700">
                            Add Program
                        </span>
                    </div>
                    <span class="text-gray-400 text-xl font-bold">+</span>
                </button>

                <!-- copy for others -->
                <button class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 rounded-[14px] hover:border-green-600 hover:shadow-sm transition">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-gray-50 rounded-xl"></div>
                        <span class="text-[14px] font-semibold text-gray-700">
                            Add Prestasi
                        </span>
                    </div>
                    <span class="text-gray-400 text-xl font-bold">+</span>
                </button>

                <button class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 rounded-[14px] hover:border-green-600 hover:shadow-sm transition">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-gray-50 rounded-xl"></div>
                        <span class="text-[14px] font-semibold text-gray-700">
                            Add Artikel
                        </span>
                    </div>
                    <span class="text-gray-400 text-xl font-bold">+</span>
                </button>

            </div>
        </div>

        <!-- Club Card -->
        <div class="relative bg-gradient-to-br from-[#114B2F] to-[#0B3B23] rounded-[20px] p-8 text-white overflow-hidden">
            <h3 class="text-[26px] font-bold mb-2">Protic</h3>
            <p class="text-white/70 text-[14px]">
                Programming Technology Informatics Club
            </p>

            <div class="absolute inset-0 sidebar-grid opacity-20 pointer-events-none"></div>
        </div>

    </div>
</div>

@endsection