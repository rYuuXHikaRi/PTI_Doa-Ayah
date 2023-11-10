@extends('layouts.appdashboardkabag')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="css/dashboardkabag.css">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <h3>177013</h3>
                    <p>Surat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Total Surat Permohonan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <h3>177013</h3>
                    <p>Surat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Jumlah Permintaan Izin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <h3>177013</h3>
                    <p>Surat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Jumlah Permintaan Cuti <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <h3>177013</h3>
                    <p>Surat Keluar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Jumlah Permintaan Tukar jaga <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title" style="text-align: center;color:#0051B9;">Jumlah Permohonan Surat</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header" style="background-color: #0051B9;color:white">
                        <h4 class="card-title">Permohonan yang belum ditandatangani</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Permohonan Izin dari Nur Keqing <ID_PERMOHONAN>> </li>
                            <li>Permohonan Izin dari Nur Keqing <ID_PERMOHONAN>></li>
                            <li>Permohonan Izin dari Nur Keqing <ID_PERMOHONAN>></li>
                            <li>Permohonan Izin dari Nur Keqing <ID_PERMOHONAN></li>
                            <li>Permohonan Izin dari Nur Keqing <ID_PERMOHONAN></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sisipkan script untuk Chart.js (jika belum ada) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        // Data yang akan ditampilkan pada grafik
        var data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [
                {
                    label: 'Total Surat',
                    backgroundColor: 'rgba(0, 81, 185, 0.5)',
                    borderWidth: 1,
                    data: [50, 75, 100, 75, 50, 25, 50, 5, 25, 50, 50, 5]
                }
            ]
        };

        // Konfigurasi grafik
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    barPercentage: 0.8, // Menambah lebar batang
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 25
                    }
                }]
            }
        };

        // Membuat grafik
        var ctx = document.getElementById('barChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
</div>
@endsection
