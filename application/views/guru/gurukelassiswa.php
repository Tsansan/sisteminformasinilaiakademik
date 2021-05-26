<label for="inputEmail3" class="col-sm-3 col-form-label-lg ms-3 pt-2">Masukkan NIlai?</label>
<?php foreach ($kelass as $kelas) : ?>
    <a type="button" href="<?php echo site_url('guru/nilaisiswa') . "?kelas=" . $kelas['id_kelas'] . "&nilai=pengetahuan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Pengetahuan</a>
    <a type="button" href="<?php echo site_url('guru/nilaisiswa') . "?kelas=" . $kelas['id_kelas'] . "&nilai=keterampilan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Keterampilan</a>
<?php endforeach; ?>


<table class="table my-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nilai</th>
            <th scope="col">NISN</th>
            <th scope="col">Aksi</th>
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
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Lihat Nilai
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><input type="button" class="dropdown-item" href="#" id="aksi">aksi</input></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>