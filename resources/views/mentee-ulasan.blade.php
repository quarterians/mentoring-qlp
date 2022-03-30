@extends('layouts.app')

@section('content')

<form action="">
    <div class="row">
        <div class="col">
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Umur</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Durasi Konsultasi</label>
                <div class="row g-2">
                    <div class="col-auto">
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
                    </div>
                    <div class="col-auto">
                        <p id="keteranganMenit" class="fs-6 form-text">
                            Menit
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Lorem ipsump</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Lorem ipsump</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Lorem ipsump</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="form-input mb-xl-5">
                <label for="Default select example" class="fw-bold form-label">Lorem ipsump</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Klik untuk memilih</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>
            <div class="form-input mb-xl-5">
                <label for="Default select example" class="fw-bold form-label">Lorem ipsump</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Klik untuk memilih</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>
            <div class="form-input mb-xl-5">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Lorem ipsump</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Klik untuk isi">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-submit" type="button">SUBMIT</button>
            </div>
        </div>
    </div>
</form>

@endsection