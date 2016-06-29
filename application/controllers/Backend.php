<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


	public function index()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else { 
			$this->load->view('backend/home');
		}
	}
	public function home()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else { 
			$this->load->view('backend/home');
		}
	}


	

	public function loginpage()
	{
			$this->load->view('backend/login');
		/*if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/home', 'refresh'); 
		}
		else
		{
			$this->load->view('backend/login');
		}*/
	}




	
	public function addartikel()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else {
			$data['konfirmasi'] = array('konfirmasi' => 1);
			$this->load->view('backend/addartikel', $data);
		}
	}

	

	public function lihatartikel()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else {
			//$this->load->view('backend/lihatartikel');
			$data = array(
	        	'artikel' => $this->modelbackend->getArtikelFull(),
	          	);
		
			//$data['konfirmasi'] = array('konfirmasi' => 1);

			$data['konfirmasi'] = array('konfirmasi' => 1);
			$this->load->view('backend/lihatartikel', $data);
		//$this->load->view('frontend/index',$data);
		}
	}

	

public function artikel()
	{
		$data = array(
	        'event' => $this->modelfrontend->getEvent(),
	        'artikel' => $this->modelfrontend->getArtikel2Full()
	    );
		
	    $this->template->load('frontend/template','frontend/artikel',$data);
		//$this->load->view('frontend/index',$data);
	}
	public function addartikelprocess()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('artikel', 'Isi Artikel', 'required');
			//$this->form_validation->set_rules('header', 'Photo', 'required');

			$this->form_validation->set_message('required','{field} Belum Diisi');
			$this->form_validation->set_message('is_unique','Username {field} Sudah Digunakan');		
			$this->form_validation->set_message('integer','{field} Harus Berupa Angka');
			if ($this->form_validation->run() == FALSE) { 
				$data['konfirmasi'] = array('konfirmasi' => 1);
				$this->load->view('backend/addartikel',$data);
			}
			else{

				$photoartikel_1 = '';
        		$judul = $this->input->post("judul");
        		$artikel = $this->input->post("artikel");
				$config['upload_path']   = './upload/artikel/'; 
				$config['allowed_types'] = 'jpg|png|gif'; 
				$config['overwrite']      = TRUE; 
				$config['max_size']      = 1000;
				$path = $_FILES['photo']['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION); //ambil extension
				$photoartikel = time();
				$photoartikel_1 = $photoartikel.".".$ext;
				$config['file_name'] = $photoartikel;
				$this->upload->initialize($config);
				if ( $this->upload->do_upload('photo')) {
					unset($config);
					$q = $this->modelbackend->addArtikel($judul,$artikel,$photoartikel_1);
					if($q!=0)
					{
							$data['konfirmasi'] = array('konfirmasi' => 2);
							$this->load->view('backend/addartikel',$data);
					}
				}	
				else{
					$status = false;
				}
			}
		}
	}

	
	public function ubahartikelprocess()
	{
		if(!$this->session->userdata('isLoginAdmin')) { 
     		redirect('backend/loginpage', 'refresh'); 
     	}
  		else {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('artikel', 'Isi Artikel', 'required');

			$this->form_validation->set_message('required','{field} Belum Diisi');	

			if ($this->form_validation->run() == FALSE) { 
				$data = array(
	        	'artikel' => $this->modelbackend->getArtikelFull(),
					'id'=> $this->session->userdata('username')
				);
				$data['konfirmasi'] = array('konfirmasi' => 1);
				$this->load->view('backend/lihatartikel',$data);
			}
			else{
  				$id_artikel = $this->input->post("id_artikel");
				$judul = $this->input->post("judul");
	        	$artikel = $this->input->post("artikel");
	        	$isAktif = $this->input->post("status");
	        	$photoartikel = $this->input->post("photo");

	        	/*if($photoartikel == null)
	        	{

				$data = array(
				'judul' => $judul,
				'artikel' => $artikel,
				'isAktif' => $isAktif
				);

				$where = array(
				'id_artikel' => $id_artikel
				);
					$this->modelbackend->ubahBerita1($where,$data,'artikel');
					redirect('backend/lihatartikel');
	        	}
	        	else 
	        	{*/
	        	$photoartikel_1 = '';
        		$config['upload_path']   = './upload/artikel/'; 
				$config['allowed_types'] = 'jpg|png|gif'; 
				$config['overwrite']      = TRUE; 
				$config['max_size']      = 1000;
				$path = $_FILES['photo']['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION); //ambil extension
				$photoartikel = time();
				$photoartikel_1 = $photoartikel.".".$ext;
				$config['file_name'] = $photoartikel;
				$this->upload->initialize($config);

				$data = array(
				'judul' => $judul,
				'artikel' => $artikel,
				'gambar' => $photoartikel_1,
				'isAktif' => $isAktif
				);
				$data1 = array(
				'judul' => $judul,
				'artikel' => $artikel,
				'isAktif' => $isAktif
				);

				$where = array(
				'id_artikel' => $id_artikel
				);
				if ( $this->upload->do_upload('photo')) {
					unlink(base_url().'./upload/artikel/'.$photoartikel);
					unset($config);
					$this->modelbackend->ubahBerita($where,$data,'artikel');
					redirect('backend/lihatartikel');
				}	
				else{
					$this->modelbackend->ubahBerita($where,$data1,'artikel');
					redirect('backend/lihatartikel');
				}
			}
			//}

  			

			
		
	 
		}
	}

	
	public function logout()
	{
		$newdata = array( 
						   'nama'  => "", 
						   'username'     => "", 
						   'email'     => "", 
						   'id'     => "", 
						   'isLoginAdmin' => FALSE
						);
		unset($_SESSION['nama']);
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['id']);
		unset($_SESSION['isLoginAdmin']);
		$this->session->unset_userdata('$newdataadmin');
     		redirect('backend/loginpage', 'refresh'); 
	}

	public function loginprocess()
	{
        		$email = $this->input->post("email");
        		$pass = md5($this->input->post("password"));
        		$hasil['cek'] = $this->modelbackend->cekAdmin($email,$pass);
				foreach($hasil['cek']->result() as $a){
					if($a->email==$email AND $a->password==$pass AND $a->isAktif=="1"){
						$newdataadmin = array( 
						   'nama'  => $a->nama, 
						   'username'     => $a->username,
						   'email'     => $a->email,
						   'id'     	=> $a->id_admin, 
						   'isLoginAdmin' => TRUE
						);  
						$this->session->set_userdata($newdataadmin);
						redirect('backend/home', 'refresh');
					}
					else{
						//$data['konfirmasi'] = array('konfirmasi' => 3);
						//$this->load->view('backend/login');
						redirect('backend/loginpage', 'refresh');
						//$this->template->load('backend/templateadmin','backend/backend/login',$data);
					}
				}
			}
}
