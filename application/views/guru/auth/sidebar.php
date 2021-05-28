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
                            <div class="btn-group dropend">
                                <a type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kelas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="" href="<?php echo site_url('guru/lihatnilaisiswa') ?>">Lihat Nilai</a></li>
                                    <li><a class="" href="<?php echo site_url('guru/kelas') ?>">Daftar Nama Siswa</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div type="button">
                                <a href="<?php echo site_url('rapot/logout') ?>">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Akhir Sidebar -->