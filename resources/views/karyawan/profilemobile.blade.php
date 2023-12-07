@extends('layouts.appdashboardmobile')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/profilemobile.css">

<div class="container">
    <div class="card">
        <h1>Profile Karyawan</h1>
    </div>
    <div class="card-body">
        <div class="box_foto">
            <input type="file" id="fileInput" style="display: none;">
            <button class="ganti_foto" onclick="document.getElementById('fileInput').click()">Ganti Foto</button>
        </div>
        <div class="lapisan">
            <div class="teks">
                <h1>Nama</h1>
            </div>
            <div class="box_gelap">
                <input type="text" id="namaInput" class="box_input" style="display: none;">
            </div>
            <div class="teks">
                <h1>Alamat</h1>
            </div>
            <div class="box_gelap">
                <input type="text" id="alamatInput" class="box_input" style="display: none;">
            </div>
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
                <div class="icon_belum" id="mark">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="belum_unggah" id="unggah">
                    <h1>Belum diunggah</h1>
                </div>
                <input type="file" id="fileInput" style="display: none;">
                <div onclick="document.getElementById('fileInput').click()" class="pilih" id="pilih_file" style="display: none;">
                    <h1>Pilih File</h1>
                </div>
                <div class="no" id="no_file" style="display: none;">
                    <h1>Tidak ada file yang dipilih</h1>
                </div>
                <div class="icon_berhasil" id="done" style="display: none;">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="sudah_unggah" id="sudah_unggah" style="display: none;">
                    <h1>Sudah diunggah</h1>
                </div>
                <div class="lihat" id="lihat" style="display: none;">
                    <h1>Lihat</h1>
                </div>
            </div>
            <button id="toggle-button">Ubah Profile</button>
            <button id="simpan-button" style="display: none;">Simpan Perubahan</button>
            <div class="teks" id="sandi_lama" style="display: none;">
                <h1>Kata Sandi Lama</h1>
            </div>
            <div class="box_gelap" style="display: none;" id="sandi_lamaInput">
                <input type="text" class="box_input">
            </div>
            <div class="teks" id="sandi_baru" style="display: none;">
                <h1>Kata Sandi Baru</h1>
            </div>
            <div class="box_gelap" style="display: none;" id="sandi_baruInput">
                <input type="text" class="box_input">
            </div>
            <div class="teks" id="konfirmasi" style="display: none;">
                <h1>Konfirmasi Kata Sandi Baru</h1>
            </div>
            <div class="box_gelap" style="display: none;" id="konfirmasiInput">
                <input type="text" class="box_input">
            </div>
            <button id="ubah-sandi-button">Ubah Kata Sandi</button>
            <button id="simpan-sandi-button" style="display: none;">Simpan Kata Sandi</button>
    </div>
</div>
<script>
document.getElementById('toggle-button').addEventListener('click', function() {
    var namaInput = document.getElementById('namaInput');
    var alamatInput = document.getElementById('alamatInput');
    var boxGelap = document.querySelector('box_gelap_kata');
    var pilihFile = document.getElementById('pilih_file');
    var noFile = document.getElementById('no_file');
    var mark = document.getElementById('mark');
    var unggah = document.getElementById('unggah');
    var done = document.getElementById('done');
    var sudahunggah = document.getElementById('sudah_unggah');
    var lihat = document.getElementById('lihat');
    var simpanButton = document.getElementById('simpan-button');

    if (namaInput.style.display === 'none' && alamatInput.style.display === 'none') {
        namaInput.style.display = 'block';
        alamatInput.style.display = 'block';
        simpanButton.style.display = 'block'; // Tampilkan tombol "Simpan Perubahan"
        this.style.display = 'none'; // Sembunyikan tombol "Ubah Profile"
        // Sembunyikan elemen i dan h1, dan tampilkan elemen pilih dan no
        sudahunggah.style.display = 'none';
        lihat.style.display = 'none';
        pilihFile.style.display = 'block';
        noFile.style.display = 'block';
        mark.style.display = 'none';
        done.style.display = 'none';
        unggah.style.display = 'none';
    }
});
document.getElementById('simpan-button').addEventListener('click', function() {
    var namaInput = document.getElementById('namaInput');
    var alamatInput = document.getElementById('alamatInput');
    var pilihFile = document.getElementById('pilih_file');
    var noFile = document.getElementById('no_file');
    var done = document.getElementById('done');
    var sudahunggah = document.getElementById('sudah_unggah');
    var lihat = document.getElementById('lihat');
    var ubahButton = document.getElementById('toggle-button');

    if (namaInput.style.display === 'block' && alamatInput.style.display === 'block') {
        namaInput.style.display = 'none';
        alamatInput.style.display = 'none';
        pilihFile.style.display = 'none';
        noFile.style.display = 'none';
        done.style.display = 'block';
        sudahunggah.style.display = 'block';
        lihat.style.display = 'block';
        ubahButton.style.display = 'block'; // Tampilkan tombol "Ubah Profile"
        this.style.display = 'none'; // Sembunyikan tombol "Simpan Perubahan"
    }
});

document.getElementById('ubah-sandi-button').addEventListener('click', function() {
    var sandiLamaInput = document.getElementById('sandi_lamaInput');
    var sandiBaruInput = document.getElementById('sandi_baruInput');
    var konfirmasiInput = document.getElementById('konfirmasiInput');
    var sandiLama = document.getElementById('sandi_lama');
    var sandiBaru = document.getElementById('sandi_baru');
    var konfirmasi = document.getElementById('konfirmasi');
    var simpanSandiButton = document.getElementById('simpan-sandi-button');

    if (sandiLamaInput.style.display === 'none' && sandiBaruInput.style.display === 'none' && konfirmasiInput.style.display === 'none') {
        sandiLamaInput.style.display = 'block';
        sandiBaruInput.style.display = 'block';
        konfirmasiInput.style.display = 'block';
        sandiLama.style.display = 'block';
        sandiBaru.style.display = 'block';
        konfirmasi.style.display = 'block';
        simpanSandiButton.style.display = 'block'; // Tampilkan tombol "Simpan Sandi"
        this.style.display = 'none'; // Sembunyikan tombol "Ubah Kata Sandi"
    }
});
document.getElementById('simpan-sandi-button').addEventListener('click', function() {
    var sandiLamaInput = document.getElementById('sandi_lamaInput');
    var sandiBaruInput = document.getElementById('sandi_baruInput');
    var konfirmasiInput = document.getElementById('konfirmasiInput');
    var sandiLama = document.getElementById('sandi_lama');
    var sandiBaru = document.getElementById('sandi_baru');
    var konfirmasi = document.getElementById('konfirmasi');
    var ubahSandiButton = document.getElementById('ubah-sandi-button');

    if (sandiLamaInput.style.display === 'block' && sandiBaruInput.style.display === 'block' && konfirmasiInput.style.display === 'block') {
        sandiLamaInput.style.display = 'none';
        sandiBaruInput.style.display = 'none';
        konfirmasiInput.style.display = 'none';
        sandiLama.style.display = 'none';
        sandiBaru.style.display = 'none';
        konfirmasi.style.display = 'none';
        ubahSandiButton.style.display = 'block'; // Tampilkan tombol "Ubah Kata Sandi"
        this.style.display = 'none'; // Sembunyikan tombol "Simpan Sandi"
    }
});

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
@endsection