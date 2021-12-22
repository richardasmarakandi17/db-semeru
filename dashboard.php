<?php
require 'query_list.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1 style="text-align:center">List Item</h1>
    <ul class="list-group">
    <table class="table list-vertical-center" style="text-align:center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Operasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $counter = 0;
                while($items = mysqli_fetch_assoc($result)) {
                    $counter++;
                ?>
                <div class="d-flex">
                    <td class=""><?=$counter?></td>
                    <td class=""><?=$items['nama']?></td>
                    <td class=""><?=$items['jumlah']?></td>
                    <td class="">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </td>
                </div>
                <?php
                    }
                ?>
            </tr>
        </tbody>
    </table>
    </ul>
</body>
</html>