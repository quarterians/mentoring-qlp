<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarter Life Projects - Form Review</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('/qlp/css/style2.css') }}">
    <link href="{{ asset('/qlp/css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('qlp.navbar')

      <div class="container-form">
        <h1 class="header-title text-center fw-bold">Yuk berikan reviewmu dengan mengisi data <br> di bawah ini ya</h1>
      </div>

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
      


      @include('qlp.footer')
    
</body>
</html>