<!DOCTYPE html>
<html>

<head>
    <title>Pemrograman Berorientasi Objek - Pertemuan 1</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1 align="left">Pemrograman Berorientasi Objek</h1>
    <p>Jika Anda pernah mendengar istilah ini tapi belum benar-benar paham apa maksudnya, Anda berada di tempat yang tepat. PBO adalah salah satu pendekatan paling populer dan efektif dalam pemrograman, terutama ketika kita berbicara tentang pengembangan perangkat lunak skala besar dan kompleks.
    </p>

    <h1 align="left">Pengertian</h1>
    <p>Pemrograman berorientasi objek (OOP) adalah model pemrograman komputer yang mengatur desain perangkat lunak berdasarkan data, atau objek, alih-alih fungsi dan logika. Objek dapat didefinisikan sebagai bidang data yang memiliki atribut dan perilaku unik.
    </p>
     <!-- Pertemuan 2 -->
 <style>
    table{
        border-collapse: collapse;
            width: 50%
    }
            
    th, td{
        border: 1px solid #843434;
            padding: 3px;
            text-align: left;
    }
    th{
            background-color: #f0f0f0;
        }  
  </style>

  <table class="table">

 <h1 align="left">Bahasa Pemrograman yang Mendukung</h1>
 <p>Macam-Macam Bahasa Pemrograman Terbaik untuk Dipelajari:</p>
 <ul>
     <li>Python</li>
     <li>C#</li>
     <li>C++</li>
     <li>JavaScript</li>
     <li>PHP</li>
     <li>Swift</li>
     <li>Java</li>
     <li>Go</li>
     <li>SQL</li>
     <li>Ruby</li>
 </ul>

 <h1>Membuat Tabel Kategori Produk</h1>

 <table>
     <tr>
         <th>NO</th>
         <th>KATEGORI PRODUK</th>
         <th>NAMA PRODUK</th>
     </tr>
     <tr>
         <td>1</td>
         <td>Bumbu dapur</td>
         <td>Garam</td>
     </tr>
     <tr>
         <td>2</td>
         <td>Bumbu dapur</td>
         <td>Cabe</td>
     </tr>
     <tr>
         <td>3</td>
         <td>Bumbu dapur</td>
         <td>Lengkuas</td>
     </tr>
     <tr>
         <td>4</td>
         <td>Bumbu dapur</td>
         <td>Terasi</td>
     </tr>
     <tr>
         <td>5</td>
         <td>Sembako</td>
         <td>Beras</td>
     </tr>
     <tr>
         <td>6</td>
         <td>Sembako</td>
         <td>Minyak goreng</td>
     </tr>
     <tr>
         <td>7</td>
         <td>Sembako</td>
         <td>Gula pasir</td>
     </tr>
 </table>

 <h1>Membuat Tabel Produk</h1>

 <table>
     <tr>
         <th>NO</th>
         <th>PRODUK</th>
         <th>STOCK</th>
         <th>HARGA</th>
     </tr>
     <tr>
         <td>1</td>
         <td>Garam</td>
         <td>10</td>
         <td>7000</td>
     </tr>
     <tr>
         <td>2</td>
         <td>Cabe</td>
         <td>10</td>
         <td>25000</td>
     </tr>
     <tr>
         <td>3</td>
         <td>Lengkuas</td>
         <td>10</td>
         <td>12000</td>
     </tr>
     <tr>
         <td>4</td>
         <td>Terasi</td>
         <td>10</td>
         <td>35000</td>
     </tr>
     <tr>
         <td>5</td>
         <td>Beras</td>
         <td>10</td>
         <td>13000</td>
     </tr>
     <tr>
         <td>6</td>
         <td>Minyak goreng</td>
         <td>10</td>
         <td>15000</td>
     </tr>
     <tr>
         <td>7</td>
         <td>Gula pasir</td>
         <td>10</td>
         <td>13000</td>
     </tr>
 </table>

</body>

</html>
<!DOCTYPE html>
<html>
<body>

<h2>pertemuan 2</h2>
<img src="poto.jpg" width="20%" height="20%"/>
        <h3>M.RESTU FERDIANSAH </h3>
        <h4>Nim: 42423012</h4>
</body>
</html>
<!-- Pertemuan 3 -->
 <h2>Pertemuan ke 3</h2>

<?php
class Mobil {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function set_warna($warna) {
        $this->warna = $warna;
    }

    function get_name() {
        return $this->nama;
    }

    function get_warna() {
        return $this->warna;
    }
}

$toyota = new Mobil();
$toyota->set_name('Toyota');
$toyota->set_warna('Biru Laut');

echo $toyota->get_name();
echo "<br>";
echo $toyota->get_warna();
?>
 <!-- Pertemuan 4 -->
 <h2>Pertemuan ke 4</h2>

<h3>Constructor</h3>

<?php
class Buah {
    public $nama;
    public $warna;

    function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    function get_nama() {
        return $this->nama;
    }

    function get_warna() {
        return $this->warna;
    }
}

$apel = new Buah("Apel", "Merah");
echo $apel->get_nama();
echo "<br>";
echo $apel->get_warna();
?>

<h3>Destructor</h3>

<?php
class jenis {
    public $nama;
    public $warna;

    function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    function __destruct() {
        echo "Buah tersebut adalah {$this->nama} dan warnanya adalah {$this->warna}.<br>";
    }
}


$apel = new jenis("Apel", "Merah");
unset($apel);  
?>

<h3>Nama Mahasiswa</h3>

<?php
class Mahasiswa {
    public $nama;
    public $tinggiBadan;
    public $warnaKulit;

    public function __construct($nama, $tinggiBadan, $warnaKulit) {
        $this->nama = $nama;
        $this->tinggiBadan = $tinggiBadan;
        $this->warnaKulit = $warnaKulit;
    }

    public function tampilkanInfo() {
        echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggiBadan} cm, dan Warna Kulit {$this->warnaKulit}.<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Valent Bintang", 172, "Sawo Matang");
$mahasiswa2 = new Mahasiswa("Agitya Putra", 170, "Sawo Matang");
$mahasiswa3 = new Mahasiswa("M.RESTU FERDIANSAH", 175, "Sawo Matang");

$mahasiswa1->tampilkanInfo();
$mahasiswa2->tampilkanInfo();
$mahasiswa3->tampilkanInfo();
?>
</body>

</html>
<h2 style="color:blue;" align="left">Pertemuan 5dan 6</h2>
<h3 style="color:black;" align="left">Konstanta dan Abstrak</h3>

<h4 style="color:black;" align="left">Konstanta</h4>
<br>
<?php
class Selamat_tinggall {
  const LEAVING_MESSAGE = "Terima kasih telah berkunjung";
}
echo Selamat_tinggall::LEAVING_MESSAGE;
?>

<br><br>
<?php
class Selamat_tinggal {
  const LEAVING_MESSAGE = "Terima kasih telah berkunjung";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$selamat_tinggal = new Selamat_tinggal();
$selamat_tinggal->byebye();
?>

<h4 style="color:black;" align="left">Abstrak</h4>
<br>
<?php
abstract class mobill {
  public $nama;
  public function __construct($nama) {
    $this->nama = $nama;
  }
  abstract public function intro() : string;
}

class Audi extends Mobill {
  public function intro() : string {
    return "Untuk kualitas terbaik! Saya pilih $this->nama!";
  }
}

class Volvo extends Mobill {
  public function intro() : string {
    return "Untuk hemat bahan bakar! Saya pilih $this->nama!";
  }
}

class Citroen extends Mobill {
  public function intro() : string {
    return "Untuk purna jual! Saya pilih $this->nama!";
  }
}

$audi = new audi("BMW");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Panther");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Toyota");
echo $citroen->intro();
echo "<br>";
?>

<h4 style="color:black;" align="left">~> Abstrak Berargumen</h4>
<br>
<?php
abstract class ParentClass {
  abstract protected function prefixName($nama);
}
class ChildClass extends ParentClass {
  public function prefixName($nama) {
    if ($nama == "Ahmad Sulistiyo") {
      $prefix = "Mr.";
    } elseif ($nama == "Siti Aisyah") {
      $prefix = "Miss.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$nama}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Ahmad Sulistiyo");
echo "<br>";
echo $class->prefixName("Siti Aisyah");
echo "<br>";
?>

<br>
<?php
abstract class ParentClasss {
  abstract protected function prefixName($nama);
}
class ChildClasss extends ParentClasss {
  public function prefixName($nama, $separator = ".", $greet = "Dear") {
    if ($nama == "Ahmad Sulistiyo") {
      $prefix = "Mr";
    } elseif ($nama == "Siti Aisyah") {
      $prefix = "Miss";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$nama}";
  }
}

$class = new ChildClasss;
echo $class->prefixName("Ahmad Sulistiyo");
echo "<br>";
echo $class->prefixName("Siti Aisyah");
?>
<!DOCTYPE html>
<html>
    
<head>
 <!-- Pertemuan 7 -->
            <div class="pertemuan-7">
                <h2>PERTEMUAN 7 Penjelasan CRUD</h2>
                <h3>Koneksi</h3>
                <img class="" src="koneksi.png" alt="" width="60%">
                <ul>
                    <li>Membuat koneksi ke database MySQL</li>
                    <li>Host: <b>localhost</b></li>
                    <li>Username: <b>root</b></li>
                    <li>Password: <b>kosong</b></li>
                    <li>Nama Database: <b>restu_db</b></li>
                </ul>
                <h4>Create</h4>
                <p>Pada file create.php, kita dapat melihat kode program yang digunakan untuk menambahkan data
                    baru
                    ke dalam
                    database. Berikut adalah penjelasan kode program tersebut:</p>
                <img class="" src="create.png" alt="" width="60%">
                <p>Pada kode program di atas, kita dapat melihat bahwa:
                <ul>
                    <li>Fungsi `input()` digunakan untuk mencegah inputan karakter yang tidak sesuai.</li>
                    <li>Data dari form diambil menggunakan `$_POST`.</li>
                    <li>Query untuk menambahkan data ke dalam tabel `sevastok` dibuat menggunakan `insert into`.
                    </li>
                    <li>Query di atas dijalankan menggunakan `mysqli_query()`.</li>
                    <li>Jika data berhasil ditambahkan, maka akan diarahkan ke halaman `index.php`.</li>
                </ul>
                </p>
                <h4>Read</h4>
                <p>Pada file `index.php`, kita dapat melihat kode program yang digunakan untuk menampilkan data
                    dari
                    database. Berikut adalah penjelasan kode program tersebut:</p>
                <img class="" src="read.png" alt="" width="60%">
                <p>Pada kode program di atas, kita dapat melihat bahwa:</p>
                <ul>
                    <li>Query untuk menampilkan data dari tabel sevastok dibuat menggunakan select *.</li>
                    <li>Query di atas dijalankan menggunakan mysqli_query()`.</li>
                    <li>Data diambil menggunakan mysqli_fetch_array()`.</li>
                    <li>Data ditampilkan dalam bentuk tabel.</li>
                    <li>ombol update dan delete ditampilkan untuk setiap data.</li>
                </ul>
                <h4>Update</h4>
                <p>Pada file `update.php`, kita dapat melihat kode program yang digunakan untuk mengubah data
                    dari
                    database.
                    Berikut adalah penjelasan kode program tersebut:</p>
                <img class="" src="update.png" alt="" width="60%">
                <p>Pada kode program di atas, kita dapat melihat bahwa:</p>
                <ul>
                    <li>Fungsi `input`() digunakan untuk mencegah inputan karakter yang tidak sesuai.</li>
                    <li>Data dari form diambil menggunakan `$_POST`.</li>
                    <li>Query untuk mengambil data dari tabel `sevastok` berdasarkan `id_barang` dibuat
                        menggunakan
                        `select`
                        *.</li>
                    <li>Query untuk mengubah data di tabel `sevastok` dibuat menggunakan `update`.</li>
                    <li>Query di atas dijalankan menggunakan `mysqli_query()`.</li>
                    <li>Jika data berhasil diubah, maka akan diarahkan ke halaman `index.php`.</li>
                </ul>
                <h4>Delete</h4>
                <p>Pada file `index.php`, kita dapat melihat kode program yang digunakan untuk menghapus data
                    dari
                    database.
                    Berikut adalah penjelasan kode program tersebut:</p>
                <img class="" src="delete.png" alt="" width="60%">
                <p>Pada kode program di atas, kita dapat melihat bahwa:</p>
                <ul>
                    <li>Query untuk menghapus data dari tabel `sevastok` dibuat menggunakan `delete`.</li>
                    <li>Query di atas dijalankan menggunakan `mysqli_query()`.</li>
                    <li>Jika data berhasil dihapus, maka akan diarahkan ke halaman `index.php`.</li>
                </ul>
            </div>
            <!-- Pertemuan 7 Selesai -->

            <!-- Pertemuan 8 -->
            <div class="pertemuan-8">
                <h2>PERTEMUAN 8 Membuat Database</h2>
                <h3>Database</h3>
                <p>Database atau basis data dapat didefinisikan
                    atau diartikan sebagai kumpulan data yang
                    disimpan secara sistematis di dalam komputer
                    yang dapat diolah atau dimanipulasi
                    menggunakan perangkat lunak (software)
                    program atau aplikasi untuk menghasilkan
                    informasi.
                </p>
                <p>Basis data merupakan aspek yang sangat penting
                    dalam sistem informasi karena berfungsi sebagai
                    gudang penyimpanan data untuk diolah lebih
                    lanjut. Basis data menjadi penting karena dapat
                    mengorganisasi data, menghidari duplikasi data,
                    menghindari hubungan antar data yang tidak jelas
                    dan juga update yang rumit.
                </p>
                <h3>Structured Query Language (SQL)</h3>
                <p>Structured Query Language (SQL) adalah sistem manajemen
                    database relasional (RDBMS) yang dirancang untuk aplikasi
                    dengan arsitektur client/server. Istilah client, server, dan
                    client/server dapat digunakan untuk merujuk kepada konsep
                    yang sangat umum atau hal yang spesifik dari perangkat keras
                    atau perangkat lunak. Pada umumnya terdapat 3 (tiga) jenis perintah SQL yang bisa
                    digunakan oleh SQL, yaitu: DDL (Data Definition Language),
                    DML (Data Manipulation Language), dan DCL (Data Control
                    Language).
                </p>
                <h4>DDL atau Data Definition Language</h4>
                <p>DDL merupakan perintah SQL yang berhubungan dengan pendefinisian suatu struktur
                    database, dalam hal ini database dan table. Beberapa perintah dasar yang termasuk DDL ini
                    antara lain :
                <ul>
                    <li>CREATE : Seperti namanya, perintah create digunakan untuk membuat sesuatu, dalam
                        hal ini adalah database dan table.
                    </li>
                    <li>INSERT : Perintah insert digunakan untuk menambahkan data pada tabel yang
                        terdapat didalam database.</li>
                    <li>UPDATE : Update digunakan untuk mengubah data, atau memodifikasi data yang
                        terdapat didalam tabel.</li>
                    <li>DELETE : Perintah delete digunakan untuk menghapus data atau record didalam
                        table.
                    </li>
                </ul>
                </p>
                <h4>DCL atau Data Control Language</h4>
                <p>DCL merupakan perintah SQL yang berhubungan dengan manipulasi user dan hak
                    akses (priviledges). Perintah SQL yang termasuk dalam DCL antara lain :
                <ul>
                    <li>GRANT : Perintah grant digunakan untuk memberikan hak akses atau izin pada
                        user di database untuk dapat mengakses database tersebut. Selain itu perintah
                        grant juga dapat digunakan untuk menambahkan user atau pengguna baru di
                        DBMS.
                    </li>
                    <li>REVOKE : Perintah revoke adalah kebalikan dari perintah grant, perintah revoke
                        digunakan untuk menghapus atau atau mencabut izin hak akses.
                    </li>
                </ul>
                </p>
                <p>Berikut ini adalah beberapa kegunaan dari SQL diantaranya :
                <ul>
                    <li>SQL memungkinkan anda mengakses dan memanipulasi database</li>
                    <li>SQL dapat mengeksekusi query terhadap database</li>
                    <li>SQL dapat mengeksekusi query terhadap database</li>
                    <li>SQL dapat menyisipkan catatan dalam database</li>
                    <li>SQL dapat memperbarui catatan dalam database</li>
                    <li>SQL dapat menghapus catatan dari database</li>
                    <li>SQL dapat membuat database baru</li>
                    <li>SQL dapat membuat tabel baru dalam database</li>
                    <li>SQL dapat membuat prosedur yang tersimpan dalam database</li>
                    <li>SQL dapat membuat pemandangan dalam database</li>
                    <li>SQL dapat mengatur hak akses pada tabel, prosedur, dan pandangan</li>
                </ul>
                </p>
                <h3>MySQL dan MySQLi</h3>
                <p>Dalam bahasa pemrograman (khususnya PHP), jika Anda
                    menggunakan MySQL, terdapat dua extension yang bisa Anda
                    gunakan, yaitu MySQL extension dan MySQLi extension. Keduanya
                    sama-sama menghubungkan MySQL dengan bahasa pemrograman
                    yang Anda pakai.</p>
                <p>Penggunaan MySQL extension saat ini sudah tidak direkomendasikan.
                    Maka dari itu dikenalkan MySQLi extension sebagai penggantinya.
                    Pengembangan MySQLi bertujuan untuk mendukung berbagai macam
                    fitur terbaru MySQL server versi 4.1 dan setelahnya.
                </p>
                <p>Ketika Anda ingin menghubungkan database ke
                    MySQL, setidaknya ada empat koneksi yang
                    bisa dipakai yaitu menggunakan API,
                    Connector, Extension, dan Driver.</p>
            </div>
            <!-- Pertemuan 8 Selesai -->

            <!-- Pertemuan 9-12 -->
            <div class="pertemuan-9">
                <h2>PERTEMUAN 9-12 Mempelajari Dasar HTML</h2>
                <h3>Pengertian HTML</h3>
                <p>HTML adalah singkatan dari Hypertext Markup Language, HTML merupakan salah satu bahasa pengkodean
                    atau pemograman yang digunakan untuk membuat halaman website yang ditampilkan pada web browser.
                    Sebagian besar halaman yang kamu temukan pada internet kebanyakan menggunakan Bahasa HTML.</p>
                <h3>Sejarah Singkat HTML</h3>
                <p>HTML diciptakan oleh Sir Tim Berners-lee pada akhir tahun 1991 namun tidak dirilis secara resmi. Sir
                    Tim Berners-lee merilis HTML versi pertama pada tahun 1993 dengan tujuan untuk berbagi informasi
                    yang dapat dibaca dan diakses melalui web browser.
                    Hingga saat ini versi HTML sudah mencapai versi 5 yang dirilis pada tahun 2012, Versi HTML 5 ini
                    merupakan terusan dari perpanjangan versi HTML 4.01 yang sebelumnya digunakan oleh kebanyakan orang.
                </p>
                <h3>Kelebihan dan Kekurangan bahasa pemrograman HTML</h3>
                <p>Kelebihan Bahasa Pemograman HTML :
                <ol>
                    <li>Memiliki banyak sumber dan komunitas yang sangat besar.</li>
                    <li>Bersifat Open Source sehingga gratis untuk digunakan</li>
                    <li>Memiliki Bahasa Markup yang konsisten dan rapi</;>
                    <li>Mudah diintegrasikan dengan Bahasa backend seperti PHP , Node.js dan javascript</li>
                    <li>Bisa dijalankan oleh semua Browser.</li>
                    <li>Dapat dipelajari dengan mudah oleh web developer pemula.</li>
                </ol>
                </p>
                <p>Kekurangan Bahasa Pemograman HTML :
                <ol>
                    <li>Bahasa pemograman HTML hanya dapat diimplementasikan untuk halaman web static . jika ingin
                        menambah fitur dinamis, pengguna dapat menggunakan bahasa pemograman back-end seperti javascript
                        atau Bahasa pemograman back-end lainnya.</li>
                    <li>Terdapat fitur baru yang tidak dapat dijalankan dengan cepat oleh web browser.</li>
                    <li>Bahasa pemograman HTML tidak mendukung logic sehingga semua halaman website harus dibuat secara
                        terpisah.</>
                </ol>
                </p>
                <h3>Cara kerja bahasa pemrograman HTML</h3>
                <p>Pertama-tama kamu harus membuat dokumen HTML pada aplikasi editor HTML seperti Visual Studio,
                    Sublime
                    Text dan lain-lainnya, lalu menyimannya dengan format html atau htm. File HTML dibuat bisa
                    lebih
                    dari satu tergantung kebutuhan file yang akan diperlukan. File-file yang telah dibuat ini
                    berisi
                    Halaman Utama , kontak , isi Website dan lain-lain.
                    File HTML dapat dibuka oleh web browser seperti Google Chrome , Mozilla Firefox, Internet
                    Explore
                    dan masih banyak lagi. Kemudian, agar dapat diakses oleh banyak orang kamu harus menyewa
                    layanan
                    Hosting website dan mengupload file HTML pada halaman hosting yang dapat kamu akses pada
                    cpanel.
                    File HTML yang sudah terupload, maka browser akan merender file HTML menjadi halaman website
                    sehingga kamu dan pengunjung web lain dapat mengaksesnya melalui internet.
                </p>
            </div>
            <!-- Pertemuan 9-12 Selesai -->

            <!-- Pertemuan 13  -->
            <div class="pertemuan-13">
                <h2>PERTEMUAN 13 Model-View-Controller (MVC) dan Codeigniter</h2>
                <h3>KONSEP MVC PADA CODEIGNITER</h3>
                <p>Sebelum mengenal codeigniter, kita harus paham dulu, bahwa
                    terdapat 3 versi codeigniter, yaitu versi 2,3 dan 4. Yang sekarang
                    masih dikembangkan oleh codeigniter
                    Codeiginiter 3 dan codeigniter 4
                    Yang akan kita gunakan adalah codeigniter 3.
                </p>
                <p>Model-View-Controller (MVC) -> Alur Kerja Codeigniter :
                <ol>
                    <li>Mulai;</li>
                    <li>User mengirim request ke web;</li>
                    <li>File yang pertama kali dieksekusi adalah index.php; </>
                    <li>Lalu dari index.php, request akan diteruskan oleh routers.php;</li>
                    <li>routers.php akan mencari cache di server, apabila tedapat cache maka
                        cache itu yang akan dikirim sebagai balasan (response). Apabila tidak ada
                        cache barulah request diteruskan ke Controller;</li>
                    <li>Controller akan bertanggung jawab untuk mengambil data dari Model
                        dan me-rendernya ke dalam View dengan menggunakan library, plugin,
                        dan helper yang ada.</li>
                    <li>Hasil render (view) dikirim ke pengguna dan disimpan dalam cache,
                        apabila fitur cache aktif;</>
                    <li>Selesai.</li>
                </ol>
                </p>
            </div>
            <!-- Pertemuan 13 Selesai -->
        </div>
</body>

</html>



