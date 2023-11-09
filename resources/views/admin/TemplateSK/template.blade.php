{{-- @extends('layouts.app')

@section('content') --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Undangan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <section class="border">
            <div class="container py-5" style="background-color:; border-radius: 25px;">
                <div class="container mt-5 Border">
                    <div class="row">
                        <div class="col-md-8 mx-auto">

                            <div class="text-center mb-4">
                                <h2>Undangan</h2>
                            </div>

                            <p class="font-weight-bold">Perihal: {{ $templateSK->perihal }}</p>

                            <p>Kepada Yth,<br>
                                Daftar Peserta Terlampir<br>
                                di<br>
                                Tempat
                            </p>

                            <p>Assalamu’alaikum Wr. Wb.</p>

                            <p>Melalui Surat ini Kami bermaksud mengundang Bapak/Ibu/Sdr untuk mengikuti Simulasi Pemadam
                                Kebakaran pada :</p>

                            <ul>
                                <li>Hari/Tanggal : {{ $templateSK->hari_tanggal }}</li>
                                <li>Waktu : Pukul {{ $templateSK->waktu }} s/d selesai</li>
                                <li>Tempat : {{ $templateSK->tempat }}</li>
                            </ul>

                            <p>Mengingat pentingnya acara tersebut, maka Kami mengharapkan Bapak/Ibu/Sdr. dapat meluangkan
                                waktu
                                untuk datang tepat pada waktunya.</p>

                            <p>Demikian Memo ini Kami sampaikan, atas kehadirannya Kami ucapkan terima kasih.</p>

                            <p>Wassalamu’alaikum Wr. Wb.</p>

                            <p class="text-right">Bandar Jaya, {{ $templateSK->tanggal_surat }}<br><br><br><br><br>
                                Direktur RS. Islam Asy-Syifaa</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <form method="post" action="{{ route('templateSK.savePDF', ['id' => $templateSK->id]) }}" target="_blank">
            @csrf
            <button type="submit">Print</button>
        </form> --}}


        {{--
        <section class="sekstion form deskripsi">
            <div class="container py-5" style="background-color:; border-radius: 25px;">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('suratkeluar.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="namaSurat" class="col-md-4 col-form-label">Nama Surat</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="namaSurat"
                                        style="background-color:#EBF1FA" name="nama_surat" placeholder="Nama surat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategoriSurat" class="col-md-4 col-form-label">Kategori</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="kategori"
                                        style="background-color:#EBF1FA" name="kategori_surat" placeholder="Kategori Surat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-md-4 col-form-label">Tanggal</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal_dibuat"
                                        style="background-color: #E0E0E0;" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tujuanSurat" class="col-md-4 col-form-label">Tujuan Surat</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="tujuanSurat" placeholder="Tujuan Surat"
                                        style="background-color:#EBF1FA" name="tujuan_surat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeSurat" class="col-md-4 col-form-label">Kode Surat</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="kodeSurat" placeholder="Kode Surat"
                                        style="background-color:#EBF1FA" name="kode_surat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomorSurat" class="col-md-4 col-form-label">Jenis Surat</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="lokasiArsip" name="jenis_surat"
                                        style="background-color: #E0E0E0;">
                                        <option value="Karyawan">Karyawan</option>
                                        <option value="LuarInstansi">Luar Instansi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" hidden>
                                <label for="uploadSurat" class="col-md-4 col-form-label">Upload Surat</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" id="uploadSurat" name="file"
                                        style="background-color:#EBF1FA">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color: #338BFD;color:white">Submit</button>
                                </div>
                            </div>
                        </form>
        </section> --}}

        </div>
        </div>
        </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
@endsection --}}
