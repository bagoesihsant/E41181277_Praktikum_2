<?php


    /**
     * 
     * File ini merupakan sebuah class yang dapat digunakan sebagai library
     * oleh Code Igniter apabila dimuat menggunakan fungsi load atau dituliskan
     * dalam autoload.php
     * 
     */

    class Librarytopek
    {

        // Fungsi ini berfungsi untuk menampilkan nama pembuat library
        function nama_saya()
        {
            echo "Nama saya Bagoes Ihsan Taufiqurrahman";
        }

        // Fungsi ini berfungsi untuk menampilkan nama yang diinputkan oleh user
        // melalui method nama_kamu
        function nama_kamu($nama)
        {
            echo "Nama kamu adalah ".$nama;
        }

    }    

?>