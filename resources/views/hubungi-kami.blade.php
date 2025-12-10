@extends('layout')

@section('title', 'Hubungi Kami')

@section('content')
<div class="container mx-auto px-6 py-10 max-w-3xl">

  <h1 class="text-3xl font-bold text-[#800000] mb-6 text-center">Kontak & Lokasi</h1>

  <div class="space-y-4 text-gray-700">
    <p><strong>Nama Sekolah:</strong> SMK Negeri&nbsp;1 Purwosari</p>
    <p><strong>Alamat:</strong> Jl. Raya Purwosari No. 1, Kec. Purwosari, Kab. Pasuruan, Jawa Timur 67162</p>
    <p><strong>Telepon:</strong> (0343) 613747</p>
    <p><strong>Email:</strong> informasi@smkn1purwosari.sch.id</p>
  </div>

  <div class="mt-8">
    <!-- Google Maps Embed pada titik SMKN 1 Purwosari -->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.360829214112!2d112.74550021433265!3d-7.756954880124709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7b9e78c2a2d0b%3A0x894ef3d3f6dab8b1!2sSMKN%201%20Purwosari!5e0!3m2!1sid!2sid!4v1702110000000!5m2!1sid!2sid"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

</div>
@endsection
