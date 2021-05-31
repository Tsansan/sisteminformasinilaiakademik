<!-- Isi Utama -->
<div class="col-lg-10 isi-guru">
    <div class="container-fluid mb-5">
        <div class="pt-5">

            <!-- Card  Dashboard-->
            <div class="card">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-10">
                            <div class="card-name"><?php echo $gurus['nama'] ?></div>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Ini isi -->
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($mengajars as $mengajar) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td>
                                            <?php echo $mengajar['mapel'] . " "; ?>
                                        </td>
                                        <td>
                                            <?php echo $mengajar['kelas'] . " "; ?>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="<?php echo site_url('admin/hapusmengajar?idmengajar=') . $mengajar['id_mengajar'] . "&idguru=" . $gurus['id_guru'] ?>">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- akhir isi -->
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
            <div class="modal-header">
                <h5 class="modal-title">Materi dan Kelas yang di ampu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo site_url('admin/tambahmengajar?idguru=') . $gurus['id_guru'] ?>" method="POST">
                <div class="modal-body">
                    <div class="form-groub">
                        <label for="guru">Nama Guru</label>
                        <select class="form-control" name="guru" id="guru">
                            <option selected value="<?php echo $gurus['id_guru'] ?>"><?php echo $gurus['nama'] ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matepelajaran">Mata Pelajaran</label>
                        <select class="form-control" name="matapelajaran" id="matapelajaran">
                            <option selected>...</option>
                            <?php foreach ($mapels as $mapel) : ?>
                                <option value="<?php echo $mapel['id_mapel']; ?>"><?php echo $mapel['mapel']; ?></option>
                                <?php endforeach; ?>\
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option selected>...</option>
                            <?php foreach ($kelass as $kelas) : ?>
                                <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kelas']; ?></option>
                                <?php endforeach; ?>\
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="predikat">KKM</label>
                        <select class="form-control" name="predikat" id="predikat">
                            <option selected>...</option>
                            <option value="2">70</option>
                            <option value="6">75</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->