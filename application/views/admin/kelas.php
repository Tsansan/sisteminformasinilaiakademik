            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid" style="height: 50000px;">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="card-name">Kelas</div>
                                    </div>
                                    <div class="col-2">
                                        <a href="#" class="btn btn-primary btn-sm" role="button">Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tahun Pelajaran</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Walikelas</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($kelass as $kelas) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $kelas['tahun']; ?></td>
                                                    <td><?php echo $kelas['kelas']; ?></td>
                                                    <td>
                                                        <?php foreach ($walikelass as $walikelas) : ?>
                                                            <?php if ($kelas['walikelas'] == $walikelas['id_guru']) : ?>
                                                                <?php echo $walikelas['nama']; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/kelas') . "?read=" . $kelas['id_kelas'] ?>">Lihat Siswa</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/kelas') . "?delete=" . $kelas['id_kelas'] ?>">Hapus</a></li>
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