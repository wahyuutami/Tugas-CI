<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {
	public function index(){
		$data['konten']="event";
		$this->load->view('template', $data);
	}
}
?>