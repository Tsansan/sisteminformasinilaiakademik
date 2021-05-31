            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid mb-5">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="card-name">Guru</div>
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
                                                <th scope="col">Induk</th>
                                                <th scope="col">Mapel</th>
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
                                                                <?php echo $mengajar['mapel'] . " "; ?>
                                                            <?php }; ?>
                                                        <?php endforeach; ?>
                                                    </td>
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
                                                                <li>
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#mengajar">
                                                                        Mata Pelajaran
                                                                    </button>
                                                                    <!-- Button triger End -->
                                                                </li>
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



            <!-- modal -->
            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo site_url('admin/guru?add=guru') ?>" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <input type="hidden" name="id_guru" value="">
                                    <div class="col-md-12">
                                        <label for="induk" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="induk" name="induk" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="">
                                    </div>
                                    <div class="col-12">
                                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" id="ttl" name="tanggal_lahir" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                        <select class="form-select" id="jeniskelamin" name="jeniskelamin">
                                            <option selected value=""></option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="agama">Agama</label>
                                        <select class="form-select" id="agama" name="agama">
                                            <option selected value="">...</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen protestan">Kristen Protestan</option>
                                            <option value="kristen katolik">Kristen Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" id="alamat" class="form-control" name="alamat" value="">
                                    </div>
                                    <div class="col-12">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp" value="">
                                    </div>
                                    <input type="hidden" name="foto" value="default.jpg">
                                    <input type="hidden" name="ttd" value="default.jpg">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir modal -->


            <!-- modal mengajar -->

            <div class="modal fade" tabindex="-1" id="mengajar" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Materi dan Kelas yang di ampu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="">
                                <div class="form-group">
                                    <label for="matepelajaran">Mata Pelajaran</label>
                                    <select class="form-control" id="matapelajaran">
                                        <option selected>...</option>
                                        <?php foreach ($mapels as $mapel) : ?>
                                            <option value="<?php echo $mapel['id_mapel']; ?>"><?php echo $mapel['mapel']; ?></option>
                                            <?php endforeach; ?>\
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas">
                                        <option selected>...</option>
                                        <?php foreach ($kelass as $kelas) : ?>
                                            <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kelas']; ?></option>
                                            <?php endforeach; ?>\
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>