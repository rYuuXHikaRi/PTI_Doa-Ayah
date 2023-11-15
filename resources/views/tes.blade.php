<!DOCTYPE html>
<html>
<head>
  <title>Contoh Tabel HTML dengan rowspan</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<h2>Contoh Tabel HTML dengan rowspan</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Usia</th>
    <th>Alamat</th>
  </tr>
  <tr>
    <td rowspan="3">John</td>
    <td>25</td>
    <td>Jakarta</td>
  </tr>
  <tr>
    <td>30</td>
    <td>Surabaya</td>
  </tr>
  <tr>
    <td>28</td>
    <td>Bandung</td>
  </tr>
</table>

</body>
</html>
