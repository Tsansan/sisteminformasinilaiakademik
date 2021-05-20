<?php

class Admin_model extends CI_Model
{

    // kelas
    public function data_kelas($id = null)
    {


        if ($id != null) {
            $query = "SELECT tb_siswa.id_siswa, tb_siswa.nama, tb_siswa.nisn, tb_siswa.induk, tb_kelas.kelas, tb_kelas.id_kelas, tb_kelas.walikelas  
            FROM tb_absen 
            INNER JOIN tb_siswa on tb_siswa.id_siswa = tb_absen.id_siswa
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_absen.id_kelas
            WHERE tb_absen.id_kelas = $id";
        } else {
            $query = "SELECT * 
                    FROM tb_kelas";
        }


        $data = $this->db->query($query);
        return $data;
    }



    public function data_walikelas()
    {

        $query = "SELECT tb_kelas.tahun, tb_kelas.kelas, tb_guru.nama, tb_guru.id_guru 
        FROM tb_kelas
        INNER JOIN tb_guru ON tb_kelas.walikelas = tb_guru.id_guru
        ";

        $data = $this->db->query($query);
        return $data;
    }


    public function input_kelas($data)
    {

        $query = "INSERT INTO tb_kelas Values $data";

        $this->db->query($query);
    }

    public function update_kelas($data)
    {

        $id_kelas = $data['id_kelas'];

        $query = "UPDATE tb_kelas
                SET $data
                WHERE id_kelas = $id_kelas ;";

        $this->db->query($query);
    }

    public function delete_kelas($data)
    {
        $id_kelas = $data['id_kelas'];
        $query = "DELETE FROM
                tb_kelas 
                WHERE id_kelas = $id_kelas ";

        $this->db->query($query);
    }

    public function input_siswakelas($data)
    {

        $data1 = [

            'id_absen'  => '',
            'id_kelas'  => $data['kelas'],
            'id_siswa'  => $data['siswa'],
            'id_nilai1' => '',
            'id_nilai1' => ''
        ];

        $this->db->insert('tb_absen', $data1);
    }


    // guru
    public function data_guru($idguru = null)
    {

        if ($idguru != null) {
            $query = "SELECT * FROM tb_guru WHERE id_guru = $idguru";
        } else {
            $query = "SELECT * FROM tb_guru";
        }

        $data = $this->db->query($query);

        return $data;
    }

    public function input_guru($data)
    {
        $query = "INSERT INTO tb_guru VALUES $data";

        $this->db->query($query);
    }

    public function update_guru($data)
    {

        $id = $data['id_guru'];

        $data1 = [
            'id-guru'       => htmlspecialchars($id),
            'induk'         => htmlspecialchars($data['induk']),
            'nama'          => htmlspecialchars($data['nama']),
            'tempat_lahir'  => htmlspecialchars($data['tempat_lahir']),
            'tanggal_lahir' => htmlspecialchars($data['tanggal_lahir']),
            'jeniskelamin'  => htmlspecialchars($data['jeniskelamin']),
            'agama'         => htmlspecialchars($data['agama']),
            'alamat'        => htmlspecialchars($data['alamat']),
            'telp'          => htmlspecialchars($data['telp']),
            'foto'          => htmlspecialchars($data['foto']),
            'ttd'           => htmlspecialchars($data['ttd'])
        ];

        print_r($data);

        $this->db->update('tb_guru', $data1, ['id_guru' => $id]);
    }

    public function delete_guru($data)
    {
        $query = "DELETE FROM tb_guru WHERE id=$data ";

        $this->db->query($query);
    }

    public function mengajar()
    {
        $date['mount'] = date('m');
        $date['year'] = date('Y');

        if ($date['mount'] == 01 || 02 || 03 || 04 || 05 || 06) {
            $year = $date['year'] - 1;
            $query = "SELECT tb_mengajar.id_guru, tb_mengajar.id_kelas, tb_guru.nama, tb_kelas.kelas, tb_guru.induk 
            FROM tb_mengajar 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
            INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru 
            WHERE tb_mengajar.tahun = $year";

            $mengajar = $this->db->query($query);

            return $mengajar;
        } else if ($date['mount'] == '07' || '08' || '09' || '10' || '11' || '12') {
            $year = $date['year'];
            $query = "SELECT tb_mengajar.id_guru, tb_mengajar.id_kelas, tb_guru.nama, tb_kelas.kelas, tb_guru.induk 
            FROM tb_mengajar 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
            INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru 
            WHERE tb_mengajar.tahun = $year";

            $mengajar = $this->db->query($query);

            return $mengajar;
        }

        redirect('admin/guru');
    }


    // Siswa
    public function data_siswa($id = null)
    {
        $query = "SELECT * FROM tb_siswa";
        if ($id != null) {
            $query = "SELECT * FROM tb_siswa WHERE id_siswa = $id";
        }

        $data = $this->db->query($query);
        return $data;
    }

    public function input_siswa($data)
    {
        $data1 = [
            'id_siswa'       => htmlspecialchars($data['id_siswa']),
            'induk'         => htmlspecialchars($data['induk']),
            'nisn'           => htmlspecialchars($data['nisn']),
            'nama'          => htmlspecialchars($data['nama']),
            'tempat_lahir'  => htmlspecialchars($data['tempat_lahir']),
            'tanggal_lahir' => htmlspecialchars($data['tanggal_lahir']),
            'jeniskelamin'  => htmlspecialchars($data['jeniskelamin']),
            'agama'         => htmlspecialchars($data['agama']),
            'statuskeluarga' => htmlspecialchars($data['statuskeluarga']),
            'anak'          => htmlspecialchars($data['anak']),
            'alamat'        => htmlspecialchars($data['alamat']),
            'telp'          => htmlspecialchars($data['telp']),
            'sekolahasal'   => htmlspecialchars($data['sekolahasal']),
            'tanggalmasuk'  => htmlspecialchars($data['tanggalmasuk']),
            'ayah'          => htmlspecialchars($data['ayah']),
            'ibu'           => htmlspecialchars($data['ibu']),
            'pekerjaanayah' => htmlspecialchars($data['pekerjaanayah']),
            'pekerjaanibu'  => htmlspecialchars($data['pekerjaanibu']),
            'foto'          => htmlspecialchars($data['foto']),
        ];

        $this->db->insert('tb_siswa', $data1);
    }

    public function update_siswa($data)
    {

        $id = $data['id_siswa'];
        $data1 = [
            'id_siswa'       => htmlspecialchars($id),
            'induk'         => htmlspecialchars($data['induk']),
            'nisn'           => htmlspecialchars($data['nisn']),
            'nama'          => htmlspecialchars($data['nama']),
            'tempat_lahir'  => htmlspecialchars($data['tempat_lahir']),
            'tanggal_lahir' => htmlspecialchars($data['tanggal_lahir']),
            'jeniskelamin'  => htmlspecialchars($data['jeniskelamin']),
            'agama'         => htmlspecialchars($data['agama']),
            'statuskeluarga' => htmlspecialchars($data['statuskeluarga']),
            'anak'          => htmlspecialchars($data['anak']),
            'alamat'        => htmlspecialchars($data['alamat']),
            'telp'          => htmlspecialchars($data['telp']),
            'sekolahasal'   => htmlspecialchars($data['sekolahasal']),
            'tanggalmasuk'  => htmlspecialchars($data['tanggalmasuk']),
            'ayah'          => htmlspecialchars($data['ayah']),
            'ibu'           => htmlspecialchars($data['ibu']),
            'pekerjaanayah' => htmlspecialchars($data['pekerjaanayah']),
            'pekerjaanibu'  => htmlspecialchars($data['pekerjaanibu']),
            'foto'          => htmlspecialchars($data['foto']),
        ];

        $this->db->update('tb_siswa', $data1, ['id_siswa' => $id]);
    }

    public function delete_siswa($data)
    {
        $id = $data['id'];
        $query = "DELETE FROM tb_siswa WHERE id_siswa = $id";

        $this->db->query($query);
    }
}
