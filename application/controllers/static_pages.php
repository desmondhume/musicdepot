<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_pages extends CI_Controller {

	public function view($static_page = "index") {
		if (!file_exists("application/views/static_pages/".$static_page.".php")) {
			show_404();
		}

		$data["title"] = ucfirst($static_page);

		$this->load->view("static_pages/".$static_page, $data);
	}
}
