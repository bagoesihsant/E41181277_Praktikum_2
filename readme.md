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
   4. Kemudan dalam **_autoload.php_**, temukan kode
      ```php
      $autoload['helper'] = array();
      ```
   5. Kemudian tambahkan **_helper_** seperti **_url,html, dan download_** kedalam baris kode tersebut.
      ```php
      $autoload['helper'] = array('url','html','download');
      ```
