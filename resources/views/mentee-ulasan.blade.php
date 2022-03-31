@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('formtestimonial') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-input mb-xl-5">
                        <label for="exampleFormControlInput1" class="fw-bold form-label">Nama Mentee</label>
                        <input type="text" class="form-control" id="namementee" name="namamentee"
                            placeholder="Isi nama kamu disini">
                        @foreach ($errors->get('namamentee') as $msg)
                            <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="jeniskelamin" class="fw-bold form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="jeniskelamin" name="jeniskelamin">
                            <option selected value="lakilaki" name="jeniskelamin">Laki - Laki</option>
                            <option value="perempuan" name="jeniskelamin">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="email" class="fw-bold form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Isi email kamu disini">
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="nama-mentor" class="fw-bold form-label">Nama Mentor</label>
                        <select class="form-select" aria-label="nama-mentor" name="user_id" id="user_id">
                            <option selected>Klik untuk memilih nama mentor</option>
                            @foreach ($rating as $datamentor)
                                <option value="{{ $datamentor->id }}">{{ $datamentor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="expertise" class="fw-bold form-label">Expertise Mentor</label>
                        <select class="form-select" aria-label="expertise" name="expertise">
                            <option selected>Klik untuk memilih expertise mentor</option>
                            @foreach ($category as $expertisementor)
                                <option value="{{ $expertisementor->expertise }}">{{ $expertisementor->expertise }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="skor-expertise" class="fw-bold form-label">Skor Expertise</label>
                        <p class="small">Skor Expertise mentor terkait insight yang diberikan selama sesi mentoring
                        </p>
                        <select class="form-select" aria-label="skor-expertise" name="nilai1">
                            <option selected>Klik untuk memilih skor expertise</option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-input mb-xl-5">
                        <label for="skor-terbantu" class="fw-bold form-label">Skor Terbantu</label>
                        <p class="small">Skor Seberapa terbantunya seorang mentor setelah selesai sesi mentoring
                        </p>
                        <select class="form-select" aria-label="skor-terbantu" name="nilai2">
                            <option selected>Klik untuk memilih skor terbantu</option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="datetime_consulting" class="fw-bold form-label">Tanggal dan Waktu Consulting</label>
                        <input type="datetime-local" name="datetime_consulting" class="form-control" id="birthdaytime"
                            placeholder="Klik untuk mengisi tanggal dan waktu konsultasi">
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="exampleFormControlInput1" class="fw-bold form-label">Durasi Konsultasi</label>
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="number" name="durasi" class="form-control" id="durasi"
                                    placeholder="Isi durasi konsultasi">
                            </div>
                            <div class="col-auto">
                                <p id="keteranganMenit" class="fs-6 form-text">
                                    Menit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="alasan_consulting" class="fw-bold form-label">Alasan Konsultasi</label>
                        <p class="small">Jika kami boleh mengetahui, apa yang membuat kamu tertarik untuk
                            mengadakan sesi consulting dengan Mentor pilihan kamu ini?</p>
                        <textarea type="text" class="form-control" name="alasan_consulting"
                            placeholder="Isi alasan konsultasi kamu"></textarea>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="feedback" class="fw-bold form-label">Feedback Sesi Konsultasi</label>
                        <p class="small">Apakah ada feedback yang ingin kamu berikan terkait sesi consulting yang
                            telah berjalan?</p>
                        <textarea type="text" class="form-control" name="feedback"
                            placeholder="Isi feedback dari sesi konsultasi kamu"></textarea>
                    </div>
                    <div class="form-input mb-xl-5">
                        <label for="ingin_diikuti_lagi" class="fw-bold form-label">Topik yang ingin diikuti kembali</label>
                        <input type="text" class="form-control" id="ingin_diikuti_lagi" name="ingin_diikuti_lagi"
                            placeholder="Isi topik yang kira-kira ingin kamu ikuti kembali">
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-submit btn-primary" type="submit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
