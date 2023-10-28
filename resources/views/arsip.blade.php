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
        <!-- Tombol Close (X) -->
        <button id="closePopupButton" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
        <!-- Your pop-up content goes here -->
        <h2>Tambah Arsip Baru</h2>
        <div class="card" style="padding: 20px; background-color: #f5f5f5;">
            <form>
                <div class="form-group">
                    <div class="wrapper">
                        <div class="container">
                          <p>Silakan upload file dengan format PDF</p>
                          <div class="upload-container">
                            <div class="border-container">
                              <div class="icons fa-4x">
                                <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                                <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                              </div>
                              <!--<input type="file" id="file-upload">-->
                              <p>Drag and drop files here, or 
                                <input type="file" class="form-control-file" id="dokumen" name="dokumen" style="margin-left: 100px;">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="namaArsip" placeholder="Nama Arsip">
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control" id="kategoriArsip">
                            <option value="kategori1">Kategori Arsip</option> 
                            <option value="kategori2">Perizininan</option>
                            <option value="kategori3">SIP (surat izin praktik)</option>
                            <option value="kategori3">STR (surat tanda regist)</option>
                            <option value="kategori3">PKWT</option>
                            <option value="kategori3">MoU dokter spesialis</option>
                            <option value="kategori3">Kontrak part time</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center mt-3">
            <button id="saveButton" class="btn btn-primary">Save</button>
            <button id="cancelButton" class="btn btn-danger ml-2">Cancel</button>
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
                            <th>Perihal</th>
                            <th>Kategori</th>
                            <th>Tanggal Terbit</th>
                            <th>Tanggal Selesai</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>01</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>Loker A</td>
                            <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                          </tr>

                          <tr>
                            <td>Tiger Nixon</td>
                            <td>01</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>Loker A</td>
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
