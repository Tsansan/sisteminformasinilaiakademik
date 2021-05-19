            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid" style="height: 50000px;">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="judul">Tambah Siswa</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?php echo site_url('admin/siswa?add=siswa') ?>" method="POST">
                                    <input type="hidden" name="id_siswa" value="">
                                    <div class="col-md-7">
                                        <label for="induk" class="form-label">NIS</label>
                                        <input type="text" class="form-control" id="induk" name="induk">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nisn" class="form-label">NISN</label>
                                        <input type="text" class="form-control" id="nisn" name="nisn">
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                    <div class="col-12">
                                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" id="ttl" name="tempat_lahir">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" id="ttl" name="tanggal_lahir">
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
                                            <option selected>...</option>
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
                                            <option selected value="">...</option>
                                            <option value="anak">Anak</option>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <label for="anak" class="form-label">Anak ke-</label>
                                        <input type="text" id="anakt" class="form-control" name="anak">
                                    </div>
                                    <div class="col-7">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" id="alamat" class="form-control" name="alamat">
                                    </div>
                                    <div class="col-7">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp">
                                    </div>
                                    <div class="col-7">
                                        <label for="sekolahasal" class="form-label">Sekolah Asal</label>
                                        <input type="text" class="form-control" id="sekolahasal" name="sekolahasal">
                                    </div>
                                    <div class="col-7">
                                        <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk">
                                    </div>
                                    <div class="col-7">
                                        <label for="Ayah" class="form-label">Nama Ayah</label>
                                        <input type="text" class="form-control" id="ayah" name="ayah">
                                    </div>
                                    <div class="col-7">
                                        <label for="ibu" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control" id="ibu" name="ibu">
                                    </div>
                                    <div class="col-7">
                                        <label for="pekerjaanayah" class="form-label">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" id="Pekerjaanayah" name="pekerjaanayah">
                                    </div>
                                    <div class="col-7">
                                        <label for="pekerjaanibu" class="form-label">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu">
                                    </div>
                                    <input type="hidden" name="foto">
                                    <div class="col-12 my-3">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Akhir ISI Utama -->