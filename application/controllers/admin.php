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


        $bacakelas = $this->input->get('read');
        $update = $this->input->get('update');

        //Lihat Siswa
        if ($bacakelas != null) {

            //add siswa
            if ($_POST != null) {
                $input = [
                    'kelas' => $bacakelas,
                    'siswa' => $_POST['siswa']
                ];
                $this->Admin_model->input_siswakelas($input);
            }

            //delete siswa
            $delete = $this->input->get('delete');
            if ($delete != null) {
                $this->Admin_model->delete_kelas(null, $delete);
            }

            $data['tambahs']    = $this->Admin_model->data_siswa()->result_array();
            $data['id_kelas']   = $bacakelas;
            $data['siswas']     = $this->Admin_model->data_kelas(null, $bacakelas)->result_array();

            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/kelassiswa');
            $this->load->view('admin/auth/footer');
        }

        //Update kelas
        else if ($update != null) {

            if ($_POST != null) {
                $this->Admin_model->update_kelas($_POST);
                redirect("admin/kelas");
            }

            $data['kelass'] = $this->Admin_model->data_kelas($update)->row_array();
            $data['gurus']   = $this->Admin_model->data_guru()->result_array();

            print_r($data['kelass']);
            echo "<br>";
            print_r($update);
            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/updatekelas');
            $this->load->view('admin/auth/footer');
        } else {
            $data['kelass'] = $this->Admin_model->data_kelas()->result_array();
            $data['walikelass'] = $this->Admin_model->data_walikelas()->result_array();

            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/kelas');
            $this->load->view('admin/auth/footer');
        }
    }

    // 
    // 
    // 
    // 
    // 

    public function guru()
    {

        $delete = $this->input->get('delete');
        $update = $this->input->get('update');
        $add = $this->input->get('add');



        // delete
        if ($delete != null) {
            $this->admin_model->delete_guru($delete);
            redirect('admin/guru');
        }

        // update
        else if ($update != null) {

            if ($_POST != null) {
                $id = $_POST;
                $this->Admin_model->update_guru($id);
                redirect('admin/guru');
            }
            $data['gurus'] = $this->Admin_model->data_guru($update)->row_array();

            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/updateguru');
            $this->load->view('admin/auth/footer');
        }

        // Tambah
        else if ($add == "guru") {

            if ($_POST != null) {

                $this->Admin_model->input_guru($_POST);
                redirect('admin/guru');
            }

            $this->load->view('admin/auth/header');
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/tambahguru');
            $this->load->view('admin/auth/footer');
        }

        // kelas
        else {
            $data['mengajars'] = $this->Admin_model->mengajar()->result_array();
            // View
            $data['gurus'] = $this->Admin_model->data_guru()->result_array();

            $this->load->view('admin/auth/header', $data,);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/guru');
            $this->load->view('admin/auth/footer');
        }
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
