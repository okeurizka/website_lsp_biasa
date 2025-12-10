<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>LSP SMKN 1 Purwosari</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Swiper (carousel) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Colors */
        .bg-maroon {
            background-color: #8B0000;
        }

        .text-maroon {
            color: #8B0000;
        }

        .text-gold {
            color: #D4AF37;
        }

        /* Text gradient maroon -> gold */
        .text-gradient {
            background: linear-gradient(90deg, #8B0000, #D4AF37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glow */
        .glow {
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.35);
        }

        /* Hero logo animation (small) */
        @keyframes slideLeftToRight {
            0% {
                opacity: 0;
                transform: translateX(-120px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-logo-hero {
            animation: slideLeftToRight 1.2s ease-out forwards;
        }

        /* Title rise */
        @keyframes riseUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-title-hero {
            animation: riseUp 1s ease-out forwards;
            animation-delay: .3s;
            opacity: 0;
        }

        .animate-desc {
            animation: riseUp 1s ease-out forwards;
            animation-delay: .7s;
            opacity: 0;
        }

        /* Scroll reveal */
        .scroll-animate {
            opacity: 0;
            transform: translateY(18px);
            transition: all .9s ease;
        }

        .scroll-animate.show {
            opacity: 1;
            transform: translateY(0);
        }

        #slider {
            scroll-behavior: smooth;
        }

        .mitra-slide {
            filter: blur(3px);
            opacity: 0.5;
            transform: scale(0.8);
        }

        .mitra-slide.active {
            filter: blur(0);
            opacity: 1;
            transform: scale(1.15);
        }
    </style>
    <!-- Popup -->
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1800)" x-show="show" x-transition
            class="fixed top-5 right-5 px-6 py-3 rounded-lg shadow-lg text-white 
                   font-semibold bg-[#C9A14A]">
            {{ session('success') }}
        </div>
    @endif
</head>

<body class="bg-white">

    <!-- NAVBAR (keamanan: dropdown di-hover & link clickable) -->
    <nav class="bg-maroon shadow-md fixed top-0 w-full text-white z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <!-- logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo-fix.png') }}" alt="logo" class="w-11 h-11">
                <div>
                    <div class="text-gold font-bold">LSP SMKN 1 Purwosari</div>
                    <div class="text-xs text-white/80">Lembaga Sertifikasi Profesi</div>
                </div>
            </div>

            <!-- menu -->
            <div class="flex items-center gap-6 font-medium">
                <a href="/" class="hover:text-gold transition">Home</a>

                <!-- PROFIL dropdown (keamanan: group + dropdown-menu absolute) -->
                <div class="relative group">
                    <a href="/profil" class="flex items-center gap-1 hover:text-gold transition">
                        Profil <span class="text-sm">▼</span>
                    </a>

                    <div
                        class="dropdown-menu absolute right-0 mt-3 bg-white text-black rounded-md shadow-lg opacity-0 pointer-events-none transform scale-95 transition-all duration-200 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:scale-100">
                        <a href="/profil/visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
                        <a href="/profil/struktur" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                        <a href="/profil/alur-uji" class="block px-4 py-2 hover:bg-gray-100">Alur Uji Kompetensi</a>
                    </div>
                </div>

                <!-- S K E M A dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-gold transition">
                        Daftar Skema Sertifikasi <span class="text-sm">▼</span>
                    </button>
                    <div
                        class="dropdown-menu absolute right-0 mt-3 bg-white text-black rounded-md shadow-lg opacity-0 pointer-events-none transform scale-95 transition-all duration-200 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:scale-100 w-64 max-h-72 overflow-y-auto">
                        <a href="/rpl" class="block px-4 py-2 hover:bg-gray-100">Rekayasa Perangkat Lunak</a>
                        <a href="/tkj" class="block px-4 py-2 hover:bg-gray-100">Teknik Komputer & Jaringan</a>
                        <a href="/dkv" class="block px-4 py-2 hover:bg-gray-100">Desain Komunikasi Visual</a>
                        <a href="/mkt" class="block px-4 py-2 hover:bg-gray-100">Teknik Mekatronik</a>
                        <a href="/tpm" class="block px-4 py-2 hover:bg-gray-100">Teknik Pemesinan</a>
                        <a href="/tl" class="block px-4 py-2 hover:bg-gray-100">Teknik Pengelasan</a>
                        <a href="/tkr" class="block px-4 py-2 hover:bg-gray-100">Teknik Kendaraan Ringan</a>
                        <a href="/tbkr" class="block px-4 py-2 hover:bg-gray-100">Teknik Bodi Kendaraan Ringan</a>
                        <a href="/aphp" class="block px-4 py-2 hover:bg-gray-100">Agribisnis Pengolahan Hasil
                            Pertanian</a>
                        <a href="/atph" class="block px-4 py-2 hover:bg-gray-100">Agribisnis Tanaman Pangan &
                            Hortikultura</a>
                    </div>
                </div>

                <a href="/hubungi-kami" class="hover:text-gold transition">Hubungi Kami</a>

                <!-- auth -->
                <div class="flex items-center gap-3">
                    <a href="/daftar"
                        class="px-4 py-2 rounded bg-gradient-to-r from-[#D4AF37] to-[#F3E18C] text-[#8B0000] font-semibold">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- spacer for fixed navbar -->
    <div class="h-[76px]"></div>

    <!-- HERO -->
    <section class="relative w-full h-screen flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/smkpws.png') }}"
            class="absolute inset-0 w-full h-full object-cover brightness-[.6] blur-[1px]" alt="hero-bg">
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative z-10 max-w-2xl px-6">
            <img src="{{ asset('images/smk_rbg.png') }}" class="w-36 mx-auto mb-4 animate-logo-hero" alt="logo">
            <h1 class="text-5xl font-extrabold mb-3 text-gold animate-title-hero">LSP SMKN 1 PURWOSARI</h1>
            <p class="text-lg text-gray-200 animate-desc">Mewujudkan peserta didik kompeten, profesional, dan siap
                bersaing di dunia kerja sesuai standar industri.</p>
        </div>
    </section>

    <!-- STRUCTURE TITLE -->
    <section class="py-14 text-center">
        <h2 class="text-4xl font-extrabold text-gradient glow scroll-animate">Struktur Pembina & Pengurus</h2>
        <div class="w-24 h-1 rounded-full mx-auto mt-3" style="background:linear-gradient(90deg,#8B0000,#D4AF37)"></div>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto scroll-animate">Komite dan pembina bekerja sama dengan Dunia
            Usaha / Dunia Industri untuk menjaga mutu sertifikasi.</p>
    </section>

    <!-- GRID PROFIL (8 Orang) -->
    <section class="px-6 pb-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

            <!-- PROFILE 1 -->
            <div class="text-center">
                <img src="{{ asset('images/tutwuri.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">DITJEN PEMBINAAN SMK</h3>
                <p class="text-sm text-gray-600">Pembina</p>
            </div>

            <!-- PROFILE 2 -->
            <div class="text-center">
                <img src="{{ asset('images/jatim.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">DINDIK JATIM</h3>
                <p class="text-sm text-gray-600">Pembina</p>
            </div>

            <!-- PROFILE 3 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Kaprodi RPL</p>
            </div>

            <!-- PROFILE 4 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Kaprodi TKJ</p>
            </div>

            <!-- PROFILE 5 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Kaprodi TPM</p>
            </div>

            <!-- PROFILE 6 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Kaprodi DKV</p>
            </div>

            <!-- PROFILE 7 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Guru Produktif</p>
            </div>

            <!-- PROFILE 8 -->
            <div class="text-center">
                <img src="{{ asset('images/anon.png') }}"
                    class="w-36 h-36 rounded-full object-cover mx-auto shadow-md border-4 border-[#B58A3A]" />
                <h3 class="mt-4 font-semibold text-[#800000]">Nama Lengkap</h3>
                <p class="text-sm text-gray-600">Guru Produktif</p>
            </div>

        </div>
    </section>

    <!-- == MITRA ASESI SECTION == -->
    <section class="py-20 relative">

        <!-- Background cropped -->
        <div class="relative w-full h-72 overflow-hidden rounded-xl">
            <img src="{{ asset('images/smkpws.png') }}"
                class="w-full h-full object-cover brightness-[.55] object-center" />

            <div class="absolute inset-0 bg-black bg-opacity-40"></div>

            <div class="absolute inset-0 flex flex-col justify-center text-center text-white">
                <h2 class="text-4xl font-extrabold text-gradient glow scroll-animate">
                    Mitra Asesi Sertifikasi Kompetensi
                </h2>

                <div class="w-24 mx-auto h-[4px] mt-3 scroll-animate"
                    style="background:linear-gradient(90deg,#8B0000,#D4AF37)">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 relative">
        <h2 class="text-2xl font-bold text-center mb-8">Mitra Asesi SMK Negeri 1 Purwosari</h2>

        <!-- Slider Container -->
        <div class="swiper mySwiper max-w-7xl mx-auto py-10">
            <div class="swiper-wrapper items-center">
                @for ($i = 1; $i <= 8; $i++)
                    <div
                        class="swiper-slide w-48 h-48 bg-white rounded-2xl shadow-xl flex flex-col items-center justify-center">
                        <img src="{{ asset('images/logo-fix.png') }}"
                            class="w-24 h-24 object-contain opacity-90 mb-3">
                        <p class="font-semibold text-gray-700 text-center">Mitra Asesi {{ $i }}</p>
                    </div>
                @endfor
            </div>

            <div
                class="swiper-button-prev p-3 rounded-full shadow-lg hover:bg-gray-200 transition text-maroon bg-white/80 w-12 h-12">
            </div>
            <div
                class="swiper-button-next p-3 rounded-full shadow-lg hover:bg-gray-200 transition text-maroon bg-white/80 w-12 h-12">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-12" style="background-color: #800000; color: white;">
        <div class="container mx-auto px-6 md:px-12">

            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-start space-y-8 md:space-y-0 md:space-x-12">

                <!-- Kiri: Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/smk-hebat.png') }}" alt="Logo SMK Hebat" class="w-36 h-auto">
                </div>

                <!-- Tengah: Alamat / Kontak -->
                <div class="text-white text-base space-y-1 md:flex-1">
                    <p>Jl. Raya Purwosari No. 1, Kec. Purwosari, Kab. Pasuruan, Jawa Timur 67162</p>
                    <p>Telp: (0343) 613747</p>
                    <p>Email: info@smkn1purwosari.sch.id</p>
                </div>

                <!-- Kanan: Navigasi + Media Sosial -->
                <div class="flex flex-col items-start md:items-end space-y-4">
                    <!-- Navigasi menyamping -->
                    <div class="flex space-x-6 text-white text-lg font-semibold">
                        <a href="/" class="hover:underline">Beranda</a>
                        <a href="/hubungi-kami" class="hover:underline">Hubungi Kami</a>
                        <a href="/berita-terkini" class="hover:underline">Berita Terkini</a>
                    </div>

                    <!-- Media Sosial horizontal di bawah navigasi -->
                    <div class="flex space-x-4 mt-2">
                        <img src="{{ asset('images/fb.png') }}" alt="Facebook" class="w-12 h-12">
                        <img src="{{ asset('images/ig.png') }}" alt="Instagram" class="w-12 h-12">
                        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-12 h-12">
                        <img src="{{ asset('images/yt.png') }}" alt="YouTube" class="w-12 h-12">
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Scroll reveal: intersection observer
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('show');
            });
        }, {
            threshold: 0.18
        });

        document.querySelectorAll('.scroll-animate').forEach(el => io.observe(el));

        // Swiper init: compact and responsive (no huge white space)
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 18,
            loop: true,
            centeredSlides: true,
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: 18
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 18
                },
                1024: {
                    slidesPerView: 4.5,
                    spaceBetween: 22
                },
            },
            autoplay: {
                delay: 2200,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
        });
        //mitra
        const slider = document.getElementById("slider");
        const slides = document.querySelectorAll(".mitra-slide");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        let index = 0;

        function updateSlider() {
            const centerX = slider.offsetWidth / 2;
            let closest = null;
            let closestDistance = Infinity;

            slides.forEach(slide => slide.classList.remove("active"));

            slides.forEach(slide => {
                const rect = slide.getBoundingClientRect();
                const slideCenter = rect.left + rect.width / 2;
                const distance = Math.abs(centerX - slideCenter);

                if (distance < closestDistance) {
                    closestDistance = distance;
                    closest = slide;
                }
            });

            if (closest) closest.classList.add("active");
        }

        nextBtn.addEventListener("click", () => {
            slider.scrollLeft += 250;
            setTimeout(updateSlider, 300);
        });

        prevBtn.addEventListener("click", () => {
            slider.scrollLeft -= 250;
            setTimeout(updateSlider, 300);
        });

        // Auto Slide setiap 3 detik
        setInterval(() => {
            slider.scrollLeft += 250;
            setTimeout(updateSlider, 300);
        }, 3000);

        // Update saat user geser manual
        slider.addEventListener("scroll", () => {
            setTimeout(updateSlider, 200);
        });

        updateSlider(); // pertama kali load
    </script>
</body>

</html>
