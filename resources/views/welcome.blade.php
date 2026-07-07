<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flower.dnr - Keanggunan dalam Setiap Kelopak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Font elegan: Cormorant Garamond untuk judul, Lato untuk teks biasa */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Lato:wght@300;400;700&display=swap');
        
        body { font-family: 'Lato', sans-serif; }
        .font-elegant { font-family: 'Cormorant Garamond', serif; }
    </style>
</head>
<body class="bg-[#fdfbfb] text-stone-700 antialiased selection:bg-rose-200 selection:text-stone-900">

    <nav class="w-full bg-white/80 backdrop-blur-md fixed top-0 z-50 border-b border-rose-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <h1 class="text-3xl font-elegant font-semibold text-rose-700 tracking-wide">flower.dnr</h1>
            <div class="hidden md:flex space-x-10 text-xs uppercase tracking-[0.15em] text-stone-500 font-semibold">
                <a href="#" class="hover:text-rose-600 transition-colors">Beranda</a>
                <a href="#" class="hover:text-rose-600 transition-colors">Koleksi</a>
                <a href="#" class="hover:text-rose-600 transition-colors">Tentang Kami</a>
                <a href="#" class="hover:text-rose-600 transition-colors">Kontak</a>
            </div>
            <button class="bg-rose-50 hover:bg-rose-100 text-rose-800 font-semibold py-2 px-8 rounded-none border border-rose-200 transition-all text-xs tracking-widest uppercase">
                Pesan
            </button>
        </div>
    </nav>

    <header class="pt-40 pb-20 px-6 text-center max-w-4xl mx-auto">
        <span class="text-rose-400 text-xs font-bold tracking-[0.2em] uppercase">Florist Premium — Est. 2026</span>
        <h2 class="mt-6 text-5xl md:text-7xl font-elegant font-semibold text-stone-800 leading-tight">
            Menyampaikan Rasa <br>
            <span class="text-rose-600 italic">Lewat Keindahan Bungaa Buatan Tangan Dindaaa </span>
        </h2>
        <p class="mt-8 text-lg text-stone-500 max-w-2xl mx-auto font-light leading-relaxed">
            Setiap tangkai dipilih dengan seksama dan dirangkai dengan kelembutan. Hadirkan momen tak terlupakan untuk orang-orang paling istimewa dalam hidup Anda bersama flower.dnr.
        </p>
    </header>

    <section class="bg-white py-16 border-y border-rose-50">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="text-rose-300 mb-4 text-3xl">✦</div>
                <h4 class="font-elegant text-2xl font-semibold text-stone-800">Kualitas Premium</h4>
                <p class="text-sm text-stone-500 mt-2 font-light">Kami hanya memilih bunga segar kualitas terbaik dari kebun pilihan.</p>
            </div>
            <div>
                <div class="text-rose-300 mb-4 text-3xl">✦</div>
                <h4 class="font-elegant text-2xl font-semibold text-stone-800">Pengiriman Aman</h4>
                <p class="text-sm text-stone-500 mt-2 font-light">Dikemas secara khusus agar bentuk dan kesegaran bunga tetap terjaga hingga tujuan.</p>
            </div>
            <div>
                <div class="text-rose-300 mb-4 text-3xl">✦</div>
                <h4 class="font-elegant text-2xl font-semibold text-stone-800">Rangkaian Eksklusif</h4>
                <p class="text-sm text-stone-500 mt-2 font-light">Ditangani oleh florist berpengalaman yang memperhatikan setiap detail estetika.</p>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-6 py-24">
        
        <div class="text-center mb-16">
            <h3 class="text-4xl font-elegant font-semibold text-stone-800">Koleksi Bunga Kami</h3>
            <div class="h-px w-24 bg-rose-300 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/mawar.jfif') }}" 
                         alt="Mawar Merah">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Mawar Merah Klasik</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Lambang cinta sejati yang abadi dan penuh pesona.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 150.000</div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/matahari.jfif') }}" 
                         alt="Bunga Matahari">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Bunga Matahari</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Menyebarkan aura kehangatan, harapan, dan keceriaan.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 120.000</div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/buket tulip.jfif') }}" 
                         alt="Tulip Putih">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Tulip Putih</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Simbol kesucian, penghormatan, dan permintaan maaf yang tulus.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 180.000</div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/peony.jfif') }}" 
                         alt="Peony Merah Muda">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Peony Merah Muda</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Kecantikan feminin yang melambangkan kebahagiaan dan kemakmuran.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 210.000</div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/anggrek.jfif') }}" 
                         alt="Anggrek Bulan Putih">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Anggrek Bulan Putih</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Eksotis dan mewah, pilihan sempurna untuk relasi formal atau hadiah mewah.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 250.000</div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-sm shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-rose-50 group">
                <div class="overflow-hidden rounded-sm bg-stone-50">
                    <img class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105" 
                         src="{{ asset('image/anyelir.jfif') }}" 
                         alt="Bunga Anyelir">
                </div>
                <div class="mt-6 text-center px-4 pb-4">
                    <h4 class="text-2xl font-elegant font-semibold text-stone-800">Anyelir Pastel</h4>
                    <p class="text-sm text-stone-500 mt-3 font-light">Bunga lembut nan memikat, sangat cocok untuk mengungkapkan kekaguman.</p>
                    <div class="mt-4 text-rose-700 font-semibold text-lg">Rp 140.000</div>
                </div>
            </div>

        </div>
    </main>

    <section class="bg-rose-50 py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h3 class="text-3xl font-elegant font-semibold text-rose-800 mb-6">Dedikasi untuk Keindahan</h3>
            <p class="text-stone-600 font-light leading-relaxed mb-8">
                Berawal dari kecintaan terhadap keindahan alam, <strong>flower.dnr</strong> hadir untuk menjembatani perasaan Anda. Kami percaya bahwa setiap buket bunga memiliki bahasanya sendiri, mampu menyampaikan apa yang tak terucap oleh kata-kata.
            </p>
            <button class="bg-transparent border border-rose-800 text-rose-800 hover:bg-rose-800 hover:text-white transition-colors font-semibold py-3 px-8 rounded-none text-xs tracking-widest uppercase">
                Ketahui Lebih Lanjut
            </button>
        </div>
    </section>

    <footer class="bg-white border-t border-rose-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <h2 class="text-3xl font-elegant font-semibold text-rose-700 mb-4">flower.dnr</h2>
                <p class="text-stone-500 text-sm font-light max-w-sm leading-relaxed">
                    Florist premium yang menyajikan keindahan botani untuk menyempurnakan hari-hari spesial Anda dengan rangkaian bunga segar berkualitas tinggi.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-stone-800 mb-4 text-sm uppercase tracking-wider">Tautan Cepat</h4>
                <ul class="space-y-3 text-sm text-stone-500 font-light">
                    <li><a href="#" class="hover:text-rose-600">Beranda</a></li>
                    <li><a href="#" class="hover:text-rose-600">Koleksi Bunga</a></li>
                    <li><a href="#" class="hover:text-rose-600">Cara Pemesanan</a></li>
                    <li><a href="#" class="hover:text-rose-600">Tentang Kami</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-stone-800 mb-4 text-sm uppercase tracking-wider">Kontak</h4>
                <ul class="space-y-3 text-sm text-stone-500 font-light">
                    <li>WhatsApp: +62 812 3456 7890</li>
                    <li>Email: hello@flowerdnr.com</li>
                    <li>Instagram: @flower.dnr</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 border-t border-rose-50 pt-8 text-center text-xs text-stone-400 tracking-widest uppercase">
            &copy; 2026 flower.dnr. Hak Cipta Dilindungi.
        </div>
    </footer>

</body>
</html>