<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>

<head>
  <title>CRUD Mobil - DW</title>
  <?php require_once 'bootstrap.php'; ?>
  <style media="screen">
    .button {
      width: 95%;
      height: 30px;
      margin-top: 10px;

    }

    .left {
      float: left;
      display: inline-block;

    }

    .right {
      float: right;
      display: block;
    }

    .button ul a {
      padding: 5px;
      margin-top: 5px;
      background: darkgreen;
      color: white;
      border-radius: 8px;
    }
  </style>
</head>

<body>
  <div class="button">
    <ul class="left">
      <h1>Dealer Mobil</h1>
    </ul>
    <ul class="right">
      <a href="insert.php"> &nbsp; Add Mobil</a>
      <a href="insert_brand.php"> &nbsp; Add Brand</a>
      <a href="insert_customer.php"> &nbsp; Add Customer</a>
    </ul>
  </div>
  <br />
  <div class="container">
    <div class="row no-gutters">
      <?php
      $query = "SELECT * FROM Cars";
      $result = mysqli_query($conn, $query);
      //mengecek apakah ada error ketika menjalankan query
      if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
          " - " . mysqli_error($conn));
      }
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="col-md-4 mb-5 ml-5">
          <div class="card-deck">
            <div class="card  border-dark mb-3 " style="width: 8rem; ">
              <!-- <img src="">  -->
              <div class="card-body"><img src="images/<?php echo $row['image']; ?>" style="width: 210px; " style="text-align: center;">
                <p class="card-title" style="font-size: 30px;"><strong><?php echo $row['name']; ?></strong> </p>
              </div>
            </div>
          </div>
          <a href="lihat_produk.php?id=<?php echo $row['id']; ?>" style="padding: 8px 55px; background: navy; color: white; border-radius: 5px;">Beli</a>
        </div>

      <?php } ?>
    </div>
  </div>

</body>

</html>