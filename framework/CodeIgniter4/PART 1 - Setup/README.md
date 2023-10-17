<h2 align="center">Framework Course • PART 1<br>SETUP</h2>

<!-- ---------------------------------------------------------------------------------------------------- -->

    1. Instalasi software

Pertama-tama siapkan software yang akan digunakan seperti code editor yaitu [Visual Studio Code](https://code.visualstudio.com/download) ataupun bisa menggunakan yang lain seperti [Sublime Text](https://www.sublimetext.com/download). Setelah menyiapkan code editor yang akan digunakan, selanjutnya install server yang akan menjalankan project yang dikerjakan, bisa menggunakan localhost seperti [XAMPP](https://www.apachefriends.org/download.html), untuk mensetting XAMPP agar dapat digunakan dengan framework CodeIgniter, ikuti langkah sebagai berikut :
<div align="center">
    <img width="600px" src="../../../assets/xampp config.png">
</div>
<p>Click tombol pada config lalu pilih menu PHP (php.ini), buka dengan notepad atau software yang bisa digunakan untuk mengubah suatu text, lalu cari dengan kolom pencarian " <b>intl</b> ", setelah itu maka akal muncul " <b>;extension=intl</b> " setelah itu hapus " ; "nya lalu save, lalu untuk menjalankan PHP pada codeigniter, dibutuhkan menambahkan environment variable pada sistem komputer, yaitu dengan cara pencet key " <b>Windows</b> " atau menggunakan fitur search pada sistem operasi windows, lalu cari Edit environment variables for your account, lalu pada System variables pilih Path lalu edit dan paste directory tempat dimana PHPnya berada seperti contoh <b>C:/User/name/xampp/php</b>.</p>

---

    2. Pemasangan Template

Sebelum membuat website dengan framework CodeIgniter 4, dapat menggunakan 2 metode yaitu membuat tampilan dengan menggunakan [HTML], [CSS], [JavaScript] secara manual atau dapat menggunakan template. Disini akan dibahas cara penggunaan template pada framework CodeIgniter 4, pertama siapkan template yang akan digunakan bisa di dapatkan pada [website](https://themeforest.net/search/codeigniter%204). Setelah melakukan penginstalan template pada komputer selanjutnya diperlukan melakukan pengekstrakan file .zip yang sudah di download.

Setelah itu buka pada folder template yang sudah di lakukan extract tadi, untuk mengetahui file apa saja yang diperlukan agar template menampilkan dengan sempurna, buka file index.html yang terdapat pada folder templatenya.
<div align="center">
    <img width="600px" src="../../../assets/template links.png">
</div>

Seperti gambar yang diatas, terdapat 2 tipe pemanggilan yaitu menggunakan `href=""` dan `src=""` pemanggilan menggunakan **href** pada umumnya digunakan pada tag `<link>` atau untuk mengarahkan link dengan menggunakan tag `<a>` seperti contoh.

``` <link href="../../../css/bootstrap/bootstrap.min.css"> ``` atau ``` <script src="../../../javascript/bootstrap/bootstrap.min.js"></script>```

setelah itu buatlah folder baru pada directory public pada framework codeigniter yaitu strukturnya seperti dibawah ini, setelah itu paste semua folder yang diperlukan untuk menampilkan template dengan sempurna pada folder yang telah dibuat.

```
CodeIgniter 4/
└── Public/
    └── Assets/
```

untuk pemanggilan foldernya bisa menggunakan seperti `<link href="<?= base_url('Assets/nama_folder/nama_file.extensions') ?>">`

<!-- ---------------------------------------------------------------------------------------------------- -->

[HTML]: https://github.com/Mingaili/Mingaili/tree/main/html/
[CSS]: https://github.com/Mingaili/Mingaili/tree/main/css/
[JavaScript]: https://github.com/Mingaili/Mingaili/tree/main/javascript/