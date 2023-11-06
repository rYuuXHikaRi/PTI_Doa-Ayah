<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'dashboard') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/dashboardmobile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>
<body style="background-image: url('{{ asset('img/bg-mobile.png') }}');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;">
    <div id="app">
        <div class="upbar">
            <div class="logo_aplikasi">
                <img src="img/logo.png" alt="logo" style="width:100%; height:100%;">
            </div>
            <div class="atur_jarak">
                <p>Perizinan</p>
            </div>
            <div class="elips">
                <img src="img/chibi.png" alt="logo_user">
            </div>
            <div class="dropdown">
                <div class="menu">
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="dropdown-content">
                    <div class="notif_text">
                        <h1>Permohonan <b>Tukar Jaga dengan Ningguang</b> telah disetujui</h1>
                    </div>
                    <div class="line">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <h1>Keluar</h1>
                    </div>
                </div>
            </div>

<script>
// Mengambil elemen tombol dropdown
var dropdownButton = document.querySelector(".menu");

// Mengambil elemen isi dropdown
var dropdownContent = document.querySelector(".dropdown-content");

// Menambahkan event listener untuk tombol dropdown
dropdownButton.addEventListener("click", function() {
    // Memeriksa apakah isi dropdown sedang ditampilkan atau tidak
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none"; // Jika ditampilkan, sembunyikan
    } else {
        dropdownContent.style.display = "block"; // Jika tidak ditampilkan, tampilkan
    }
});

// Menambahkan event listener untuk menutup dropdown saat klik di luar dropdown
document.addEventListener("click", function(event) {
    if (event.target !== dropdownButton && event.target !== dropdownContent) {
        dropdownContent.style.display = "none";
    }
});
</script>
        </div>
        <div class="content">
            <div class="container">
                
            </div> 
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="navbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                <path d="M15.3846 0V6.73077C15.3846 8.3239 16.6761 9.61538 18.2692 9.61538H25V24.0385C25 25.6315 23.7085 26.9231 22.1154 26.9231H14.7367C17.455 25.0088 19.2308 21.8465 19.2308 18.2692C19.2308 12.4277 14.4953 7.69231 8.65384 7.69231C7.65382 7.69231 6.68621 7.8311 5.76923 8.09044V2.88462C5.76923 1.29148 7.06071 0 8.65384 0H15.3846Z" fill="#E6EFFA"/>
                <path d="M17.3077 0.480774V6.73077C17.3077 7.26181 17.7383 7.69231 18.2692 7.69231H24.5192L17.3077 0.480774Z" fill="#E6EFFA"/>
                <path d="M17.3077 18.2692C17.3077 23.0486 13.4332 26.923 8.65385 26.923C3.87446 26.923 0 23.0486 0 18.2692C0 13.4898 3.87446 9.61536 8.65385 9.61536C13.4332 9.61536 17.3077 13.4898 17.3077 18.2692ZM9.61538 14.423C9.61538 13.892 9.18488 13.4615 8.65385 13.4615C8.12281 13.4615 7.69231 13.892 7.69231 14.423V17.3077H4.80769C4.27665 17.3077 3.84615 17.7382 3.84615 18.2692C3.84615 18.8002 4.27665 19.2307 4.80769 19.2307H7.69231V22.1154C7.69231 22.6463 8.12281 23.0769 8.65385 23.0769C9.18488 23.0769 9.61538 22.6463 9.61538 22.1154V19.2307H12.5C13.031 19.2307 13.4615 18.8002 13.4615 18.2692C13.4615 17.7382 13.031 17.3077 12.5 17.3077H9.61538V14.423Z" fill="#E6EFFA"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="31" viewBox="0 0 25 31" fill="none">
                <path d="M7.14286 10.7143C11.0878 10.7143 14.2857 13.9122 14.2857 17.8571C14.2857 19.5079 13.7258 21.0277 12.7855 22.2373L19.3777 28.8295C19.7264 29.1782 19.7264 29.7436 19.3777 30.0921C19.0289 30.4409 18.4637 30.4409 18.115 30.0921L11.5228 23.5C10.3133 24.4402 8.79343 25 7.14286 25C3.19796 25 0 21.802 0 17.8571C0 13.9122 3.19796 10.7143 7.14286 10.7143ZM14.2857 0V8.03571C14.2857 9.51505 15.485 10.7143 16.9643 10.7143H25V26.7857C25 27.772 24.2005 28.5714 23.2143 28.5714H21.2736C21.1448 28.2046 20.9338 27.8602 20.6404 27.5668L15.0605 21.987C15.7061 20.7514 16.0714 19.3455 16.0714 17.8571C16.0714 12.926 12.074 8.92857 7.14286 8.92857C5.87304 8.92857 4.66511 9.19366 3.57143 9.6715V1.78571C3.57143 0.7995 4.37093 0 5.35714 0H14.2857ZM7.14286 12.5C4.1842 12.5 1.78571 14.8984 1.78571 17.8571C1.78571 20.8159 4.1842 23.2143 7.14286 23.2143C10.1015 23.2143 12.5 20.8159 12.5 17.8571C12.5 14.8984 10.1015 12.5 7.14286 12.5ZM16.0714 0L25 8.92857H16.9643C16.4713 8.92857 16.0714 8.52882 16.0714 8.03571V0Z" fill="#E6EFFA"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                <path d="M0.0373937 9.02408C0.60635 7.27204 1.54359 5.66378 2.78026 4.30082C2.98937 4.07034 3.31746 3.98819 3.6112 4.09278L6.56659 5.14495C7.36782 5.43006 8.24948 5.01443 8.5358 4.21663C8.56395 4.13817 8.58565 4.05758 8.60063 3.97576L9.16367 0.898521C9.21965 0.592564 9.45565 0.350543 9.76115 0.285782C10.655 0.0963477 11.5715 0 12.5 0C13.4279 0 14.3439 0.096239 15.2372 0.285435C15.5426 0.35013 15.7786 0.591999 15.8347 0.897847L16.3993 3.97563C16.552 4.80908 17.3542 5.36152 18.1914 5.20954C18.2738 5.19458 18.3546 5.173 18.4333 5.145L21.3888 4.09278C21.6825 3.98819 22.0105 4.07034 22.2196 4.30082C23.4564 5.66378 24.3936 7.27204 24.9627 9.02408C25.0586 9.31965 24.9659 9.64369 24.7281 9.84473L22.3327 11.8698C21.6842 12.4181 21.6049 13.3862 22.1555 14.032C22.2096 14.0955 22.269 14.1545 22.3327 14.2084L24.7281 16.2335C24.9659 16.4345 25.0586 16.7586 24.9627 17.0541C24.3936 18.8063 23.4564 20.4145 22.2196 21.7774C22.0105 22.0078 21.6825 22.09 21.3888 21.9854L18.4333 20.9332C17.6323 20.6482 16.7505 21.0639 16.4642 21.8615C16.436 21.94 16.4143 22.0206 16.3993 22.1028L15.8347 25.1804C15.7786 25.4863 15.5426 25.728 15.2372 25.7928C14.3439 25.9819 13.4279 26.0782 12.5 26.0782C11.5715 26.0782 10.655 25.9819 9.76115 25.7924C9.45565 25.7276 9.21965 25.4856 9.16367 25.1797L8.60065 22.1026C8.448 21.2691 7.64569 20.7167 6.80863 20.8687C6.7263 20.8837 6.64537 20.9052 6.56672 20.9332L3.6112 21.9854C3.31746 22.09 2.98937 22.0078 2.78026 21.7774C1.54359 20.4145 0.60635 18.8063 0.0373937 17.0541C-0.0585845 16.7586 0.0339585 16.4345 0.271806 16.2335L2.66724 14.2084C3.31583 13.6601 3.39515 12.692 2.84444 12.0462C2.79028 11.9827 2.73102 11.9237 2.66726 11.8698L0.271806 9.84473C0.0339585 9.64369 -0.0585845 9.31965 0.0373937 9.02408ZM8.69539 13.039C8.69539 15.1401 10.3986 16.8433 12.4997 16.8433C14.6008 16.8433 16.3041 15.1401 16.3041 13.039C16.3041 10.9379 14.6008 9.23462 12.4997 9.23462C10.3986 9.23462 8.69539 10.9379 8.69539 13.039Z" fill="#E6EFFA"/>
            </svg>
        </div>
    </div>
</body>
</html>