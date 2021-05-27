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
        $data['kelass']     = $this->Guru_model->mengajar($this->session->userdata('id_guru'))->result_array();

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

    public function nilaisiswa()
    {
        $data['mengajars'] = $this->Guru_model->mengajar($this->session->userdata('id_guru'), $_GET['kelas'])->result_array();
        $data['kelass'] = $this->Guru_model->kelas($_GET['kelas'])->result_array();
        $data['jenis'] = $_GET['nilai'];
        print_r($data['mengajars']);
        $this->load->view('guru/auth/header', $data);
        $this->load->view('guru/auth/sidebar');
        $this->load->view('guru/gurukelassiswanilai');
        $this->load->view('guru/auth/footer');
    }

    public function masukkannilaisiswa()
    {

        $ambilpredikat = $this->db->get_where('tb_predikat', ['kkm' => $_POST['kkm']])->result_array();
        for ($a = 0; $a <= 3; $a++) {
            $predikat[$a] = explode('-', $ambilpredikat[$a]['nilai']);
        }

        $idnilaimapel   = $_POST['idnilaimapel'];
        $id_absen       = $_POST['idabsen'];
        $jenis          = $_POST['jenis'];
        $id_mapel       = $_POST['mapel'];
        $nilai          = $_POST['nilai'];
        $deskripsi      = $_POST['deskripsi'];
        $id_guru        = $_POST['idguru'];
        $jumlah         = $_POST['jumlah'];


        for ($j = 1; $j <= $jumlah; $j++) {
            for ($k = 0; $k <= 3; $k++) {
                for ($i = $predikat[$k][0]; $i <= $predikat[$k][1]; $i++) {
                    if ($nilai[$j] == $i) {
                        $predikatmasuk[$j] = $ambilpredikat[$k]['id_predikat'];
                    }
                }
            }
        }

        $inputnilai = [$idnilaimapel, $id_absen, $jenis, $id_mapel, $nilai, $deskripsi, $predikatmasuk, $id_guru];



        for ($i = 1; $i <= $jumlah; $i++) {
            $ids[$i] = array_column($inputnilai, $i);
        }

        $this->Guru_model->inputnilai($ids, $jumlah);
        redirect('guru/kelas');
    }
}
