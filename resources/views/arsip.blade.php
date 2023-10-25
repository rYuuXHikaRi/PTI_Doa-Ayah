@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="css/arsip.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color: blue; border-radius: 25px;">
        
        <div class="container py-6">
            <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold" style="font-size: 30px;">Arsip</span>
                </div>
                <div>
                    <button class="btn btn-success" style="font-size: 24px; border-radius: 100px; background-color: #0D72F2">+</button>
                    <button class="btn btn-primary" id="openPopupButton" style="font-size: 20px; border-radius: 20px;">Tambah Arsip Baru</button>
                </div>
            </div>
            
            <!-- Pop-up container -->
            <div id="popupContainer" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px;">
                    <!-- Your pop-up content goes here -->
                    <h2>Tambah Arsip Baru</h2>
                    <div class="card" style="padding: 20px;">
                        <form>
                            <div class="form-group">
                                <label for="namaArsip">Nama Arsip</label>
                                <input type="text" class="form-control" id="namaArsip" placeholder="Masukkan nama arsip">
                            </div>
                            <div class="form-group">
                                <label for="kategoriArsip">Kategori Arsip</label>
                                <select class="form-control" id="kategoriArsip">
                                    <option value="kategori1">Kategori 1</option>
                                    <option value="kategori2">Kategori 2</option>
                                    <option value="kategori3">Kategori 3</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="text-center mt-3">
                        <button id="saveButton" class="btn btn-primary">Simpan</button>
                        <button id="cancelButton" class="btn btn-danger ml-2">Batal</button>
                    </div>
                </div>
            </div>
            
            <script>
                const openPopupButton = document.getElementById("openPopupButton");
                const popupContainer = document.getElementById("popupContainer");
                const closePopupButton = document.getElementById("closePopupButton");
                const saveButton = document.getElementById("saveButton");
                const cancelButton = document.getElementById("cancelButton");
            
                openPopupButton.addEventListener("click", () => {
                    popupContainer.style.display = "block";
                });
            
                closePopupButton.addEventListener("click", () => {
                    popupContainer.style.display = "none";
                });
            
                cancelButton.addEventListener("click", () => {
                    popupContainer.style.display = "none";
                });
            </script>
            
                </div><br>
            <div class="row py-6">
                <div class="col-lg-12 mx-auto"> 
                    <div class="card rounded shadow border-2"> 
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                                <table id="example" style="width: 100%" class="table table-striped table-bordered">

                        <thead>
                          <tr>
                            <th>Nama Arsip</th>
                            <th>Kode Arsip</th>
                            <th>Keterangan</th>
                            <th>Lokasi Fisik</th>
                            <th>Tamggal Unggah</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
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
                            <td>63</td>
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
                            <td>66</td>
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
                            <td>22</td>
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
                            <td>33</td>
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
                            <td>61</td>
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
                            <td>59</td>
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
                            <td>55</td>
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
                            <td>39</td>
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
                            <td>23</td>
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
                            <td>23</td>
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
<script src="js/arsip.js"></script>
</body>
</html>


@endsection
