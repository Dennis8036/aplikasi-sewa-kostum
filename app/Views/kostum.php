<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kostum</h1>
      <nav>
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a class="dropdown-item d-flex align-items-center" href="<?= base_url('Home/dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                            <?php
              
if(session()->get('level')==1)
{
  ?>
              <a href="<?= base_url('Home/tambahkostum') ?>">
    <button class="btn btn-warning">+ Tambah</button>
    </a>
              <?php
}else{

}
?>
              <?php

if(session()->get('level')==2)
{
  ?>
              <a href="<?= base_url('Home/tambahsewa') ?>">
    <button class="btn btn-warning">Sewa</button>
    </a>
              <?php
}else{

}
?>


<?php
if(session()->get('level')==1)
{
  ?>
    <a class="btn btn-danger" href=" <?php echo base_url('Home/pdfkostum')?>"> <i class=
      "fa fa-file"></i>Export PDF</a>
                <?php
}else{

}
?>




<?php
if(session()->get('level')==3)
{
  ?>
    <a class="btn btn-danger" href=" <?php echo base_url('Home/excel')?>"> <i class=
      ""></i>Export Excel</a>
          <?php
}else{

}
?>
           
              <table class="table datatable">
                <thead>
                     <tr>
                <th>No</th>
                <th>Nama Kostum</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                                             <?php
if(session()->get('level')==1)
{
  ?>
                <th>Aksi</th>
                                                  <?php
}else{

}
?>

            </tr>
 
        </thead>
        <tbody>
                <?php 

            $no=1;
            foreach($manda as $erwin){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $erwin->nama_kostum?></td>
                <td><?= $erwin->harga?></td>
                <td><?= $erwin->deskripsi?></td>
                <td><?= $erwin->stok?></td>
                  




                </td>
                             <?php
if(session()->get('level')==1)
{
  ?>
                <td>
                    <a href="<?= base_url('Home/e_kostum/'.$erwin->id_kostum)?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                    <a href="<?= base_url('Home/hapus_kostum/'.$erwin->id_kostum)?>">
                    <button class="btn btn-danger">Hapus</button>
                    </a>
                                  <?php
}else{

}
?>


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


           
              
   
       