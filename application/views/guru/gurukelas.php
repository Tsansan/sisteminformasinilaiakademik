<!-- Isi Utama -->
<div class="col-lg-10 isi-guru">
    <div class="container-fluid" style="height: 50000px;">
        <div class="pt-5">

            <!-- Card  Dashboard-->
            <div class="card">
                <div class="card-header">
                    Kelas
                </div>
                <div class="card-body">
                    <!-- kelas -->
                    <div class="mx-3">
                        <h3>Kelas Yang di ampu</h3>
                        <select class="form-select" id="carikelas" aria-label="Default select example">
                            <?php foreach ($kelass as $kelas) : ?>
                                <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- akhir kelas -->

                    <!-- Daftar nama -->
                    <div class="daftarnama">
                        <table class="table my-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="nama-nilai">Tsansan16</td>
                                    <td>
                                        <div class="status-nilai">Lengkap</div>
                                    </td>
                                    <td>
                                        <!-- split button -->
                                        <div class="btn-group aksi-nilai">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"> lihat Data</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Ubah Data</a></li>
                                            </ul>
                                        </div>
                                        <!-- Split button -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- daftar nama -->

                </div>
            </div>
        </div>



    </div>
</div>
<!-- Akhir ISI Utama -->

<script src="<?php echo base_url('asset/') ?>js/ajaxgurukelas.js"></script>