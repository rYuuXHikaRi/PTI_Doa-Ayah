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
        <div class="svg_container" onclick="toggleBatal()">
            <i class='bx bx-dots-vertical-rounded dots'></i>
        </div>
        <div class="popup_batal" id="svgPopup" style="display: none;">
            <div class="click_batal" onclick="toggleOpsi()">
                <h1>Batalkan</h1>
            </div>
            <div class="popup-options" style="display: none;">
            <div id="overlay_daftar" class="overlay_daftar"></div>
                <div class="menu-popup">
                    <h1>Batalkan Permohonan tukar jaga?</h1>
                    <button class="button_ya">Ya</button>
                    <button class="button_tidak">Tidak</button>
                </div>
            </div>
        </div>
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
        // Traverse the DOM to find the related popup within the clicked content-box
        var contentBox = clickedElement.closest('.content-box');
        var popupOptions = contentBox.querySelector('.popup-options');
        
        if (popupOptions.style.display === "none") {
            // Show the popup
            popupOptions.style.display = "block";
            // popup.style.display = 'block';
        } else {
            // Hide the popup
            popupOptions.style.display = 'none';
        }
    }
</script>