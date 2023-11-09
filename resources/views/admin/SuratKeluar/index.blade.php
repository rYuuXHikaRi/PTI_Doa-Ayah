@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <link rel="stylesheet" href="css/kelolasuratkeluar.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <style>
            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropdown-item {
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                color: #333;
            }

            .dropdown-item:hover {
                background-color: #ddd;
            }
        </style>
    </head>

    <body>
        <div class="container py-5" style="background-color: blue; border-radius: 25px;">
            <div class="container py-6">
                <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold" style="font-size: 30px;">Kelola Surat</span>
                        </div>

                        <div class="btn-group dropdown">
                            <button type="button" class="btn btn-primary"
                                style="font-size: 15px; border-radius: 20px;">Tambah Surat Baru</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-content">
                                <a class="dropdown-item" href="{{ route('suratkeluar.create') }}">Buat Surat Masuk</a>
                                <a class="dropdown-item" href="">Buat Surat keluar</a>
                            </div>
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
                                                    <th>Kode Surat</th>
                                                    <th>Tanggal dibuat</th>
                                                    <th>Kategori</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Pembuat Surat</th>
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
                                                        <td>{{ $suratkeluarr->tanggal_dibuat }}</td>
                                                        <td>{{ $suratkeluarr->kategori_surat }}</td>
                                                        <td>{{ $suratkeluarr->jenis_surat }}</td>
                                                        <td>{{ $suratkeluarr->pembuat_surat }}</td>
                                                        <td>{{ $suratkeluarr->tujuan_surat }}</td>
                                                        <td>{{ $suratkeluarr->file }}</td>
                                                        <td>{{ $suratkeluarr->status }}</td>
                                                        <td>
                                                            <a href="{{ route('suratkeluar.edit', $suratkeluarr->id) }}"><button
                                                                    class="btn btn-warning">
                                                                    <i class="fas fa-edit"></i></button></a>

                                                            @if ($suratkeluarr->file)
                                                                <a href="{{ route('Suratkeluar.download', ['id' => $suratkeluarr->id, 'file' => $suratkeluarr->file]) }}"
                                                                    class="btn btn-success" target="_blank"><i
                                                                        class="fas fa-download"></i></a>
                                                            @endif


                                                            <a role="button" class="delete-button" data-bs-toggle="modal"
                                                                data-bs-target=".bd-example-modal-sm{{ $suratkeluarr->id }}">
                                                                <button class="btn btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </a>

                                                            <div class="modal fade bd-example-modal-sm{{ $suratkeluarr->id }}"
                                                                tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><strong>Hapus
                                                                                    Data</strong></h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>
                                                                        <div class="modal-body">Apakah anda yakin ingin
                                                                            menghapus data?
                                                                            <span
                                                                                class="badge bg-secondary">{{ $suratkeluarr->nama_surat }}</span>
                                                                        </div>
                                                                        <div class="modal-footer"
                                                                            style="left:0px; height: 80px;">
                                                                            <form
                                                                                action="{{ route('suratkeluar.destroy', $suratkeluarr->id) }}"
                                                                                method="POST">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                                <div
                                                                                    style="display: flex; justify-content: space-between;">
                                                                                    <button type="button"
                                                                                        class="btn submit-btn submit-btn-yes"
                                                                                        data-bs-dismiss="modal"
                                                                                        style="width: 49%;">Tidak</button>
                                                                                    <input type="submit"
                                                                                        class="btn submit-btn submit-btn-no"
                                                                                        value="Hapus" style="width: 49%;">
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

            <script src="{{ asset('js/kelolasuratkeluar.js') }}"></script>

    </body>

    </html>
@endsection
