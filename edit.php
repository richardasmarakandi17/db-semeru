<?php
require "functions.php";
if (isset($_POST['submit'])) {
    global $con;
    if (editItem($_POST) > 0) {
      echo "<script>
              alert('item berhasil diperbarui');
            </script>";
    } else {
      echo mysqli_error($con);
    }
  }
$row = detailItem($_GET['id']);
// echo (bool)$_POST['kelayakan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card card-body vertical-center" style="width:50%;">
            <form action="edit.php?id=<?=$row['IL_id']?>" method="POST">

                <div class="mb-3">
                    <label for="nama-barang" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" id="nama-barang" name="nama-barang" value="<?=$row['IL_nama']?>">
                </div>
                
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?=$row['IL_jumlah']?>">
                </div>

                <div class="mb-3">   
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <select class="form-select" aria-label="Default select example" id="kondisi" name="kondisi">
                        <option value="0" <?php if($row['IL_kondisi']==0) echo "selected" ?> >Tidak Layak</option>
                        <option value="1" <?php if($row['IL_kondisi']==1) echo "selected" ?> >Layak</option>
                    </select>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</body>
</html>