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
            <div class="card-header" style="background-color: blue; color: white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="display: flex; align-items: center;">
                        <span class="font-weight-bold" style="font-size: 30px;">Kelola Pengguna >></span>
                        <span class="font" style="font-size: 20px;">Tambah Pengguna</span>
                    </div>                    
                </div>
          </div>
    </div>
    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header" style="background-color: blue;color:white;text-align:center;border-radius:10px;">
                <h4>Tambah Pengguna</h4>
            </div>
            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9">
                    <div class="tab-pane fade active show" id="account-general">
                        <div class="card-body media align-items-center">
                            <img src="img/profil.jpeg" style="width:20%" class="rounded-circle">
                            <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                    Upload Gambar
                                </label>
                            </div>
                        </div>
                        <hr class="border-light m-0">
        
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control mb-1" placeholder="Nama Pengguna" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" placeholder="Password" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">NPM</label>
                                <input type="text" class="form-control mb-1" placeholder="NPM" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" placeholder="Alamat" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-container" style="display: flex;justify-content: space-between;">
                                <form action="#" class="form" style="flex: 1;">
                                    <div class="form-group">
                                        <label for="lang1">Nama Bagian</label>
                                        <select name="languages1" id="lang1" class="form-control" style="background-color: #CCD9EC">
                                            <option value="javascript">Pilih Bagian 1</option>
                                            <option value="php">Pilih Bagian 2</option>
                                            <!-- Opsi lainnya -->
                                        </select>
                                    </div>
                                </form>
                            
                                <form action="#" class="form" style="flex: 1; margin: 0 10px;">
                                    <div class="form-group">
                                        <label for="lang2">Jabatan</label>
                                        <select name="languages2" id="lang2" class="form-control" style="background-color: #CCD9EC">
                                            <option value="java">Jabatan 1</option>
                                            <option value="python">Jabatan 2</option>
                                            <!-- Opsi lainnya -->
                                        </select>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="form-container" style="display: flex; justify-content: space-between;">
                                <form action="#" class="form" style="flex: 1;">
                                    <div class="form-group">
                                        <label for="lang1">Roles</label>
                                        <select name="languages1" id="lang1" class="form-control" style="background-color: #CCD9EC">
                                            <option value="javascript">Pilih Roles 1</option>
                                            <option value="php">Pilih Roles 2</option>
                                            <!-- Opsi lainnya -->
                                        </select>
                                    </div>
                                </form>
                            
                                <form action="#" class="form" style="flex: 1; margin: 0 10px;">
                                    <div class="form-group">
                                        <label for="signature">Tanda Tangan</label>
                                        <input type="file" name="signature" id="signature" class="form-control-file" style="background-color: #CCD9EC">
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="text-center mt-3" >
                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                        <button type="button" class="btn btn-default" style="background-color: blue;color:white">Save</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
       </div></div></div></div>
</body>
</html>


@endsection
