            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid" style="height: 50000px;">
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
                                <form class="" action="<?php echo site_url('admin/guru?update=') . $gurus['id_guru'] ?>" method="POST">
                                    <input type="hidden" name="id_guru" value="<?php echo $gurus['id_guru'] ?>">
                                    <div class="col-md-7">
                                        <label for="induk" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="induk" name="induk" value="<?php echo $gurus['induk'] ?>">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $gurus['nama'] ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="<?php echo $gurus['tempat_lahir'] ?>">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" id="ttl" name="tanggal_lahir" value="<?php echo $gurus['tanggal_lahir'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                        <select class="form-select" id="jeniskelamin" name="jeniskelamin">
                                            <option selected value="<?php echo $gurus['jeniskelamin'] ?>"><?php echo $gurus['jeniskelamin'] ?></option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="agama">Agama</label>
                                        <select class="form-select" id="agama" name="agama">
                                            <option selected value="<?php echo $gurus['agama'] ?>"><?php echo $gurus['agama'] ?></option>
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
                                        <input type="text" id="alamat" class="form-control" name="alamat" value="<?php echo $gurus['alamat'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $gurus['telp'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="telp" class="form-label">Kelas Yang di Ampu</label>
                                        <div class="col-2">
                                            <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="<?php echo $gurus['tempat_lahir'] ?>">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" id="ttl" name="tanggal_lahir" value="<?php echo $gurus['tanggal_lahir'] ?>">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="<?php echo $gurus['tempat_lahir'] ?>">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" id="ttl" name="tanggal_lahir" value="<?php echo $gurus['tanggal_lahir'] ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="foto" value="<?php echo $gurus['foto'] ?>">
                                    <input type="hidden" name="ttd" value="<?php echo $gurus['ttd'] ?>">
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