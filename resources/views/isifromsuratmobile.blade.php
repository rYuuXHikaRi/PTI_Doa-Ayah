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

        <!-- Button trigger modal -->
        <button onclick="togglePopup()" class="btn btn-primary">
            Buat Pengajuan
        </button>
        <div id="overlay" class="overlay"></div>
        <div id="myPopup" class="popup">
            <div class="header_popup">
                <h1>Pratinjau Permohonan</h1>
                <div onclick="closePopup()" class="close-button">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi possimus error totam velit ex, maxime a, debitis adipisci fugiat fuga culpa neque natus. 
                Ipsum quia consectetur sunt, placeat provident laboriosam.</p>
        </div>
        <button id="prosesButton" class="popup_submit">
            Proses Pengajuan
        </button>
    </div>
    <script>
        // Fungsi untuk menampilkan pop-up
        function togglePopup() {
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");
        popup.style.display = "block";
        overlay.style.display = "block";

        // Menampilkan tombol "Proses Pengajuan"
        var prosesButton = document.getElementById("prosesButton");
        prosesButton.style.display = "block";
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");
        popup.style.display = "none";

        // Menghilangkan tombol "Proses Pengajuan"
        var prosesButton = document.getElementById("prosesButton");
        prosesButton.style.display = "none";
        overlay.style.display = "none";
        }
    </script>
</div>
@endsection