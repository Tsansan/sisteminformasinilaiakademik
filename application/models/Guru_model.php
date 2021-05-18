<?php

class Guru_model extends CI_Model
{
    public function data_guru($induk)
    {

        $query = "SELECT * FROM tb_guru WHERE induk = '$induk'";

        $data = $this->db->query($query);
        return $data;
    }

    public function induksiswa($induk)
    {

        $query = "SELECT * FROM tb_siswa WHERE induk = '$induk'";

        $data = $this->db->query($query);
        return $data;
    }

    public function kelas($induk)
    {
        $query = "SELECT * FROM tb_guru FULL OUTER JOIN tb_nilaimapel ON tb_guru.id_guru = tb_nilaimapel.id_nilaimapel ";

        $data = $this->db->query($query);
        return $data;
    }
}
