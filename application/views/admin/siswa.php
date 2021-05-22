            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid mb-5">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="card-name">Siswa</div>
                                    </div>
                                    <div class="col-2">
                                        <a href="<?php echo site_url('admin/siswa?add=siswa') ?>" class="btn btn-primary btn-sm" role="button">Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tahun masuk</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">NIS</th>
                                                <th scope="col">aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($siswas as $siswa) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $siswa['tanggalmasuk']; ?></td>
                                                    <td><?php echo $siswa['nama']; ?></td>
                                                    <td><?php echo $siswa['nisn'] ?> </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/siswa') . "?update=" . $siswa['id_siswa'] ?>">Lihat Siswa</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/siswa') . "?delete=" . $siswa['id_siswa'] ?>">Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Akhir ISI Utama -->