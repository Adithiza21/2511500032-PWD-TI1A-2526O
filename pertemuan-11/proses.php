<?php
session_start();
require_once _DIR_ . '/koneksi.php';

require_once _DIR_ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#contact');
}
if (!$conn) {

    $_SESSION['flash_error'] = 'Koneksi database gagal.';

    redirect_ke('index.php#contact');

}

if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
} elseif (strlen($nama) < 3) {
    $errors[] = 'Nama minimal 3 karakter.';
}

# Email valid
if ($email === '') {
    $errors[] = 'Email wajib diisi.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format email tidak valid.';
}

# Pesan wajib & minimal 10 karakter
if ($pesan === '') {
    $errors[] = 'Pesan wajib diisi.';
} elseif (strlen($pesan) < 10) {
    $errors[] = 'Pesan minimal 10 karakter.';
}

if (!empty($errors)) {

    $_SESSION['old'] = [
        'nama'  => $nama,
        'email' => $email,
        'pesan' => $pesan,
    ];

$nama  = bersihkan($_POST['txtNama']  ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');

$arrBiodata = [
  "nim" => $_POST["txtNim"] ?? "",
  "nama" => $_POST["txtNmLengkap"] ?? "",
  "tempat" => $_POST["txtT4Lhr"] ?? "",
  "tanggal" => $_POST["txtTglLhr"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "pasangan" => $_POST["txtPasangan"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "kakak" => $_POST["txtNmKakak"] ?? "",
  "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
