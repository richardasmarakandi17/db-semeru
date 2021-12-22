<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Add Items</title>
</head>

<body>
  <div class="card card-body mx-auto" style="width: 30rem; margin-top: 10rem;">
    <h1>Tambahkan Barang</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="namaBarangInput" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="namaBarangInput">
      </div>
      <div class="mb-3">
        <label for="jumlahInput" class="form-label">Jumlah Barang</label>
        <input class="form-control" id="jumlahInput"></input>
      </div>
      <div class="mb-3">
        <label for="kelayakanInput" class="form-label">Kelayakan Barang</label>
        <select class="form-select" aria-label="Default select example" id="kelayakanInput">
          <option selected value="1">Layak</option>
          <option value="2">Tidak Layak</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="keteranganInput" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keteranganInput" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="add-data">Submit</button>
  </div>
  </form>
</body>

</html>