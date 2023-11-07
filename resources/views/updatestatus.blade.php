@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/updatestatus.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color:#0051B9; border-radius: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Update Status</span>
        </div>

    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    
        

            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9"><br>
                    <form> 
                        <div class="form-group row">
                            <label for="lokasiArsip" class="col-md-4 col-form-label">Status</label>
                            <div class="col-md-8">
                                <select class="form-control" id="lokasiArsip" name="lokasiArsip" style="background-color: #E0E0E0;">
                                    <option value="Lemari">Perawan</option>
                                    <option value="Rak">Janda</option>
                                </select>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Deskripsi</label>
                            <div class="col-md-8">
                                <textarea id="isi" name="isi" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="background-color: #338BFD;color:white">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
       </div></div></div></div>
</body>
</html>


@endsection