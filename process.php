<?php
include 'model.php';
if (isset($_POST['submit'])) {
    $namaProduk = $_POST['namaProduk'];
    $keterangan = $_POST['keterangan'];
    $harga      = $_POST['harga'];
    $jumlah     = $_POST['jumlah'];
    $model = new Model();
    $model->insert($namaProduk, $keterangan, $harga, $jumlah);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $namaProduk = $_POST['namaProduk'];
    $keterangan = $_POST['keterangan'];
    $harga      = $_POST['harga'];
    $jumlah     = $_POST['jumlah'];
    $model = new Model();
    $model->update($id, $namaProduk, $keterangan, $harga, $jumlah);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}