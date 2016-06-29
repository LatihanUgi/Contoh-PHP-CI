<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelbackend extends CI_Model {

	public function cekAdmin($email,$pass){
		$q = "select * from admin where email = '$email' and password='$pass'";
	    return $this->db->query($q);
	}


	//set status admin

	public function setAdmin()
	{
		$id_admin = $this->input->post('id_admin');
		$status = $this->input->post('status');
		$q = "update admin set isAktif = '2' where id_admin = '$id_admin'";
		if($status=="2")
			$q = "update admin set isAktif = '1' where id_admin = '$id_admin'";
		return $this->db->query($q);
	}
	
	public function ubahBerita($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function ubahBerita1($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
	public function addArtikel($judul,$artikel,$photo)
	{
		$q = "insert into artikel(judul,artikel,gambar) 
		values('$judul','$artikel','$photo')";
		return $this->db->query($q);
	}


	public function getArtikelFull(){
		$q = "select A.id_artikel,A.judul as nama_artikel,A.artikel,A.tanggal,A.gambar as icon,A.isAktif from artikel A
	    	where A.id_artikel order by tanggal DESC";
	    return $this->db->query($q);
	}

}
