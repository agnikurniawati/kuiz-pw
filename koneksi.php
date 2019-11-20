<?php
   $servername  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "form";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

   if(!$conn){
       die ("Koneksi Gagal: ".mysqli_connect_error());
   }
   echo "Koneksi berhasil";
   mysqli_close($conn);
?>