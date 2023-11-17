<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Surat</title>
    <link rel="stylesheet" href="{{ public_path('css/templatetukarjaga.css') }}">
</head>

<body>
    <div class="container">
        <div class="blangko">
            <p>BLANGKO TUKAR DINAS/TUKAR JAGA BAGIAN/RUANG ...............</p>
            <div class="blan_tgl">
                <p>Tgl. PENYERAHAN BLANKO</p>
            </div>
        </div>
        <div class="isi">
            <table>
                <tr>
                    <th>Nama Karyawan</th>
                    {{-- <th>Tgl</th> --}}
                    <th>Jadwal Asli</th>
                    {{-- <th>Tgl</th> --}}
                    <th>Jadwal yang dirubah/diganti</th>
                </tr>
                <tr>
                    <td>{{ $suratTukarJaga->nama_pengaju }}</td>
                    {{-- <td>......</td> --}}
                    {{-- <td>......</td> --}}
                    <td>{{ $suratTukarJaga->jadwal_asli }}</td>
                    <td>{{ $suratTukarJaga->jadwal_dirubah }}</td>

                </tr>
                {{-- <tr>
                    <td>......</td>
                    <td>P / S / M / PS / SM / PM / L</td>
                    <td>......</td>
                    <td>P / S / M / PS / SM / PM / L</td>
                </tr>
                <tr>
                    <td>......</td>
                    <td>P / S / M / PS / SM / PM / L</td>
                    <td>......</td>
                    <td>P / S / M / PS / SM / PM / L</td>
                </tr> --}}

                <tr>
                    <th>Nama Karyawan</th>
                    {{-- <th>Tgl</th> --}}
                    <th>Jadwal Asli</th>
                    {{-- <th>Tgl</th> --}}
                    <th>Jadwal yang dirubah/diganti</th>
                </tr>
                <tr>
                    <td>{{ $suratTukarJaga->target_tukar_jaga}}</td>
                    {{-- <td>......</td> --}}
                    <td>{{ $suratTukarJaga->jadwal_dirubah }}</td>
                    {{-- <td>......</td> --}}
                    <td>{{ $suratTukarJaga->jadwal_asli }}</td>

                </tr>
            </table>
            <div class="box_kanan">
                <div class="tgl_blangko">
                    <p>tanggal</p>
                </div>
                <div class="tanda_tangan">
                    <div class="ttd_A">
                        <p>Yang Memohon,{{ $suratTukarJaga->nama_pengaju }}
                        </p>
                        <br><br>

                        <p>
                            @if ($suratTukarJaga->tanda_tangan)
                                <img style="height: 120px ; width:120px;"
                                    src="{{ public_path('img/' . $suratTukarJaga->tanda_tangan) }}" alt="Tanda Tangan">
                            @endif
                        </p>
                        <b>{{ $suratTukarJaga->nama_pengaju }}</b>

                        <div class="line"></div>
                    </div>
                    <div class="ttd_B">
                        <p>Termohon, (B)</p>
                        <br><br>
                        <div class="line"></div>
                    </div>
                </div>

                <div class="tanda_tangan2">
                    <div class="ttd_A">
                        <p>Ka. Ruangan</p>
                        <br><br>
                        <div class="line"></div>
                    </div>
                    <div class="ttd_B">
                        <p>Ka. Bagian</p>
                        <br><br>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <img src="img/logo.png" alt="logo" style="width:100%; height:100%;">
            </div>
        </div>
    </div>
</body>

</html>
