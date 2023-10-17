<h2 align="center">Framework Course • PART 3<br>Controller & Models</h2>

<!-- ---------------------------------------------------------------------------------------------------- -->
    
    1. Controllers

Controllers adalah bagian dari pola desain MVC (Model-View-Controller) yang bertanggung jawab untuk mengatur alur logika aplikasi. Controller berfungsi sebagai penghubung antara tampilan (View) dan data (Model). Secara umum, tujuannya adalah untuk menerima permintaan dari pengguna, memprosesnya, dan memberikan respons kembali dalam bentuk tampilan atau data.

---

    A. Beberapa hal penting tentang Controllers di CodeIgniter:

- Rute Permintaan: Setiap permintaan yang diterima oleh aplikasi CodeIgniter diarahkan ke sebuah controller tertentu berdasarkan pada rute yang didefinisikan. Rute ini menentukan controller mana yang harus menangani permintaan tertentu.

- Memproses Permintaan: Controller berisi metode-metode (fungsi-fungsi) yang disebut aksi (actions). Setiap aksi mengelola suatu tindakan atau operasi tertentu. Misalnya, jika ada permintaan untuk menampilkan halaman utama, maka aksi dalam controller akan menangani tugas tersebut.

- Mengakses Data: Controllers dapat berinteraksi dengan Model untuk mengakses, memanipulasi, dan memperbarui data. Mereka meminta informasi dari Model dan menggunakan informasi ini untuk memproses permintaan.

- Memformat Respons: Setelah memproses permintaan, controller akan mengembalikan respons ke pengguna. Respons ini dapat berupa halaman HTML, data JSON, atau tipe respons lainnya tergantung pada jenis permintaan.

- Mengelola Logika Aplikasi: Controllers mengatur logika aplikasi. Mereka mengambil keputusan berdasarkan data dari Model dan mengarahkan aplikasi ke tindakan selanjutnya.

- Mengelola Tampilan: Controller bertugas untuk memilih tampilan yang tepat untuk ditampilkan kepada pengguna. Mereka mengatur tata letak dan mengirimkan data yang diperlukan untuk mengisi tampilan.

- Mengelola Aliran Aplikasi: Controllers dapat mengarahkan pengguna ke halaman atau aksi lain dalam aplikasi berdasarkan keputusan yang dibuat selama pemrosesan.

- Mengelola Penggunaan Middleware dan Filter: Controllers juga dapat memanfaatkan middleware dan filter untuk memodifikasi atau memvalidasi permintaan sebelum atau setelah pemrosesan.

- Memisahkan Kepentingan: Dengan memisahkan tugas-tugas pengelolaan permintaan ke dalam controllers, CodeIgniter mengikuti prinsip-prinsip desain perangkat lunak yang baik dan memudahkan pengembangan dan pemeliharaan aplikasi.

---

    B. Cara penggunaan Controllers

Controllers dapat dibagi menjadi beberapa file dengan class masing" yang akan di panggil ketiga menuju sebuah web, yaitu seperti `localhost:8080/home/` maka **home**nya adalah sebuah class yang sedang berjalan pada file Home.php pada controllers. Jadi jika ingin menampilkan data dari User dengan class user, dapat membuat class baru pada controller seperti dibawah.

```php
<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends BaseController {
    
    public function index() {

        return view('welcome_message');

    }

}
```

pada setiap controllers memiliki fungsi berupa index(), fungsi ini digunakan agar setiap kali class di panggil maka yang akan ditampilkan terlebih dahulu adalah dari file index, namun jika yang dipanggil adalah fungsi lain yang ada di dalam class, maka yang akan ditampilkan adalah fungsi tersebut seperti `localhost:8080/user/data_user`.

---

    2. Models

Model adalah bagian dari pola desain MVC (Model-View-Controller) yang bertanggung jawab untuk mengelola akses dan manipulasi data. Model adalah tempat di mana logika bisnis dan akses ke basis data didefinisikan. Secara umum, tujuannya adalah untuk memungkinkan aplikasi untuk berinteraksi dengan basis data atau sumber data lainnya.

---

    A. Beberapa hal penting tentang Models di CodeIgniter:

- Akses ke Basis Data: Salah satu tugas utama Model adalah untuk mengelola akses ke basis data. Model memungkinkan untuk melakukan operasi seperti mengambil data, menambahkan data baru, memperbarui data, dan menghapus data dari basis data.

- Merepresentasikan Data: Model menggambarkan bagaimana data diatur dan berinteraksi. Hal ini dapat mencakup struktur tabel dan relasi antar tabel.

- Logika Bisnis: Model berisi logika bisnis dari aplikasi. Ini adalah tempat di mana aturan dan operasi terkait bisnis didefinisikan. Misalnya, jika Anda mengembangkan aplikasi e-commerce, Model mungkin mengandung logika untuk menghitung total pesanan atau mengelola stok produk.

- Memisahkan Data dari Tampilan dan Kontrol: Model memisahkan data dari tampilan dan kontrol. Ini berarti bahwa tampilan dan kontrol tidak perlu tahu bagaimana data diambil atau diproses.

- Reusable: Model dapat digunakan kembali di berbagai bagian dari aplikasi. Misalnya, jika ada dua bagian dari aplikasi yang membutuhkan akses ke data pengguna, Anda dapat menggunakan Model Pengguna untuk keduanya.

- Memungkinkan Pengujian Unit: Karena Model adalah komponen terpisah, mereka dapat diuji secara terpisah dengan mengabaikan tampilan dan kontrol. Hal ini memungkinkan untuk melakukan pengujian unit untuk memastikan bahwa operasi pengolahan data berjalan dengan benar.

- Mengelola Penggunaan Middleware dan Filter: Model dapat memanfaatkan middleware dan filter untuk memodifikasi atau memvalidasi data sebelum atau setelah disimpan atau diambil dari basis data.

- Memungkinkan Penggunaan Berbagai Sumber Data: Selain basis data, Model dapat berinteraksi dengan berbagai jenis sumber data seperti API eksternal, file, dan sumber data lainnya.

- Memungkinkan Penggunaan ORM (Object-Relational Mapping): Dalam CodeIgniter, Model juga dapat bekerja dengan ORM, yang memungkinkan untuk memanipulasi data sebagai objek tanpa harus menulis kueri SQL secara langsung.

- Mengelola Ketergantungan Data: Model memungkinkan Anda untuk mengelola ketergantungan antara data. Misalnya, jika ada hubungan antara pengguna dan pesanan, Model dapat memastikan bahwa data terkait dikelola dengan benar.

---

    B. Cara penggunaan Controllers

```php
<?php namespace App\Models;

use CodeIgniter\Model;

class Schema extends Model {

    /* ---------------------------------------------------------------------------------------------------- */

        public function visual_table($table) {

            return $this -> db -> table($table) -> get() -> getResult();

        }

        public function visual_table_join2($table1, $table2, $on1) {

            return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> get() -> getResult();

        }

        public function visual_table_join3($table1, $table2, $table3, $on1, $on2) {

            return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> join($table3, $on2, 'left') -> get() -> getResult();

        }

        public function visual_table_join4($table1, $table2, $table3, $table4, $on1, $on2, $on3) {

            return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> join($table3, $on2, 'left') -> join($table4, $on3, 'left') -> get() -> getResult();

        }

    /* ---------------------------------------------------------------------------------------------------- */

        public function insert_data($table, $data) {

            return $this -> db -> table($table) -> insert($data);
        
        }
        
        public function update_data($table, $data, $where) {
        
            return $this -> db -> table($table) -> update($data, $where);

        }
        
        public function delete_data($table, $where) {
        
            return $this -> db -> table($table) -> delete($where);
        
        }

    /* ---------------------------------------------------------------------------------------------------- */

        public function getWhere($table, $where) {

            return $this -> db -> table($table) -> getWhere($where) -> getRow();
        
        }
        
        public function getWhere2($table, $where) {
        
            return $this -> db -> table($table) -> getWhere($where) -> getRowArray();
        
        }

        public function getWhere_table_join2($table1, $table2, $on1, $where) {

			return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> getWhere($where) -> getRow();
			
		}

}
```

untuk memanggil models dan menggunakan fungsi yang ada di models pada controllers adalah sebagai berikut :

```php
<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class User extends BaseController {
    
    public function index() {

        $Schema = new Schema();

            $fetch['data'] = $Schema -> visual_table('nama_table');

        return view('welcome_message');

    }

}
```

Dengan memanggil models tersebut menggunakan `use App\Models\nama_models;` lalu untuk menggunakan models tersebut terlebih dahulu memanggil modelsnya dengan membuat variable baru seperti `$Schema` lalu menyebutkan bahwa ditambahkan Models baru `new Schema();` lalu dengan membuat variable yang digunakan sebagai pemanggilan pada view dengan diisi dengan string yang dapat digunakan pada halaman view.

<!-- ---------------------------------------------------------------------------------------------------- -->