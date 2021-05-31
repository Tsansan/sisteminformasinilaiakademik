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