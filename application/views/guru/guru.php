            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header">
                                Dashboard
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url('asset/img/') . $this->session->userdata('foto') ?>" width="200px" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-sm-7">
                                        <form>
                                            <fieldset disabled>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" id="nama" class="form-control" value="<?php echo $biodatas['nama']; ?>" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Induk</label>
                                                    <input type="text" id="nama" class="form-control" value="<?php echo $biodatas['induk'] ?>" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Alamat</label>
                                                    <input type="text" id="nama" class="form-control" value="<?php echo $biodatas['alamat'] ?>" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Tempat Tanggal Lahir</label>
                                                    <input type="text" id="nama" class="form-control" value="<?php echo $biodatas['tempat_lahir'] ?>" placeholder="Disabled input">
                                                    <input type="date" id="nama" class="form-control mt-3" value="<?php echo $biodatas['tanggal_lahir'] ?>" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nomor Telepon</label>
                                                    <input type="text" id="nama" class="form-control" value="<?php echo $biodatas['telp'] ?>" placeholder="Disabled input">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Akhir ISI Utama -->