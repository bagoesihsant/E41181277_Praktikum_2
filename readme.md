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
