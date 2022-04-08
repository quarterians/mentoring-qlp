@extends('layouts.app')
@section('content')
    <section class="text-dark bg-bubble text-center mentor-section">
        <div class="container">
            <h1 class="text-leading mb-2">Temukan mentormu sekarang!</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia reprehenderit laudantium <br/> aliquam iure aperiam minima at non doloribus, ipsum, dolor, nulla alias<br/> omnis? Hic quis optio minima aliquid assumenda aspernatur.</p>
            <div class="text-leading1 fw-semibold mt-5">
                Bingung cara booking mentor? <a href="" class="text-orange">klik disini</a>
            </div>
        </div>
    </section>
    <section class="search py-4">
        <div class="container">
            <div class="flex-search align-items-center">
                <div class="text-24 fw-semibold">Cari Mentor :</div>
                <div class="ms-4 search-mentor-width">
                    <div class="box-search flex align-items-center">
                        <div class="">
                            <i class="text-16 fa fa-search"></i>
                        </div>
                        <div class="ms-2 w-100">
                            <input type="text" class="form" placeholder="Search" id="">
                        </div>
                    </div>
                </div>
                <div class="text-24 ms-5 fw-semibold search-all-width">Cari Semua Mentor :</div>
                <div class="">
                    <a href="" class="btn shadow-sm fw-semibold">Cari Semua</a>
                </div>
            </div>
        </div>
    </section>
    <section class="filter">
        <div class="container">
            <div class="flex align-items-center">
                <div class="">
                    <div class="text-24 fw-semibold">Filter Mentor:</div>
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
        </div>
    </section>
    <section class="mentor-list py-8">
        <div class="container">
            <div class="grid-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/1.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Irvan Tantowi</div>
                            <div class="fw-normal text-20 mt-1">UI/UX Designer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/2.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Irvan Tantowi</div>
                            <div class="fw-normal text-20 mt-1">UX Researcher</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/3.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Diffa</div>
                            <div class="fw-normal text-20 mt-1">UI/UX Designer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/4.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Jess Hart</div>
                            <div class="fw-normal text-20 mt-1">UI/UX Designer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/5.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Nikki Morrison</div>
                            <div class="fw-normal text-20 mt-1">Digital Marketing</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/6.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Chelsea A</div>
                            <div class="fw-normal text-20 mt-1">Visual Artist</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/7.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Robert Joss</div>
                            <div class="fw-normal text-20 mt-1">Business Analyst</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/8.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Alyssa Ray</div>
                            <div class="fw-normal text-20 mt-1">Content Writer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/9.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Bella Morisson</div>
                            <div class="fw-normal text-20 mt-1">Photographer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/10.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Berta Wan</div>
                            <div class="fw-normal text-20 mt-1">Editor</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/11.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">Garry Morris</div>
                            <div class="fw-normal text-20 mt-1">Videographer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('/qlp/img/12.png') }}" alt="" class="">
                        <div class="mt-4">
                            <div class="fw-bold text-24">John Alexander</div>
                            <div class="fw-normal text-20 mt-1">Content Writer</div>
                            <div class="mt-3">
                                <small>Total Session</small>
                            </div>
                            <div class="fw-normal text-20 mt-1">5 Sessions</div>
                            <div class="" style="margin-top: 5em;">
                                <a href="" class="btn text-16 fw-normal">View Profile</a>
                            </div>
                        </div>
                    </div>
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
                alert(url);
                if(pillarID)
                {
                    jQuery.ajax({
                        type : "GET",
                        url : url,
                        success:function(data) {
                            console.log(data);
                            data = JSON.parse(data);
                            $('#subkategori').empty();
                            $('#subkategori').append('<option value="">Semua Sub Kategori</option>');
                            $.each(data, function(key, value){
                                console.log(value['id']);
                                $('#subkategori').append("<option value=" + value["id"] + ">" + value["expertise"] + "</option>");
                            });
                            // $.each(data, function(key, value)){
                            //     $("#subkategori").append('<option value=""></option>')
                            // }
                        }
                    });
                }
            });
        });
    </script>
@endsection
