<?php

$connect = new mysqli('localhost','root','','kasir');


if (!$connect) {
    echo "<script>alert('Gagal Connect!');</script>";
}