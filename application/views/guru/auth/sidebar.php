    <!-- Isi -->

    <div class="container-fluid my-auto">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-2 sidebar">
                <div class="list">
                    <ul>
                        <a href="">
                            <li class="dashboard">Dashboard </li>
                        </a>

                        <br class="divider">
                        <li>
                            <div type="button">
                                <a class="" href="<?php echo site_url('guru/lihatnilaisiswa') ?>">Lihat Nilai</a>
                            </div>
                        </li>
                        <li>
                            <div type="button">
                                <a class="" href="<?php echo site_url('guru/kelas') ?>">Masukkan Nilai</a>
                            </div>
                        </li>
                        <?php if ($walikelas != null) : ?>
                            <li>
                                <div type="button">
                                    <a href="<?php echo site_url('guru/walikelas') ?>">
                                        Wali Kelas
                                    </a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <li>
                            <div type="button">
                                <a href="<?php echo site_url('rapot/logout') ?>">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Akhir Sidebar -->