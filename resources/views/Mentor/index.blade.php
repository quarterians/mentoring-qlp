@extends('layouts.app')

@section('content')
    <div class="header-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3 margin-profile-picture">
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
                    <div class="row mentor-name mt-4">
                        <div class="col-12 mr-4">
                            <h1 class="text-start p-1">{{ $user->name }}</h1>
                        </div>
                    </div>
                    <div class="row mentor-details">
                        <div class="col-5">
                            <p class="text-center">Session Hours</p>
                            <h2 class="text-center" >{{ $user->session_hour ?? "-" }}</h2>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Mantee</p>
                            <h2 class="text-center">80</h2>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Rattings</p>
                            <h2 class="text-center">{{ $user->rating ?? "-" }}</h2>
                        </div>
                    </div>
                    <div class="row mt-3 ms-4">
                        <div class="col-10">
                            <div class="d-grid">
                                <a class="btn btn-submit consult-now-btn" href="#" role="button">Konsultasi Sekarang!</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-profile">
        <div class="profile-details">
            <h1 class="text-start mt-4">Profil Mentor</h1>
            <p class="text-start">
                {{ $user->profile ?? "-" }}
            </p>
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Riwayat pendidikan</h1>
            <p class="text-start fw-bold mb-0">Universitas Indonesia</p>
            <p class="text-start">
                {{ $user->education_background ?? "-" }}
            </p>
        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Riwayat pekerjaan</h1>
            
            {{ $user->job_background ?? "-" }}

        </div>
        <div class="profile-details pt-4">
            <h1 class="text-start">Penghargaan</h1>
           
            {{ $user->award ?? "-" }}
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
        <div class="profile-details pt-4 mb-4">

            <h1 class="text-start">Reviews</h1>

            @forelse ($testimonials as $review)
                <div class="card mb-5 d-grid shadow card-mentor">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <div class="text-center py-4">
                                <img class="rounded-circle text-center" width="120" height="120" src="{{ asset('/img/mentor_profile.png') }}" alt="">
                            </div> 
                        </div>
                        <div class="col-10">
                            <div class="card-body align-middle">
                                <h5 class="reviewer-name fs-5 fw-bold">{{ $review->namamentee }}</h5>
                                <p class="review-text fs-5">{{ $review->feedback }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-warning" role="alert">
                        Belum ada review
                     </div>
            @endforelse 
           
            
            {{-- <div class="card mb-5 d-grid shadow" style="background-color: #FFF9F0; border-radius: 20px; width: 100%;">
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
            </div> --}}

            {{-- <div class="card mb-5 d-grid shadow card-mentor">
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

            <div class="card mb-5 d-grid shadow card-mentor">
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

            <div class="card d-grid shadow card-mentor">
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
            </div>     --}}

        </div>
    </div>

@endsection
