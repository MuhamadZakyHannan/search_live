<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "echo " # uts_pwel" >> README.md";
$koneksi = new mysqli($host, $user, $pass, $db);
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
