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
                                <form class="" action="<?php echo site_url('admin/guru?add=guru') ?>" method="POST">
                                    <input type="hidden" name="id_guru" value="">
                                    <div class="col-md-7">
                                        <label for="induk" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="induk" name="induk" value="">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="">
                                    </div>
                                    <div class="col-12">
                                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" id="ttl" name="tanggal_lahir" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                        <select class="form-select" id="jeniskelamin" name="jeniskelamin">
                                            <option selected value="">...</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
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
                                    <div class="col-7">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" id="alamat" class="form-control" name="alamat" value="">
                                    </div>
                                    <div class="col-7">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp" value="">
                                    </div>
                                    <input type="hidden" name="foto" value="default.jpg">
                                    <input type="hidden" name="ttd" value="default.jpg">
                                    <div class="col-12 my-3">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Akhir ISI Utama -->