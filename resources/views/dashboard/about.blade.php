@extends('dashboard.app')

@section('content')
<div class="w-full relative">

    <!-- ================= HEADER ================= -->
    <div class="flex items-start justify-between mb-8">

        <!-- Title -->
        <div class="w-[440px] h-[64px]">
            <h1 class="text-[28px] font-semibold text-gray-800 leading-tight">About Us</h1>
            <p class="text-sm text-gray-400 mt-1">
                Manage your about us content here.
            </p>
        </div>

        <!-- Button Edit -->
        <button
            type="button"
            id="openEditModal"
            class="w-[275px] h-[64px] rounded-[15px] px-[55px] py-[14px]
                   flex items-center justify-center gap-[10px]
                   text-white font-semibold
                   shadow-lg transition-transform hover:scale-105 cursor-pointer"
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


    <!-- ================= OUTER CARD (Tampilan Utama) ================= -->
    <div class="w-[1537px] h-[950px] bg-[#F4F4F4] rounded-[15px] border border-[#969696] p-10 relative">

        <!-- Teks dari Database menggunakan Blade -->
        <h2 id="displayTitle" class="text-[22px] font-semibold text-gray-800 mb-6">
            {{ $about->title ?? 'Tentang PROTIC' }}
        </h2>

        <!-- ===== GRID CONTENT ===== -->
        <div class="grid grid-cols-12 gap-8">

            <!-- ================= LEFT (Gambar & Konten) ================= -->
            <div class="col-span-7">

                <!-- Image -->
                <img
                    src="{{ asset('images/protic-team.png') }}"
                    class="w-[713px] h-[312px] object-cover rounded-[15px] mb-6 bg-gray-200"
                    alt="PROTIC Team"
                />

                <div id="displayContent" class="text-gray-600 text-[14px] leading-relaxed space-y-6 whitespace-pre-line">
                    {{ $about->content ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }}
                </div>
            </div>

            <!-- ================= RIGHT (Visi & Misi) ================= -->
            <div class="col-span-5 flex flex-col gap-6">

                <!-- ===== VISI ===== -->
                <div class="w-[595px] h-[322px] rounded-[15px] p-[3px]"
                     style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">
                    <div class="w-full h-full rounded-[12px] bg-white p-6 overflow-y-auto">
                        <h3 class="text-[22px] font-semibold text-[#114B2A] mb-3">Visi</h3>
                        <div id="displayVisi" class="text-[14px] text-gray-700 leading-relaxed whitespace-pre-line">
                            {{ $about->visi ?? '1. Menjadikan Unit Kegiatan Mahasiswa yang dapat menampung, menjadi wadah, serta memfasilitasi minat dan bakat mahasiswa dalam pengembangan diri mahasiswa Politeknik Negeri Cilacap.' }}
                        </div>
                    </div>
                </div>

                <!-- ===== MISI ===== -->
                <div class="w-[595px] h-[361px] rounded-[15px] p-[3px]"
                    style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">
                    <div class="w-full h-full rounded-[12px] bg-white p-6 overflow-y-auto">
                        <h3 class="text-[22px] font-semibold text-[#114B2A] mb-3">Misi</h3>
                        <div id="displayMisi" class="text-[14px] text-gray-700 leading-relaxed space-y-2 whitespace-pre-line">
                            {{ $about->misi ?? "1. Dengan berorientasi pada bidang pemrograman melalui subdivisi yang meliputi Web, Mobile, UI/UX, DevOps dan Data.\n2. UKM PROTIC akan menjalinkan kerja sama dengan pihak lain baik internal maupun eksternal kampus untuk mengoptimalkan pengembangan potensi anggotanya." }}
                        </div>
                    </div>    
                </div>

            </div>
        </div>
    </div>

    <!-- ================= EDIT MODAL OVERLAY ================= -->
    <div id="editModalOverlay" class="fixed inset-0 z-50 bg-black/50 hidden flex items-center justify-center backdrop-blur-sm">
        
        <!-- MODAL BOX -->
        <div class="bg-white rounded-[20px] w-[900px] max-h-[90vh] overflow-y-auto p-8 relative shadow-2xl">
            
            <!-- Close Button -->
            <button type="button" id="closeEditModal" class="absolute top-6 right-6 text-gray-800 hover:text-red-500 transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>

            <!-- Modal Header -->
            <h2 class="text-[24px] font-bold text-gray-900 mb-8">About Us</h2>

            <!-- Form Content (ASLI UNTUK LARAVEL) -->
            <!-- Sesuaikan route('about.update') dengan route yang ada di web.php kamu -->
            <form id="editAboutForm" action="{{ route('about.update') }}" method="POST" class="space-y-6">
                
                <!-- Wajib ada untuk keamanan form Laravel -->
                @csrf 
                
                <!-- Gunakan PUT/PATCH jika melakukan proses Update data -->
                @method('PUT') 

                <!-- Menampilkan Error Validasi (jika ada) -->
                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- Title Input -->
                <div>
                    <label for="inputTitle" class="block text-[16px] text-gray-700 font-medium mb-2">Title</label>
                    <div class="p-[1px] rounded-[10px]" style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">
                        <input type="text" id="inputTitle" name="title" value="{{ old('title', $about->title ?? 'Tentang PROTIC') }}" required class="w-full h-[50px] bg-white rounded-[9px] px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#307E52] focus:ring-offset-1 transition-all">
                    </div>
                </div>

                <!-- Content Input -->
                <div>
                    <label for="inputContent" class="block text-[16px] text-gray-700 font-medium mb-2">Content</label>
                    <div class="p-[1px] rounded-[10px]" style="background: linear-gradient(270deg, #06291E -12.27%, #307E52 15.54%, #A8FFCE 42.34%, #307E52 70.64%, #000000 110.65%);">
                        <textarea id="inputContent" name="content" required class="block w-full h-[150px] bg-white rounded-[9px] p-4 text-gray-800 text-[14px] resize-none focus:outline-none focus:ring-2 focus:ring-[#307E52] focus:ring-offset-1 transition-all border-none">{{ old('content', $about->content ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</textarea>
                    </div>
                </div>

                <!-- Visi & Misi Inputs -->
                <div class="grid grid-cols-2 gap-6">
                    <!-- Visi -->
                    <div>
                        <label for="inputVisi" class="block text-[16px] text-gray-700 font-medium mb-2">Visi</label>
                        <textarea id="inputVisi" name="visi" required class="w-full h-[150px] bg-[#E8EAE9] rounded-[10px] p-4 text-gray-800 text-[13px] resize-none focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all border-none">{{ old('visi', $about->visi ?? '1. Menjadikan Unit Kegiatan Mahasiswa yang dapat menampung, menjadi wadah, serta memfasilitasi minat dan bakat mahasiswa dalam pengembangan diri mahasiswa Politeknik Negeri Cilacap.') }}</textarea>
                    </div>

                    <!-- Misi -->
                    <div>
                        <label for="inputMisi" class="block text-[16px] text-gray-700 font-medium mb-2">Misi</label>
                        <textarea id="inputMisi" name="misi" required class="w-full h-[150px] bg-[#E8EAE9] rounded-[10px] p-4 text-gray-800 text-[13px] resize-none focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all border-none">{{ old('misi', $about->misi ?? "1. Dengan berorientasi pada bidang pemrograman melalui subdivisi yang meliputi Web, Mobile, UI/UX, DevOps dan Data.\n2. UKM PROTIC akan menjalinkan kerja sama dengan pihak lain baik internal maupun eksternal kampus untuk mengoptimalkan pengembangan potensi anggotanya.") }}</textarea>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end gap-4 mt-8 pt-6">
                    <button type="button" id="cancelEditBtn" class="px-8 py-2.5 rounded-[10px] border border-gray-400 text-gray-700 font-semibold hover:bg-gray-100 transition-colors">
                        Batal
                    </button>
                    <!-- Type submit ini yang akan mentrigger pengiriman POST ke Laravel Controller -->
                    <button type="submit" class="px-8 py-2.5 rounded-[10px] text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all" style="background: linear-gradient(180deg, #2AAC63 5.08%, #051A13 100%);">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>

<!-- Script HANYA untuk buka/tutup modal. Logika simpan diurus Laravel. -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalOverlay = document.getElementById('editModalOverlay');
        const openBtn = document.getElementById('openEditModal');
        const closeBtn = document.getElementById('closeEditModal');
        const cancelBtn = document.getElementById('cancelEditBtn');

        // Function to open modal
        openBtn.addEventListener('click', function() {
            modalOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scrolling halaman latar belakang
        });

        // Function to close modal
        function closeModal() {
            modalOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Mengembalikan scrolling
        }

        // Event listeners untuk menutup modal
        closeBtn.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);

        // Menutup modal jika klik di area luar box putih (di background hitam/overlay)
        modalOverlay.addEventListener('click', function(event) {
            if (event.target === modalOverlay) {
                closeModal();
            }
        });
    });
</script>
@endsection