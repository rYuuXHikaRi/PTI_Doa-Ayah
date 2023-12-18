@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Surat Undangan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 mx-auto">

        <div class="text-center mb-4">
          <h2>Form Surat Undangan</h2>
        </div>

        <form method="POST" action="{{ route('templateSK.storeSKForm') }}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group row">
              <label for="namaSurat" class="col-md-4 col-form-label">Nama Surat</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" id="namaSurat" style="background-color:#EBF1FA"
                  name="nama_surat" placeholder="Nama surat">
              </div>
          </div>
          <div class="form-group row">
              <label for="tanggal" class="col-md-4 col-form-label">Tanggal</label>
              <div class="col-md-8">
                  <input type="date" class="form-control" id="tanggal"  name="tanggal_dibuat" style="background-color: #E0E0E0;"
                   style="background-color: #E0E0E0;"
                  >
              </div>
          </div>
          <div class="form-group row">
              <label for="tujuanSurat" class="col-md-4 col-form-label">Tujuan Surat</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" id="tujuanSurat" placeholder="Tujuan Surat" style="background-color:#EBF1FA"
                  name="tujuan_surat">
              </div>
          </div>
          <div class="form-group row">
              <label for="kodeSurat" class="col-md-4 col-form-label">Kode Surat</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" id="kodeSurat" placeholder="Kode Surat" style="background-color:#EBF1FA"
                  name="kode_surat">
              </div>
          </div>
  
          <div class="form-group row">
            <label for="perihal" class="col-md-4 col-form-label">Perihal</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="perihal" style="background-color:#EBF1FA"
                name="perihal" placeholder="Perihal">
            </div>
        </div>
        <div class="form-group row">
            <label for="hari/tanggalundangan" class="col-md-4 col-form-label">hari/Tanggal Undangan</label>
            <div class="col-md-8">
                <input type="date" class="form-control" id="hari/tanggalundangan"  name="hari_tanggal" style="background-color: #E0E0E0;"
                 style="background-color: #E0E0E0;"
                >
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu" class="col-md-4 col-form-label">Waktu</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="waktu" placeholder="Waktu" style="background-color:#EBF1FA"
                name="waktu">
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat" class="col-md-4 col-form-label">Tempat</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="tempat" placeholder="Tempat" style="background-color:#EBF1FA"
                name="tempat">
            </div>
        </div>
          

            <button type="submit" class="btn btn-primary">Buat Surat</button>
    
        </form>


      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

@endsection
