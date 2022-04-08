@extends('layouts.app')

@section('content')



    <div class="header-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <img class="rounded-circle" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <ul class="mentor-tag gap-3 hstack">
                                <li>
                                    <a class="btn btn-light btn-outline-secondary" href="#" role="button">Quarter Life Crisis Solving</a>
                                </li>
                                <li>
                                    <a class="btn btn-light btn-outline-secondary" href="#" role="button">Digital Marketing</a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    <div class="row mentor-name">
                        <div class="col-12">
                            <h1 class="text-start">Nikki Morrison</h1>
                        </div>
                        
                    </div>
                    <div class="row mentor-details">
                        <div class="col-4">
                            <p class="text-center">Session Hours</p>
                            <h2 class="text-center" >30 Menit</h2>

                        </div>
                        <div class="col-3">
                            <p class="text-center">Mantee</p>
                            <h2 class="text-center">80</h2>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Rattings</p>
                            <h2 class="text-center">4,5</h2>
                        </div>
                    </div>
                    <div class="row mt-3 ms-4">
                        <div class="col-10">
                            <div class="d-grid">
                                <a class="btn btn-submit" href="#" role="button">Konsultasi Sekarang!</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-profile">
        <div class="profile-details">
            <h1 class="text-start">Profil Mentor</h1>
            <p class="text-start">
                Studied as Public Accounting Student with extra leadership activities in Universitas Pelita Harapan, Marcel has proven his life principles named VASA (Value, Awareness, Solution, and Action) have given a change for him and surrounding. Marcel has now become XL Axiata Future Leaders Batch 10 Awardee with acceptance rate 0.46%, which is a prestigious global leadership program by PT XL Axiata Tbk.
            </p>
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Riwayat pendidikan</h1>
            <p class="text-start fw-bold mb-0">Universitas Indonesia</p>
            <p class="text-start">
                Bachelor of Accounting, Public Accounting
            </p>
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Riwayat pekerjaan</h1>
            <p class="text-start fw-bold mb-0">Accounting</p>
            <p class="text-start">
                Xeratic | Jul 2021
            </p>
            <p class="text-start fw-bold mb-0">Research/Content</p>
            <p class="text-start">
                Ayo Ke Taman | Jul 2020 - Sep 2020
            </p>
            <p class="text-start fw-bold mb-0">Accounting Assistant Lecturer</p>
            <p class="text-start">
                Universitas Pelita Harapan | Aug 2021 - Present
            </p>
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Penghargaan</h1>
            <ul>
                <li>
                    <p class="text-start mb-0">UPH Gold Academic Achievement Scholarship</p>
                </li>
                <li>
                    <p class="text-start mb-0">XL Axiata Future Leaders Batch 10 Awardee</p>
                </li>
                <li>
                    <p class="text-start mb-0">Winner of Startup Weekend Competition Batch II</p>
                </li>
            </ul>   
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Topik Konsultasi</h1>
            <p class="text-start mb-0">Topik yang bisa kamu konsultasikan:</p>
            <ul>
                <li>
                    <p class="text-start mb-0">CV Review</p>
                </li>
                <li>
                    <p class="text-start mb-0">Mock Up Interview</p>
                </li>
                <li>
                    <p class="text-start mb-0">Career Preparation</p>
                </li>
            </ul>   
        </div>
        <video class="mentor-video shadow" width="860" height="432" controls>
            <source src="movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="profile-details">
            <h1 class="text-start">Jadwal Mentor</h1>
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget shadow" data-url="https://calendly.com/wiartha2001/30min" style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Reviews</h1>
            <div class="card mb-5 d-grid shadow" style="background-color: #FFF9F0; border-radius: 20px;">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="text-center py-4">
                            <img class="rounded-circle text-center" width="120" height="120" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                        </div> 
                    </div>
                    <div class="col-10">
                        <div class="card-body align-middle">
                            <h5 class="reviewer-name fs-5 fw-bold">Andi Jaya</h5>
                            <p class="review-text fs-5">Mentornya sangat baik dan mau dengarkan, sangat baik sekali</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 d-grid shadow" style="background-color: #FFF9F0; border-radius: 20px;">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="text-center py-4">
                            <img class="rounded-circle text-center" width="120" height="120" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                        </div> 
                    </div>
                    <div class="col-10">
                        <div class="card-body align-middle">
                            <h5 class="reviewer-name fs-5 fw-bold">Andi Jaya</h5>
                            <p class="review-text fs-5">Mentornya sangat baik dan mau dengarkan, sangat baik sekali</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 d-grid shadow" style="background-color: #FFF9F0; border-radius: 20px;">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="text-center py-4">
                            <img class="rounded-circle text-center" width="120" height="120" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                        </div> 
                    </div>
                    <div class="col-10">
                        <div class="card-body align-middle">
                            <h5 class="reviewer-name fs-5 fw-bold">Andi Jaya</h5>
                            <p class="review-text fs-5">Mentornya sangat baik dan mau dengarkan, sangat baik sekali</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card d-grid shadow" style="background-color: #FFF9F0; border-radius: 20px; margin-bottom: 189px;">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="text-center py-4">
                            <img class="rounded-circle text-center" width="120" height="120" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                        </div> 
                    </div>
                    <div class="col-10">
                        <div class="card-body align-middle">
                            <h5 class="reviewer-name fs-5 fw-bold">Andi Jaya</h5>
                            <p class="review-text fs-5">Mentornya sangat baik dan mau dengarkan, sangat baik sekali</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection
