@extends('layouts.appdashboardmobile')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/daftarpermohonanmobile.css">

<div class="container">
    <div class="card">
        <h1>Daftar permohonan tukar jaga</h1>
    </div>
    <div class="card-body">
        <div class="gabung_box">
            <div class="box">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0ZM10.8 6C10.1373 6 9.6 6.53726 9.6 7.2V13.2C9.6 13.8627 10.1373 14.4 10.8 14.4H15.6C16.2627 14.4 16.8 13.8627 16.8 13.2C16.8 12.5373 16.2627 12 15.6 12H12V7.2C12 6.53726 11.4627 6 10.8 6Z" fill="#FFB649"/>
                    </svg>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan Viper</h1>
                    <p>Shift: Pagi</p>
                    <p>26/10/2023</p>
                </div>
                <div class="list">
                    <div class="svg_container" onclick="toggleBatal()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 32" fill="none">
                            <path d="M4 8C1.79086 8 0 6.20914 0 4C0 1.79086 1.79086 0 4 0C6.20914 0 8 1.79086 8 4C8 6.20914 6.20914 8 4 8Z" fill="#0253BA"/>
                            <path d="M4 32C1.79086 32 0 30.2091 0 28C0 25.7909 1.79086 24 4 24C6.20914 24 8 25.7909 8 28C8 30.2091 6.20914 32 4 32Z" fill="#0253BA"/>
                            <path d="M0 16C0 18.2091 1.79086 20 4 20C6.20914 20 8 18.2091 8 16C8 13.7909 6.20914 12 4 12C1.79086 12 0 13.7909 0 16Z" fill="#0253BA"/>
                        </svg>
                    </div>
                    <div class="popup_batal" id="svgPopup">
                        <div class="click_batal">
                            <h1>Batalkan</h1>
                        </div>
                        <div class="popup-options" style="display: none;">
                            <button onclick="pilihOpsi('batalkan')">Batalkan</button>
                            <button onclick="pilihOpsi('tidak')">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20" fill="none">
                        <path d="M8.53225 15.0372L3.41421 9.91915C2.63316 9.1381 1.36683 9.1381 0.585785 9.91915C-0.195262 10.7002 -0.195262 11.9665 0.585785 12.7476L7.25244 19.4142C8.08404 20.2458 9.45019 20.1839 10.2031 19.2804L23.5364 3.28041C24.2435 2.43186 24.1289 1.17073 23.2803 0.463607C22.4318 -0.24352 21.1706 -0.128872 20.4635 0.71968L8.53225 15.0372Z" fill="#02BA62"/>
                    </svg>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan Phoenix</h1>
                    <p>Shift: Malam</p>
                    <p>27/10/2023</p>
                </div>
                <div class="list">
                    <div class="svg_container_unduh" onclick="toggleUnduh()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 32" fill="none">
                            <path d="M4 8C1.79086 8 0 6.20914 0 4C0 1.79086 1.79086 0 4 0C6.20914 0 8 1.79086 8 4C8 6.20914 6.20914 8 4 8Z" fill="#0253BA"/>
                            <path d="M4 32C1.79086 32 0 30.2091 0 28C0 25.7909 1.79086 24 4 24C6.20914 24 8 25.7909 8 28C8 30.2091 6.20914 32 4 32Z" fill="#0253BA"/>
                            <path d="M0 16C0 18.2091 1.79086 20 4 20C6.20914 20 8 18.2091 8 16C8 13.7909 6.20914 12 4 12C1.79086 12 0 13.7909 0 16Z" fill="#0253BA"/>
                        </svg>
                    </div>
                    <div class="popup_unduh" id="svgPopupUnduh">
                        <h1>Unduh</h1>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M0.415205 0.857755L0.620244 0.620244C1.37206 -0.131567 2.54852 -0.199913 3.37754 0.415205L3.61505 0.620244L12 9.00424L20.385 0.620244C21.2119 -0.206748 22.5528 -0.206748 23.3798 0.620244C24.2067 1.44724 24.2067 2.78806 23.3798 3.61505L14.9958 12L23.3798 20.385C24.1316 21.1368 24.1999 22.3132 23.5848 23.1422L23.3798 23.3798C22.6279 24.1316 21.4515 24.1999 20.6225 23.5848L20.385 23.3798L12 14.9958L3.61505 23.3798C2.78806 24.2067 1.44724 24.2067 0.620244 23.3798C-0.206748 22.5528 -0.206748 21.2119 0.620244 20.385L9.00424 12L0.620244 3.61505C-0.131567 2.86324 -0.199913 1.68678 0.415205 0.857755Z" fill="#F62222"/>
                    </svg>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan Viper</h1>
                    <p>Shift: Pagi</p>
                    <p>26/10/2023</p>
                </div>
            </div>
        </div>
        <div class="pencarian">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="text" id="cariInput" class='pencarian_user' placeholder="Cari berdasarkan tgl atau nama petugas">
        </div>
    </div>
    <script>
    function toggleBatal() {
    var popup = document.getElementById("svgPopup");
    popup.style.display = popup.style.display === "none" ? "block" : "none";

    var popupOptions = document.querySelector('.popup-options');
    if (popupOptions.style.display === 'block') {
        popupOptions.style.display = 'none';
    } else {
        popupOptions.style.display = 'block';
    }
    }
    // document.querySelector('.click_batal').addEventListener('click', toggleBatal);

    function toggleUnduh() {
    var popup = document.getElementById("svgPopupUnduh");
    popup.style.display = popup.style.display === "none" ? "block" : "none";
    }

    // Fungsi untuk mengambil nilai input pencarian
    function cariData() {
        var input = document.getElementById('cariInput').value;

        // Loop melalui setiap elemen dengan class "box"
        var boxes = document.querySelectorAll('.box');
        for (var i = 0; i < boxes.length; i++) {
            var box = boxes[i];
            var info = box.querySelector('.info');
            var pengguna = info.querySelector('h1').textContent.toLowerCase();
            var tanggal = info.querySelector('p:nth-child(3)').textContent;

            // Bandingkan nilai "shift" dengan input pencarian
            if (pengguna.includes(input) || tanggal.includes(input)) {
                // Hapus kelas "hidden" jika ada
                box.classList.remove('hidden');
            } else {
                // Sembunyikan elemen yang tidak cocok dengan kelas "hidden"
                box.classList.add('hidden');
            }
        }
    }

    function pilihOpsi(opsi) {
    if (opsi === 'batalkan') {
        // Tindakan yang diambil saat "Batalkan" dipilih
        alert('Anda memilih untuk membatalkan.');
    } else if (opsi === 'tidak') {
        // Tindakan yang diambil saat "Tidak" dipilih
        alert('Anda memilih untuk tidak melakukan apa-apa.');
    }

    // Sembunyikan popup pilihan setelah memilih
    var popupOptions = document.querySelector('.popup-options');
    popupOptions.style.display = 'none';
}


    // Memanggil fungsi cariData() saat input berubah
    document.getElementById('cariInput').addEventListener('input', cariData);

    // Inisialisasi pencarian
    cariData();
</script>
</div>
@endsection