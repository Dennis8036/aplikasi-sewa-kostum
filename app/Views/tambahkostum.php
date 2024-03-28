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
              <h5 class="card-title">Form Tambah Kostum</h5>

              <!-- General Form Elements -->
              <form  action="<?= base_url('Home/aksi_t_kostum') ?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Kostum</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='n'>
                  </div>
                </div>
                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='t'>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='h'>
                  </div>
                   <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='d'>
                  </div>
                </div>
            
                 <button type="submit" class="btn btn-primary">Submit</button>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




  