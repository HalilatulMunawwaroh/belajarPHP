<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DonatDITA.Bali</title>
    <!-- header -->
    <?php
      include 'page-header/header.php';
    ?>
    <style>
    .error {color: #FF0000;}
    </style>
    
  </head>

  <body>
    <!-- navbar top -->
    <?php
      include 'page-navbar-top/navbar-top.php';
    ?>

    <!-- form -->
    <section id="order">
      <div class="container pb-5 pt-5">
        <div class="row text-center pt-5 mb-4">
          <div class="col fw-bold" style="color: #65350F;">
            <h2>Form Pemesanan</h2>
          </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-md-8" style="color: #65350F;">
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" style="border: 2px solid #65350F;">
                </div>
                <div class="col-md-6">
                  <label for="no" class="form-label">No HP</label>
                  <input type="text" class="form-control" id="no" style="border: 2px solid #65350F;">
                </div>
                <div class="col-md-4">
                  <label for="kecamatan" class="form-label">Kecamatan</label>
                  <input type="text" class="form-control" id="kecamatan" style="border: 2px solid #65350F;"> 
                </div>
                <div class="col-md-4">
                  <label for="desa" class="form-label">Desa</label>
                  <input type="text" class="form-control" id="desa" style="border: 2px solid #65350F;">
                </div>
                <div class="col-md-2">
                  <label for="rw" class="form-label">RW</label>
                  <input type="text" class="form-control" id="rw" style="border: 2px solid #65350F;">
                </div>
                <div class="col-md-2">
                  <label for="rt" class="form-label">RT</label>
                  <input type="text" class="form-control" id="rt" style="border: 2px solid #65350F;">
                </div>
                <div class="col-md-6">
                  <label for="pilihmenu" class="form-label">Menu</label>
                  <select id="pilihmenu" class="form-select" style="color: #65350F; border: 2px solid #65350F;">
                    <option selected>Masukkan Pilihan Menu</option>
                    <option>Donut Chocolate With Topping Oreo</option>
                    <option>Donut Chocolate With Topping Marsmellow</option>
                    <option>Donut Chocolate With Topping Peanuts</option>
                    <option>Donut Chocolate With Topping Glaze Matcha</option>
                    <option>Donut Chocolate With Topping Glaze Strawberry</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="jumlah" class="form-label">Jumlah(/box)</label>
                  <input type="text" class="form-control" id="jumlah" style="border: 2px solid #65350F;">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-center pt-3">
                  <button type="submit" class="btn btn-lg text-white" style="background-color: #65350F;">Pesan</button>
                </div>
              </form>
            </div>
        </div>
    <!--   Akhir form   -->
    
    <!--   Footer   -->
    <?php
      include 'page-navbar-bottom/navbar-bottom.php';
    ?>
    <!--   Akhir Footer   -->

  </body>
</html>




