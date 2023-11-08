@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                /* text-align: center; */
            }

            #form-container {
                max-width: 1024px;
                margin: auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .hidden {
                display: none;
            }
        </style>
        <script>
            function showForm(selectedValue) {
                var izinForm = document.getElementById('izin-form');
                var keluarForm = document.getElementById('keluar-form');

                if (selectedValue === 'izin') {
                    izinForm.classList.remove('hidden');
                    keluarForm.classList.add('hidden');
                } else if (selectedValue === 'keluar') {
                    keluarForm.classList.remove('hidden');
                    izinForm.classList.add('hidden');
                }
            }
        </script>
    </head>

    <body>
        <div id="form-container">
            <section class="Dropdown">
                <label for="jenis-surat">Pilih Jenis Surat:</label>
                <select id="jenis-surat" onchange="showForm(this.value)">
                    <option value="" selected disabled>Pilih Jenis Surat</option>
                    <option value="izin">Surat Izin</option>
                    <option value="keluar">Surat Keluar 2</option>
                </select>
            </section>

            <section class="ForminputSurat1">
                <form method="POST" action="" id="izin-form" class="hidden">
                    <!-- Form surat izin -->
                    <h2>Form Surat Izin</h2>
                    <label for="namaArsip" class="col-md-4 col-form-label">Nama Kegiatan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="namaArsip" placeholder="Nama Arsip"
                            style="background-color: #E0E0E0;" name="nama_kegiatan">
                    </div>

                    <label for="namaArsip" class="col-md-4 col-form-label">Tanggal pelaksanaan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="namaArsip" placeholder="Nama Arsip"
                            style="background-color: #E0E0E0;" name="tanggal_pelaksanaan">
                    </div>

                    <label for="namaArsip" class="col-md-4 col-form-label">Tempat Pelaksanaan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="namaArsip" placeholder="Nama Arsip"
                            style="background-color: #E0E0E0;" name="tempat_pelaksanaan">
                    </div>

                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" style="background-color: #00adf1;">Submit</button>
                    </div>
                </form>
            </section>

            <form id="keluar-form" class="hidden">
                <!-- Form surat keluar 2 -->
                <h2>Form Surat Keluar 2</h2>
            </form>
        </div>
    </body>

    </html>
@endsection
