<?php
session_start();
$_SESSION['form'] = $_POST;

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: website.html");
    exit;
}

function hanyaHurufSpasi($str) {
    return preg_match("/^[A-Za-z\s\.,']+$/", $str);
}

$_SESSION['form'] = $_POST;

$nama   = trim($_POST['nama'] ?? '');
$email  = trim($_POST['email'] ?? '');
$status = htmlspecialchars($_POST['status'] ?? '');
$tujuan = htmlspecialchars($_POST['tujuan'] ?? '');
$formasi = htmlspecialchars($_POST['formasi'] ?? '');
$alasan = htmlspecialchars($_POST['alasan'] ?? '');
$strategi = $_POST['strategi'] ?? [];
$klub = htmlspecialchars($_POST['klub'] ?? '');
$pemain = htmlspecialchars($_POST['pemain_favorit'] ?? '');
$harapan = htmlspecialchars($_POST['harapan'] ?? '');
$pesan = htmlspecialchars($_POST['pesan'] ?? '');


$videoStrategi = [
    "Menyerang" => [
        "judul" => "Strategi Menyerang Modern",
        "video" => "https://www.youtube.com/embed/45IH6NKniHY?si=HRjsQ2nTCzD7Ilxh"
    ],
    "Bertahan" => [
        "judul" => "Strategi Bertahan Solid",
        "video" => "https://www.youtube.com/embed/zaPKyR_MfrY?si=g0WHWVNSt6i1h5Wi"
    ],
    "Transisi Cepat" => [
        "judul" => "Transisi Cepat dan Efektif",
        "video" => "https://www.youtube.com/embed/PfiUxOAq8cA?si=ysJM72r9TVWSoJiN"
    ],
    "High Press" => [
        "judul" => "High Press Taktik Modern",
        "video" => "https://www.youtube.com/embed/pjiegk27Lsg?si=h3Qp2Z7AmbFvBOOG"
    ],
    "Possession Play" => [
        "judul" => "https://www.youtube.com/embed/DqJiy4pHrB0?si=4lvXrmKumVqZS_T6",
        "video" => "https://www.youtube.com/embed/J5Z6T2K9F2I"
    ]
];


$errorNama = "";


if ($nama === "" || !hanyaHurufSpasi($nama)) {
    $errorNama = "Nama hanya boleh berisi huruf,spasi,titik(.),koma(,), dan Apostrof(`)";
}



$nama = ucwords(strtolower($nama));
$pemain = ucwords(strtolower($pemain));

$rekomendasi = [];

if ($formasi == "4-3-3") {
    $rekomendasi = ["Lionel Messi", "Kylian Mbappé", "Mohamed Salah"];
} elseif ($formasi == "4-4-2") {
    $rekomendasi = ["Cristiano Ronaldo", "Karim Benzema", "Kevin De Bruyne"];
} elseif ($formasi == "3-5-2") {
    $rekomendasi = ["Luka Modrić", "Joshua Kimmich", "Erling Haaland"];
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
<title>Hasil Form</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Playfair+Display:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
<style>

body{
    min-height:100vh;
    margin:0;
    background:#f5f6fa;
    font-family:'Poppins', sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box{
    max-width:900px;
    width:100%;
    background:#ffff;
    padding:30px;
    border-radius:14px;
    box-shadow:0 8px 25px rgba(0,0,0,0.08);
    margin: 10px auto;
}

h2{
    color:#046d27;
    border-left:5px solid #0c9b35;
    padding-left:10px;
}

.btn-kirim{
    background-color:#0c9b35;
    font-weight:600;
}

.btn-kirim:hover{
    background-color:#0a7f2c;
}


.hasil-hero img{
    width:100%;
    height: 260px;       
    object-fit: cover;
    border-radius:12px;
    margin-bottom:20px;
}

.hasil-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:18px 30px;
    margin-top:15px;
}

.field{
    display:flex;
    flex-direction:column;
}

.field b{
    font-size:18px;
    color:#2d3436;
    margin-bottom:6px;
}

.value{
    background:#e4ebe9;
    padding:10px 12px;
    border-radius:8px;
    font-size:18px;
}


.value-area{
    min-height:90px;
    line-height:1.6;
}


.full{
    grid-column:1 / -1;
}


.error{
    color:#d63031;
    font-size:14px;
}

.rekomendasi-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(180px,1fr));
    gap:20px;
    margin-top:15px;
}

.card iframe{
    width:100%;
    height:220px;
    border-radius:10px;
}

.card{
    border:1px solid #ddd;
    border-radius:12px;
    padding:12px;
    text-align:center;
    background:#fafafa;
}

.card img{
    width:100%;
    border-radius:10px;
    margin-bottom:10px;
}

/* BUTTON */
.hasil-button{
    display:flex;
    gap:15px;
    justify-content:center;
    margin-top:40px;
    flex-wrap:wrap;
}

.btn-kirim, .btn-print{
    padding:10px 25px;
    background:#0c9b35;
    color:white;
    border:none;
    border-radius:8px;
    text-decoration:none;
    cursor:pointer;
    font-size:14px;
    font-weight: bold;
}

.btn-beranda{
    background:#0984e3;
}

.btn-eror{
    padding:10px 25px;
    background:#780b0b;
    color:white;
    border:none;
    border-radius:8px;
    text-decoration:none;
    cursor:pointer;
    font-size:14px;
    font-weight: bold;
}



.form-button {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}


.btn-print{
    background:#00b894;
}


@media print{
    .hasil-button{
        display:none;
    }
    body{
        background:white;
        padding:0;
    }
}
</style>
</head>
<body>

<section class="box">

<h2> Hasil Form</h2>

<div class="hasil-hero">
    <img src="form..avif" alt="Hasil">
</div>

<?php if ($errorNama ): ?>

<div class="hasil-grid">
    <div>
        <b>Nama</b>
        <div class="error"><?= $errorNama ?></div>
    </div>
</div>

<div class="hasil-button">
    <a href="index.php#form" class="btn-eror">Kembali ke Form</a>
</div>

<?php else: ?>

<div class="hasil-grid">

    <div class="field">
        <b>Nama Lengkap:</b>
        <div class="value"><?= $nama ?></div>
    </div>

    <div class="field">
        <b>Email:</b>
        <div class="value"><?= $email ?></div>
    </div>

    <div class="field">
        <b>Status Pengguna:</b>
        <div class="value"><?= $status ?></div>
    </div>

    <div class="field">
        <b>Tujuan Mempelajari Formasi:</b>
        <div class="value"><?= $tujuan ?></div>
    </div>

    <div class="field full">
        <b>Formasi Favorit:</b>
        <div class="value"><?= $formasi ?></div>
    </div>
    
    <div class="field full">
        <b>Alasan Menyukai Formasi:</b>
        <div class="value value-area"><?= nl2br($alasan) ?></div>
    </div>

    <div class="field">
        <b>Klub Favorit:</b>
        <div class="value"><?= $klub ?></div>
    </div>

    <div class="field">
        <b>Pemain Favorit:</b>
        <div class="value"><?= $pemain ?></div>
    </div>
    
    <div class="field full">
    <b>Strategi Dipilih:</b>
    <div class="value">
        <?php if (empty($strategi)): ?>
            <i>Tidak memilih strategi yang ingin dipelajari</i>
        <?php else: ?>
            <?= implode(", ", $strategi) ?>
        <?php endif; ?>
    </div>
    </div>


    <div class="field full">
        <b>Harapan Setelah Belajar:</b>
        <div class="value value-area"><?= nl2br($harapan) ?></div>
    </div>

    <div class="field full">
        <b>Catatan / Pertanyaan:</b>
        <div class="value value-area"><?= nl2br($pesan) ?></div>
    </div>
</div>

<?php if (!empty($strategi)): ?>
<hr style="margin:30px 0">

<h2>Rekomendasi Strategi Pembelajaran</h2>

<div class="rekomendasi-grid">
<?php foreach ($strategi as $s): ?>
    <?php if (isset($videoStrategi[$s])): ?>
        <div class="card">
            <h4><?= $videoStrategi[$s]['judul'] ?></h4>
            <iframe 
                width="100%" 
                height="180" 
                src="<?= $videoStrategi[$s]['video'] ?>" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>
<?php endif; ?>


<div class="hasil-button">
    <a href="index.php#beranda" class="btn-kirim"> Beranda</a>
    <a href="index.php#form" class="btn-kirim"> Isi Ulang Form</a>
    <a 
  href="sertifikat.php?nama=<?= urlencode($nama) ?>&email=<?= urlencode($email) ?>" 
  class="btn-kirim btn-beranda"
>
View Sertifikat
</a>
</div>

<?php endif; ?>


</section>
</body>
</html>
