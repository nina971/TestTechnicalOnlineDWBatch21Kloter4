<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Mobil </title>
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
      <center>
        <h1>Tambah Mobil</h1>
      <center>
      <form method="POST" action="proses_insert.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Mobil</label>
          <input type="text" name="name" autofocus="" required="" />
        </div>


        <div>
          <label>Brand</label>
         <select name="brand_id">
                    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM Brand";
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
                        <option value="<?=$row['id']?>"><?=$row['name']?></option>
                        <?php
                    }
                    ?>
                </select>
        </div>

        <div>
          <label>Gambar Mobil</label>
         <input type="file" name="image" required="" />
        </div>

        <div>
          <label>Color</label>
         <input type="text" name="color" required="" />
        </div>

        <div>
          <label>Deskripsi</label>
         <input type="text" name="description" />
        </div>

        <div>
          <label>Create Time</label>
         <input type="text" name="create_time" required="" />
        </div>

        <div>
          <label>Update Time</label>
         <input type="text" name="update_time" required="" />
        </div>

        <div>
          <label>Stock</label>
         <input type="text" name="stock" required="" />
        </div>


        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>