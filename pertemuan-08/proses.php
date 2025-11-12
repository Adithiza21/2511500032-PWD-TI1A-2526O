<?php
session_start();
$sesNim = $_POST["txtNim"];
$sesName = $_POST["txtName"];
$sestempatlahit= $_POST["txttempatlahir"];
$sesTanggallahir=$_POST["txtTanggallahir"]
$sesHobi = $_POST["txtHobi"]
$sespasangan = $_POST["txtpasangan"]
$sesperkerjaan = $_POST["txtperkerjaan"]
$sesNamaOrangtua = $_POST["txtNamaOrangtua"]
$sesNamakakak = $_POST["txtNamakakak"]
$sesNamaAdik =$_POST["txtNamakakak"]
$_SESSION["sesNim"] = $sesNIM;
$_SESSION["sesNama"] = $sesNama;
$_SESSION["sesTempatlahir"] = $sesTempatlahir;
$_SESSION["sesTanggallahir"] = $sesTanggallahir;
$_SESSION["sesHobi"] = $sesHobi;
$_SESSION["sespasangan"] = $sesPasanagn;
$_SESSION["sespekerjaan"] = $sespekerjaan
$_SESSION["sesNamaorangtua"] = $sesNamaorangtua;
$_SESSION["Namakakak"] = $sesNamakakak;
$_SESSION["Namaadik"] = $sesNamaAdik;
Header("lacation: index.php");
?>