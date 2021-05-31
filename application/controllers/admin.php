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

        $addkelas       = $this->input->get('add');
        $bacakelas      = $this->input->get('read');
        $update         = $this->input->get('update');
        $deletekelas    = $this->input->get('delete');

        if ($addkelas == 'add') {

            if ($_POST != null) {
                $this->Admin_model->input_kelas($_POST);
                redirect('admin/kelas');
            }
        }


        //Lihat Siswa
        elseif ($bacakelas != null) {

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
            print_r($data['gurus']);
            $this->load->view('admin/auth/header', $data);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/updatekelas');
            $this->load->view('admin/auth/footer');
        }

        // delete
        elseif ($deletekelas != null) {
            $this->Admin_model->delete_kelas($deletekelas);
            redirect('admin/kelas');
        } else {
            $data['kelass'] = $this->Admin_model->data_kelas()->result_array();
            $data['walikelass'] = $this->Admin_model->data_guru()->result_array();

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
            $data['gurus'] = $this->Admin_model->data_guru(null, $update)->row_array();

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
            $data['mapels'] = $this->Admin_model->mapel()->result_array();
            $data['kelass'] = $this->Admin_model->data_kelas()->result_array();

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
        $update = $this->input->get('update');
        $add = $this->input->get('add');
        $delete = $this->input->get('delete');

        // Update
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
        elseif ($add != null) {

            if ($_POST) {
                $this->Admin_model->input_siswa($_POST);

                redirect('admin/siswa');
            }

            $this->load->view('admin/auth/header');
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/tambahsiswa');
            $this->load->view('admin/auth/footer');
        }

        //delete
        elseif ($delete != null) {
            $this->Admin_model->delete_siswa($delete);
            redirect('admin/siswa');
        }


        // utama
        else {

            $data['siswas'] = $this->Admin_model->data_siswa()->result_array();

            $this->load->view('admin/auth/header', $data,);
            $this->load->view('admin/auth/sidebar');
            $this->load->view('admin/siswa');
            $this->load->view('admin/auth/footer');
        }
    }

    public function mengajar()
    {
        $data['mengajars'] = $this->Admin_model->mengajar()->result_array();
        $data['mapels'] = $this->Admin_model->mapel()->result_array();
        $data['kelass'] = $this->Admin_model->data_kelas()->result_array();
        $data['gurus'] = $this->Admin_model->data_guru()->result_array();

        // 
        // 
        $this->load->view('admin/auth/header', $data,);
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/mengajar');
        $this->load->view('admin/auth/footer');
    }

    public function tambahmengajar()
    {
        $this->Admin_model->tambahmengajar($_POST);

        if ($_GET['idguru'] != null) {
            $idguru = $_GET['idguru'];
            $link = "admin/updatemengajar?idguru=$idguru";
            redirect($link);
        }
        redirect('admin/mengajar');
    }

    public function updatemengajar()
    {
        $data['mengajars'] = $this->Admin_model->mengajar($_GET['idguru'])->result_array();
        $data['gurus'] = $this->Admin_model->data_guru($_GET['idguru'])->row_array();
        $data['mapels'] = $this->Admin_model->mapel()->result_array();
        $data['kelass'] = $this->Admin_model->data_kelas()->result_array();

        $this->load->view('admin/auth/header', $data,);
        $this->load->view('admin/auth/sidebar');
        $this->load->view('admin/updatemengajar');
        $this->load->view('admin/auth/footer');
    }

    public function hapusmengajar()
    {
        print_r($_GET);
        $this->Admin_model->delete_mengajar($_GET['idmengajar']);
        $idguru = $_GET['idguru'];
        $link = "admin/updatemengajar?idguru=$idguru";
        redirect($link);
    }
}
