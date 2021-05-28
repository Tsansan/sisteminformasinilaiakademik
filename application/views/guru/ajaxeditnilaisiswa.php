<form action="<?php echo site_url('guru/updatenilaisiswa') ?>" method="post">
    <table class="table my-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th class="col" scope="col">NIlai</th>
                <th class="col" scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;

            $nilaimapel = 1;
            $id_absen = 1;
            $jenisnilai = 1;
            $id_mapel = 1;
            $nilai = 1;
            $deskripsi = 1;
            $predikat = 1;
            $id_guru = 1;

            $jumlah = 1;
            foreach ($kelass as $kelas) : ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td class="col-sm-3"><?php echo $kelas['nama']; ?></td>
                    <td class="col-sm-1">
                        <input type="hidden" name="kelas" value="<?php echo $kelas['id_kelas'] ?>">
                        <input type="hidden" name="idnilaimapel[<?php echo $nilaimapel++ ?>]" value="<?php echo $kelas['id_nilaimapel'] ?>">
                        <input type="hidden" name="idabsen[<?php echo $id_absen++ ?>]" value="<?php echo $kelas['id_absen']; ?>">
                        <input type="hidden" name="jenis[<?php echo $jenisnilai++ ?>]" value="<?php echo $kelas['jenis'] ?>">
                        <input type="hidden" name="mapel[<?php echo $id_mapel++ ?>]" value="<?php echo $kelas['id_mapel'] ?>">
                        <input type="hidden" name="idguru[<?php echo $id_guru++ ?>]" value="<?php echo $kelas['id_guru'] ?>">
                        <input type="text" class="form-control col-sm-2" name="nilai[<?php echo $nilai++; ?>]" value="<?php echo $kelas['nilai'] ?>">
                    </td>
                    <td class="col-sm-1">
                        <input type="text" name="" class="form-control col-sm-2" value="<?php if ($kelas['id_predikat'] == 1 || $kelas['id_predikat'] == 5) {
                                                                                            echo "D";
                                                                                        } else if ($kelas['id_predikat'] == 2 || $kelas['id_predikat'] == 6) {
                                                                                            echo "C";
                                                                                        } else if ($kelas['id_predikat'] == 3 || $kelas['id_predikat'] == 7) {
                                                                                            echo "B";
                                                                                        } else if ($kelas['id_predikat'] == 4 || $kelas['id_predikat'] == 8) {
                                                                                            echo "A";
                                                                                        } ?>">
                    </td>
                    <td>
                        <textarea class="form-control col-sm-5" name="deskripsi[<?php echo $deskripsi++; ?>]"><?php echo $kelas['id_desc'] ?></textarea>
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah++ ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>