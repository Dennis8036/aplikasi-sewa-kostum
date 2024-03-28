<?php

namespace App\Models;
use CodeIgniter\Model;


class Gudang extends Model{
   public function tampil($tabel	){ // ,$id){
	 return $this->db->table($tabel)
	                 // ->orderby($id, 'asc')
	                 ->get()
	                 ->getResult();
	}
    public function tambah($tabel,$isi){
	 return $this->db->table($tabel)
	                 ->insert($isi);
}
public function joinWhere($tabel,$tabel2, $on,$where){
	 return $this->db->table($tabel , $where)
	                 ->join($tabel2, $on,'left')
	                 ->get()
	                 ->getRow();
}
public function join($tabel,$tabel2, $on){
	 return $this->db->table($tabel)
	                 ->join($tabel2, $on,'left')
	                 // ->orderby($id,'desc')
	                 ->get()
	                 ->getResult();
	                  // return $this->db->query('Select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
	                  // ->getResult();
}
    public function edit($tabel,$isi,$where){
	 return $this->db->table($tabel)->update($isi,$where);
	         
}
    public function hapus($tabel,$where){
     return $this->db->table($tabel)
                     ->delete($where);
	           
	          
}
    public function getWhere($tabel,$where){
	 return $this->db->table($tabel)
	                 ->getWhere($where)
	                 ->getRow();	
	              
	}
public function upload($photo){
$imageName = $photo->getName();
$photo->move(ROOTPATH.'public/img',$imageName);

}
public function cari($table, $awal, $akhir, $field,){
return $this->db->table($tabel)
                ->join($tabel2,$on,'left')
                ->getWhere($field." between '$awal' and '$akhir'")
                ->getResult();
}
public function joinnelson($tabel, $tabel2, $tabel3, $on, $on2, $id){
    return $this->db->table($tabel)
        ->join($tabel2, $on, 'left')
        ->join($tabel3, $on2, 'left')
        ->orderBy($id, 'desc')
        ->get()
        ->getResult();
}

public function joinhistory($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id,$where){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->getWhere($where)
 ->getResult();


}	

}
