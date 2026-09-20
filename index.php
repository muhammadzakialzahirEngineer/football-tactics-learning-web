<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>FormStrag Sepakbola - Muhammad Zaki Al Zahir</title>
    <link rel="stylesheet" href="website.css">
    <script>
function validasiInput(event) {
    event.preventDefault();

    const nama = document.getElementById("nama");
    const email = document.getElementById("email");

    const errorNama = document.getElementById("error-nama");
    const errorEmail = document.getElementById("error-email");

    let valid = true;

    const regexNama = /^[a-zA-Z\s]+$/;

    if (!regexNama.test(nama.value)) {
        errorNama.textContent = "Nama hanya boleh huruf dan spasi";
        errorNama.style.display = "block";
        valid = false;
    } else {
        errorNama.style.display = "none";
    }

    if (!email.checkValidity()) {
        errorEmail.textContent = "Format email tidak valid";
        errorEmail.style.display = "block";
        valid = false;
    } else {
        errorEmail.style.display = "none";
    }

    if (valid) {
        event.target.submit(); 
    }
}
</script>

</head>
<body>
    <header>
        <img src="loogo-removebg-preview.png" class="logo">
        <nav>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#formasi">Formasi</a></li>
                <li><a href="#taktik">Taktik</a></li>
                <li><a href="#pemain">Pemain Kunci</a></li>
                <li><a href="#form">Form</a></li>
            </ul>
        </nav>
    </header>

    <section id="beranda" class="berandasection">
        <div class="beranda-box">
        <h2>Formasi dan Strategi Sepak Bola</h2>
        <div class="berandautama">
            <div class="teks-beranda">
            <p><b>
                Sepak bola modern bukan hanya tentang kecepatan dan kekuatan, tetapi juga tentang strategi yang matang serta koordinasi tim yang solid. 
                Setiap pertandingan adalah ajang adu taktik, di mana pelatih dan pemain harus mampu membaca situasi permainan, menyesuaikan ritme, dan beradaptasi terhadap perubahan strategi lawan. 
                Kombinasi antara formasi yang tepat, pola serangan maupun bertahan, serta pemahaman mendalam tentang peran setiap pemain menjadi kunci utama dalam menentukan arah permainan dan hasil akhir pertandingan.
             </b></p>
            <p><b>   
                Sebuah tim yang sukses tidak hanya bertumpu pada kemampuan individu, tetapi juga pada kerja sama, komunikasi, dan kedisiplinan posisi di lapangan. 
                Karena itu, pemilihan formasi menjadi fondasi penting dalam membangun pola permainan yang efektif. 
                Pada menu Formasi, Anda dapat menjelajahi berbagai susunan pemain, memahami fungsi setiap posisi, serta mempelajari bagaimana sebuah formasi dapat mengubah jalannya pertandingan dan menjadi pembeda antara kemenangan dan kekalahan.
             </b></p>
            </div>
            <img src="cerah.jpg" class="gambar1" >
        </div>
     </div>
    </section>

    <section id="formasi" class="box">
        <h2>Formasi Populer</h2>
        <p><b>Beberapa formasi populer dalam sepak bola modern meliputi:</b></p>
        <div class="section-dua-kolom">
         <div class="scroll-box">
            <div class="card1">
                <h3>Formasi 4-4-2</h3>
                <video src="aset-vidio/442.mp4" class="vidio-formasi" autoplay muted loop playsinline></video>
                <p><b>Kelebihan:</b> Seimbang antara bertahan dan menyerang<br>
                   <b>Kekurangan:</b> Kurang fleksibel menghadapi formasi tiga gelandang lawan.</p>
            </div>

            <div class="card1">
                <h3>Formasi 4-3-3</h3>
                <video src="aset-vidio/433.mp4" class="vidio-formasi" autoplay muted loop playsinline></video>
                <p><b>Kelebihan:</b> Mendukung serangan lebar dan cepat.<br>
                   <b>Kekurangan:</b> Butuh gelandang tengah yang kuat untuk menyeimbangkan permainan.</p>
            </div>

            <div class="card1">
                <h3>Formasi 3-5-2</h3>
                <video src="aset-vidio/352.mp4" class="vidio-formasi" autoplay muted loop playsinline></video>
                <p><b>Kelebihan:</b> Kuat di lini tengah dan transisi cepat.<br>
                   <b>Kekurangan:</b> Rentan pada serangan sayap lawan.</p>
            </div>
         </div>
         <div class="gambar-section">
            <div class="gambar-wrapper">
            <img src="sty.jpg">
            </div>
         </div>

        </div>
    </section>

    <section id="taktik" class="box">
        <h2>Taktik Sepak Bola</h2>
        <div class="form-wrapper">

            <div class="form-gambar">
                <iframe src="https://www.youtube.com/embed/gq9MqIEllJI?si=EPeSUghI2TLT5cKM" frameborder="0" allowfullscreen></iframe>
            </div>


            <div class="scroll-box">
            <div class="card">
                <h3>Strategi Menyerang</h3>
                <iframe src="https://www.youtube.com/embed/CEBfLgOfmoc" title="Strategi Menyerang" frameborder="0" allowfullscreen></iframe>
                <p>Mengandalkan pergerakan cepat, umpan satu dua, dan eksploitasi ruang di belakang pertahanan lawan.</p>
            </div>

            <div class="card">
                <h3>Strategi Bertahan</h3>
                <iframe src="https://www.youtube.com/embed/QTdmD4OqoF8" title="Strategi Bertahan" frameborder="0" allowfullscreen></iframe>
                <p>Menjaga formasi rapat, menutup ruang kosong, dan menekan lawan mulai lini tengah.</p>
            </div>

            <div class="card">
                <h3>Transisi Cepat</h3>
                <iframe src="https://www.youtube.com/embed/e5TYPMHCOFc?si=OMU7Ieag8RRSq0O-" title="Transisi Cepat" frameborder="0" allowfullscreen></iframe>
                <p>Beralih dari bertahan ke menyerang secara cepat dengan operan langsung dan umpan jauh terukur.</p>
            </div>
         </div>
        
         </div>
        </div>

    </section>

    <section id="pemain" class="box">
        <h2>Pemain Kunci</h2>
      <div class="section-dua-kolom">  
        <div class="scroll-box">
            <div class="card">
                <img src="playmaker.webp"  class="gambar">
                <h3>Playmaker</h3>
                <p>Mengatur tempo permainan, memberikan umpan kreatif, dan menjadi pusat strategi tim.</p>
            </div>

            <div class="card">
                <img src="striker lewy.webp"  class="gambar">
                <h3>Striker</h3>
                <p>Bertugas mencetak gol dan menjadi ujung tombak dalam setiap serangan tim.</p>
            </div>

            <div class="card">
                <img src="winger dembele.webp"  class="gambar">
                <h3>Winger</h3>
                <p>Menyerang dari sisi lapangan, memberikan umpan silang, dan membuka ruang bagi rekan setim.</p>
            </div>

            <div class="card">
                <img src="aset-gambar/bek van.webp"  class="gambar">
                <h3>Bek Tengah</h3>
                <p>Menjaga area pertahanan, menghalau bola lawan, dan mengatur garis pertahanan.</p>
            </div>
          </div>  
         <div class="gambar-section2">
            <div class="gambar-wrapper">
            <img src="pep.jpg">
         </div>
         </div>
        </div>
    </section>

    <section id="form" class="box">
    <h2>Form Belajar Formasi & Strategi Sepak Bola</h2>
    <p><b>Isi Form dan dapatkan rekomendasi Pembelajaran Strategi Sepakbola. Dan dapatkan Sertifaktnya..</b></p>

    <div class="form-wrapper">

        <div class="form-gambar">
            <img src="form..avif" alt="Formasi Sepak Bola">
        </div>

    
        <div class="form-input">
            <form action="hasil.php" method="post" class="form-belajar">

                <div class="form-group">
                    <label>| Nama Lengkap:</label>
                    <input type="text" name="nama" value="<?= $_SESSION['form']['nama'] ?? '' ?>"  required>
                </div>

                <div class="form-group">
                    <label> | Email:</label>
                    <input type="email" name="email" value="<?= $_SESSION['form']['email'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label> | Status Pengguna:</label>
                    <select name="status">
                <option <?= ($_SESSION['form']['status'] ?? '')=="Pelajar"?"selected":"" ?>>Pelajar</option>
                <option <?= ($_SESSION['form']['status'] ?? '')=="Mahasiswa"?"selected":"" ?>>Mahasiswa</option>
                <option <?= ($_SESSION['form']['status'] ?? '')=="Pelatih"?"selected":"" ?>>Pelatih</option>
                <option <?= ($_SESSION['form']['status'] ?? '')=="Pecinta Sepak Bola"?"selected":"" ?>>Pecinta Sepak Bola</option>
                </select>

                </div>

                <div class="form-group">
                    <label>| Tujuan Mempelajari Formasi:</label>
                    <select name="tujuan">
                    <option <?= ($_SESSION['form']['tujuan'] ?? '')=="Menambah Pengetahuan"?"selected":"" ?>>Menambah Pengetahuan</option>
                    <option  <?= ($_SESSION['form']['tujuan'] ?? '')=="Latihan Tim Sekolah"?"selected":"" ?>>Latihan Tim Sekolah</option>
                    <option <?= ($_SESSION['form']['tujuan'] ?? '')=="Analisis Pertandingan"?"selected":"" ?>>Analisis Pertandingan</option>
                    <option <?= ($_SESSION['form']['tujuan'] ?? '')=="Menjadi Pelatih"?"selected":"" ?>>Menjadi Pelatih</option>
                </select>
            </div>

            <div class="form-row">   
            <div class="form-group"> 
                    <label>| Formasi Favorit:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="formasi" value="4-4-2" <?= ($_SESSION['form']['formasi'] ?? '')=="4-4-2"?"checked":"" ?>> 4-4-2</label>
                        <label><input type="radio" name="formasi" value="4-3-3" <?= ($_SESSION['form']['formasi'] ?? '')=="4-3-3"?:"" ?>> 4-3-3</label>
                        <label><input type="radio" name="formasi" value="3-5-2" <?= ($_SESSION['form']['formasi'] ?? '')=="3-5-2"?:"" ?>> 3-5-2</label>
                    </div>
                </div>

                <div class="form-group">
                         <label>| Alasan Menyukai Formasi Favorit:</label>
                         <textarea name="alasan" rows="4" placeholder="Jelaskan alasan Anda..." required><?= $_SESSION['form']['alasan'] ?? '' ?></textarea>
               </div>
               </div>

                <div class="form-group">
            <label>| Strategi yang Ingin Dipelajari:</label>

            <div class="checkbox-group">

            <label>
            <input type="checkbox" name="strategi[]" value="Menyerang"
            <?= in_array("Menyerang", $_SESSION['form']['strategi'] ?? []) ? 'checked' : '' ?>>Menyerang</label>

            <label>
            <input type="checkbox" name="strategi[]" value="Bertahan"
            <?= in_array("Bertahan", $_SESSION['form']['strategi'] ?? []) ? 'checked' : '' ?>>Bertahan</label>

            <label>
            <input type="checkbox" name="strategi[]" value="Transisi Cepat"
            <?= in_array("Transisi Cepat", $_SESSION['form']['strategi'] ?? []) ? 'checked' : '' ?>>Transisi Cepat</label>

            <label>
            <input type="checkbox" name="strategi[]" value="High Press"
            <?= in_array("High Press", $_SESSION['form']['strategi'] ?? []) ? 'checked' : '' ?>>High Press</label>

            <label>
            <input type="checkbox" name="strategi[]" value="Possession Play"
            <?= in_array("Possession Play", $_SESSION['form']['strategi'] ?? []) ? 'checked' : '' ?>>Possession Play</label>

            </div>
            </div>

          
            <div class="form-row">
             <div class="form-group">
                 <label>| Klub Sepak Bola Favorit:</label>
                 <input type="text" name="klub" placeholder="Contoh: Barcelona" value="<?= $_SESSION['form']['klub'] ?? '' ?>" required>
             </div>

             <div class="form-group">
                 <label>| Pemain Sepak Bola Favorit:</label>
                 <input type="text" name="pemain_favorit" placeholder="Contoh: Lionel Messi" value="<?= $_SESSION['form']['pemain_favorit'] ?? '' ?>" required>
             </div>
            </div>

            <div class="form-group">
                <label>| Harapan Setelah Mempelajari Strategi Sepak Bola:</label>
                <textarea name="harapan" rows="4" placeholder="Tuliskan harapan Anda..." required><?= $_SESSION['form']['harapan'] ?? '' ?></textarea>
            </div>

             <div class="form-group">
                    <label>| Catatan / Pertanyaan:</label>
                    <textarea name="pesan" rows="4" placeholder="Tambahkan Catatan atau Pertanyaan (jika perlu)....."><?= $_SESSION['form']['pesan'] ?? '' ?></textarea>
                </div>

            <div class="form-button">
                    <button type="submit" class="btn-kirim">Kirim</button>
                    <button type="reset" class="btn-reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</section>

    <footer>
        <p>FormStrag Sepakbola | Muhammad Zaki Al Zahir</p>
    </footer>
</body>
</html>
