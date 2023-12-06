@extends('layouts.appdashboardmobile')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/statusmobile.css">

<div class="container">
    <div class="card-header">
        <h1><b>Daftar permohonan cuti</b></h1>
    </div>
    <div class="card-body">
        <div class="gabung_box">
            <div class="content-box">
                <div class="icon-time">
                    <i class='bx bx-time' ></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Viper</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
                <div class="list">
                    <div class="svg_container" onclick="toggleBatal(this)">
                        <i class='bx bx-dots-vertical-rounded dots'></i>
                    </div>
                    <div class="popup_batal" id="svgPopup" style="display: none;">
                        <div class="click_batal" onclick="toggleOpsi(this)">
                            <h1>Batalkan</h1>
                        </div>
                        <div class="popup-options" style="display: none;">
                        <div id="overlay_daftar" class="overlay_daftar"></div>
                            <div class="menu-popup">
                                <h1>Batalkan Permohonan Cuti?</h1>
                                <button class="button_ya">Ya</button>
                                <button class="button_tidak">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-check">
                    <i class='bx bx-check'></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Phoenix</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
                <div class="list">
                    <div class="svg_container_unduh" onclick="toggleUnduh(this)">
                        <i class='bx bx-dots-vertical-rounded dots'></i>
                    </div>
                    <div class="popup_unduh" id="svgPopupUnduh" style="display: none">
                        <div class="unduh">
                            <h1>Unduh</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-x">
                    <i class='bx bx-x'></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Astra</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-check">
                    <i class='bx bx-check'></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Iso</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
                <div class="list">
                    <div class="svg_container_unduh" onclick="toggleUnduh(this)">
                        <i class='bx bx-dots-vertical-rounded dots'></i>
                    </div>
                    <div class="popup_unduh" id="svgPopupUnduh" style="display: none">
                        <div class="unduh">
                            <h1>Unduh</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-x">
                    <i class='bx bx-x'></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Skye</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-time">
                    <i class='bx bx-time' ></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Jet</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
                <div class="list">
                    <div class="svg_container" onclick="toggleBatal(this)">
                        <i class='bx bx-dots-vertical-rounded dots'></i>
                    </div>
                    <div class="popup_batal" id="svgPopup" style="display: none;">
                        <div class="click_batal" onclick="toggleOpsi(this)">
                            <h1>Batalkan</h1>
                        </div>
                        <div class="popup-options" style="display: none;">
                        <div id="overlay_daftar" class="overlay_daftar"></div>
                            <div class="menu-popup">
                                <h1>Batalkan Permohonan Cuti?</h1>
                                <button class="button_ya">Ya</button>
                                <button class="button_tidak">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box">
                <div class="icon-x">
                    <i class='bx bx-x'></i>
                </div>
                <div class="info">
                    <h1>Tukar jaga dengan <b>Harbor</b></h1>
                    <p>Tanggal mulai:</p>
                    <p>Tanggal selesai:</p>
                </div>
            </div>
        </div>
        <div class="pencarian">
            <div class="search">
                <i class='bx bx-search'></i>
            </div>
            <input type="text" id="cariInput" class='pencarian_user' placeholder="Cari nama petugas">
        </div>
    </div>
    <script>
    function toggleBatal(clickedElement) {
        // Traverse the DOM to find the related popup within the clicked content-box
        var contentBox = clickedElement.closest('.content-box');
        var popup = contentBox.querySelector('.popup_batal');

        if (popup.style.display === "none") {
            // Show the popup
            popup.style.display = "block";
        } else {
            // Hide the popup
            popup.style.display = 'none';
        }
    }

    function toggleOpsi(clickedElement) {
        var contentBox = clickedElement.closest('.content-box');
        var popupOptions = contentBox.querySelector('.popup-options');
        var overlay = document.querySelector('.overlay_daftar');
        var popup = contentBox.querySelector('.popup_batal');

        if (popupOptions.style.display === "none") {
            popupOptions.style.display = 'block';
        } else {
            popupOptions.style.display = 'none';
        }

        var buttonsYa = popupOptions.querySelectorAll('.button_ya');
        var buttonsTidak = popupOptions.querySelectorAll('.button_tidak');

        buttonsYa.forEach(function(button) {
        button.addEventListener('click', function() {
            // Hapus content-box saat tombol "Ya" diklik
            contentBox.remove();
        });
    });

        buttonsTidak.forEach(function(button) {
        button.addEventListener('click', function() {
            // Sembunyikan popup saat tombol "Tidak" diklik
            popupOptions.style.display = 'none';
            overlay.style.display = 'none';
            popup.style.display = 'none';
        });
    });
    }

    function toggleUnduh(clickedElement) {
        var contentBox = clickedElement.closest('.content-box');
        var unduh = contentBox.querySelector('.popup_unduh');

        if (unduh.style.display == 'none') {
            unduh.style.display = 'block';
        } else {
            unduh.style.display = 'none';
        }
    }

    function cariData() {
    var input = document.getElementById('cariInput').value.toLowerCase();

    // Loop melalui setiap elemen dengan class "content-box"
    var boxes = document.querySelectorAll('.content-box');  
    for (var i = 0; i < boxes.length; i++) {
        var box = boxes[i];
        var info = box.querySelector('.info');
        var pengguna = info.querySelector('h1').textContent.toLowerCase();

        // Bandingkan nilai "pengguna" dengan input pencarian
        if (pengguna.includes(input)) {
            // Hapus kelas "hidden" jika ada
            box.classList.remove('hidden');
        } else {
            // Periksa apakah kelas 'hidden' sudah ada sebelum menambahkannya
            if (!box.classList.contains('hidden')) {
                // Sembunyikan elemen yang tidak cocok dengan kelas "hidden"
                box.classList.add('hidden');
            }
        }
    }
}
// Memanggil fungsi cariData() saat input berubah
document.getElementById('cariInput').addEventListener('input', cariData);

</script>
</div>
@endsection