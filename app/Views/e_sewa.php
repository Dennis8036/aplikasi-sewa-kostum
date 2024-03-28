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
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->

<div class="container">
  <form action="<?= base_url('Home/aksi_e_sewa') ?>" method="POST">
  
      <div class="mb-3 mt-3">
    <label for="nama" class="form-label">ID Customer</label>
    <select class="form-control" name="t">
        <?php foreach ($manda as $customer) : ?>
            <option value="<?= $customer->id_customer ?>" <?= $customer->id_customer == $satu->id_customer ? 'selected' : '' ?>>
                <?= $customer->nama_customer ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama Kostum</label>
    <select class="form-control" name="e">
        <?php foreach ($mat as $customer) : ?>
            <option value="<?= $customer->id_kostum ?>" <?= $customer->id_kostum == $satu->id_kostum ? 'selected' : '' ?>>
                <?= $customer->nama_kostum ?>
            </option>
        <?php endforeach; ?>
    </select>
      </div>
  
  <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Harga</label>
            <select class="form-control" name="r">
        <?php foreach ($mas as $customer) : ?>
            <option value="<?= $customer->id_kostum ?>" <?= $customer->id_kostum == $satu->id_kostum ? 'selected' : '' ?>>
                <?= $customer->harga ?>
            </option>
        <?php endforeach; ?>
    </select>
      </div>

 <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Durasi Sewa</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Durasi Sewa"   name="i" value="<?= $satu->durasi_sewa ?>">
      </div>

       <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Tanggal Sewa</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Tanggal Sewa"   name="m" value="<?= $satu->tanggal_sewa ?>">
      </div>

            <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Ukuran</label>
        <select type="text" class="form-control" id="nama" placeholder="Enter Ukuran"   name="a" value="<?= $satu->ukuran ?>">
           <option>Pilih</option>
   <option value="1">M</option>
   <option value="2">S</option>
   <option value="3">L</option>
   <option value="4">XL</option>



  </select>
      </div>


      <input type="hidden" name="id" value="<?= $satu->id_sewa ?>">
  
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


  
  