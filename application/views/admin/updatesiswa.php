            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid mb-5">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="judul">Update Siswa</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?php echo site_url('admin/siswa?update=') . $siswa['id_siswa'] ?>" method="POST">
                                    <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa'] ?>">
                                    <div class="col-md-7">
                                        <label for="induk" class="form-label">NIS</label>
                                        <input type="text" class="form-control" id="induk" name="induk" value="<?php echo $siswa['induk'] ?>">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nisn" class="form-label">NISN</label>
                                        <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $siswa['nisn'] ?>">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama'] ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" id="ttl" name="tempat_lahir" value="<?php echo $siswa['tempat_lahir'] ?>">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" id="ttl" name="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                        <select class="form-select" id="jeniskelamin" name="jeniskelamin">
                                            <option selected value="<?php echo $siswa['jeniskelamin'] ?>"><?php echo $siswa['jeniskelamin'] ?></option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="agama">Agama</label>
                                        <select class="form-select" id="agama" name="agama">
                                            <option selected value="<?php echo $siswa['agama'] ?>"><?php echo $siswa['agama'] ?></option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen protestan">Kristen Protestan</option>
                                            <option value="kristen katolik">Kristen Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <label class="form-label" for="stastuskeluarga">Status Keluarga</label>
                                        <select class="form-select" id="stastuskeluarga" name="statuskeluarga">
                                            <option selected value="<?php echo $siswa['statuskeluarga'] ?>"><?php echo $siswa['statuskeluarga'] ?></option>
                                            <option value="anak">Anak</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <label for="anak" class="form-label">Anak ke-</label>
                                        <input type="text" id="anakt" class="form-control" name="anak" value="<?php echo $siswa['anak'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" id="alamat" class="form-control" name="alamat" value="<?php echo $siswa['alamat'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $siswa['telp'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="sekolahasal" class="form-label">Sekolah Asal</label>
                                        <input type="text" class="form-control" id="sekolahasal" name="sekolahasal" value="<?php echo $siswa['sekolahasal'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk" value="<?php echo $siswa['tanggalmasuk'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="Ayah" class="form-label">Nama Ayah</label>
                                        <input type="text" class="form-control" id="ayah" name="ayah" value="<?php echo $siswa['ayah'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="ibu" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control" id="ibu" name="ibu" value="<?php echo $siswa['ibu'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="pekerjaanayah" class="form-label">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" id="Pekerjaanayah" name="pekerjaanayah" value="<?php echo $siswa['pekerjaanayah'] ?>">
                                    </div>
                                    <div class="col-7">
                                        <label for="pekerjaanibu" class="form-label">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" value="<?php echo $siswa['pekerjaanibu'] ?>">
                                    </div>
                                    <input type="hidden" name="foto" value="<?php echo $siswa['foto'] ?>">
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