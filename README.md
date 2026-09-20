# ⚽ FormStrag Sepakbola

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

**FormStrag Sepakbola** adalah website edukasi tentang **formasi dan strategi sepak bola** berbasis PHP. Pengunjung dapat mempelajari formasi populer, taktik permainan, dan peran pemain kunci. Setelah itu mereka mengisi form untuk mendapatkan **rekomendasi video pembelajaran** dan **sertifikat digital** atas nama mereka.

---

## Tampilan Beranda

<p align="center">
<img width="1525" height="780" alt="Screenshot 2026-09-20 143749" src="https://github.com/user-attachments/assets/40f1b7bc-523f-459a-9a95-7165a3fd04cb" />
</p>
---

## ✨ Fitur Utama

- ## 📚 **Materi formasi populer**: 4-4-2, 4-3-3, dan 3-5-2, lengkap dengan video animasi serta kelebihan dan kekurangannya.
  <p align="center">
 <img width="1532" height="767" alt="Screenshot 2026-09-20 143810" src="https://github.com/user-attachments/assets/aba34050-0de3-435c-b3d0-3cc55d6be29c" />
 </p>
 ---
 
- ## 🎯 **Materi taktik**: strategi menyerang, bertahan, dan transisi cepat lewat video YouTube.
 <p align="center">
<img width="1532" height="778" alt="Screenshot 2026-09-20 143837" src="https://github.com/user-attachments/assets/43019767-a04d-4af1-b56b-815cc40d62d8" />
</p>
---

- ## 👤 **Pemain kunci**: penjelasan peran Playmaker, Striker, Winger, dan Bek Tengah.
   <p align="center">
  <img width="1521" height="773" alt="Screenshot 2026-09-20 143855" src="https://github.com/user-attachments/assets/597e1aee-d5ff-4a9b-82ab-24f28b3a0f73" />
  </p>
  ---

- ## 📝 **Form belajar interaktif**:
  - Validasi nama (hanya huruf dan spasi) dan email di sisi klien (JavaScript).
  - Validasi ulang di sisi server (PHP).
  - Data form tersimpan di *session*, sehingga terisi ulang saat pengguna kembali ke form.
<p align="center">
<img width="1535" height="766" alt="Screenshot 2026-09-20 143925" src="https://github.com/user-attachments/assets/75f43c17-7535-46e7-8f37-93d3fa36a211" /> 
</p>
---
    
- ## 🎬 **Rekomendasi video personal**: video pembelajaran muncul sesuai strategi yang dipilih (Menyerang, Bertahan, Transisi Cepat, High Press, Possession Play).

<p align="center">
<img width="1533" height="778" alt="Screenshot 2026-09-20 144025" src="https://github.com/user-attachments/assets/5aa15654-fdf2-44a8-8d72-ac8a8d0d10c4" />
</p>
---


- ## 🏅 **Sertifikat digital otomatis**: memuat nama pengunjung, tanda tangan, dan **QR code** verifikasi, serta bisa dicetak langsung dari browser.
<p align="center">
<img width="1531" height="778" alt="Screenshot 2026-09-20 144046" src="https://github.com/user-attachments/assets/aa2826b0-fb91-4551-b0a5-0a5570b06079" />
</p>
---


## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|-----------|----------|
| PHP | Pemrosesan form, session, dan pembuatan sertifikat |
| HTML5 | Struktur halaman |
| CSS3 | Tampilan dan layout responsif |
| JavaScript | Validasi input di sisi klien |
| YouTube Embed | Video materi taktik dan rekomendasi |
| [QR Server API](https://goqr.me/api/) | Pembuatan QR code pada sertifikat |
| Google Fonts | Font Poppins, Cinzel, Playfair Display, dan Great Vibes |

---

## 📁 Struktur Project

```
formstrag-sepakbola/
├── index.php            # Halaman utama (beranda, formasi, taktik, pemain, form)
├── hasil.php            # Halaman hasil form + rekomendasi video
├── sertifikat.php       # Halaman sertifikat digital
├── website.css          # Stylesheet halaman utama
├── script.html          # Latihan validasi input JavaScript
├── 442.mp4              # Video formasi 4-4-2
├── 433.mp4              # Video formasi 4-3-3
├── 352.mp4              # Video formasi 3-5-2
├── sertifikatcanv.png   # Template latar sertifikat
├── ttd-zaki.png         # Tanda tangan pemilik website
├── loogo-removebg-preview.png   # Logo
└── *.jpg / *.webp / *.avif      # Gambar pendukung
```

---

## 🚀 Cara Menjalankan

### Prasyarat
- PHP 7.4 atau lebih baru
- Web server lokal seperti [XAMPP](https://www.apachefriends.org/), [Laragon](https://laragon.org/), atau PHP built-in server
- Koneksi internet, karena video YouTube, Google Fonts, dan QR code dimuat secara online

### Menggunakan XAMPP / Laragon
1. Clone repository ini:
   ```bash
   git clone https://github.com/<username>/formstrag-sepakbola.git
   ```
2. Pindahkan folder ke `htdocs` (XAMPP) atau `www` (Laragon).
3. Jalankan Apache.
4. Buka di browser:
   ```
   http://localhost/formstrag-sepakbola/index.php
   ```

### Menggunakan PHP Built-in Server
```bash
cd formstrag-sepakbola
php -S localhost:8000
```
Lalu buka `http://localhost:8000/index.php`.

---

## 📖 Cara Penggunaan

1. Buka halaman utama dan jelajahi menu **Beranda, Formasi, Taktik,** dan **Pemain Kunci**.
2. Buka bagian **Form** dan isi data diri, formasi favorit, serta strategi yang ingin dipelajari.
3. Klik **Kirim** untuk melihat ringkasan data dan rekomendasi video pembelajaran.
4. Klik **View Sertifikat** untuk melihat sertifikat, lalu **Cetak Sertifikat** untuk mencetak atau menyimpannya sebagai PDF.

---

## 🖼️ Tampilan

> Tambahkan screenshot project di sini, misalnya di folder `screenshots/`.

<!--
![Beranda](screenshots/beranda.png)
![Form](screenshots/form.png)
![Sertifikat](screenshots/sertifikat.png)
-->

---

## 📌 Catatan

- Project ini dibuat untuk keperluan **pembelajaran** dan tugas kuliah.
- Video dan gambar pemain dipakai hanya sebagai materi edukasi. Hak cipta tetap milik pemilik masing-masing.
- Data form hanya disimpan sementara di *session* dan tidak disimpan ke database.

---

## 👨‍💻 Pembuat

**Muhammad Zaki Al Zahir**

---

## 📄 Lisensi

Project ini dibuat untuk tujuan edukasi. Silakan gunakan sebagai referensi belajar dengan mencantumkan sumber.
