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
   
   3. Setelah membuat file **_overview.php_**, buka file tersebut dalam text editor pilihan anda, kemudian ketikkan kode berikut :
      ```php
      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>" >

          <title>Hello, world!</title>
        </head>
        <body>
          <h1>Hello, world!</h1>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
        </body>
      </html>
      ```
   4. Setelah mengetikkan kode diatas, maka akan muncul tampilan seperti berikut :
      ![ImageDokumentasi4](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_005.png)
      
   5. Jika berhasil muncul tampilan seperti contoh, maka anda telah berhasil memanggil **_view_** melalui **_Controller_**. **_view_** adalah halaman yang ditampilkan kepada user melalui **_Controller_**.
   
## 7. _model_belajar.php_
   File ini memiliki fungsi yang sama dengan **_Controller Overview.php_**, namun memiliki beberapa method tambahan.
   
   1. Setelah selesai membuat dan mengedit **_overview.php_**, buka kembali folder **application/controllers** dan buat file **_model_belajar.php_**.
   ![ImageDokumentasi5](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_006.png)
   
   2. Dalam file **_model_belajar.php_** tambahkan baris kode berikut ini :
      ```php
      <?php
      defined('BASEPATH') OR exit('No direct script access allowed');

      class Model_belajar extends CI_Controller {

         function __construct(){
            parent::__construct();		
            $this->load->model('m_data');
         }

         function index()
         {
            $this->load->view('view_form_validation');
         }


         function download_file()
         {
            $this->load->view('view_download');
         }


         function file_download()
         {
            force_download('gambar/Screenshot-10.png',NULL);
         }

         function custom_library()
         {
            $this->librarytopek->nama_saya();
         }

         function custom_library_input($nama)
         {
            $this->librarytopek->nama_kamu($nama);
         }

         function cek_input()
         {
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('konfir_email','Konfirmasi email','required');

            if($this->form_validation->run() != false)
            {
               echo "Form Validation sudah oke";
            }else
            {
               $this->load->view('view_form_validation');
            }

         }

         function belajarUri()
         {
            echo "Ini adalah data ke 1, yaitu : ". $this->uri->segment(1)."</br>";
            echo "Ini adalah data ke 2, yaitu : ". $this->uri->segment(2)."</br>";
            echo "Ini adalah data ke 3, yaitu : ". $this->uri->segment(3)."</br>";
            echo "Ini adalah data ke 4, yaitu : ". $this->uri->segment(4)."</br>";
            echo "Ini adalah data ke 5, yaitu : ". $this->uri->segment(5)."</br>";
            echo "Ini adalah data ke 6, yaitu : ". $this->uri->segment(6)."</br>";
            echo "Ini adalah data ke 7, yaitu : ". $this->uri->segment(7)."</br>";
         }
         
         function user(){
            $data['user'] = $this->m_data->ambil_data()->result();
            $this->load->view('view_belajar',$data);
         }

      }
      ```
   3. Fungsi / Method **_download_file_** berfungsi untuk menampilkan **_view_** view_download.
   
   4. Fungsi / Method **_file_download_** berfungsi untuk melakukan download menggunakan method dari library **_download_** yang sudah dimuat melalui **_autoload.php_**. File yang di download dimasukkan letak nya melalui method **_force_download_**.
   
   5. Fungsi / Method **_custom_library_** berfungsi untuk menggunakan method dari library buatan sendiri, library tersebut akan dijelaskan nanti pada bagian berikutnya.
   
   6. Fungsi / Method **_custom_library_input($nama)_** berfungsi untuk menggunakan method dari library buatan sendiri, library tersebut akan dijelaskan nanti pada bagian berikutnya.
   
   7. Fungsi / Method **_cek_input_** berfungsi untuk melakukan validasi nilai yang dikirimkan oleh pengguna melalui **_view_** view_form_validation menggunakan library **_form_validation_** yang sudah dimuat melalui **_autoload.php_**.
   
   8. Method **_this->form_validation->set_rules()_** berfungsi untuk menentukan peraturan bagaimana input nanti, apakah wajib diisi atau tidak.
   
   9. Method **_this->form_validation->run()_** berfungsi untuk menjalankan validasi, apabila hasilnya **_false_** maka akan dikembalikan menuju **_view_** view_form_validation.php.
   
   10. Fungsi / Method **_belajarUri_** berfungsi untuk menampilkan data yang dikirmkan user melalui URL. Fungsi / Method ini akan menghasilkan tampilan seperti berikut ini :
       
       ![ImageDokumentasi10](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_014.png)
   
   11. Fungsi / Method **_user_** berfungsi untuk mengirimkan data yang telah diambil dari **_model_** m_data.php, penjelasan mengenai **_model_** akan dijelaskan pada bagian selanjutnya.

## 8. _m_data.php_
   File ini berfungsi sebagai **_Model_**, **_Model_** adalah file yang bertugas untuk mengambil, mengubah, dan menghapus data yang berada di database melalui perintah **_Controller_**.
   
   1. Setelah selesai membuat dan mengedit **_model_belajar.php_**, buka folder **application/model** kemudian buat file bernama **_m_data.php_**.
      ![ImageDokumentasi6](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_007.png)
      
   2. Kemudian ketikkan kode berikut ini kedalam **_m_data.php_**.
      ```php
      <?php
         class M_data extends CI_Model{
            function ambil_data()
            {
               return $this->db->get('user');
            }
         }      
      ?>
      ```
   3. Fungsi / Method **_ambil_data_**, berfungsi untuk mengambil data dari database menggunakan method get dari library **_database_** yang telah dimuat melalui **_autoload.php_** kemudian mengembalikan data yang sudah diambil menuju **_Controller_**.
   
   4. Method **_this->db->get()_**, befungsi untuk mengambil data dari tabel yang berada di database.
   
## 9. _view_form_validation.php_
   File ini berfungsi sebagai **_view_**. **_View_** adalah halaman yang akan ditampilkan kepada pengguna oleh Code Igniter melalui **_Controller_**.
   
   1. Setelah selesai membuat dan mengedit **_m_data.php_**, buka folder **application/views** kemudian buat file bernama **_view_form_validation.php_**.
      
      ![ImageDokumentasi7](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_008.png)
      
   2. Kemudian ketikkan kode berikut kedalam **_view_form_validation.php_**.
      ```php
      <!DOCTYPE html>
      <html>
      <head>
         <title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
      </head>
      <body>
         <h1>Membuat Form Validation dengan CodeIgniter</h1>

         <?php echo validation_errors(); ?>

         <?php echo form_open('model_belajar/cek_input'); ?>
            <label>Nama</label><br/>
            <input type="text" name="nama"><br/>
            <label>Email</label><br/>
            <input type="text" name="email"><br/>
            <label>Konfirmasi Email</label><br/>
            <input type="text" name="konfir_email"><br/>
            <input type="submit" value="Simpan">
         </form>
      </body>
      </html>
      ```
   3. Kode diatas akan menghasilkan tampilan seperti dibawah ini.
      
      ![ImageDokumentasi7](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_011.png)
      
   4. Fungsi **_validation_errors_** befungsi untuk menampilkan pesan error apabila user tidak mengisi form sesuai dengan aturan yang ada pada **_Controller model_bealajar.php_**. Apabila terjadi error maka akan tampil seperti berikut :
      
      ![ImageDokumentasi8](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_012.png)
      
   5. Apabila seluruh form diisi maka akan muncul tampilan seperti berikut :
   
      ![ImageDokumentasi9](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_013.png)
      
## 10. _view_belajar.php_
   File ini berfungsi sebagai **_view_**.
   
   1. Setelah selesai mengedit **_view_form_validation.php_**, buka folder **application/views** kemudian buat file baru bernama **_view_belajar.php_**.
      
      ![ImageDokumentasi11](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_010.png)
      
   2. Kemudian ketikkan kode seperti berikut ini :
      ```php
      <!DOCTYPE html>
      <html>
      <head>
         <title>Menghubungkan codeigniter dengan database mysql</title>
      </head>
      <body>
         <h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
         <table border="1">
            <tr>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Pekerjaan</th>
            </tr>
            <!-- Berikut ini adalah fungsi yang digunakan untuk melakukan
                looping / perulangan untuk mengambil data yang dikirim oleh
                controller.
             -->
            <?php foreach($user as $u){ ?>
            <tr>
            <!-- Berikut ini adalah cara untuk menampilkan data yang dikirim oleh controller. -->
               <td><?php echo $u->nama ?></td>
               <td><?php echo $u->alamat ?></td>
               <td><?php echo $u->pekerjaan ?></td>
            </tr>
            <?php } ?>
         </table>
      </body>
      </html>
      ```
   3. Kode diatas akan menghasilkan tampilan sebagai berikut :
      
      ![ImageDokumentasi11](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_015.png)
      
   4. Fungsi **_foreach_** adalah melakukan perulangan untuk setiap data yang dikirim melalui **_Controller_** yang kemudian akan ditampilkan menggunakan **_echo_**.
   
## 11. _view_download.php_
   File ini berfungsi sebagai **_view_**.
   
   1. Setelah selesai mengedit **_view_belajar.php_**, buka folder **application/views** kemudian buat file **_view_download.php_**.
      
      ![ImageDokumentasi12](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_009.png)
      
   2. Kemudian ketikkan kode berikut ini :
      ```php
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
      </head>
      <body>

          <h1> Selamat Datang, Klik link dibawah ini untuk mendownload file </h1>

          <a href="<?php echo base_url();?>index.php/model_belajar/file_download/"> Download </a>

      </body>
      </html>
      ```
   3. Dalam **_anchor_** akan diarahkan menuju URL yang kemudian akan melakukan proses download.
   
   4. Setelah memasukkan kode tersebut, maka muncul tampilan seperti ini :
      
      ![ImageDokumentasi13](https://github.com/bagoesihsant/E41181277_Praktikum_2/blob/master/img_dokumentasi/Screenshot_Dokumentasi_WorkshopPK2_016.png)
      
## 12. _librarycustom.php_
   File ini berfungsi sebagai **_library_** yang dibuat sendiri oleh pengguna serta berisi Method / Fungsi buatan user sendiri.
   
   1. Setelah selesai mengedit **_view_download.php_**, buka folder **application/libraries** kemudian buat file baru bernama **_librarycustom.php_**.
   
   2. Kemudian ketikkan kode berikut :
      ```php
      <?php
      
       class Librarycustom
       {
           function nama_saya()
           {
               echo "Nama saya Bagoes Ihsan Taufiqurrahman";
           }

           function nama_kamu($nama)
           {
               echo "Nama kamu adalah ".$nama;
           }
       }    

      ?>
      ```
  3. Kode diatas berfungsi untuk membuat sebuah Class baru bernama **_librarycustom_** dan akan digunakan sebagai **_library_**.
  
  4. Fungsi / Method **_nama_saya_** akan mencetak tulisan **_"Nama saya Bagoes Ihsan Taufiqurrahman"_**.
  
  5. Fungsi / Method **_nama_kamu()_** akan mencetak tulisan **_"Nama kamu adalah"_** yang kemudian diikuti oleh apa yang pengguna inputkan.
