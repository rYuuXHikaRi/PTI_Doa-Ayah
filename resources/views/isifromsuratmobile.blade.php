@extends('layouts.appdashboardmobile')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/isisuratmobile.css">

<div class="container">
    <div class="card">
        <h1>Ajukan Tukar Jaga </h1>
    </div>
    <div class="card-body">
        <div class="box">
            <h1>Tukar Jaga</h1>
        </div>
        <div class="box">
            <h1>Permohonan Cuti</h1>
        </div>
        <div class="box_ket">
            <h1>Permohonan Izin</h1>
        </div>
        <h1>Lampiran Bukti (Optional)</h1>
        <div class="pilih">
            <div class="isi">
                <h1>Pilih File</h1>
            </div>
            <h1>Tidak ada file yang dipilih</h1>
        </div>
        <button>Buat Pengajuan</button>
    </div>
</div>
@endsection