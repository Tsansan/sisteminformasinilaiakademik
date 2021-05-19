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
                                        <s href="#" class="btn btn-primary btn-sm" role="button">Tambah</s>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">NIP</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($gurus as $guru) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $guru['nama']; ?></td>
                                                    <td><?php echo $guru['induk']; ?></td>
                                                    <td>
                                                        <?php foreach ($mengajars as $mengajar) : ?>
                                                            <?php if ($guru['id_guru'] == $mengajar['id_guru']) { ?>
                                                                <?php echo $mengajar['kelas'] . " "; ?>
                                                            <?php }; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/guru') . "?update=" . $guru['id_guru'] ?>">Edit</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/guru') . "?delete=" . $guru['id_guru'] ?>">Hapus</a></li>
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