<?php
$con = mysqli_connect("localhost", "root", "", "db_item_semeru");

function listItem()
{
    global $con;
    $res = mysqli_query($con, "SELECT * FROM item_list");
    $rows = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $rows[] = $row;
    }
    return $rows;
}

function detailItem($id)
{
    global $con;
    $res = mysqli_query($con, "SELECT * FROM item_list where IL_id='$id'");
    $row = mysqli_fetch_assoc($res);
    return $row;
}

function insertItem($data)
{
    global $con;
    $nama_barang = strtolower(stripslashes(mysqli_real_escape_string($con, $data['nama-barang'])));
    // echo $nama_barang;
    $jumlah = (int)$data['jumlah'];
    $kondisi = $data['kondisi'] === '1' ? 1 : 0;

    $res = mysqli_query($con, "SELECT * FROM item_list WHERE IL_nama = '$nama_barang' AND IL_kondisi = '$kondisi'");
    if (mysqli_fetch_assoc($res)) {
            echo "<script>
                    alert('data telah ada');
                  </script>";
            return false;
        }
    mysqli_query($con, "INSERT INTO item_list VALUES(NULL, '$nama_barang', '$jumlah', '$kondisi')");
    return mysqli_affected_rows($con);
}

function editItem($data)
{
    global $con;
    $id = $_GET['id'];
    $nama_barang = strtolower(stripslashes(mysqli_real_escape_string($con, $data['nama-barang'])));
    // echo $nama_barang;
    $jumlah = (int)$data['jumlah'];
    $kondisi = $data['kondisi'] === '1' ? 1 : 0;

    mysqli_query($con, "UPDATE item_list SET IL_nama='$nama_barang', IL_jumlah='$jumlah', IL_kondisi='$kondisi' WHERE IL_id='$id'");
    return mysqli_affected_rows($con);
}
