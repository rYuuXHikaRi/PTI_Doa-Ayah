@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="css/templatesurat.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color: blue; border-radius: 25px;">
        
        <div class="container py-6">
            <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="font-weight-bold" style="font-size: 30px;">Template Surat</span>
                    </div>
                    <div>
                        <button class="btn btn-success" style="font-size: 24px;border-radius:100px;background-color:#0D72F2">+</button>
                        <button class="btn btn-primary" style="font-size: 20px;border-radius:20px;">Tambah Template Surat</button>
                    </div>
                </div><br>
            <div class="row py-6">
                <div class="col-lg-12 mx-auto"> 
                    <div class="card rounded shadow border-2"> 
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                                <table id="example" style="width: 100%" class="table table-striped table-bordered">

                        <thead>
                          <tr>
                            <th>Nama Template</th>
                            <th>Kode Template</th>
                            <th>Keterangan</th>
                            <th>Tanggal Buat</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>2011/04/25</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>2011/07/25</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>2009/01/12</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>2012/03/29</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>2008/11/28</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>2012/12/02</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>2012/08/06</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>2010/10/14</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>2009/09/15</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>2008/12/13</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                          <tr>
                            <td>Sonyi</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>2000/12/13</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

<!-- Sisipkan script untuk jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Sisipkan script untuk DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Sisipkan script untuk file JavaScript Anda -->
<script src="js/templatesurat.js"></script>
</body>
</html>


@endsection
