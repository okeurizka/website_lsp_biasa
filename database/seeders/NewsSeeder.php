<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\news; // Pastikan model yang dipanggil benar (news)
use Illuminate\Support\Str;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data dummy berita
        $posts = [
            [
                'title' => 'SMKN 1 Purwosari Raih Juara Lomba Kompetensi Siswa Tingkat Provinsi',
                'category' => 'berita',
                'content' => 'Para siswa dari SMKN 1 Purwosari kembali membuktikan kualitasnya di kancah Jawa Timur. Dengan persiapan yang matang dan dedikasi tinggi, tim sekolah berhasil membawa pulang gelar juara umum dalam ajang LKS untuk kategori Mekatronika dan Teknik Pemesinan.',
                'image_path' => 'storage/news/dummy-lks-champion.jpg', // Path dummy
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Pendaftaran Uji Kompetensi Keahlian (UKK) Gelombang 2 Dibuka',
                'category' => 'pengumuman',
                'content' => 'Diumumkan kepada seluruh peserta didik kelas XII, pendaftaran UKK gelombang kedua telah resmi dibuka mulai hari ini. Batas waktu pendaftaran adalah hari Jumat mendatang. Pastikan semua persyaratan administrasi sudah dilengkapi.',
                'image_path' => 'storage/news/dummy-ukk-info.jpg', // Path dummy
                'published_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'Jadwal Simulasi Ujian Nasional Berbasis Komputer (UNBK)',
                'category' => 'jadwal',
                'content' => 'Simulasi UNBK akan dilaksanakan pada tanggal 15 s.d. 17 Desember 2025. Peserta wajib hadir pukul 07.00 WIB dan membawa kartu peserta. Pastikan perangkat komputer yang digunakan tidak mengalami masalah.',
                'image_path' => null, // Berita ini tanpa gambar
                'published_at' => Carbon::now()->subDay(),
            ],
        ];

        // Looping untuk memasukkan data ke database
        foreach ($posts as $post) {
            news::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']), // Generate slug otomatis
                'category' => $post['category'],
                'content' => $post['content'],
                'image_path' => $post['image_path'],
                'published_at' => $post['published_at'],
            ]);
        }
    }
}