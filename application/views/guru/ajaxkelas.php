<label for="inputEmail3" class="col-sm-3 col-form-label-lg ms-3 pt-2">Masukkan NIlai?</label>

<a type="button" href="<?php echo site_url('guru/inputnilaisiswa') . "?kelas=" . $kelass[0]['id_kelas'] . "&nilai=pengetahuan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Pengetahuan</a>
<a type="button" href="<?php echo site_url('guru/inputnilaisiswa') . "?kelas=" . $kelass[0]['id_kelas'] . "&nilai=keterampilan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Keterampilan</a>



<table class="table my-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nilai</th>
            <th scope="col">NISN</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($kelass as $kelas) : ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td class="nama-nilai"><?php echo $kelas['nama']; ?></td>
                <td><?php echo $kelas['induk'] ?></td>
                <td><?php echo $kelas['nisn'] ?></td>
                <td><?php echo $kelas['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>