@extends('layouts.app')

@section('content')

    <body>

        <div class="container py-5" style="background-color: blue; border-radius: 25px;">
            <div class="container py-6">
                <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold" style="font-size: 30px;">Kelola Surat</span>
                        </div>
                        <div>
                            <a href="{{ route('suratkeluar.create') }}"> <button class="btn btn-primary"
                                    style="font-size: 15px;border-radius:20px;">Tambah Surat Baru</button></a>

                        </div>
                    </div>
                    <br>
                    <div class="row py-6">
                        <div class="col-lg-12 mx-auto">
                            <div class="card rounded shadow border-2">
                                <div class="card-body p-5 bg-white rounded">
                                    <div class="button-container">
                                        <div class="button" id="suratMasuk">Surat Masuk</div>
                                        <div class="button" id="suratKeluar">Surat Keluar</div>
                                    </div>

                                    <script>
                                        // JavaScript untuk mengubah warna tombol saat diklik
                                        const suratMasukButton = document.getElementById('suratMasuk');
                                        const suratKeluarButton = document.getElementById('suratKeluar');

                                        suratMasukButton.addEventListener('click', () => {
                                            suratMasukButton.classList.add('active-button');
                                            suratKeluarButton.classList.remove('active-button');
                                        });

                                        suratKeluarButton.addEventListener('click', () => {
                                            suratKeluarButton.classList.add('active-button');
                                            suratMasukButton.classList.remove('active-button');
                                        });
                                    </script>

                                    <br><br>
                                    <div class="table-responsive">
                                        <table id="example" style="width: 100%"
                                            class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Surat</th>
                                                    <th>Kategori</th>
                                                    <th>Kategori</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Tanggal dibuat</th>
                                                    <th>Tujuan</th>
                                                    <th>Nama File</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($suratkeluar as $suratkeluarr)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $suratkeluarr->nama_surat }}</td>
                                                        <td>{{ $suratkeluarr->kode_surat }}</td>
                                                        <td>{{ $suratkeluarr->kategori_surat }}</td>
                                                        <td>{{ $suratkeluarr->jenis_surat }}</td>
                                                        <td>{{ $suratkeluarr->tanggal_dibuat }}</td>
                                                        <td>{{ $suratkeluarr->tujuan_surat }}</td>
                                                        <td>{{ $suratkeluarr->file }}</td>
                                                        <td>{{ $suratkeluarr->status }}</td>
                                                        <td><button class="btn btn-primary"><i
                                                                    class="fas fa-eye"></i></button>
                                                            <button class="btn btn-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                            <button class="btn btn-success"><i
                                                                    class="fas fa-download"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
@endsection
