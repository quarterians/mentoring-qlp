@extends('layouts.app')
@section('content')
    <section class="text-dark bg-bubble text-center mentor-section">
        <div class="container">
            <h1 class="font-weight-semi mb-3">Temukan mentormu sekarang!</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia reprehenderit laudantium <br/> aliquam iure aperiam minima at non doloribus, ipsum, dolor, nulla alias<br/> omnis? Hic quis optio minima aliquid assumenda aspernatur.</p>
            <div class="text-24 fw-semibold mt-5">
                Bingung cara booking mentor? <a href="" class="text-orange">klik disini</a>
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
                            <select class="select-filter" id="kategori" name="kategori">
                                <option value="">Semua Kategori</option>
                                @isset($pillars)
                                @foreach ($pillars->unique('id') as $pillar)
                                <option value="{{$pillar->id}}">{{$pillar->pillar}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="w-15vw ms-3">
                            <select class="select-filter" id="subkategori" name="sub_kategori">
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
                                    <a href="" class="btn btn-primary text-16 fw-normal">View Profile</a>
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
            jQuery('select[name="kategori"]').on('change', function()
            {
                var pillarID = jQuery('select[name="kategori"]').val();
                //console log = printf
                var url = '/subcategory/' + pillarID;
                if(pillarID)
                {
                    jQuery.ajax({
                        type : "GET",
                        url : url,
                        success:function(data) {
                            console.log(data);
                            $('#subkategori').empty(); // Kosongin sub category
                            $('#subkategori').append('<option value="">Semua Sub Kategori</option>'); // tambah elemen baris 54
                            $.each(data, function(key, value){
                                console.log(value['id']);
                                $('#subkategori').append("<option value=" + value["id"] + ">" + value["expertise"] + "</option>");
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
