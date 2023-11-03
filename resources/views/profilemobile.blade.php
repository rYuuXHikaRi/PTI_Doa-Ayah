@extends('layouts.appdashboardmobile')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/profilemobile.css">

<div class="container">
    <div class="card">
        <h1>Profile Karyawan</h1>
    </div>
    <div class="card-body">
        <div class="lapisan">
            <div class="teks">
                <h1>Nama</h1>
            </div>
            <div class="box"></div>
            <div class="teks">
                <h1>Alamat</h1>
            </div>
            <div class="box"></div>
            <div class="teks">
                <h1>Nomor Induk Karyawan</h1>
            </div>
            <div class="box_gelap"></div>
            <div class="teks">
                <h1>Jabatan</h1>
            </div>
            <div class="box_gelap"></div>
            <div class="teks">
                <h1>Tanda Tangan</h1>
            </div>
            <div class="box_gelap">
                <div class="pilih">
                    <h1>Pilih File</h1>
                </div>
                <div class="no">
                    <h1>Tidak ada file yang dipilih</h1>
                </div>
            </div>
            <button>Simpan Perubahan</button>
            <button>Ubah Kata Sandi</button>
        </div>
    </div>
</div>
@endsection