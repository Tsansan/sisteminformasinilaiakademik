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
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
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
                                                <th scope="col">induk</th>
                                                <th scope="col">NISN</th>
                                                <th scope="col">aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($siswas as $siswa) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $siswa['nama']; ?></td>
                                                    <td><?php echo $siswa['induk']; ?></td>
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


            <!-- modal -->
            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo site_url('admin/kelas?read='). $id_kelas ?>" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        <select class="form-select" id="inputGroupSelect01" name="siswa">
                                            <option selected>Choose...</option>            
                                            <?php foreach ($tambahs as $tambah) :?>
                                            <option value="<?php echo $tambah['id_siswa']?>"><?php echo $tambah['nama']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir modal -->