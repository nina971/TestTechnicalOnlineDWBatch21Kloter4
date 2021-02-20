<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM Cars WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Mobil - DW</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
        <br><br>
      <center>
        <h1>Detail Mobil <?php echo $data['name']; ?></h1>

      <center>
        
      <form method="POST"  enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Mobil</label>
          <input type="text" name="name" value="<?php echo $data['name']; ?>" autofocus="" required="" disabled/>
        </div>

        <div>
          <label>Brand</label>
          <select  disabled>
                    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM Cars";
      $result = mysqli_query($conn, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
      }

      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
                        <option value="<?=$row['id']?>" <?php if ($row['id'] == $data['brand_id']) echo 'selected'; ?>><?=$row['name']?></option>
                        <?php
                    }
                    ?>
                </select>
        </div>

        <div>
          <label>Gambar Mobil</label>
          <img src="images/<?php echo $data['image']; ?>" style="width: 180px;float: left;margin-bottom: 5px;">
        </div>

        <div>
          <label>Warna</label>
         <input type="text"  required="" value="<?php echo $data['color']; ?>" disabled/>
        </div>

        <div>
          <label>Deskripsi</label>
         <textarea  id="" cols="30" rows="10" disabled><?php echo $data['description']; ?></textarea>
        </div>

        <div>
          <label>Create Time</label>
         <input type="text"  required="" value="<?php echo $data['create_time']; ?>"disabled/>
        </div>

        <div>
          <label>Update Time</label>
         <input type="text"  required="" value="<?php echo $data['update_time']; ?>"disabled/>
        </div>

        <div>
          <label>Stock</label>
         <input type="text"  required="" value="<?php echo $data['stock']; ?>"disabled/>
        </div>

       
        
        </section>
      </form>
  </body>
</html>