<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\Gudang;

class Home extends BaseController
{
   public function dashboard()
	{
        if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
        echo view('header');
        echo view('menu');
		echo view('dashboard');
		echo view('footer');
    }else{
		return redirect()->to('Home/login');
	}
	}
	public function dashboardcustomer()
	{
        if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
        echo view('header');
        echo view('menu');
		echo view('dashboardcustomer');
		echo view('footer');
    }else{
		return redirect()->to('Home/login');
	}
	}
	public function login()
{
	echo view('header');
	echo view('login');

}
public function aksi_login()
{

$u=$this->request->getPost('username');
$p=$this->request->getPost('password');

$model = new Gudang();
$where=array(
     'username' => $u,
     'password' => $p
);

$model = new Gudang();
$cek = $model->getWhere('tb_admin',$where);
$cek2 = $model->getWhere('tb_customer',$where);


if ($cek>0){
	session()->set('id',$cek->id_admin);
	session()->set('username',$cek->username);
	session()->set('level',$cek->id_level);
	return redirect()->to('Home/dashboard');


}elseif($cek2>0){
	session()->set('id',$cek2->id_customer);
	session()->set('username',$cek2->username);
	session()->set('level',$cek2->id_level);
	return redirect()->to('Home/dashboard');
        
        return redirect()->to('Home/dashboard');
    } else {
        return redirect()->to('Home/login');
    }
}
	   public function kostum()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_kostum');
        echo view('header');
        echo view('menu');
		echo view('kostum',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}

}
        public function e_kostum($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_kostum'=>$id);

		$data['satu']=$model->getWhere('tb_kostum',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_kostum',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
 public function aksi_e_kostum()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_kostum'=>$id);

		$isi = array(
		'nama_kostum' => $a,
		'harga' => $b,
		'deskripsi' => $c,
		'stok' => $d
	

		);

		$model->edit('tb_kostum', $isi, $where);
		return redirect()->to('Home/kostum');		

	}
		public function hapus_kostum($id){
		$model = new Gudang();
		$where=array('id_kostum'=>$id);
		$model->hapus('tb_kostum',$where);
		return redirect()->to('Home/kostum');

      }
      	  public function tambahkostum()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_kostum','id_kostum');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahkostum',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
	public function aksi_t_kostum()
	{
		$model = new Gudang();
		$a = $this->request->getPost('n');
		$b = $this->request->getPost('t');
	    $c = $this->request->getPost('h');
	    $d = $this->request->getPost('d');

		$isi = array(
		'nama_kostum' => $a,
		'harga' => $b,
		'deskripsi' => $c,
		'stok' => $d

		);

		$model->tambah('tb_kostum',$isi);
		return redirect()->to('Home/kostum');		


}
public function tambahadmin()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_admin','id_admin');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahadmin',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}
}
		public function aksi_t_admin()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_adm');
		$b = $this->request->getPost('us');
	    $c = $this->request->getPost('pw');
	    $d = $this->request->getPost('idl');

		$isi = array(
		'nama_admin' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d

		);

		$model->tambah('tb_admin',$isi);
		return redirect()->to('Home/admin');		


	}
	public function admin()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_admin');
        echo view('header');
        echo view('menu');
		echo view('admin',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}

}
public function e_admin($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_admin'=>$id);

		$data['satu']=$model->getWhere('tb_admin',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_admin',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
    public function aksi_e_admin()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_admin'=>$id);

		$isi = array(
		'nama_admin' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d
	

		);

		$model->edit('tb_admin', $isi, $where);
		return redirect()->to('Home/admin');		

	}
	      public function hapus_admin($id){
		$model = new Gudang();
		$where=array('id_admin'=>$id);
		$model->hapus('tb_admin',$where);
		return redirect()->to('Home/admin');

      }
      	public function customer()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_customer');
        echo view('header');
        echo view('menu');
		echo view('customer',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}
}
public function tambahcustomer()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_customer','id_customer');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahcustomer',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
	public function aksi_t_customer()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_adm');
		$b = $this->request->getPost('us');
	    $c = $this->request->getPost('pw');
	    $d = $this->request->getPost('idl');

		$isi = array(
		'nama_customer' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d

		);

		$model->tambah('tb_customer',$isi);
		return redirect()->to('Home/login');		


	}
	 public function e_customer($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_customer'=>$id);

		$data['satu']=$model->getWhere('tb_customer',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_customer',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
	 public function aksi_e_customer()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_customer'=>$id);

		$isi = array(
		'nama_customer' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d
	

		);

		$model->edit('tb_customer', $isi, $where);
		return redirect()->to('Home/customer');		

	}
	        public function hapus_customer($id){
		$model = new Gudang();
		$where=array('id_customer'=>$id);
	$model->hapus('tb_customer',$where);
		return redirect()->to('Home/customer');

      }
        public function sewa()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->joinnelson('tb_sewa','tb_kostum','tb_customer','tb_sewa.id_kostum=tb_kostum.id_kostum','tb_sewa.id_customer=tb_customer.id_customer','tb_sewa.id_sewa');
        echo view('header');
        echo view('menu');
		echo view('sewa',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}
}
public function tambahsewa()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['manda'] = $model->tampil('tb_customer', 'id_customer');
		$data['mad'] = $model->tampil('tb_sewa', 'id_sewa');
		$data['mat'] = $model->tampil('tb_kostum', 'id_kostum');
		

	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahsewa',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
		public function aksi_t_sewa()
	{
		$model = new Gudang();
		$a = $this->request->getPost('id_customer');
		$b = $this->request->getPost('kostum');
	  
	    $c = $this->request->getPost('durasi');
	    $d = $this->request->getPost('tgl_sewa');
	    $e = $this->request->getPost('uk');

		$isi = array(
		'id_customer' => $a,
		'id_kostum' => $b,
		
		'durasi_sewa' => $c,
		'tanggal_sewa' => $d,
		'ukuran' => $e

		);

		$model->tambah('tb_sewa',$isi);
		return redirect()->to('Home/dashboardcustomer');		


	}
public function e_sewa($id) {
    if (session()->get('level') > 0) {
        $model = new Gudang();
        $where = array('id_sewa' => $id);

        $data['satu'] = $model->getWhere('tb_sewa', $where);
        $data['manda'] = $model->tampil('tb_customer', 'id_customer');
        $data['mat'] = $model->tampil('tb_kostum', 'id_kostum');
        $data['mas'] = $model->tampil('tb_kostum', 'id_kostum');
         $data['mar'] = $model->tampil('tb_sewa', 'id_sewa');


        echo view('header');
        echo view('menu', $data);
        echo view('e_sewa', $data);
        echo view('footer');
    } else {
        return redirect()->to('Home/login');
    }
}

public function aksi_e_sewa() {
    $model = new Gudang();
    $id = $this->request->getPost('id');
    $a = $this->request->getPost('t');
    $b = $this->request->getPost('e');
    $c = $this->request->getPost('r');
    $d = $this->request->getPost('i');
    $e = $this->request->getPost('m');
    $f = $this->request->getPost('a');

    $where = array('id_sewa' => $id);

    $isi = array(
        'id_customer' => $a,
        'id_kostum' => $b,
        'id_kostum' => $c,
        'durasi_sewa' => $d,
        'tanggal_sewa' => $e,
        'ukuran' => $f
    );

    $model->edit('tb_sewa', $isi, $where);
    return redirect()->to('Home/sewa');
}
		public function hapus_sewa($id){
		$model = new Gudang();
		$where=array('id_sewa'=>$id);
	$model->hapus('tb_sewa',$where);
		return redirect()->to('Home/sewa');

      }

public function pdfkostum()
{
//    if(session()->get('id_level')>0){
    $model = new Gudang();

     $data ['manda'] = $model ->joinnelson('tb_sewa','tb_kostum','tb_customer','tb_sewa.id_kostum=tb_kostum.id_kostum','tb_sewa.id_customer=tb_customer.id_customer','tb_sewa.id_sewa');

    return view('pdfkostum', $data);

//    }else{
//     return redirect()->to('Home/login');
//    } 
}
}