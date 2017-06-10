<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Masakyuk_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function get_resep(){
		$query = $this->Masakyuk_model->get_resep();
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_rekomendasi_resep(){
		$query = $this->Masakyuk_model->get_rekomendasi();
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_makanan_pembuka(){
		$query = $this->Masakyuk_model->get_makanan_pembuka();
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["cat"]	=	$row["cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_makanan_utama(){
		$query = $this->Masakyuk_model->get_makanan_utama();
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["cat"]	=	$row["cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_makanan_penutup(){
		$query = $this->Masakyuk_model->get_makanan_penutup();
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["cat"]	=	$row["cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_bahan_resep(){
		if($this->input->post('id_resep')){
			$id_resep=$this->input->post('id_resep');
		}
		$query = $this->Masakyuk_model->get_list_bahan($id_resep);
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["bahan"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_bahan_utama"]		=	$row["id_bahan_utama"];
				$data["banyaknya"]	=	$row["banyaknya"];
				$data["satuan"]	=	$row["satuan"];
				$data["nama_bahan"]	=	$row["nama_bahan"];
				array_push($response["bahan"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data bahan";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data bahan tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_cara_memasak(){
		if($this->input->post('id_resep')){
			$id_resep=$this->input->post('id_resep');
		}
		$query = $this->Masakyuk_model->get_list_cara($id_resep);
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["cara"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cara_memasak"]		=	$row["id_cara_memasak"];
				$data["cara"]	=	$row["cara"];
				array_push($response["cara"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua cara memasak resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data cara memasak tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_hasil_cari(){
		if($this->input->post('query')){
			$query=$this->input->post('query');
		}
		$query = $this->Masakyuk_model->get_search_bahan($query);
		$response = array();
		$cek = $query;
		if($cek > 0){
			$response["resep"]	=array();
			foreach ($query as $row) {
				$data=array();
				$data["id_resep"]		=	$row["id_resep"];
				$data["id_cat"]	=	$row["id_cat"];
				$data["cat"]	=	$row["cat"];
				$data["judul"]	=	$row["judul"];
				$data["gambar"]	=	$row["gambar"];
				$data["link_youtube"]	=	$row["link_youtube"];
				$data["rekomendasi"]	=	$row["rekomendasi"];
				array_push($response["resep"], $data);
			}
			$response["success"]	= 1;
			$response["message"]	= "Semua data resep";
			echo json_encode($response);
		} else {
			$response["success"]	= 0;
			$response["message"]	= "Data resep tidak ditemukan";
			echo json_encode($response);
		}
	}

	function get_list_total_bahan(){
		if($this->input->post('id_resep_1') && !($this->input->post('id_resep_2')) && !($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=null;
			$id_resep_3=null;
			$query = $this->Masakyuk_model->get_bahan_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["bahan"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					array_push($response["bahan"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data bahan";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data bahan tidak ditemukan";
				echo json_encode($response);
			}
		} else if($this->input->post('id_resep_1') && ($this->input->post('id_resep_2')) && !($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=$this->input->post('id_resep_2');
			$id_resep_3=null;
			$query = $this->Masakyuk_model->get_bahan_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["bahan"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					array_push($response["bahan"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data bahan";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data bahan tidak ditemukan";
				echo json_encode($response);
			}
		} else if($this->input->post('id_resep_1') && ($this->input->post('id_resep_2')) && ($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=$this->input->post('id_resep_2');
			$id_resep_3=$this->input->post('id_resep_3');
			$query = $this->Masakyuk_model->get_bahan_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["bahan"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					array_push($response["bahan"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data bahan";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data bahan tidak ditemukan";
				echo json_encode($response);
			}
		}
	}

	function get_list_total_harga(){
		if($this->input->post('id_resep_1') && !($this->input->post('id_resep_2')) && !($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=null;
			$id_resep_3=null;
			$query = $this->Masakyuk_model->get_harga_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["harga"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					$data['per'] = $row['per'];
					$data['harga_per_satuan'] = $row['harga_per_satuan'];
					array_push($response["harga"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data harga";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data harga tidak ditemukan";
				echo json_encode($response);
			}
		} else if($this->input->post('id_resep_1') && ($this->input->post('id_resep_2')) && !($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=$this->input->post('id_resep_2');
			$id_resep_3=null;
			$query = $this->Masakyuk_model->get_harga_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["harga"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					$data['per'] = $row['per'];
					$data['harga_per_satuan'] = $row['harga_per_satuan'];
					array_push($response["harga"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data harga";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data harga tidak ditemukan";
				echo json_encode($response);
			}
		} else if($this->input->post('id_resep_1') && ($this->input->post('id_resep_2')) && ($this->input->post('id_resep_3'))){
			$id_resep=$this->input->post('id_resep_1');
			$id_resep_2=$this->input->post('id_resep_2');
			$id_resep_3=$this->input->post('id_resep_3');
			$query = $this->Masakyuk_model->get_harga_accumulation($id_resep,$id_resep_2,$id_resep_3);
			$response = array();
			$cek = $query;

			if($cek > 0){
				$response["harga"]	=array();
				foreach ($query as $row) {
					$data=array();
					$data['nama_bahan'] = $row['nama_bahan'];
					$data['banyaknya'] = $row['total_banyaknya'];
					$data['satuan'] = $row['satuan'];
					$data['per'] = $row['per'];
					$data['harga_per_satuan'] = $row['harga_per_satuan'];
					array_push($response["harga"],$data);
				}
				$response["success"]	= 1;
				$response["message"]	= "Semua data harga";
				echo json_encode($response);
			} else {
				$response["success"]	= 0;
				$response["message"]	= "Data harga tidak ditemukan";
				echo json_encode($response);
			}
		}
	}
	/* User Admin*/

		function login_action(){

			$response = array("error" => FALSE);
			if ($this->input->post('email',TRUE) && $this->input->post('password',TRUE)) {

			// receiving the post params
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//&& $this->db->where('name', "Pantura Administrator")
			// get the user by email and password
			$query = $this->Masakyuk_model->get_user_by_email_password($email, $password);

			if($query > 0){
				$data_session = array(
					'nama' => $email,
					'status' => "login",
					'isLogin' => TRUE
				);

				$this->session->set_userdata($data_session);
				if($this->session->userdata('nama')  == "admin" ){
					redirect(base_url('welcome/cek_status'));
				} else {
					$this->session->set_flashdata('err_message', 'Anda tidak berhak mengakses halaman ini!');
					redirect('welcome/login', $data);
					$this->session->sess_destroy();
				}
			} else {
				$this->session->set_flashdata('err_message', 'Invalid User Id and Password combination!');
				//$data["error"]= "Invalid User Id and Password combination";
				redirect('welcome/login', $data);
			}
		}
	}

		function login(){
			$session = $this->session->userdata('isLogin'); //mengabil dari session apakah sudah login atau belum
			if($session == FALSE) {//jika session false maka akan menampilkan halaman login
					$data=array('title'=>'Login Administrator',
					'isi' =>'login_view');
					$this->load->view('login_view',$data);
			}
		}

		function cek_status(){
			if($this->session->userdata('status')!= "login" ){
				redirect(base_url("Welcome"));
			} else {
				redirect('welcome/dashboard');
			}
		}

		function dashboard(){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'home_view'
			);
			$this->load->view('layout/wrapper',$data);
		}

		function logout(){
			$this->session->sess_destroy();
			$this->load->view('welcome_message');
		}

		function daftar_resep(){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'resep_view',
				'resep' => $this->Masakyuk_model->data_view_resep()->result()
			);
			$this->load->view('layout/wrapper', $data);
		}

		function daftar_list_bahan(){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'bahan_view',
				'list_bahan' => $this->Masakyuk_model->data_view_list_bahan()->result()
			);
			$this->load->view('layout/wrapper', $data);

		}

		function daftar_satuan(){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'satuan_view',
				'satuan' => $this->Masakyuk_model->data_view_satuan()->result()
			);
			$this->load->view('layout/wrapper', $data);

		}

		function daftar_harga(){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'harga_view',
				'harga' => $this->Masakyuk_model->data_view_harga()->result()
			);
			$this->load->view('layout/wrapper', $data);

		}

		function daftar_list_bahan_resep($id_resep){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'bahan_resep_view',
				'bahan' => $this->Masakyuk_model->data_view_bahan_resep($id_resep)->result()
			);
			$this->load->view('layout/wrapper', $data);

		}

		function daftar_cara_memasak($id_resep){
			$this->auth->cek_auth();
			$data=array(
				'title'=>'Masak Yuk',
				'isi' =>'cara_memasak_view',
				'cara' => $this->Masakyuk_model->data_view_cara_memasak($id_resep)->result()
			);
			$this->load->view('layout/wrapper', $data);

		}

		function edit_resep($id){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('id_resep', 'id_resep', 'required');
			$this->form_validation->set_rules('link_youtube', 'link_youtube', 'required');
			$this->form_validation->set_rules('rekomendasi', 'rekomendasi', 'required');
			$this->form_validation->set_rules('id_cat', 'id_cat', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_resep' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_resep',
					'resep' => $this->Masakyuk_model->edit_data($where, 'tb_resep')->result(),
					'kategori' => $this->Masakyuk_model->get_dropdown_kategori()
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_resep');
				$judul = $this->input->post('judul');
				$link_youtube = $this->input->post('link_youtube');
				$rekomendasi = $this->input->post('rekomendasi');
				$id_cat = $this->input->post('id_cat');

				$data = array(
					'judul' => $judul,
					'link_youtube' => $link_youtube,
					'rekomendasi' => $rekomendasi,
					'id_cat' => $id_cat
				);

				$where = array(
					'id_resep' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_resep');
				redirect('Welcome/daftar_resep');

			}

		}

		function tambah_resep(){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('link_youtube', 'link_youtube', 'required');
			$this->form_validation->set_rules('rekomendasi', 'rekomendasi', 'required');
			$this->form_validation->set_rules('id_cat', 'id_cat', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_resep',
					'kategori' => $this->Masakyuk_model->get_dropdown_kategori()
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$judul = $this->input->post('judul');
				$link_youtube = $this->input->post('link_youtube');
				$rekomendasi = $this->input->post('rekomendasi');
				$id_cat = $this->input->post('id_cat');

				$config['upload_path']          = './gambar/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 2048;
				$config['max_width']            = 5000;
				$config['max_height']           = 3000;

				$this->upload->initialize($config);
				$this->load->library('upload', $config);
				$this->upload->do_upload('gambar');

				$up = $this->upload->data();
					$data = array(
						'judul' => $judul,
						'link_youtube' => $link_youtube,
						'rekomendasi' => $rekomendasi,
						'id_cat' => $id_cat,
						'gambar' => $up['file_name']
					);

				$this->Masakyuk_model->input_data($data, 'tb_resep');
				redirect('welcome/daftar_resep');

			}

		}

		function hapus_resep($id){
			$this->auth->cek_auth();
			$where = array('id_resep' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_resep');
			redirect('welcome/daftar_resep');
		}

		function edit_bahan($id){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_bahan' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_bahan',
					'bahan' => $this->Masakyuk_model->edit_data($where, 'tb_list_bahan')->result(),
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_bahan');
				$nama_bahan = $this->input->post('nama_bahan');

				$data = array(
					'nama_bahan' => $nama_bahan
				);

				$where = array(
					'id_bahan' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_list_bahan');
				redirect('Welcome/daftar_list_bahan');

			}

		}

		function tambah_bahan(){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_bahan',
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$nama_bahan = $this->input->post('nama_bahan');

				$data = array(
					'nama_bahan' => $nama_bahan
				);

				$this->Masakyuk_model->input_data($data, 'tb_list_bahan');
				redirect('welcome/daftar_list_bahan');

			}

		}

		function hapus_bahan($id){
			$this->auth->cek_auth();
			$where = array('id_bahan' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_list_bahan');
			redirect('welcome/daftar_list_bahan');
		}

		function edit_satuan($id){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('satuan', 'satuan', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_satuan' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_satuan',
					'satuan' => $this->Masakyuk_model->edit_data($where, 'tb_satuan')->result(),
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_satuan');
				$satuan = $this->input->post('satuan');

				$data = array(
					'satuan' => $satuan
				);

				$where = array(
					'id_satuan' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_satuan');
				redirect('Welcome/daftar_satuan');

			}

		}

		function tambah_satuan(){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('satuan', 'satuan', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_satuan',
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$satuan = $this->input->post('satuan');

				$data = array(
					'satuan' => $satuan
				);

				$this->Masakyuk_model->input_data($data, 'tb_satuan');
				redirect('welcome/daftar_satuan');

			}

		}

		function hapus_satuan($id){
			$this->auth->cek_auth();
			$where = array('id_satuan' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_satuan');
			redirect('welcome/daftar_satuan');
		}

		function hapus_harga($id){
			$this->auth->cek_auth();
			$where = array('id_harga' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_harga');
			redirect('welcome/daftar_harga');
		}

		function edit_harga($id){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('id_bahan', 'id_bahan', 'required');
			$this->form_validation->set_rules('id_satuan', 'id_satuan', 'required');
			$this->form_validation->set_rules('per', 'per', 'required');
			$this->form_validation->set_rules('harga_per_satuan', 'harga_per_satuan', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_harga' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_harga',
					'harga' => $this->Masakyuk_model->edit_data($where, 'tb_harga')->result(),
					'list_bahan' => $this->Masakyuk_model->get_dropdown_list_bahan(),
					'satuan' => $this->Masakyuk_model->get_dropdown_satuan(),
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_harga');
				$id_satuan = $this->input->post('id_satuan');
				$id_bahan = $this->input->post('id_bahan');
				$per = $this->input->post('per');
				$harga_per_satuan = $this->input->post('harga_per_satuan');

				$data = array(
					'id_satuan' => $id_satuan,
					'id_bahan' => $id_bahan,
					'per' => $per,
					'harga_per_satuan' => $harga_per_satuan,
				);

				$where = array(
					'id_harga' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_harga');
				redirect('Welcome/daftar_harga');

			}

		}

		function tambah_harga(){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('id_bahan', 'id_bahan', 'required');
			$this->form_validation->set_rules('id_satuan', 'id_satuan', 'required');
			$this->form_validation->set_rules('per', 'per', 'required');
			$this->form_validation->set_rules('harga_per_satuan', 'harga_per_satuan', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_harga',
					'list_bahan' => $this->Masakyuk_model->get_dropdown_list_bahan(),
					'satuan' => $this->Masakyuk_model->get_dropdown_satuan(),
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$id_satuan = $this->input->post('id_satuan');
				$id_bahan = $this->input->post('id_bahan');
				$per = $this->input->post('per');
				$harga_per_satuan = $this->input->post('harga_per_satuan');

				$data = array(
					'id_satuan' => $id_satuan,
					'id_bahan' => $id_bahan,
					'per' => $per,
					'harga_per_satuan' => $harga_per_satuan,
				);

				$this->Masakyuk_model->input_data($data, 'tb_harga');
				redirect('welcome/daftar_harga');

			}

		}

		function hapus_bahan_resep($id,$id_resep){
			$this->auth->cek_auth();
			$where = array('id_bahan_utama' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_bahan');
			redirect('welcome/daftar_list_bahan_resep/'.$id_resep);
		}

		function edit_bahan_resep($id, $id_resep){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('id_bahan', 'id_bahan', 'required');
			$this->form_validation->set_rules('id_satuan', 'id_satuan', 'required');
			$this->form_validation->set_rules('banyaknya', 'banyaknya', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_bahan_utama' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_bahan_resep',
					'bahan' => $this->Masakyuk_model->edit_data($where, 'tb_bahan')->result(),
					'list_bahan' => $this->Masakyuk_model->get_dropdown_list_bahan(),
					'satuan' => $this->Masakyuk_model->get_dropdown_satuan(),
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_bahan_utama');
				$id_satuan = $this->input->post('id_satuan');
				$id_bahan = $this->input->post('id_bahan');
				$banyaknya = $this->input->post('banyaknya');

				$data = array(
					'id_satuan' => $id_satuan,
					'id_bahan' => $id_bahan,
					'banyaknya' => $banyaknya,
				);

				$where = array(
					'id_bahan_utama' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_bahan');
				redirect('Welcome/daftar_list_bahan_resep/'.$id_resep);

			}

		}

		function tambah_bahan_resep($id_resep){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('id_bahan', 'id_bahan', 'required');
			$this->form_validation->set_rules('id_satuan', 'id_satuan', 'required');
			$this->form_validation->set_rules('banyaknya', 'banyaknya', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_bahan_resep',
					'list_bahan' => $this->Masakyuk_model->get_dropdown_list_bahan(),
					'satuan' => $this->Masakyuk_model->get_dropdown_satuan(),
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$id_satuan = $this->input->post('id_satuan');
				$id_bahan = $this->input->post('id_bahan');
				$banyaknya = $this->input->post('banyaknya');
				$id_satuan_2 = $this->input->post('id_satuan_2');
				$id_bahan_2 = $this->input->post('id_bahan_2');
				$banyaknya_2 = $this->input->post('banyaknya_2');
				$id_satuan_3 = $this->input->post('id_satuan_3');
				$id_bahan_3 = $this->input->post('id_bahan_3');
				$banyaknya_3 = $this->input->post('banyaknya_3');


				if($id_bahan != null && $id_bahan_2 == null && $id_bahan_3 == null){
					$data = array(
	        array(
	                'id_satuan' => $id_satuan,
	                'id_bahan' => $id_bahan,
	                'banyaknya' => $banyaknya,
									'id_resep' => $id_resep
	        )
					);

				}

				if($id_bahan != null && $id_bahan_2 != null && $id_bahan_3 == null){
					$data = array(
					array(
									'id_satuan' => $id_satuan,
									'id_bahan' => $id_bahan,
									'banyaknya' => $banyaknya,
									'id_resep' => $id_resep
					),
					array(
									'id_satuan' => $id_satuan_2,
									'id_bahan' => $id_bahan_2,
									'banyaknya' => $banyaknya_2,
									'id_resep' => $id_resep
					)
					);

				}

				if($id_bahan != null && $id_bahan_2 != null && $id_bahan_3 != null){
					$data = array(
	        array(
	                'id_satuan' => $id_satuan,
	                'id_bahan' => $id_bahan,
	                'banyaknya' => $banyaknya,
									'id_resep' => $id_resep
	        ),
					array(
									'id_satuan' => $id_satuan_2,
									'id_bahan' => $id_bahan_2,
									'banyaknya' => $banyaknya_2,
									'id_resep' => $id_resep
	        ),
	        array(
									'id_satuan' => $id_satuan_3,
									'id_bahan' => $id_bahan_3,
									'banyaknya' => $banyaknya_3,
									'id_resep' => $id_resep
	        )
					);

				}

				$this->Masakyuk_model->input_batch($data, 'tb_bahan');
				redirect('welcome/daftar_list_bahan_resep/'.$id_resep);

			}

		}

		function hapus_cara_memasak($id,$id_resep){
			$this->auth->cek_auth();
			$where = array('id_cara_memasak' => $id);
			$this->Masakyuk_model->hapus_data($where, 'tb_cara_memasak');
			redirect('welcome/daftar_cara_memasak/'.$id_resep);
		}

		function edit_cara_memasak($id, $id_resep){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('cara', 'cara', 'required');
			if ($this->form_validation->run() === FALSE){
				$where = array('id_cara_memasak' => $id);

				$data=array(
					'title'=>'Masak Yuk',
					'isi' =>'edit_cara_memasak',
					'cara' => $this->Masakyuk_model->edit_data($where, 'tb_cara_memasak')->result(),
				);
				$this->load->view('layout/wrapper',$data);
			} else {
				$id = $this->input->post('id_cara_memasak');
				$cara = $this->input->post('cara');

				$data = array(
					'cara' => $cara,
				);

				$where = array(
					'id_cara_memasak' => $id
				);

				$this->Masakyuk_model->update_data($where, $data, 'tb_cara_memasak');
				redirect('Welcome/daftar_cara_memasak/'.$id_resep);

			}

		}

		function tambah_cara_memasak($id_resep){
			$this->auth->cek_auth();
			$this->form_validation->set_rules('cara', 'cara', 'required');
			if ($this->form_validation->run() === FALSE){
				$data=array('title'=>'Masak Yuk',
					'isi' =>'input_cara_memasak',
				);
				$this->load->view('layout/wrapper', $data);
			} else {
				$cara = $this->input->post('cara');
				$cara_2 = $this->input->post('cara_2');
				$cara_3 = $this->input->post('cara_3');


				if($cara != null && $cara_2 == null && $cara_3 == null){
					$data = array(
	        array(
	                'cara' => $cara,
									'id_resep' => $id_resep
	        )
					);

				}

				if($cara != null && $cara_2 != null && $cara_3 == null){
					$data = array(
					array(
	                'cara' => $cara,
									'id_resep' => $id_resep
					),
					array(
	                'cara' => $cara_2,
									'id_resep' => $id_resep
					)
					);

				}

				if($cara != null && $cara_2 != null && $cara_3 != null){
					$data = array(
						array(
		                'cara' => $cara,
										'id_resep' => $id_resep
						),
						array(
		                'cara' => $cara_2,
										'id_resep' => $id_resep
						),
	        	array(
										'cara' => $cara_3,
										'id_resep' => $id_resep
	        	)
					);

				}

				$this->Masakyuk_model->input_batch($data, 'tb_cara_memasak');
				redirect('welcome/daftar_cara_memasak/'.$id_resep);

			}

		}

}
