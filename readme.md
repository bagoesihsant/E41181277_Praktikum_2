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
   
   1. Setelah selesai instalasi Code Igniter, buka folder **application/confing**       kemudian buka **_autoload.php_**.
   
   2. Dalam **_autoload.php_**, temukan kode 
      ```php
      $autoload['libraries'] = array();
      ```
   3. Kemudian tambahkan **_library_** seperti **_database dan form_validation_** kedalam baris kode tersebut.
      ```php
      $autoload['libraries'] = array('database','form_validation');
      ```
   4. Fungsi bari baris kode diatas adalah memuat library **_database_** yang berfungsi untuk melakukan koneksi dan seluruh proses yang berhubungan dengan database dan **_form_validation_** berfungsi untuk membuat sebuah form beserta validasinya.
   
   5. Kemudan dalam **_autoload.php_**, temukan kode
      ```php
      $autoload['helper'] = array();
      ```
   6. Kemudian tambahkan **_helper_** seperti **_url,html, dan download_** kedalam baris kode tersebut.
      ```php
      $autoload['helper'] = array('url','html','download');
      ```
      
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
    
