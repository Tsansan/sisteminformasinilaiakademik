<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rapot extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Rapot_model');
	}

	public function index()
	{
		$relogin = $this->session->userdata('induk');

		if ($relogin != null) {
			$data = $this->Rapot_model->indukguru($relogin)->row_array();
			$data1 = $this->Rapot_model->induksiswa($relogin)->row_array();
			echo 'masuk';
			if ($data != null) {
				$this->session->set_userdata($data);
				redirect('guru');
			} else if ($data1 != null) {
				redirect('rapot');
			}
		}


		$this->form_validation->set_rules('induk', 'username', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('auth/header');
			$this->load->view('index');
			$this->load->view('auth/footer');
		} else {
			$username = $this->input->post('induk');
			$data = $this->Rapot_model->indukguru($username)->row_array();
			$data1 = $this->Rapot_model->induksiswa($username);
			echo 'masuk';
			if ($data != null) {
				$this->session->set_userdata($data);
				redirect('guru');
			} else if ($data1 != null) {
				redirect('rapot');
			}
		}
	}

	public function logout()
	{
		$data = [
			'id_guru', 'induk', 'nama', 'ttl', 'jeniskelamin', 'agama', 'alamat', 'telp', 'foto', 'ttd'
		];

		$this->session->unset_userdata($data);
		redirect('rapot');
	}
}
