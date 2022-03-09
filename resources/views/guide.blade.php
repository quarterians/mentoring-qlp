@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container p-5 mx-auto">   
        <h1 class="font-weight-bolder text-center">Panduan Pendaftaran Program Mentoring</h1>     
    </div>
</div>

<div class="guide px-5 text-center">
    <h1><b>Apa itu Mentoring?</b></h1>
    <div class="guide-step my-5">        
        <p class="h5" style="line-height: 1.5">Mentoring di Quarter Life Projects adalah sebuah sesi konsultasi 1-on-1 antara mentor dan mentee dengan prinsip serupa "pasien bertemu dokter". Disini kamu bisa mengkonsultasikan hal apapun yang berkaitan dengan kategori kategori mentoring yang sudah tertera. Durasi sesi konsultasi berlangsung antara 30 menit (atau bisa lebih jika mentor bersedia). Sesi konsultasi ini tidak dipungut biaya sepeserpun.</p>        
    </div>
    <h1><b>Panduan Pendaftaran Program Mentoring</b></h1>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Sebelum mendaftar sesi konsultasi, bacalah deskripsi tiap kategori pada halaman Home untuk memahami pelayanan mentoring yang sedang kamu butuhkan.</p>
        <img src="{{ asset('img/guide/step-1.png') }}" alt="Guide Step 1" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Setelah memahami deskripsi tiap kategori, kunjungi halaman Mentors dengan memilih tab "Mentors" atau menekan salah satu kategori yang disediakan. Kemudian, pilih salah satu mentor yang melayani kategori dan sub-kategori mentoring yang cocok dengan permasalahanmu.</p>
        <img src="{{ asset('img/guide/step-2.png') }}" alt="Guide Step 2" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Pada halaman profil mentor, baca profil mentor untuk mengetahui informasi mentor yang kamu pilih. Klik tombol "Konsultasi sekarang!" untuk memilih jadwal konsultasi.</p>
        <img src="{{ asset('img/guide/step-3.png') }}" alt="Guide Step 3" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Pada bagian jadwal mentoring, pilih tanggal yang paling cocok dengan waktu kamu dengan menekan tanggal dan waktu yang disediakan oleh mentor.</p>
        <img src="{{ asset('img/guide/step-4.png') }}" alt="Guide Step 4" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Kemudian, isi form sebagai informasi tambahan untuk mentor sebelum melakukan mentoring. Pastikan e-mail kamu aktif agar Calendly bisa mengirimkan pesan undangan.</p>
        <img src="{{ asset('img/guide/step-5.png') }}" alt="Guide Step 5" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Jika pengisian data berhasil, maka akan muncul halaman yang menyatakan bahwa kamu berhasil mendaftar program mentoring.</p>
        <img src="{{ asset('img/guide/step-6.png') }}" alt="Guide Step 6" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step my-5">
        <p class="h5 px-3" style="line-height: 1.5">Cek e-mail kamu untuk mendapatkan link Google Meet yang digunakan untuk melakukan mentoring dengan mentor.</p>
        <img src="{{ asset('img/guide/step-7.png') }}" alt="Guide Step 7" class="img-fluid border" style="width:1000px">
    </div>
    <a href="{{ asset('docs/Panduan Penggunaan Website Mentoring QLP - Mentee.pdf') }}"><button class="btn btn-primary btn-lg" role="button">Download Panduan</button></a>
</div>

@endsection