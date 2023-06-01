<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h1  class="text-center mb-5">Tambah Data Wisata</h1>
    <div class="container">
    
      <div class ="row justify-content-center">
        <div class="col-8">
            <div class ="card">
    <div class="card-body">
    <form action="/insertdata" method="POST" enctype="multipart/form-data" >
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
    <input type="file" name = "foto" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <input type="text" name = "deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
 
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</div>
</div>
  </body>
</html>