@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-3 mx-auto row">        
        <div class="col-lg-6">
            <h1 class="font-weight-bold text-left mb-4" id="jumbotron-heading">Ayo, Kenal Kami Lebih Dekat</h1>
            <p style="font-size: 18px text-justify">Quarter Life Projects adalah sebuah platform non-profit yang didirikan pada tanggal 27 Maret 2021 dengan visi menjadi ekosistem support bagi Generasi Z yang sedang menghadapi periode Quarter Life Crisis mereka. </p>
        </div>
        <div class="col-lg-6 px-5">            
            <img src="{{ asset('img/kami.png') }}" alt="Foto profil" style="max-width:450px;width:450px"  class="img-home">
        </div>
    </div>
</div>

<div class="container">
    <div class="mx-auto text-center py-5" id="visi">
        <h1 class="font-weight-semi mt-4">Visi Kami</h1>
        <div class="row mt-5 mb-4">
                <p style="font-size: 36px text-justify mb-0 text-center">Quarter Life Projects hadir sebagai ekosistem support bagi Generasi Z Indonesia (18-25 tahun) yang sedang menghadapi periode Quarter Life Crisis mereka. </p>
            
        </div>
   
</div>

<div class="container">
    <div class="mx-auto text-center py-5" id="visi">
        <h1 class="font-weight-semi mt-4">Misi Kami</h1>
        <div class="row mt-5 mb-3">

            <div class="pillar col-md my-3">
                <div class="flex align-items-justify">
                    <div class="logo">
                        <img src="{{ asset('/img/check.png') }}" style="width:30px; height: 30px">
                    </div>
                        <p style="text-left px-5 mb-0">Menghadirkan ekosistem pendukung untuk Generasi Z Indonesia (18-25 tahun) yang dalam menemukan inspirasi, motivasi, arahan dan koneksi.</p>
                    
                </div>
            </div>
            <div class="pillar col-md my-3">
                <div class="flex align-items-justify">
                    <div class="logo">
                        <img src="{{ asset('/img/check.png') }}" style="width:30px; height: 30px">
                    </div>
                        <p style="text-left px-5 mb-0">Membangun wadah yang mudah dijangkau dalam menyalurkan pengetahuan dan kesadaran Generasi Z Indonesia (18-25 tahun) akan Quarter Life Crisis.</p>
                    
                </div>
            </div>          
            <div class="pillar col-md my-3">
                <div class="flex align-items-justify">
                    <div class="logo">
                        <img src="{{ asset('/img/check.png') }}" style="width:30px; height: 30px">
                    </div>
                        <p style="text-left px-5 mb-0">Memberdayakan Generasi Z Indonesia (18-25 tahun) sebagai agen perubahan dalam mengembangkan diri sendiri dan sesama. </p>
                    
                </div>
            </div>

        </div>
    </div>            
</div>

<div class="container">
    <div class="mx-auto text-center py-5" id="visi">
        <h1 class="font-weight-semi mt-4">4 Pilar Quarter Life Crisis</h1>
        <div class="row mt-5 mb-2">
            <div class="pillar col-md my-2">
                    <img src="{{ asset('img/personal-development.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">Personal Development</h2>
                    <p class="font-size: 18px px-5 mb-0">Kebingungan mengenai jati diri, arah hidup, atau cara menggali kemampuan yang dimiliki.
                    </p>
                </a>
            </div>            
            <div class="pillar col-sm my-2">
                    <img src="{{ asset('img/career-literacy.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">Career Literacy</h2>
                    <p class="font-size: 18px px-5 mb-0">Masa depan yang penuh ketidakpastian dalam pemilihan bidang pekerjaan dan juga passion.
                    </p>
                </a>
            </div>  
        </div>
        <div class="row mt-5 mb-2">
            <div class="pillar col-md my-2">
                    <img src="{{ asset('img/financial-literacy.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">Financial Literacy</h2>
                    <p class="font-size: 18px px-5 mb-0">Kekhawatiran untuk bisa hidup mandiri setelah lulus, adanya tuntutan untuk membiayai hidupnya sendiri.
                    </p>
                </a>
            </div>            
            <div class="pillar col-sm my-2">
                    <img src="{{ asset('img/social-relations.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">Social Relations</h2>
                    <p class="font-size: 18px px-5 mb-0">Adanya permasalahan relasional, hubungan percintaan, dan kebutuhan untuk mencari circle support yang lebih baik. </p>
                </a>
            </div>  
        </div>
    </div>            
</div>

@endsection