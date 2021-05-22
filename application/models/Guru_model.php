<?php

class Guru_model extends CI_Model
{


    public function data_guru($idguru)
    {

        $query = "SELECT * FROM tb_guru";


        if ($idguru != null) {
            $query = "SELECT * FROM tb_guru 
                    WHERE induk = $idguru";
        }

        $data = $this->db->query($query);
        return $data;
    }

    public function kelas($idkelas = null)
    {
        $query = "SELECT * FROM tb_absen 
                    INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_absen.id_kelas
                    INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
                    ";
        if ($idkelas != null) {
            $query = "SELECT * FROM tb_absen 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_absen.id_kelas
            INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
            WHERE tb_absen.id_kelas= $idkelas";
        }

        $data = $this->db->query($query);
        return $data;
    }
}
