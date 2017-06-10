<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth {

  public function cek_auth() {
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('isLogin');
  		if($this->sesi != TRUE){
  			echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
  			$this->window_open();
  		}
	}

	public function window_open() {
		redirect('Welcome/login','refresh');
	}

	public function window_back() {
		echo '<script>window.history.back();</script>';
	}

}
