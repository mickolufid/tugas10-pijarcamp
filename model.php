<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function insert($namaProduk, $keterangan, $harga, $jumlah)
    {
        $sql = "INSERT INTO produk (id, nama_produk, keterangan, harga, jumlah) VALUES ('', '$namaProduk',
            '$keterangan', '$harga', '$jumlah')";
        $this->conn->query($sql);
    }

    public function read()
    {
        $sql = "SELECT * FROM produk";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM produk WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($id, $namaProduk, $keterangan, $harga, $jumlah)
    {
        $sql = "UPDATE produk SET id='$id', nama_produk='$namaProduk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produk WHERE id='$id'";
        $this->conn->query($sql);
    }
}
