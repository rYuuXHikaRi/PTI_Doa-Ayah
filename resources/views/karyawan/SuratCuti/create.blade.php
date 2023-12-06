@extends('layouts.appdashboardmobile')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="../css/cutimobile.css">

    <div class="container">
        <div class="card_header">
            <h1><b>Ajukan Permohonan Cuti</b></h1>
        </div>
        <div class="card-body">
            <Form method="POST" action="{{route('suratcuti.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mulaiselesai">
                    <h1>Tanggal Mulai</h1>
                </div>
                <div class="box">
                    <input class="input_waktu" type="date" id="Tanggal_Mulai" name="tanggal_mulai" onchange="checkDate('Tanggal_Mulai')">
                </div>

                <div class="mulaiselesai">
                    <h1>Tanggal Selesai</h1>
                </div>
                <div class="box">
                    <input class="input_waktu" type="date" id="Tanggal_Selesai" name="tanggal_selesai" onchange="checkDate('Tanggal_Selesai')">
                </div>

                <div class="mulaiselesai">
                    <h1>Bagian</h1>
                </div>
                <div class="box">
                    <input class="input_ket" type="text" id="keterangan" placeholder="Bagian" name="bagian">
                </div>

                <div class="mulaiselesai">
                    <h1>Alamat</h1>
                </div>
                <div class="box">
                    <input class="input_ket" type="text" id="keterangan" placeholder="alamat" name="alamat">
                </div>

                <div class="mulaiselesai">
                    <h1>Jabatan</h1>
                </div>
                <div class="box">
                    <input class="input_ket" type="text" id="keterangan" placeholder="jabatan" name="jabatan">
                </div>

                <div class="mulaiselesai">
                    <h1>Keterangan</h1>
                </div>
                <div class="box_ket">
                    <textarea class="input_ket" type="text" id="keterangan" placeholder="Keterangan..." name="keterangan"></textarea>
                </div>

                {{-- <div class="text_lampiran">
                    <h1>Lampiran Bukti (Optional)</h1>
                </div>
                <div class="pilih">
                    <input type="file" id="fileInput" name="bukti">
                </div> --}}

                {{-- <div class="text_lampiran">
                    <h1>Pilih File</h1>
                </div>
                <div class="pilih">
                    <input type="file" id="fileInput" name="file">
                </div> --}}

                <!-- Button trigger modal -->
                <button type="submit" onclick="notifSukses()" class="btn btn-primary">
                    Buat Pengajuan
                </button>
            </Form>

            {{-- <div id="overlay" class="overlay" style="display: none;"></div>
            <div id="myPopup" class="popup" style="display: none;">
                <div class="header_popup">
                    <h1>Pratinjau Permohonan</h1>
                    <div onclick="closePopup()" class="close-button">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi possimus error totam velit ex, maxime a,
                    debitis adipisci fugiat fuga culpa neque natus.
                    Ipsum quia consectetur sunt, placeat provident laboriosam.</p>
            </div>
            <button id="prosesButton" class="popup_submit" onclick="notifSukses()" style="display: none;">
                Proses Pengajuan
            </button> --}}

            <div id="overlay_berhasil" class="overlay_berhasil" style="display: none;"></div>
            <div class="notif_berhasil" style="display: none;">
                <div class="info_pengajuan">
                    <h1><b>Pengajuan Tukar Jaga Berhasil Dibuat</b></h1>
                </div>
                <div class="icon_sukses">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120"
                        fill="none">
                        <circle cx="60" cy="60" r="60" fill="#0253BA" />
                    </svg>
                    <div class="ceklis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="67" viewBox="0 0 80 67"
                            fill="none">
                            <path
                                d="M28.4408 50.124L11.3807 33.0638C8.7772 30.4603 4.55611 30.4603 1.95262 33.0638C-0.650872 35.6673 -0.650872 39.8884 1.95262 42.4919L24.1748 64.7141C26.9468 67.4861 31.5006 67.2795 34.0103 64.2679L78.4546 10.9347C80.8117 8.1062 80.4296 3.90244 77.6011 1.54536C74.7726 -0.811733 70.5688 -0.429574 68.2117 2.39893L28.4408 50.124Z"
                                fill="#E6EFFA" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // Fungsi untuk menampilkan pop-up
    function togglePopup() {
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");
        var prosesButton = document.getElementById("prosesButton");
        var notifBerhasil = document.querySelector('.notif_berhasil');
        var overlay_berhasil = document.getElementById("overlay_berhasil");

        if (popup.style.display === "none" || overlay.style.display === "none") {
            popup.style.display = "block";
            overlay.style.display = "block";
            prosesButton.style.display = "block";
            notifBerhasil.style.display = "none";
            overlay_berhasil.style.display = "none";
        } else {
            popup.style.display = "none";
            overlay.style.display = "none";
            prosesButton.style.display = "none";
        }
    }

    function notifSukses() {
        var notifBerhasil = document.querySelector('.notif_berhasil');
        var overlay_berhasil = document.getElementById("overlay_berhasil");
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");
        var prosesButton = document.getElementById("prosesButton");

        if (notifBerhasil.style.display === "none") {
            notifBerhasil.style.display = "block";
            overlay_berhasil.style.display = "block";
            popup.style.display = "none";
            overlay.style.display = "none";
            prosesButton.style.display = "none";

            // Sembunyikan notifikasi setelah 5 detik (5000 milidetik)
            setTimeout(function() {
                notifBerhasil.style.display = "none";
                overlay_berhasil.style.display = "none";
            }, 1000);
        } else {
            notifBerhasil.style.display = "none";
            overlay_berhasil.style.display = "none";
        }
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

    document.getElementById('fileInput').addEventListener('change', function() {
        var selectedFile = this.files[0];

        if (selectedFile) {
            // Di sini Anda dapat mengirimkan gambar yang dipilih ke server atau melakukan tindakan lain sesuai kebutuhan Anda.
            // Misalnya, Anda dapat menggunakan FormData untuk mengirim gambar tersebut ke server.
            // Contoh:
            var formData = new FormData();
            formData.append('profile_image', selectedFile);

            // Selanjutnya, Anda dapat melakukan pengiriman data ini ke server menggunakan XMLHttpRequest atau fetch.

            // Setelah pengiriman gambar berhasil, Anda dapat melakukan tindakan seperti menampilkan gambar profil yang baru.
            // Anda juga dapat menyimpan gambar tersebut di server dan mengatur URL gambar profil.
        }
    });
</script>
<script>
    function checkDate(inputId) {
        var inputDate = document.getElementById(inputId).value;
        var today = new Date().toISOString().split('T')[0];
        var startDate =document.getElementById('Tanggal_Mulai').value;
        var endDate =document.getElementById('Tanggal_Selesai').value;

        if (inputDate < today) {
            alert('Tanggal yang dimasukkan sudah lewat!');
            document.getElementById(inputId).value = "";
            // Tambahkan logika atau tindakan lain yang sesuai
        }
        else if(endDate != "" && endDate < startDate ){
            alert('Tanggal selesai Salah ! Tanggal Selesai Harus setelah tanggal mulai');
            document.getElementById("Tanggal_Mulai").value = "";
            document.getElementById("Tanggal_Selesai").value = "";
        }
    }
</script>
