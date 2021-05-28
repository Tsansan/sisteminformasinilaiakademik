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

    public function mengajar($id_guru, $id_kelas = null)
    {
        $tahun = date("Y");
        $bulan = date('m');
        if ($bulan == 01 || 02 || 03 || 04 || 05 || 06) {
            $year = $tahun - 1;
            $query = "SELECT * FROM tb_mengajar
                        INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                        INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                        WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $id_guru";
        } elseif ($bulan == "06" || "07" || "08" || "09" || "10" || "11") {
            $year = $tahun;
            $query = "SELECT * FROM tb_mengajar
                        INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                        INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                        WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $id_guru";
        }

        // jika ada kelas
        if ($id_kelas != null) {
            if ($bulan == 01 || 02 || 03 || 04 || 05 || 06) {
                $year = $tahun - 1;
                $query = "SELECT * FROM tb_mengajar
                            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                            INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                            WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $id_guru and tb_mengajar.id_kelas = $id_kelas";
            } elseif ($bulan == "06" || "07" || "08" || "09" || "10" || "11") {
                $year = $tahun;
                $query = "SELECT * FROM tb_mengajar
                            INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_mengajar.id_kelas
                            INNER JOIN tb_mapel ON tb_mapel.id_mapel = tb_mengajar.id_mapel
                            WHERE tb_mengajar.tahun = $year and tb_mengajar.id_guru = $id_guru and tb_mengajar.id_kelas = $id_kelas";
            }
        }

        $data = $this->db->query($query);
        return $data;
    }

    public function kelas($idkelas = null)
    {


        $query = "SELECT * FROM tb_absen 
                    INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_absen.id_kelas
                    INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
                    GROUP BY kelas
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

    public function inputnilai($data, $jumlahsiswa)
    {
        for ($i = 1; $i <= $jumlahsiswa; $i++) {
            $nilai = [
                'id_nilaimapel'     => $data[$i][0],
                'id_absen'          => $data[$i][1],
                'jenis'             => $data[$i][2],
                'id_mapel'          => $data[$i][3],
                'nilai'             => $data[$i][4],
                'id_desc'           => $data[$i][5],
                'id_predikat'       => $data[$i][6],
                'id_guru    '       => $data[$i][7]
            ];

            $this->db->insert('tb_nilaimapel', $nilai);
        }
    }

    public function updatenilai($data, $jumlahsiswa)
    {
        for ($i = 1; $i <= $jumlahsiswa; $i++) {
            $nilai = [
                'id_nilaimapel'     => $data[$i][0],
                'id_absen'          => $data[$i][1],
                'jenis'             => $data[$i][2],
                'id_mapel'          => $data[$i][3],
                'nilai'             => $data[$i][4],
                'id_desc'           => $data[$i][5],
                'id_predikat'       => $data[$i][6],
                'id_guru    '       => $data[$i][7]
            ];

            $this->db->update('tb_nilaimapel', $nilai, ['id_nilaimapel' => $nilai['id_nilaimapel']]);
        }
    }


    public function lihatnilai($kelas = null, $jenis)
    {
        $query = "SELECT * FROM tb_absen
                    INNER JOIN tb_nilaimapel ON tb_nilaimapel.id_absen = tb_absen.id_absen
                    INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
                    GROUP BY tb_absen.id_kelas";

        if ($kelas != null) {
            if ($jenis == 'pengetahuan') {
                $query = "SELECT * FROM tb_absen
                INNER JOIN tb_nilaimapel ON tb_nilaimapel.id_absen = tb_absen.id_absen
                INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
                WHERE tb_absen.id_kelas = $kelas AND tb_nilaimapel.jenis = '$jenis'";
            } else
            if ($jenis == 'keterampilan') {
                $query = "SELECT * FROM tb_absen
                INNER JOIN tb_nilaimapel ON tb_nilaimapel.id_absen = tb_absen.id_absen
                INNER JOIN tb_siswa ON tb_siswa.id_siswa = tb_absen.id_siswa
                WHERE tb_absen.id_kelas = $kelas AND tb_nilaimapel.jenis = '$jenis'";
            }
        }

        $data = $this->db->query($query);
        return $data;
    }
}
