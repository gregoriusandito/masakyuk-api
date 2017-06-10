<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Masakyuk_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}


    function get_resep(){
      $obj = $this->db->select('*')
          ->get('tb_resep');
      return $obj->result_array();
    }

    function get_rekomendasi(){
      $obj = $this->db->select('*')
          ->where('rekomendasi',1)
          ->get('tb_resep');
      return $obj->result_array();
    }

    function get_makanan_pembuka(){
      $obj = $this->db->select('*')
          ->join('tb_kategori','tb_kategori.id_cat = tb_resep.id_cat')
          ->where('cat',"Makanan Pembuka")
          ->get('tb_resep');
      return $obj->result_array();
    }

    function get_makanan_utama(){
      $obj = $this->db->select('*')
          ->join('tb_kategori','tb_kategori.id_cat = tb_resep.id_cat')
          ->where('cat',"Makanan Utama")
          ->get('tb_resep');
      return $obj->result_array();
    }

    function get_makanan_penutup(){
      $obj = $this->db->select('*')
          ->join('tb_kategori','tb_kategori.id_cat = tb_resep.id_cat')
          ->where('cat',"Makanan Penutup")
          ->get('tb_resep');
      return $obj->result_array();
    }

		function get_list_bahan($id_resep){
			$obj = $this->db->select('*')
          ->join('tb_list_bahan','tb_list_bahan.id_bahan = tb_bahan.id_bahan')
					->join('tb_satuan','tb_satuan.id_satuan = tb_bahan.id_satuan')
          ->where('id_resep',$id_resep)
          ->get('tb_bahan');
      return $obj->result_array();
		}

		function get_list_cara($id_resep){
			$obj = $this->db->select('*')
					->where('id_resep',$id_resep)
					->get('tb_cara_memasak');
			return $obj->result_array();
		}

		function get_search_bahan($query){
			$obj = $this->db->select('*')
					->join('tb_kategori','tb_kategori.id_cat = tb_resep.id_cat')
			    ->join('tb_bahan','tb_bahan.id_resep = tb_resep.id_resep')
					->join('tb_list_bahan','tb_list_bahan.id_bahan = tb_bahan.id_bahan')
					->like('nama_bahan',$query)
					->get('tb_resep');
			return $obj->result_array();
		}

		function get_bahan_accumulation($id_resep,$id_resep_2,$id_resep_3){
			if ($id_resep && $id_resep_2 == null && $id_resep_3 == null){
				$obj = $this->db->query("SELECT nama_bahan, satuan, SUM(banyaknya) AS total_banyaknya FROM
							(SELECT nama_bahan,banyaknya,satuan FROM tb_bahan
							JOIN tb_resep
									ON tb_bahan.id_resep = tb_resep.id_resep
							JOIN tb_list_bahan
									ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
							JOIN tb_satuan
									ON tb_satuan.id_satuan = tb_bahan.id_satuan
							WHERE tb_resep.id_resep = $id_resep
							) AS T GROUP BY nama_bahan, satuan");
				return $obj->result_array();
			} else if ($id_resep && $id_resep_2 && $id_resep_3 == null){
				$obj = $this->db->query("SELECT nama_bahan, satuan, SUM(banyaknya) AS total_banyaknya FROM
							(SELECT nama_bahan,banyaknya,satuan FROM tb_bahan
							JOIN tb_resep
									ON tb_bahan.id_resep = tb_resep.id_resep
							JOIN tb_list_bahan
									ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
							JOIN tb_satuan
									ON tb_satuan.id_satuan = tb_bahan.id_satuan
							WHERE tb_resep.id_resep = $id_resep
									OR tb_resep.id_resep = $id_resep_2
							) AS T GROUP BY nama_bahan, satuan");
				return $obj->result_array();
		} else if ($id_resep && $id_resep_2 && $id_resep_3){
			$obj = $this->db->query("SELECT nama_bahan, satuan, SUM(banyaknya) AS total_banyaknya FROM
						(SELECT nama_bahan,banyaknya,satuan FROM tb_bahan
						JOIN tb_resep
								ON tb_bahan.id_resep = tb_resep.id_resep
						JOIN tb_list_bahan
								ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
						JOIN tb_satuan
								ON tb_satuan.id_satuan = tb_bahan.id_satuan
						WHERE tb_resep.id_resep = $id_resep
								OR tb_resep.id_resep = $id_resep_2
								OR tb_resep.id_resep = $id_resep_3
						) AS T GROUP BY nama_bahan, satuan");
			return $obj->result_array();
		}
	}

		function get_harga_accumulation($id_resep,$id_resep_2,$id_resep_3){
			if ($id_resep && $id_resep_2 == null && $id_resep_3 == null){
				$obj = $this->db->query("SELECT nama_bahan, satuan, harga_per_satuan, per, SUM(banyaknya) AS total_banyaknya FROM
							(SELECT nama_bahan,banyaknya,satuan,harga_per_satuan,per FROM tb_bahan
							JOIN tb_resep
									ON tb_bahan.id_resep = tb_resep.id_resep
							JOIN tb_list_bahan
									ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
							JOIN tb_satuan
									ON tb_satuan.id_satuan = tb_bahan.id_satuan
							JOIN tb_harga
									ON tb_bahan.id_bahan = tb_harga.id_bahan AND tb_bahan.id_satuan = tb_harga.id_satuan
							WHERE tb_resep.id_resep = $id_resep
							) AS T GROUP BY nama_bahan, satuan");
				return $obj->result_array();
			} else if ($id_resep && $id_resep_2 && $id_resep_3 == null){
				$obj = $this->db->query("SELECT nama_bahan, satuan, harga_per_satuan, per, SUM(banyaknya) AS total_banyaknya FROM
							(SELECT nama_bahan,banyaknya,satuan,harga_per_satuan,per FROM tb_bahan
							JOIN tb_resep
									ON tb_bahan.id_resep = tb_resep.id_resep
							JOIN tb_list_bahan
									ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
							JOIN tb_satuan
									ON tb_satuan.id_satuan = tb_bahan.id_satuan
							JOIN tb_harga
									ON tb_bahan.id_bahan = tb_harga.id_bahan AND tb_bahan.id_satuan = tb_harga.id_satuan
							WHERE tb_resep.id_resep = $id_resep
									OR tb_resep.id_resep = $id_resep_2
							) AS T GROUP BY nama_bahan, satuan");
				return $obj->result_array();
		} else if ($id_resep && $id_resep_2 && $id_resep_3){
			$obj = $this->db->query("SELECT nama_bahan, satuan, harga_per_satuan, per, SUM(banyaknya) AS total_banyaknya FROM
						(SELECT nama_bahan,banyaknya,satuan,harga_per_satuan,per FROM tb_bahan
						JOIN tb_resep
								ON tb_bahan.id_resep = tb_resep.id_resep
						JOIN tb_list_bahan
								ON tb_list_bahan.id_bahan = tb_bahan.id_bahan
						JOIN tb_satuan
								ON tb_satuan.id_satuan = tb_bahan.id_satuan
						JOIN tb_harga
								ON tb_bahan.id_bahan = tb_harga.id_bahan AND tb_bahan.id_satuan = tb_harga.id_satuan
						WHERE tb_resep.id_resep = $id_resep
								OR tb_resep.id_resep = $id_resep_2
								OR tb_resep.id_resep = $id_resep_3
						) AS T GROUP BY nama_bahan, satuan");
			return $obj->result_array();
		}
	}


	/**
	* User Query
	**/

	function get_individual_user($data){
		$obj = $this->db->select('*')
				->where('email',$data)
				->get('tb_user');
		return $obj->result_array();
	}

	function get_if_user_exist($data){
		$obj = $this->db->select('email')
				->where('email',$data)
				->get('tb_user');
		return $obj->result_array();
	}

	/**
	 * Encrypting password
	 * @param password
	 * returns salt and encrypted password
	 */
	public function hashSSHA($password) {

			$salt = sha1(rand());
			$salt = substr($salt, 0, 10);
			$encrypted = base64_encode(sha1($password . $salt, true) . $salt);
			$hash = array("salt" => $salt, "encrypted" => $encrypted);
			return $hash;
	}

	/**
	 * Decrypting password
	 * @param salt, password
	 * returns hash string
	 */
	public function checkhashSSHA($salt, $password) {

			$hash = base64_encode(sha1($password . $salt, true) . $salt);

			return $hash;
	}

	public function store_user_2($name, $email, $password){
		$uuid = random_string('sha1',40);
		$hash = $this->Masakyuk_model->hashSSHA($password);
		$encrypted_password = $hash["encrypted"]; // encrypted password
		$salt = $hash["salt"]; // salt
		$this->db->query("INSERT INTO tb_user VALUES (NULL, '$uuid', '$name', '$email', '$encrypted_password', '$salt', NOW(), NULL)");
	}

	public function get_user_by_email_password($email, $password) {
		$query = $this->Masakyuk_model->get_individual_user($email);
		if(count($query) == 1) {
			foreach($query as $user) {
				$salt = $user['salt'];
				$encrypted_password = $user['encrypted_password'];
				$email = $user['email'];
			}
			$hash = $this->Masakyuk_model->checkhashSSHA($salt, $password);
			if ($encrypted_password == $hash) {
					// user authentication details are correct
					return $this->Masakyuk_model->get_individual_user($email);
			}
		} else {
			return NULL;
		}
	}

	public function is_user_existed($email) {
		$query = $this->Masakyuk_model->get_if_user_exist($email);
		if ($query) {
			//echo 'true';
			return true;
		} else {
			//echo 'false';
			return false;
		}
	}

	//fungsi CRUD
	function data_view_resep(){
		return $this->db->get('tb_resep');
	}

	function data_view_list_bahan(){
		return $this->db->get('tb_list_bahan');
	}

	function data_view_satuan(){
		return $this->db->get('tb_satuan');
	}

	function data_view_harga(){
		$obj = $this->db->select('*')
				->join('tb_list_bahan','tb_list_bahan.id_bahan = tb_harga.id_bahan')
				->join('tb_satuan','tb_satuan.id_satuan = tb_harga.id_satuan')
				->get('tb_harga');
		return $obj;
	}

	function data_view_bahan_resep($id_resep){
		$obj = $this->db->select('*')
				->join('tb_list_bahan','tb_list_bahan.id_bahan = tb_bahan.id_bahan')
				->join('tb_satuan','tb_satuan.id_satuan = tb_bahan.id_satuan')
				->get_where('tb_bahan',array('id_resep' => $id_resep));
		return $obj;
	}

	function data_view_cara_memasak($id_resep){
		return $this->db->get_where('tb_cara_memasak',array('id_resep' => $id_resep));
	}

	function get_dropdown_kategori(){
		$this->db->from('tb_kategori');
		$this->db->order_by('id_cat');
		$result = $this->db->get();
		$return = array();
		$return[""] = '--Pilih Kategori--';
		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				$return[$row['id_cat']]= $row['cat'];
			}
		}
				return $return;
	}

	function get_dropdown_satuan(){
		$this->db->from('tb_satuan');
		$this->db->order_by('id_satuan');
		$result = $this->db->get();
		$return = array();
		$return[""] = '--Pilih Satuan--';
		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				$return[$row['id_satuan']]= $row['satuan'];
			}
		}
				return $return;
	}

	function get_dropdown_list_bahan(){
		$this->db->from('tb_list_bahan');
		$this->db->order_by('id_bahan');
		$result = $this->db->get();
		$return = array();
		$return[""] = '--Pilih Bahan--';
		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				$return[$row['id_bahan']]= $row['nama_bahan'];
			}
		}
				return $return;
	}

	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function input_batch($data, $table){
		$this->db->insert_batch($table, $data);
	}

	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//fungsi Login
	function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}



}
