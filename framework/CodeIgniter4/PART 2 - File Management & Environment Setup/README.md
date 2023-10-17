<h2 align="center">Framework Course • PART 2<br>File Management & Environment Setup</h2>

<!-- ---------------------------------------------------------------------------------------------------- -->

Dalam pembuatan struktur file yang akan digunakan bisa beragam jenis, sesuai dengan selera orang masing", untuk memudahkan dalam pembacaan file dapat dibungkus dengan sebuah folder yang nantinya akan juga merubah cara pemanggilan file tersebut pada bagian **Controllers** yaitu seperti

```
CodeIgniter 4/
└── App/
    └── Views/
        ├── Layout/
            ├── header.php
            ├── menu.php
            └── footer.php
        ├── User/
            └── user_data.php
        ├── Data/
            └── data_barang.php
        └── Forms/
            └── User/
                ├── insert_user.php
                └── update_user.php
            └── Data/
                ├── insert_barang.php
                └── update_barang.php
```

maka pada controller akan dipanggil dengan cara seperti dibawah, pastikan untuk pemanggilan header diawal pemanggilan lalu dilanjutkan dengan pemanggilan menu setelah itu pemanggilan konten yang akan ditampilkan seperti `echo view('User/user_data');`
```php
echo view('layout/header');
echo view('layout/menu');
echo view('User/user_data');
echo view('layout/footer');
```

namun jika file dibungkus lagi didalam 2 folder seperti dibawah, maka pada controller akan dipanggil dengan cara `echo view('pages/User/user_data');` sama seperti yang di atas, namun hanya ditambahkan folder yang membungkus folder lagi.

```
CodeIgniter 4/
└── App/
    └── Views/
        └── pages/
            ├── Layout/
                ├── header.php
                ├── menu.php
                └── footer.php
            ├── User/
                └── user_data.php
            ├── Data/
                └── data_barang.php
            └── Forms/
                └── User/
                    ├── insert_user.php
                    └── update_user.php
                └── Data/
                    ├── insert_barang.php
                    └── update_barang.php
```

<!-- ---------------------------------------------------------------------------------------------------- -->