
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $name           = $_POST['name'];
  $brand_id       = $_POST['brand_id'];
  $image          = $_FILES['image']['name'];
  $color          = $_POST['color'];
  $description    = $_POST['description'];
  $create_time    = $_POST['create_time'];
  $update_time    = $_POST['update_time'];
  $stock          = $_POST['stock'];
  

//cek dulu jika ada gambar produk jalankan coding ini
if($image != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['image']['tmp_name'];   
  //$angka_acak     = rand(1,999);
  $nama_gambar_baru = $image; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO Cars (name,brand_id,image,color,description,create_time,update_time,stock) VALUES ('$name', '$brand_id', '$image', '$color', '$description','$create_time','$update_time','$stock')";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='form_simpan.php';</script>";
            }
} else {
  $query = "INSERT INTO Cars (name,brand_id,image,color,description,create_time,update_time,stock) VALUES ('$name', '$brand_id', '$image', '$color', '$description','$create_time','$update_time','$stock')";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}