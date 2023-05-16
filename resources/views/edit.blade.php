<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Olahraga Populer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <style>
        body {
            background-color: #f9d3d3; /* soft pink background color */
            font-family: "Poppins", sans-serif; /* font family Poppins */
        }
    </style>
    <h1 class="text-center mt-2">Edit Data Olahraga Populer</h1>
    <div class="container">
    <form action="{{ '/edit/'.$OlahragaPopulerIndonesia->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_olahraga" class="form-label">Nama Olahraga Populer di Indonesia</label>
                <input type="text" class="form-control @error('nama_olahraga') is-invalid @enderror" id="nama_olahraga" name="nama_olahraga" value="{{ $OlahragaPopulerIndonesia->nama_olahraga }}">
                @error('nama_olahraga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ $OlahragaPopulerIndonesia->deskripsi }}">
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <a href="/" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>