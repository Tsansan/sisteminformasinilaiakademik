<?php

class Admin_model extends CI_Model
{

    // kelas
    public function data_kelas($idkelas1 = null, $idkelas2 = null)
    {


        if ($idkelas1 != null) {
            $query = "SELECT * 
                    FROM tb_kelas
                    WHERE id_kelas = $idkelas1";
        } elseif ($idkelas2 != null) {
            $query = "SELECT *  
            FROM tb_absen
            INNER JOIN tb_siswa on tb_siswa.id_siswa = tb_absen.id_siswa
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_absen.id_kelas
            WHERE tb_absen.id_kelas = $idkelas2";
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

        $data1 = [
            'id_kelas'  => '',
            'tahun'     => $data['tahun'],
            'kelas'     => $data['kelas'],
            'walikelas' => $data['walikelas']
        ];

        $this->db->insert('tb_kelas', $data1);
    }

    public function update_kelas($data)
    {

        $data1 = [

            'id_kelas'  => $data['id_kelas'],
            'tahun'     => $data['tahun'],
            'kelas'     => $data['kelas'],
            'walikelas' => $data['walikelas']
        ];

        $this->db->update('tb_kelas', $data1, ['id_kelas' => $data['id_kelas']]);
    }

    public function delete_kelas($id_kelas = null, $absen = null)
    {

        if ($absen != null) {
            $query = "DELETE FROM
            tb_absen 
            WHERE id_absen = $absen ";
        } elseif ($id_kelas != null) {
            $query = "DELETE FROM
            tb_kelas 
            WHERE id_kelas = $id_kelas ";
        }

        $this->db->query($query);
    }

    public function input_siswakelas($data)
    {

        $data1 = [

            'id_absen'  => '',
            'id_kelas'  => $data['kelas'],
            'id_siswa'  => $data['siswa'],
        ];

        $this->db->insert('tb_absen', $data1);
    }


    // guru
    public function data_guru($idguru = null, $update = null)
    {

        if ($idguru != null) {
            $query = "SELECT * FROM tb_mengajar 
            INNER JOIN  tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
            WHERE tb_mengajar.id_guru = $idguru";
        } elseif ($update != null) {
            $query = "SELECT * FROM tb_guru 
            WHERE id_guru = $update";
        } else {
            $query = "SELECT * FROM tb_guru";
        }

        $data = $this->db->query($query);

        return $data;
    }

    public function input_guru($data)
    {

        $data1 = [
            'id_guru'       => htmlspecialchars($data['id_guru']),
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

        $this->db->insert('tb_guru', $data1);
    }

    public function update_guru($data)
    {

        $id = $data['id_guru'];

        $data1 = [
            'id_guru'       => htmlspecialchars($id),
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

    public function mengajar($idguru = null)
    {
        $date['mount'] = date('m');
        $date['year'] = date('Y');


        if ($idguru != null) {
            if ($date['mount'] == 01 || $date['mount'] ==  02 || $date['mount'] ==  03 || $date['mount'] ==  04 || $date['mount'] ==  05 || $date['mount'] ==  06) {
                $year = $date['year'] - 1;
                $query = "SELECT * FROM tb_mengajar 
                INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru
                INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                INNER JOIN tb_predikat ON tb_predikat.id_predikat = tb_mengajar.id_predikat
                WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $idguru";

                $mengajar = $this->db->query($query);

                return $mengajar;
            } else if ($date['mount'] == '07' || $date['mount'] == '08' || $date['mount'] == '09' || $date['mount'] == '10' || $date['mount'] == '11' || $date['mount'] == '12') {
                $year = $date['year'];
                $query = "SELECT * FROM tb_mengajar 
                INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru
                INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                INNER JOIN tb_predikat ON tb_predikat.id_predikat = tb_mengajar.id_predikat
                WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $idguru";

                $mengajar = $this->db->query($query);

                return $mengajar;
            }
        }

        if ($date['mount'] == 01 || $date['mount'] ==  02 || $date['mount'] ==  03 || $date['mount'] ==  04 || $date['mount'] ==  05 || $date['mount'] ==  06) {
            $year = $date['year'] - 1;
            $query = "SELECT * FROM tb_mengajar 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
            INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru
            INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
            INNER JOIN tb_predikat ON tb_predikat.id_predikat = tb_mengajar.id_predikat
            WHERE tb_mengajar.tahun = $year";

            $mengajar = $this->db->query($query);

            return $mengajar;
        } else if ($date['mount'] == '07' || $date['mount'] ==  '08' || $date['mount'] ==  '09' || $date['mount'] ==  '10' || $date['mount'] ==  '11' || $date['mount'] ==  '12') {
            $year = $date['year'];
            $query = "SELECT * FROM tb_mengajar 
            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
            INNER JOIN tb_guru ON tb_guru.id_guru = tb_mengajar.id_guru
            INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
            INNER JOIN tb_predikat ON tb_predikat.id_predikat = tb_mengajar.id_predikat
            WHERE tb_mengajar.tahun = $year";

            $mengajar = $this->db->query($query);

            return $mengajar;
        }
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

        $query = "DELETE FROM tb_siswa WHERE id_siswa = $data";

        $this->db->query($query);
    }



    public function mapel()
    {
        $query = "SELECT * FROM tb_mapel";

        $data = $this->db->query($query);
        return $data;
    }

    public function tambahmengajar()
    {
        if (date('m') == 01 || date('m') == 02 || date('m') == 03 || date('m') == 04 || date('m') == 05 || date('m') == 06) {
            $tahun = date('Y') - 1;
        } else {
            $tahun = date('Y');
        }

        $data = [
            'id_mengajar'   => "",
            'tahun'         => $tahun,
            'id_kelas'      => $_POST['kelas'],
            'id_guru'       => $_POST['guru'],
            'id_mapel'      => $_POST['matapelajaran'],
            'id_predikat'   => $_POST['predikat']
        ];

        $this->db->insert('tb_mengajar', $data);
    }

    public function delete_mengajar($idmengajar)
    {
        $query = "DELETE FROM tb_mengajar WHERE id_mengajar=$idmengajar";

        $this->db->query($query);
    }
}
