    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Document</title>
    </head>
    <body>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">


       </nav>
        <div class="container">
    <form method="POST" action="{{ url('formtestimonial') }}" enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
        <p class="alert alert-success mt-4">{{ Session::get('success') }}</p>
        @endif

        <div class="form-group mt-4">
            <label for="nama">Nama Mentee</label>
            <div class="col-6 col-md-6">
            <input type="text" name="namamentee" class="form-control" value="">
        {{-- dibuat lebih dr 1 error bisa pake foreach --}}
            @foreach ($errors->get('namamentee') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
        </div>
    </div>

    <div class="form-group mt-4">
        <label for="nama">Jenis Kelamin</label>
        <div class="col-6 col-md-6">
            <input type="radio" name="jeniskelamin" value="lakilaki">Laki Laki
            <br>
            <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
    </div>
</div>

    <br>
    <div class="form-group ">
        <label for="nama">Email</label>
        <br>
        <input type="email" id="birthdaytime" name="email">
    </div>
        <br>
        <div class="row form-group">
            <div id="form-tanggal" class="col col-md-2"><label for="select" class=" form-control-label">Nama Mentor</label></div>
            <div class="col-6 col-md-6">

            <select name="user_id" id="user_id" class="form-control form-control-user">
                <option value="">-PILIH-</option>

                  <?php foreach ($rating as $datamentor) {
        ?>

        <option value ="<?php echo $datamentor->id ?>"><?php echo $datamentor->name ?></option>

        <?php } ?>

            </select>
            </div>
        </div>
            <br>
        <div class="row form-group">

            <div id="form-tanggal" class="col col-md-2"><label for="select" class=" form-control-label">Expertise Mentor</label></div>
            <div class="col-6 col-md-6">

            <select name="expertise" id="id_mentor" class="form-control form-control-user">
                <br>
                <option value="">-PILIH-</option>

                  <?php foreach ($category as $expertisementor) {
        ?>


        {{-- <option value ="<?php echo $expertisementor->category->expertise ?>"><?php echo $expertisementor->category->expertise ?></option>
         --}}
        <option value ="<?php echo $expertisementor->expertise ?>"><?php echo $expertisementor->expertise ?></option>


        <?php } ?>

            </select>
            </div>
        </div>
        <br>
        <div class="form-group ">
            <label for="nama">Skor Expertise mentor terkait insight yang diberikan selama sesi mentoring</label>
            <div class="col-6 col-md-2">

                        <input type="radio" name="nilai1" value="1">1
                        <input type="radio" name="nilai1" value="2">2
                        <input type="radio" name="nilai1" value="3">3
                        <input type="radio" name="nilai1" value="4">4
                        <input type="radio" name="nilai1" value="5">5


        </div>
    </div>
    <br>
        <div class="form-group ">
            <label for="nama">Skor Seberapa terbantunya seorang mentor setelah selesai sesi mentoring</label>
            <div class="col-6 col-md-2">
                <input type="radio" name="nilai2" value="1">1
                <input type="radio" name="nilai2" value="2">2
                <input type="radio" name="nilai2" value="3">3
                <input type="radio" name="nilai2" value="4">4
                <input type="radio" name="nilai2" value="5">5
        </div>
    </div>

    <br>


        <div class="form-group ">

            <label for="nama">Tanggal dan Waktu Consulting</label>
            <br>
            <input type="datetime-local" id="birthdaytime" name="datetime_consulting">
        </div>
        <br>
        <div class="form-group ">

            <label for="nama">Durasi Consulting</label>
            <br>
            <input type="number" id="birthdaytime" name="durasi">
        </div>

        {{-- <div class="form-group ">
            <label for="nama">Durasi Consulting</label>
            <input type="time" id="birthdaytime" name="time">
        </div> --}}


        <br>
        <div class="form-group ">
            <label for="nama">  Jika kami boleh mengetahui, apa yang membuat kamu tertarik untuk mengadakan sesi consulting dengan Mentor pilihan kamu ini?</label>

        <textarea rows="5" cols="100" name="alasan_consulting">

            </textarea>
        </div>
        <br>
        <div class="form-group ">
            <label for="nama">     Apakah ada feedback yang ingin kamu berikan terkait sesi consulting yang telah berjalan?</label>

            <textarea rows="5" cols="100" name="feedback">

                </textarea>
            </div>
            <div class="form-group ">
                <label for="nama">Topik yang ingin diikuti kembali</label>
                <input type="text" name="ingin_diikuti_lagi" class="form-control" value=""></textarea>
            </div>

        <button class="btn btn-primary mt-4" type="submit">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{url('expertise.js')}}"></script>
    </body>
    </html>
