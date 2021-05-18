<?php

class Rapot_model extends CI_Model
{
    public function indukguru($induk)
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
}
