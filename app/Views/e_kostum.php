<main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Kostum</h5>

              <!-- General Form Elements -->

<div class="container">
  <form action="<?= base_url('Home/aksi_e_kostum') ?>" method="POST">
  
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama kostum</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama Barang"   name="nama" value="<?= $satu->nama_kostum ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="inputEmail" class="form-label">Harga</label>
        <input type="text" class="form-control" id="kode" placeholder="Enter Tanggal"   name="tgl" value="<?= $satu->harga ?>">
      </div>
  
  <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Harga Awal"   name="harga" value="<?= $satu->deskripsi ?>">
      </div>

 <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Stok</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Deskripsi Barang"   name="deskripsi" value="<?= $satu->stok ?>">
      </div>


      <input type="hidden" name="id" value="<?= $satu->id_kostum ?>">
  
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


  
  