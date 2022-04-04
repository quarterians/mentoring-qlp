<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarter Life Project</title>
    <!-- <link rel="stylesheet" href="qlp/css/style.css"> -->
    <link href="{{ asset('/qlp/css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    @include('qlp.navbar')

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
                    <select class="select-filter" id="">
                        <option value="">Semua Kategori</option>
                    </select>
                </div>
                <div class="w-15vw ms-3">
                    <select class="select-filter" id="">
                        <option value="">Semua Sub Kategori</option>
                    </select>
                </div>
                <div class="w-15vw ms-3">
                    <select class="select-filter" id="">
                        <option value="">Semua Jurusan</option>
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
    
    @include('qlp.footer')
</body>
</html>