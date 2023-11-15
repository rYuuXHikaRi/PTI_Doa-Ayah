<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template Surat</title>
  <link rel="stylesheet" href="{{ public_path('css/templatecuti.css') }}">
</head>
<body>
  <div class="container">
    <div class="header">
        <div class="form_RSAS">
            <p>FORM.UM.RSAS.72</p>
        </div>
        <div class="header_icon">
            <img src="img/logo.png" alt="logo" style="width:100%; height:100%;"/>
        </div>
        <div class="teks_header">
            <h1>RUMAH SAKIT ISLAM ASY-SYIFAA</h1>
            <h2>(RSAS)</h2>
            <p>Jl. Lintas Sumatera KM 65 Yukumjaya - Lampung Tengah<br>
            Telp. (0725) 25264 Fax. (0725) 527476</p>
        </div>
        <div class="code">
            <p>No. Kode RS : 180 50 24</p>
        </div>
        <div class="menkes">
            <p>Izin Menkes RI No. YM. 02.04.3.5.3858</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="isi">
        <div class="perihal_surat">
            <div class="jenis">
                <p>Perihal</p>
            </div>
            <div class="jenis_isi">
                <p>: <u><b>Permohonan Cuti</b></u></p>
            </div>
        </div>
        <div class="kepada">
            <p> Kepada Yth,<br>
                Direktur Rumah Sakit Islam Asy-Syifaa<br>
                Di<br>
                <div class="tempat">Bandar Jaya</div>
            </p>
        </div>
        <div class="salam">
            <p><b>Assalamu’alaikum Wr. Wb.</b></p>
            <p>Saya yang bertandatangan di bawah ini:</p>
        </div>
        <div class="box_pengaju">
            <div class="pengaju">
                <p>Nama</p>
                <p>Bagian</p>
                <p>Jabatan</p>
                <p>Alamat</p>
                <p>Tanggal Mulai</p>
                <p>Tanggal Selesai</p>
            </div>
            <div class="pengaju_isi">
                <p>: {{$suratCuti->nama_pengaju}}</p>
                <p>: {{$suratCuti->bagian}}</p>
                <p>: {{$suratCuti->jabatan}}</p>
                <p>: {{$suratCuti->alamat}}</p>
                <p>: {{$suratCuti->tanggal_mulai}}</p>
                <p>: {{$suratCuti->tanggal_selesai}}</p>

            </div>
        </div>

        <div class="demikian">
            <p>Demikianlah surat permohonan ini saya buat dengan sesungguhnya, dikabulkannya permohonan ini saya
                ucapkan terimakasih.
            </p>
            <p><b>Wassalamu’alaikum Wr. Wb.</b></p>
        </div>
        <div class="tanda_tangan">
            <div class="ttd_koor">
                <p>Mengetahui<br>
                Ka./Koor.Bagian:</p>
                <br><br>
                <div class="line_ttd"></div>
            </div>
            <div class="ttd_pemohon">
                <p>Bandar Jaya,<br>
                Saya Yang Memohon</p>
                <br><br>
                <p>
                    @if ($suratCuti->tanda_tangan)
                        <img style="height: 120px ; width:120px;"
                            src="{{ public_path('img/' . $suratCuti->tanda_tangan) }}" alt="Tanda Tangan">
                    @endif
                </p>
                <p>{{$suratCuti->nama_pengaju}}</p>
                <div class="line_ttd"></div>
            </div>
        </div>

    </body>
</html>
