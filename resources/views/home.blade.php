@extends('layouts.app')

@section('content')
<style>
    main #mentor-bantu{
        background-color: #F5F5F5;
    }
    main #capaian{
        background-color: #D7EFF8;
    }
    .card {
    background-color: #fff !important;
    }
    li.nav-item {
    list-style-type: none;
    }
    @media screen and (min-width: 768px) {
    #jumbotron-heading {
        font-size: 23px;
    }
}
</style>


<div class="jumbotron">
    <div class="container px-3 mx-auto row">        
        <div class="col-lg-6">
            <h1 class="font-weight-bold text-left mb-4" style="font-size: 2rem;" id="jumbotron-heading">Tahukah Kamu?</h1>
            <h5 class="font-weight-bold text-left mb-3" style="font-size:1.2rem;">Lebih dari 58% Gen Z Indonesia berumur 20-25 tahun mengalami Quarter Life Crisis</h5>
            <p style="font-size: .9rem;">Problem QLC umumnya berupa kebimbangan seputar arah & tujuan hidup, masa depan, kehidupan sosial, ketidaksiapan menghadapi dunia kerja, hingga ekstensi Gen Z sebagai manusia. Layanan konsultasi dengan seorang advisor akan membantu mengatasi problem tersebut</p>
            <a href="#kategori"><button class="btn btn-primary btn-lg font-weight-semi mb-4" role="button" style="font-size: 16px; line-height: 140%; letter-spacing: 0.005em;">Mulai Konsultasi Gratis Sekarang</button></a>
            {{-- <br> --}}
            {{-- <div class="star-outer">
                <div class="star-inner">
                </div>
            </div>
            <span class="font-weight-bold ml-2">(4.9/5 dari 2839 Mentee)</span> --}}
        </div>
        <div class="col-lg-6 px-5">            
            <img src="{{ asset('img/jumbotron-home.png') }}" alt="Foto profil" style="max-width:450px;width:450px"  class="img-home">
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="mx-auto text-center py-5" id="keunggulan">
        <h1 class="font-weight-semi mt-4">Keunggulan Kami</h1>
        <div class="row mt-5 mb-4">
            <div class="pillar col-md my-3 category-item" onclick="">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/Logo Media Partner.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">70+</h2>
                    <p class="font-weight-semi px-5 mb-0">Media Partners</p>
                </a>
            </div>            
            <div class="pillar col-sm my-3">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/Logo Supported.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">16000+</h2>
                    <p class="font-weight-semi px-5 mb-0"> Supported Gen Z</p>
                </a>
            </div>            
            <div class="pillar col-sm my-3">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/Logo Webinar.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">4500+</h2>
                    <p class="font-weight-semi px-5 mb-0">Webinar Participant</p>
                </a>
            </div>            
            <div class="pillar col-sm my-3">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/Logo Community.png') }}" alt="Foto profil" style="width:150px; height: 150px">
                    <h2 class="h3 my-4 font-weight-bold">6000+</h2>
                    <p class="font-weight-semi px-5 mb-0">Community Members</p>                
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="my-4" id="benefit">
        <h1 class="font-weight-bolder text-center">Benefit</h1>        
        <div class="row mx-auto px-5 my-4">
            <div class="pillar col-md-5 pr-5">
                <img src="{{ asset('img/benefit.png') }}" alt="Foto profil" style="width:400px" class="img-home">
            </div>
            <div class="pillar col-md-7 benefit-list">
                <ul style="font-size: 20px;list-style: none;line-height:1.8">
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>            
        </div>
    </div> --}}
{{-- </div>  --}}

<div class="py-5" id="mentor-bantu">
    <div class="container mx-auto row py-5">
        <h2 class="font-weight-bold mb-5 text-center">Advisor kami akan membantumu!</h2>
        <div class="col lg-6">
            <img src="{{ asset('img/home-section-3.png') }}" alt="Foto profil" style="max-width:450px;width:100%"  class="img-home">
        </div>
        <div class="col-lg-6 my-auto">
            <h5 class="font-weight-semi text-left mb-4" id="jumbotron-heading">Berkonsultasi dengan advisor kami akan membantumu dalam hal:</h5>
            <ul>
                <li><em>Personal advice terkait problem quarter life crisis</em></li>
                <li><em>Personal assistance untuk job preparation</em></li>
                <li><em>Personal guidance untuk masalah relasional</em></li>
            </ul>
            <a href="#kategori"><button class="btn btn-primary btn-lg font-weight-semi mb-4" role="button" style="font-size: 16px; line-height: 140%; letter-spacing: 0.005em;">Lihat Selengkapnya</button></a>
            {{-- <p style="font-size: 18px text-justify">Merasa  aman dan nyaman dengan topik seputar kecemasan dengan hubungan pertemanan, percintaan, orang tua, kondisi keuangan ataupun karir. </p>
            <p style="font-size: 18px text-justify">Mengarahkan dan membimbing Coachee seputar Quarter Life Crisis yang sedang dialami. </p>
            <p style="font-size: 18px text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut magni similique tempora, necessitatibus consequatur optio velit quisquam. </p>
            <p class="mb-0" style="font-size: 18px text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam error consequuntur ipsum, natus suscipit deserunt vero odit. Ullam velit ipsum.  </p> --}}
        </div>
    </div>
</div>
{{-- <div class="container py-5" id="kerja-sama">
    <h1 class="font-weight-semi mt-4">Telah Bekerja sama dengan</h1>
    <img src="{{ asset('img/home-section-4.png') }}" style="width: 100%" class="img-kerja-sama">
</div> --}}
{{-- <div class="py-5" id="mentor-kategori">
    <div class="container py-5 mx-auto row">        
        <div class="col-lg-7">
            <h1 class="font-weight-semi text-left mb-4" style="font-size: 30px">Mentor kami siap mendengarkanmu. </h1>
            <p style="font-size: 18px text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos quas ullam, in incidunt sed cupiditate minus nam cumque id et repellat harum cum consectetur. Minus eaque et ducimus laudantium!</p>
            <a href="#kategori"><button class="btn btn-primary btn-lg font-weight-semi mb-4" role="button" style="font-size: 16px; line-height: 140%; letter-spacing: 0.005em;">Lihat Kategori</button></a><br>
        </div>
        <div class="col-lg-5 px-5">            
            <img src="{{ asset('img/home-section-5.png') }}" alt="Foto profil" style="max-width:450px;width:100%"  class="img-home">
        </div>
    </div>
</div> --}}
<div class="py-5" id="capaian">
    <div class="container py-5 mx-auto row">
        <div class="pt-3 pb-4 text-center">
            <h2 class="font-weight-bold mb-0">Capaian Kami</h2>
            <p class="font-weight-normal" style="font-size: 1.2rem;">Selama 1 Tahun Berjalan</p>
        </div>     
        {{-- <div class="col-lg-3">
            <h1 class="font-weight-semi text-left mb-4" style="font-size: 30px">Mentor kami siap mendengarkanmu. </h1>
            <p style="font-size: 18px text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos quas ullam, in incidunt sed cupiditate minus nam cumque id et repellat harum cum consectetur. Minus eaque et ducimus laudantium!</p>
            <a href="#kategori"><button class="btn btn-primary btn-lg font-weight-semi mb-4" role="button" style="font-size: 16px; line-height: 140%; letter-spacing: 0.005em;">Lihat Kategori</button></a><br>
        </div> --}}
        <div class="py-3 mb-5 row">
            <div class="col-lg-3 text-center mx-auto">            
                <div class="card" style="width: 14rem; height:14rem; box-sizing:border-box;">
                    <div class="card-body bg-white d-flex flex-column justify-content-center align-items-center rounded">
                    <img src="{{asset('img/sesi-konsul.png')}}" alt="Sesi Konsultasi" class="img-fluid" width="80rem">
                      <h2 class="card-subtitle my-2 text-center font-weight-bold">650+</h2>
                      <p class="card-text">Sesi Konsultasi</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 text-center mx-auto">            
                <div class="card" style="width: 14rem; height:14rem; box-sizing:border-box;">
                    <div class="card-body bg-white d-flex flex-column justify-content-center align-items-center rounded">
                    <img src="{{asset('img/rating.png')}}" alt="Rating Konsultasi" class="img-fluid" width="80rem">
                      <h2 class="card-subtitle my-2 text-center font-weight-bold">4.7/5</h2>
                      <p class="card-text">Rating Konsultas</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 text-center mx-auto">            
                <div class="card" style="width: 14rem; height:14rem; box-sizing:border-box;">
                    <div class="card-body bg-white d-flex flex-column justify-content-center align-items-center rounded">
                    <img src="{{asset('img/partisipan.png')}}" alt="Partisipan Webinar" class="img-fluid" width="80rem">
                      <h2 class="card-subtitle my-2 text-center font-weight-bold">9000+</h2>
                      <p class="card-text">Partisipan Webinar</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 text-center mx-auto">            
                <div class="card" style="width: 14rem; height:14rem; box-sizing:border-box;">
                    <div class="card-body bg-white d-flex flex-column justify-content-center align-items-center rounded">
                    <img src="{{asset('img/Logo Community.png')}}" alt="Member Komunitas" class="img-fluid" width="80rem">
                      <h2 class="card-subtitle my-2 text-center font-weight-bold">4000+</h2>
                      <p class="card-text">Member Komunitas</p>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
<div class="py-5" id="kata-mereka">
    <h1 class="font-weight-semi mt-4 text-dark">APA KATA MEREKA</h1>
    <div class="swiper mySwiper container py-5">
        <div class="swiper-wrapper content">
            
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum!</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptas, aspernatur neque impedit autem libero saepe exercitationem molestiae quisquam quae ducimus explicabo, ad mollitia debitis, ea reiciendis aut reprehenderit!</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum!</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum!</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum!</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('img/testi-1.png') }}" alt="">
                    </div>
                    <div class="profile mt-3">
                        <div class="name">
                            <span class="font-weight-bold">Marcus Lubin</span>
                        </div>
                        <div class="age">
                        <span class="font-weight-bold">21 Tahun</span>
                        </div>
                        <div class="rating">
                            <img src="{{asset('img/rating_mereka.png')}}" alt="rating">
                        </div>
                    </div>
                    <div class="testi mt-3">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil est asperiores rerum reiciendis blanditiis optio voluptas magnam, laborum veniam, saepe explicabo modi natus deleniti sapiente. Excepturi voluptates blanditiis dolorum!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

@endsection

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const rating = 4.5;
    const starTotal = 5;

    document.addEventListener('DOMContentLoaded', getRating);

    function getRating(){
        const starPercentage = (rating / starTotal) * 100;
        const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

        document.querySelector(`.jumbotron .star-inner`).style.width = starPercentageRounded;
    }

</script>
<script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
</script>
@endsection