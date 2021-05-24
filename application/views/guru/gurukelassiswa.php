<table>
    <table class="table my-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($kelass as $kelas) : ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td class="nama-nilai"><?php echo $kelas['nama']; ?></td>
                    <td>
                        <div class="status-nilai">Lengkap</div>
                    </td>
                    <td>
                        <!-- split button -->
                        <div class="btn-group aksi-nilai">
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo site_url('guru/nilaisiswa?idsiswa=') . $kelas['id_siswa'] ?>"> lihat Nilai</a></li>
                            </ul>
                        </div>
                        <!-- Split button -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>