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
              <h5 class="card-title">History Sewa</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                                          <?php
              
if(session()->get('level')==3)
{
  ?>
              <a href="<?= base_url('Home/tambahsewa') ?>">
    <button class="btn btn-warning">Update</button>
    </a>
                  <?php
}else{

}
?>

           
              <table class="table datatable">
                <thead>
                     <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Nama Kostum</th>
                <th>Harga</th>
                <th>Durasi Sewa</th>
                <th>Tanggal Sewa</th>
                <th>Ukuran</th>
                <th>Aksi</th>
            </tr>
 
        </thead>
        <tbody>
                <?php 

            $no=1;
            foreach($manda as $erwin){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $erwin->nama_customer?></td>
                <td><?= $erwin->nama_kostum?></td>
                <td><?= $erwin->harga?></td>
                <td><?= $erwin->durasi_sewa?></td>
                <td><?= $erwin->tanggal_sewa?></td>
                <td><?= $erwin->ukuran?></td>
                  

               
                <td>
                    <a href="<?= base_url('Home/e_sewa/'.$erwin->id_sewa)?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                    <a href="<?= base_url('Home/hapus_sewa/'.$erwin->id_sewa)?>">
                    <button class="btn btn-danger">Hapus</button>
                    </a>

                </td>

            </tr>
        <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


           
              
   
       