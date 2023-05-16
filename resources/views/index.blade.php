<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Olahraga-Olahraga Populer Di Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <style>
        body {
            background-color: #f9d3d3; /* soft pink background color */
            font-family: "Poppins", sans-serif; /* font family Poppins */
        }
    </style>
    <h1 class="text-center mt-2">Data Olahraga-Olahraga Populer Di Indonesia</h1>
    <div class="container">
    <a href="/tambah" class="btn btn-primary"> + Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Olahraga</th>
      <th scope="col">Deskripsi Singkat Olahraga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($OlahragaPopulerIndonesia as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <style>
        td {
            border-left: 1px solid white; 
        }
    </style>
      <td>{{ $item->nama_olahraga }}</td>
      <td>{{ $item->deskripsi }}</td>
      <td>
      <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat Data</a>
        <a href="{{ '/edit/'.$item->id }}" class="btn btn-success">Edit Data</a>
        <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus Data</a>
</td>
    </tr>
    @endforeach
  </tbody>
</table>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>