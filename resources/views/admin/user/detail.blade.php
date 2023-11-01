@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css" />
    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</head>
<body>
    
    <div class="container py-5" style="background-color: blue; border-radius: 25px;">
        
        <div class="container py-6">
            <div class="card-header" style="background-color: blue; color: white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="display: flex; align-items: center;">
                        <span class="font-weight-bold" style="font-size: 30px;">Detail Pengguna</span>
                    </div>                    
                </div>
          </div>
    </div>
    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header" style="background-color: blue;color:white;text-align:center;border-radius:10px;">
                <h4>Detail Pengguna</h4>
            </div>
            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9">

                    
                        <div class="profile-picture">
                            <img src="{{ asset('assets/profil/imhim-low-resolution-logo-black-on-white-background.png') }}" alt="Logo" style="width:40%" class="rounded-circle">
                        </div>
                        <div class="profile-details">
                            <p><label>Nama           :</label> John Doe</p>
                            <p><label>Nama Bagian    :</label> Keuangan</p>
                            <p><label>Jabatan        :</label> Manajer Keuangan</p>
                            <p><label>NIK            :</label> 1234567890</p>
                            <p><label>Alamat         :</label> Jl. Contoh No. 123</p>
                            <p><label>No Handphone   :</label> 081234567890</p>
                            <p><label>Jumlah Izin    :</label> 10 hari</p>
                            <p><label>Jumlah Cuti    :</label> 5 hari</p>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
       </div></div></div></div>


</body>
</html>


@endsection