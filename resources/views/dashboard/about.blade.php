@extends('dashboard.app')

@section('content')
<div class="w-full">

    <!-- ================= HEADER ================= -->
    <div class="flex items-start justify-between mb-8">

        <!-- Title -->
        <div class="w-[440px] h-[64px]">
            <h1 class="text-[28px] font-semibold text-gray-800 leading-tight">About Us</h1>
            <p class="text-sm text-gray-400 mt-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            </p>
        </div>

        <!-- Button Edit -->
        <button
            class="w-[275px] h-[64px] rounded-[15px] px-[55px] py-[14px]
                   flex items-center justify-center gap-[10px]
                   text-white font-semibold
                   shadow-lg"
            style="background: linear-gradient(180deg, #2AAC63 5.08%, #051A13 100%);"
        >
            <!-- icon pencil -->
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 20h9"/>
                <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>
            </svg>
            Edit Content
        </button>
    </div>


    <!-- ================= OUTER CARD ================= -->
    <div
        class="w-[1537px] h-[950px] bg-[#F4F4F4] rounded-[15px] border border-[#969696] p-10 relative"
    >

        <h2 class="text-[22px] font-semibold text-gray-800 mb-6">Tentang PROTIC</h2>

        <!-- ===== GRID CONTENT ===== -->
        <div class="grid grid-cols-12 gap-8">

            <!-- ================= LEFT ================= -->
            <div class="col-span-7">

                <!-- Image: 713x312 -->
                <img
                    src="{{ asset('images/protic-team.png') }}"
                    class="w-[713px] h-[312px] object-cover rounded-[15px] mb-6"
                    alt="PROTIC Team"
                />

                <!-- Lorem 1: 738x160 -->
                <p class="w-[738px] h-[160px] text-gray-600 text-[14px] leading-relaxed mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>

                <!-- Lorem 2: 738x160 -->
                <p class="w-[738px] h-[160px] text-gray-600 text-[14px] leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>
            </div>


            <!-- ================= RIGHT ================= -->
            <div class="col-span-5 flex flex-col gap-6">

                <!-- ===== VISI: 595x322 ===== -->
                <div class="w-[595px] h-[322px] rounded-[15px] p-[3px]"
                     style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">

                    <!-- inner -->
                    <div class="w-full h-full rounded-[12px] bg-white p-6">
                        <h3 class="text-[22px] font-semibold text-[#114B2A] mb-3">Visi</h3>

                        <ol class="list-decimal ml-5 text-[14px] text-gray-700 leading-relaxed">
                            <li>
                                Menjadikan Unit Kegiatan Mahasiswa yang dapat menampung, menjadi wadah,
                                serta memfasilitasi minat dan bakat mahasiswa dalam pengembangan diri
                                mahasiswa Politeknik Negeri Cilacap.
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- ===== MISI: 595x361 ===== -->
                <div
                    class="w-[595px] h-[361px] rounded-[15px] p-[3px]"
                    style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">

                    <!-- inner -->
                    <div class="w-full h-full rounded-[12px] bg-white p-6">
                        <h3 class="text-[22px] font-semibold text-[#114B2A] mb-3">Misi</h3>

                        <ol class="list-decimal ml-5 text-[14px] text-gray-700 leading-relaxed space-y-2">
                            <li>
                                Dengan berorientasi pada bidang pemrograman melalui subdivisi yang meliputi Web, Mobile, UI/UX, DevOps dan Data.
                            </li>
                            <li>
                                UKM PROTIC akan menjalinkan kerja sama dengan pihak lain baik internal maupun eksternal kampus untuk mengoptimalkan pengembangan potensi anggotanya.
                            </li>
                        </ol>
                    </div>    
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection