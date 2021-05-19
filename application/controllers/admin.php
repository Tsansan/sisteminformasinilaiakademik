<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
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
        $this->load->model('Admin_model');
    }

    public function index()
    {

        $this->load->view('admin/auth/header');
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/admin');
        $this->load->view('admin/auth/footer');
    }

    public function kelas()
    {

        //Lihat Siswa
        $bacakelas = $this->input->get('read');
        if ($bacakelas != null) {

            print_r($_POST);
            if ($_POST != null) {
                $input = [
                    'kelas' => $bacakelas,
                    'siswa' => $_POST['siswa']
                ];
                $this->Admin_model->input_siswakelas($input);
            }

            $data['tambahs']    = $this->Admin_model->data_siswa()->result_array();
            $data['id_kelas']   = $bacakelas;
            $data['siswas']     = $this->Admin_model->data_kelas($bacakelas)->result_array();

            print_r($bacakelas);
            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/kelassiswa');
            $this->load->view('admin/auth/footer');
        }


        $data['kelass'] = $this->Admin_model->data_kelas()->result_array();
        $data['walikelass'] = $this->Admin_model->data_walikelas()->result_array();

        $this->load->view('admin/auth/header', $data);
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/kelas');
        $this->load->view('admin/auth/footer');
    }

    public function guru()
    {
        // delete
        $delete = $this->input->get('delete');
        if ($delete != null) {
            $this->admin_model->delete_guru($delete);
            redirect('admin/guru');
        }

        // update
        $update = $this->input->get('update');
        if ($update != null) {

            if ($_POST != null) {
                $id = $_POST;
                $this->Admin_model->update_guru($id);
                redirect('admin/guru');
            }

            $data['gurus'] = $this->Admin_model->data_guru($update)->row_array();

            print_r($data['gurus']);
            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/updateguru');
            $this->load->view('admin/auth/footer');
        }

        // kelas
        $data['mengajars'] = $this->Admin_model->mengajar()->result_array();

        // View
        $data['gurus'] = $this->Admin_model->data_guru()->result_array();

        $this->load->view('admin/auth/header', $data,);
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/guru');
        $this->load->view('admin/auth/footer');
    }


    public function siswa()
    {

        // Update
        $update = $this->input->get('update');
        if ($update != null) {


            if ($_POST != null) {
                print_r($_POST);
                $this->Admin_model->update_siswa($_POST);
                redirect('admin/siswa');
            }

            $data['siswa'] = $this->Admin_model->data_siswa($update)->row_array();
            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/updatesiswa');
            $this->load->view('admin/auth/footer');
        }

        // Add
        $add = $this->input->get('add');
        if ($add != null) {

            if ($_POST) {
                $this->Admin_model->input_siswa($_POST);

                redirect('admin/siswa');
            }

            $this->load->view('admin/auth/header');
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/tambahsiswa');
            $this->load->view('admin/auth/footer');
        }


        $data['siswas'] = $this->Admin_model->data_siswa()->result_array();

        $this->load->view('admin/auth/header', $data,);
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/siswa');
        $this->load->view('admin/auth/footer');
    }
}
