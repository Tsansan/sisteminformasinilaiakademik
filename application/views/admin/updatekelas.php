            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid mb-5">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="judul">Kelas</div>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary d-flex align-item-end">Tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?php echo site_url('admin/kelas?update=') . $kelass['id_kelas'] ?>" method="POST">
                                    <input type="hidden" name="id_kelas" value="<?php echo $kelass['id_kelas'] ?>">
                                    <div class="col-md-7">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $kelass['tahun'] ?>">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $kelass['kelas'] ?>">
                                    </div>
                                    <div class="col-md-7">
                                        <label class="form-label" for="walikelas">Walikelas</label>
                                        <select class="form-select" id="walikelas" name="walikelas">
                                            <option selected>...</option>
                                            <?php foreach ($gurus as $guru) : ?>
                                                <?php if ($guru['id_guru'] == $kelass['walikelas']) : ?>
                                                    <option selected value="<?php echo $guru['id_guru'] ?>"><?php echo $guru['nama'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?php echo $guru['id_guru'] ?>"><?php echo $guru['nama'] ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-12 my-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Akhir ISI Utama -->