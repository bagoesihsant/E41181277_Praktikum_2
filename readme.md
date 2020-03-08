# Dokumentasi Praktikum 2 Workshop Web Framework

Berikut ini adalah dokumentasi praktikum 2 workshop web framework.

## Requirements

- PHP 7.2.28 atau lebih tinggi
- XAMPP 7.2.28 atau lebih tinggi
- Code Igniter 3.1.11
- Visual Studio Code atau text editor lainnya

## Instalasi

- Download Code Igniter [CodeIgniter](https://codeigniter.com/en/download).
- Ekstrak Code Igniter kedalam folder yang telah dibuat.
- Buka folder yang berisi Code Igniter dengan Text Editor pilihan anda.

## Penggunaan

## 1. _autoload.php_
   File ini berfungsi untuk memuat seluruh **_library_** yang ada di dalam Code Igniter.
   
   1. Setelah selesai instalasi Code Igniter, buka folder **application/confing** kemudian buka **_autoload.php_**.
   
   2. Dalam **_autoload.php_**, temukan kode 
      ```php
      $autoload['libraries'] = array();
      ```
   3. Kemudian tambahkan **_library_** seperti **_database dan form_validation_** kedalam baris kode tersebut.
      ```php
      $autoload['libraries'] = array('database','form_validation');
      ```
   4. Fungsi bari baris kode diatas adalah memuat library **_database_** dan **_form_validation_**.
   
   5. Kemudan dalam **_autoload.php_**, temukan kode
      ```php
      $autoload['helper'] = array();
      ```
   6. Kemudian tambahkan **_helper_** seperti **_url,html, dan download_** kedalam baris kode tersebut.
      ```php
      $autoload['helper'] = array('url','html','download');
      ```
   7. Fungsi dari baris kode tersebut adalah memuat library **_url, html, dan download_**.
      
## 2. _config.php_
   File ini berfungsi sebagai konfigurasi Code Igniter yang sudah anda install kedalam folder anda.
   
   1. Setelah selesai mengisi **_autoload.php_**, buka folder **application/config** kemudian buka **_config.php_**.
   
   2. Dalam **_config.php_**, temukan kode
      ```php
      $config['base_url'] = '';
      ```
   3. Kemudian tambahkan **_URL_** atau link kalian kedalam kode tersebut.
      ```php
      $config['base_url'] = 'https://www.contohlinkamu.com';
      ```
   4. Fungsi dari baris kode diatas adalah mempermudah developer mengatur url ketika memuat resource atau mengatur url untuk berpindah halaman.
   
## 3. _database.php_
   File ini berfungsi sebagai konfigurasi database yang akan kita gunakan.
   
   1. Setelah selesai mengisi **_config.php_**, buka folder **apllication/config** kemudian buka **_database.php_**.
   
   2. Dalam **_database.php_**, temukan kode
      ```php
      $db['default'] = array(
            'dsn'	=> '',
            'hostname' => 'localhost',
            'username' => '',
            'password' => '',
            'database' => '',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
      );
      ```
   3. Kemudian tambahkan konfigurasi server berisi database yang akan digunakan, dengan memasukkan username server, dan password ( bila ada ), kemudian nama database yang akan digunakan.
   
   4. Contoh kode :
      ```php
      $db['default'] = array(
               'dsn'	=> '',
               'hostname' => 'localhost',
               'username' => 'root',
               'password' => '*****',
               'database' => 'contohdb',
               'dbdriver' => 'mysqli',
               'dbprefix' => '',
               'pconnect' => FALSE,
               'db_debug' => (ENVIRONMENT !== 'production'),
               'cache_on' => FALSE,
               'cachedir' => '',
               'char_set' => 'utf8',
               'dbcollat' => 'utf8_general_ci',
               'swap_pre' => '',
               'encrypt' => FALSE,
               'compress' => FALSE,
               'stricton' => FALSE,
               'failover' => array(),
               'save_queries' => TRUE
         );
      ``` 
   5. Fungsi dari baris kode diatas adalah menyambungkan Code Igniter dengan server dan database yang akan digunakan.
   
## 4. _routes.php_
   File ini berfungsi mengatur seluruh **_routing_** atau pengarahan URL yang ada di Code Igniter.
   
   1. Setelah selesai mengisi **_database.php_**, buka folder **application/config** dan temukan **_routes.php_**.
   
   2. Dalam **_routes.php_**, temukan baris kode berikut :
      ```php
      $route['default_controller'] = 'welcome';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      ```
   3. Kemudian tambahkan baris kode berikut ini :
      ```php
      $route['default_controller'] = 'welcome';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      $route['admin'] = 'admin/overview';
      ```
   4. Fungsi dari baris kode tersebut, adalah menampilkan fungsi **_overview_** yang ada pada controller **_admin_** apabila user mengakses admin dalam URL browser. Penjelasan lebih lanjut akan ada setelah ini.
   
## 5. _Overview.php_
   File ini berfungsi sebagai **_Controller_**. **_Controller_** adalah file dalam Code Igniter yang berfungsi untuk menghubungkan **_View_** dan **_Model_**. Penjelasan mengenai **_View_** dan **_Model_** akan dibahas di bagian setelah **_Controller_** ini.
   
   1. Setelah selesai mengedit **_routes.php_**, buka folder **application/controllers** kemudian buat file baru bernama **_Overview.php_**.
      ![ImageDokumentasi](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_002.png)
   
   2. Setelah selesai membuat **_Overview.php_**, buka file tersebut dalam text editor pilihan anda, dan ketikkan kode berikut :
      ```php
      <?php
      
         class Overview extends CI_Controller{
         
            public function __construct()
            {
               parent::__construct();
            }
            
            public function index()
            {
               $this->load->view('admin/overview');
            }
         
         }
      
      ?>
      ```
   3. Contoh kode tersebut adalah fungsi - fungsi atau method yang utama dalam **_Controller_** Code Igniter. Method **___construct()_** berfungsi sebagai method yang pertama kali dijalankan sebelum method lainnya, method **___construct()_** juga bisa disebut induk.
   
   4. Fungsi / Method **_index()_** adalah sebagai method pertama yang diakses oleh browser, sama seperti ketika membuka folder berisi index.html, maka file yang pertama dijalankan atau dicari adalah index.

## 6. _overview.php_
   File ini memliki nama yang sama dengan **_Overview.php_** namun memiliki fungsi yang berbeda karena berada dalam folder **_views_**. 
   
   1. Setelah membuat file **_Overview.php_** pada folder **application/controllers**, buka folder **application/views** kemudian buat folder **admin**.
   ![ImageDokumentasi2](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_003.png)
   
   2. Setelah membuat folder **admin**, buat file **_overview.php_** dengan huruf awalan kecil dalam folder **admin**.
   ![ImageDokumentasi3](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_004.png)
