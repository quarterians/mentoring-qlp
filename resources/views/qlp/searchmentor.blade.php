@extends('layouts.app')
@section('content')
    <section class="text-dark bg-bubble text-center mentor-section">
        <div class="container">
            <h1 class="font-weight-semi mb-3">Konsultasikan problem kamu <br> dengan advisor kami!</h1>
            <p>Advisor kami merupakan orang-orang yang terpanggil untuk membantu menyelesaikan permasalahan kamu dan memberikan guidance berdasarkan pengalaman atau expertise yang mereka miliki. Kamu dapat memilih sendiri advisor yang kamu inginkan dan memulai sesi konsultasi secara gratis!</p>
            <div class="text-24 fw-semibold mt-5">
                Bingung cara booking mentor? <a href="https://docs.google.com/presentation/d/1rQ2hxmdz744dqFMUXvTGHLQd8dN2r46AZ8zBmCDo0kc/edit?usp=sharing" class="text-orange">klik disini</a>
            </div>
        </div>
    </section>
    <section id="filter_searchmentor">
        <div class="container">
            <form action="" id="form-filtering" class="p-0" style="background-color:#F5F5F5">
                <section class="search filter">
                    <div class="flex-search align-items-center mb-3">
                        <div class="w-10vw text-18 font-weight-semi">Cari Mentor :</div>
                        <div class="ms-3 search-mentor-width">
                            <div class="box-search flex align-items-center">
                                <div class="">
                                    <i class="text-16 fa fa-search"></i>
                                </div>
                                <form action="/searchmentor" method="GET">
                                    <div class="ms-2 w-100">
                                        <input type="text" class="form" placeholder="Search" name=search>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-18 ms-5 font-weight-semi search-all-width">Cari Semua Mentor :</div>
                        <div class="">
                            <button class="btn btn-primary shadow-sm fw-semibold" onchange="sorting()">Cari Semua</button>
                        </div>
                    </div>
                    <div class="flex align-items-center">
                        <div class="">
                            <div class="w-10vw text-18 font-weight-semi">Filter Mentor :</div>
                        </div>
                        <div class="w-15vw ms-3">
                            <select class="select-filter" id="pillars" name="pillars">
                                <option value="">Semua Kategori</option>
                                @isset($pillars)
                                @foreach ($pillars->unique('id') as $pillar)
                                <option value="{{$pillar->id}}">{{$pillar->pillar}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="w-15vw ms-3">
                            <select class="select-filter" id="expertise" name="expertise">
                                <option value="">Semua Sub Kategori</option>
                                @isset($subcategories)
                                @foreach ($subcategories->unique('id') as $expertise)
                                <option value="{{$expertise->id}}">{{$expertise->expertise}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="w-15vw ms-3">
                            <select class="select-filter" id="jurusan" name="jurusan">
                                <option value="">Semua Jurusan</option>
                                @isset($jurusan)
                                @foreach ($jurusan->unique('id') as $jurusan)
                                <option value="{{$jurusan->id}}">{{$jurusan->jurusan}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                </section>
        
                <script>
                    function sorting()
                    {
                        document.querySelector('#form-filtering').submit();
                    }
                </script>
            </form>
        </div>
    </section>
    <section id="list_mentor">
        <div class="container">
            <div class="mentor-list py-8">
                <div class="grid-4">
                    @foreach($user as $key => $user)
                    <div class="card text-center py-3" style="width: auto;">
                        <div class="card-body" style="align-items: center ;">
                        <div class="image">
                            @if($user->profile_picture == NULL)
                            <img src="{{ asset('/qlp/img/qlp_logo.png') }}" alt="">
                            @else
                            <img src="{{ asset('img/uploads/'.$user->profile_picture) }}" alt="">
                            @endif
                        </div>
                            <div class="mt-4">
                                <div class="h-10vw fw-bold text-18">{{ $user-> name}}</div>
                                @foreach($user->expertise as $expertise)
                                <div class="fw-normal text-18 mt-1">{{ $expertise-> expertise }} </div>
                                @endforeach
                                <div class="mt-3">
                                    <small>Total Session</small>
                                </div>
                                <div class="fw-normal text-20 mt-1">{{ $user->session_hour}} Hour</div>
                                <div class="" style="margin-top: 5em;">
                                    <a href="{{ url('/dev/mentor/'.$user->id) }}" class="btn btn-primary text-16 fw-normal">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        jQuery(document).ready(function()
        {
            jQuery('select[name="pillars"]').on('change', function()
            {
                var pillarID = jQuery('select[name="pillars"]').val();
                //console log = printf
                var url = '/subcategory/' + pillarID;
                if(pillarID)
                {
                    jQuery.ajax({
                        type : "GET",
                        url : url,
                        success:function(data) {
                            console.log(data);
                            $('#expertise').empty(); // Kosongin sub category
                            $('#expertise').append('<option value="">Semua Sub Kategori</option>'); // tambah elemen baris 54
                            $.each(data, function(key, value){
                                console.log(value['id']);
                                $('#expertise').append("<option value=" + value["id"] + ">" + value["expertise"] + "</option>");
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
