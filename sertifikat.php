<?php
$nama = htmlspecialchars($_GET['nama'] ?? 'Peserta');
$formasi = htmlspecialchars($_GET['formasi'] ?? '-');
$email = htmlspecialchars($_GET['email'] ?? '-');

$qrText = "Sertifikat Atas Nama:\n$nama\nEmail:\n$email";
$qrURL  = "https://api.qrserver.com/v1/create-qr-code/?size=130x130&data=" . urlencode($qrText);
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sertifikat</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    padding:0;
    font-family:'Poppins', sans-serif;
    background:#eee;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}


.sertifikat{
    width:1123px;   
    height:794px;
    background:url('sertifikatcanv.png') center/cover no-repeat;
    position:relative;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.nama{
    position:absolute;
    top:360px;       
    left:0;
    right:0;
    text-align:center;
    font-size:42px;
    font-weight:700;
    color:#046d27;
}


.formasi{
    position:absolute;
    top:430px;
    left:0;
    right:0;
    text-align:center;
    font-size:22px;
}


.ttd{
    position:absolute;
    bottom:120px;
    right:290px;
    text-align:center;
}

.ttd img{
    width:180px;
}

.ttd span{
    display:block;
    margin-top:8px;
    font-weight:600;
}


.btn-wrapper{
    position:fixed;
    bottom:30px;
    right:30px;
    display:flex;
    flex-direction:column;
    gap:12px;
    z-index:999;
}


.btn{
    padding:12px 22px;
    background:#0c9b35;
    color:white;
    border:none;
    border-radius:8px;
    font-size:14px;
    cursor:pointer;
    text-decoration:none;
    text-align:center;
}


.btn-beranda{
    background:#0984e3;
}


@media print{
    .btn-wrapper{
        display:none;
    }
}

.qr {
    position:absolute;
    bottom:130px;
    right:120px;
    text-align:center;
}

.qr span,
.ttd-kiri span,
.ttd-kiri small,
.ttd span,
.ttd small {
    color: #ffffff !important;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
}


.qr img{
    width:120px;
}

.qr span{
    font-size:11px;
    display:block;
    margin-top:6px;
}


.ttd-kiri{
    position:absolute;
    bottom:120px;
    left:140px;
    text-align:center;
}

.ttd-kiri img{
    width:180px;
}

.ttd-kiri span{
    display:block;
    margin-top:6px;
    font-weight:600;
}

</style>
</head>
<body>

<div class="sertifikat">
    <div class="nama"><?= $nama ?></div>
    <div class="formasi">Telah Berkunjung dan Belajar Formasi dan Strategi Sepak Bola</div>

    <div class="ttd">
        <img src="loogo-removebg-preview.png">
        <span><?= $nama ?></span>
        <small>Pengunjung Website</small>
    </div>

<div class="qr">
    <img src="<?= $qrURL ?>" alt="QR Code">
    <span>Scan untuk verifikasi</span>
</div>

<div class="ttd-kiri">
    <img src="ttd-zaki.png">
    <span>محمد زكي الزاهر</span>
    <span>Muhammad Zaki Al Zahir</span>
    <small>Pemilik Website</small>
</div>
</div>

<div class="btn-wrapper">
    <a href="index.php#beranda" class="btn">Kembali Beranda</a>
    <a href="index.php#form" class="btn">Kembali ke Form</a>
    <button class="btn btn-beranda" onclick="window.print()">Cetak Sertifikat</button>
</div>

</body>
</html>
