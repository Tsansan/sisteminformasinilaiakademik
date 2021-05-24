<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guru extends CI_Controller
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
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['biodatas'] = $this->Guru_model->data_guru($this->session->userdata('induk'))->row_array();

        print_r($data['biodatas']);
        $this->load->view('guru/auth/header', $data);
        $this->load->view('guru/auth/sidebar');
        $this->load->view('guru/guru');
        $this->load->view('guru/auth/footer');
    }

    public function kelas()
    {
        // mengambil data kelas baik siswa dan kelasnya
        $data['kelass'] = $this->Guru_model->kelas()->result_array();
        $this->load->view('guru/auth/header', $data);
        $this->load->view('guru/auth/sidebar');
        $this->load->view('guru/gurukelas');
        $this->load->view('guru/auth/footer');
    }

    public function ajaxkelassiswa()
    {
        if ($_GET['carikelas'] == null) {
            echo "<p> Silahkan pilih kelas</p>";
        } else {
            $data['kelass'] = $this->Guru_model->kelas($_GET['carikelas'])->result_array();
            $this->load->view('guru/gurukelassiswa', $data);
        }
    }
}
