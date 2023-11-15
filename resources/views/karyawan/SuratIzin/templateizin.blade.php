<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template Surat</title>
  <link rel="stylesheet" href="css/templateizin.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <p>Karang Endah, {{$suratIzin->updated_at}}</p>
        </div>
        <div class="line"></div>
        <div class="kepada">
            <p> Kepada Yth,<br>
                Ibu Direktur RS. Islam Asy-Syifaa<br>
                Di<br>
                Tempat
            </p>
        </div>
        <p><b>Assalamu’alaikum Wr. Wb.</b></p>
        <p> Saya yang bertandatangan di bawah ini:</p>
        <ul>
            <li> Nama Pengaju <div class="awal">: {{$suratIzin->nama_pengaju}}</div></li>
            <li> Bagian <div class="kedua">: {{$suratIzin->bagian}}</div></li>
        </ul>
        <div class="keterangan">
            <p>Bersama Surat ini Saya sampaikan bahwa pada tanggal <b>{{$suratIzin->tanggal_mulai}}</b> Saya tidak dapat bekerja seperti biasa,
            dikarenakan ada {{$suratIzin->keterangan}}. Mohon kiranya Ibu Direktur dapat memberikan izin kepada Saya.
            </p>
        </div>
        <p>Demikian Surat ini Saya sampaikan, atas Izin yang diberikan saya ucapkan terima kasih.</p>
        <p><b>Wassalamu’alaikum Wr. Wb.</b></p>
        <div class="tanda_tangan">
            <div class="ttd_aju">
                <p> Mengetahui,<br>
                    Manager Keuangan Umum & Personalia
                    <br><br><br><br>
                    <b>Nurul Hakim, SE</b>
                </p>
            </div>
            <div class="ttd_nama">
                <p> <br>
                    Hormat Saya,
                    <br><br><br><br>
                    {{$suratIzin->tanda_tangan}}
                    <b>{{$suratIzin->nama_pengaju}}</b>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
