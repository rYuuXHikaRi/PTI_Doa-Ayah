$(document).ready(function () {
    $('#example').DataTable({
        "paging": true, // Aktifkan pagination
        "lengthChange": true, // Izinkan pengguna mengubah jumlah data per halaman
        "searching": true, // Izinkan fitur pencarian
        "ordering": true, // Izinkan pengurutan
        "info": true, // Tampilkan informasi jumlah data
        "autoWidth": false // Nonaktifkan otomatis penyesuaian lebar kolom
    });
  });