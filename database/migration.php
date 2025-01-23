<?php
try {
    include './connection.php';


    $tables = [
        "CREATE TABLE IF NOT EXISTS `level` (
            id_level INT(11) AUTO_INCREMENT NOT NULL,
            level VARCHAR(50) NULL,
            PRIMARY KEY (id_level)
        )",

        "CREATE TABLE IF NOT EXISTS `user` (
            id_user INT(11) AUTO_INCREMENT NOT NULL,
            username VARCHAR(50) NULL,
            password VARCHAR(12) NULL,
            id_level INT NULL,
            PRIMARY KEY (id_user),
            KEY id_level (`id_level`),
            FOREIGN KEY (`id_level`) REFERENCES level(id_level) ON DELETE SET NULL ON UPDATE CASCADE
        )",

        "CREATE TABLE IF NOT EXISTS `produk` (
            id_produk INT(11) AUTO_INCREMENT NOT NULL,
            nama_produk VARCHAR(50) NULL,
            harga DECIMAL(10, 2) NULL,
            stok INT(11) NULL,
            PRIMARY KEY (id_produk)
        )",

        "CREATE TABLE IF NOT EXISTS `pelanggan` (
            id_pelanggan INT(11) AUTO_INCREMENT NOT NULL,
            nama_pelanggan VARCHAR(50) NULL,
            alamat TEXT NULL,
            telp VARCHAR(15) NULL,
            PRIMARY KEY (id_pelanggan)
        )",

        "CREATE TABLE IF NOT EXISTS `penjualan` (
            id_penjualan INT(11) AUTO_INCREMENT NOT NULL,
            tanggal_penjualan DATE NULL,
            total_harga DECIMAL(10, 2) NULL,
            id_pelanggan INT NULL,
            PRIMARY KEY (id_penjualan),
            KEY id_pelanggan (`id_pelanggan`),
            FOREIGN KEY (`id_pelanggan`) REFERENCES pelanggan(id_pelanggan) ON DELETE SET NULL ON UPDATE CASCADE
        )",

        "CREATE TABLE IF NOT EXISTS `detail_penjualan` (
            id_detail_penjualan INT(11) AUTO_INCREMENT NOT NULL,
            id_penjualan INT(11) NULL,
            id_produk INT(11) NULL,
            jumlah INT(11) NULL,
            harga DECIMAL(10, 2) NULL,
            PRIMARY KEY (id_detail_penjualan),
            KEY id_penjualan (`id_penjualan`),
            KEY id_produk (`id_produk`),
            FOREIGN KEY (`id_penjualan`) REFERENCES penjualan(id_penjualan) ON DELETE SET NULL ON UPDATE CASCADE,
            FOREIGN KEY (`id_produk`) REFERENCES produk(id_produk) ON DELETE SET NULL ON UPDATE CASCADE
        )",

        "INSERT INTO `level` (`id_level`, `level`) VALUES
            (1, 'Admin'),
            (2, 'Kasir')",
        
        "INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`) VALUES
            (1, 'admin', 'admin', 1),
            (2, 'kasir', 'kasir', 2)",

    ];

    // Execute each SQL statement
    foreach ($tables as $query) {
        $connect->query($query);
    }

    echo "Tables created successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}