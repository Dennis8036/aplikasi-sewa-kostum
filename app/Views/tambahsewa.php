<main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sewa Kostum</h5>

              <!-- General Form Elements -->
              <form  action="<?= base_url('Home/aksi_t_sewa') ?>" method="POST">

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Customer</label>
                  <div class="col-sm-10">
                    <select type="text" class="form-control" name="id_customer">
                        echo "<option>Pilih</option>";

                      <?php
                        foreach($manda as $erwin){
                          ?>
                          <option value="<?=$erwin->id_customer?>"><?=$erwin->
                          nama_customer?></option>
                        <?php }?>
                        </select>
                  </div>
                </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Nama Kostum</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="kostum">
   <option>Pilih</option>
   <option value="1">Kostum Adat</option>
   <option value="2">Kostum Karakter</option>
   <option value="3">Kostum Tradisional</option>



  </select>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="harga">
   <option>Pilih</option>
   <option value="1">150000</option>
   <option value="2">120000</option>
   <option value="3">110000</option>



  </select>
                  </div>

                   <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Durasi Sewa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Contoh 7 Hari, 30 Hari, 60 hari" name='durasi'>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Sewa</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_sewa'>
                  </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Ukuran</label>
                  <div class="col-sm-10">
 <select class="form-control" name="uk">

   <option>Pilih</option>
   <option value="1">S</option>
   <option value="2">M</option>
   <option value="3">L</option>
   <option value="4">XL</option>


  </select>
                  </div>
                                                          <?php
if(session()->get('level')==1)
{
  ?>
                 <button type="submit" class="btn btn-primary">Submit</button>
                                                                    <?php
}else{

}
?>

                                              <?php
if(session()->get('level')==2)
{
  ?>
                 <button type="submit" class="btn btn-success">Sewa</button>
                                                   <?php
}else{

}
?>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




  