@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <link rel="stylesheet" href="css/daftarpermohonancuti.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    </head>

    <body>

        <div class="container py-5" style="background-color: blue; border-radius: 25px;">

            <div class="container py-6">
                <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold" style="font-size: 30px;">Daftar Permohonan Izin</span>
                        </div>
                    </div><br>
                    <div class="row py-6">
                        <div class="col-lg-12 mx-auto">
                            <div class="card rounded shadow border-2">
                                <div class="card-body p-5 bg-white rounded">
                                    <div class="button-container">
                                        <select id="menuDropdown" style="background-color: #EBF1FA">
                                            <option value="izin"><a href="">Izin</a></option>
                                            <option value="cuti"><a href="">Cuti</a></option>
                                            <option value="tukarJaga"><a href="">Tukar Jaga</a></option>
                                        </select>
                                    </div>
                                    <br><br>
                                    <div class="table-responsive">
                                        <table id="example" style="width: 100%"
                                            class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pengaju</th>
                                                    <th>Target Tukar Jaga</th>
                                                    <th>Keterangan</th>
                                                    <th>jadwal asli</th>
                                                    <th>jadwal dirubah</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($TukarJagas as $TukarJaga)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $TukarJaga->nama_pengaju }}</td>
                                                        <td>{{ $TukarJaga->target_tukar_jaga }}</td>
                                                        <td>{{ $TukarJaga->keterangan }}</td>
                                                        <td>{{ $TukarJaga->jadwal_asli }}</td>
                                                        <td>{{ $TukarJaga->jadwal_dirubah }}</td>
                                                        <td>{{ $TukarJaga->status }}</td>

                                                        <td>
                                                            <a href="{{ route('arsip.edit', $TukarJaga->id) }}"><button
                                                                    class="btn btn-warning">
                                                                    <i class="fas fa-edit"></i></button></a>
                                                            <a role="button" class="delete-button" data-bs-toggle="modal"
                                                                data-bs-target=".bd-example-modal-sm{{ $TukarJaga->id }}"><button
                                                                    class="btn btn-danger" data-toggle="modal"
                                                                    data-target="#hapusModal">
                                                                    <i class="fas fa-trash"></i></button></a>
                                                            @if ($TukarJaga->file)
                                                                <a href="{{ route('arsipdownload', ['id' => $TukarJaga->id, 'file' => $TukarJaga->file]) }}"
                                                                    class="btn btn-success" target="_blank"><i
                                                                        class="fas fa-download"></i></a>
                                                            @endif



                                                            <div class="modal fade bd-example-modal-sm{{ $TukarJaga->id }}"
                                                                tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><strong>Hapus
                                                                                    Data</strong></h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal">
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">Apakah anda yakin ingin
                                                                            menghapus data?</div>
                                                                        <div class="modal-footer"
                                                                            style="left:0px; height: 80px;">
                                                                            <form
                                                                                action="{{ route('arsip.destroy', $TukarJaga->id) }}"
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
                                                                                        name="" id=""
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

            <!-- Sisipkan script untuk jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <!-- Sisipkan script untuk DataTables -->
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <!-- Sisipkan script untuk file JavaScript Anda -->
            <script src="js/daftarpermohonancuti.js"></script>
    </body>

    </html>
@endsection
