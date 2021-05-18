<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- my xss -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand navbar-logo" href="index.php"><img src="img/smpn-2-sidoharjo.png" alt="SMP NEGERI 2 SIDOHARJO">
                SMP Negeri 2 Sidoharjo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <p class="nav-link" aria-current="page" href="http://smpn2sidoharjo.sch.id" target="blank">Ini
                            Nama Guru</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Isi -->

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-2 sidebar">
                <div class="list">
                    <ul>
                        <li class="dashboard">
                            <a href="">Dashboard</a>
                        </li>
                        <br>
                        <li>
                            <a href="">Kelas</a>
                        </li>
                        <li>
                            <div type="button">
                                <a href=".aaaa">jadwal</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Akhir Sidebar -->


            <!-- Isi Utama -->
            <div class="col-lg-10 isi-guru">
                <div class="container-fluid" style="height: 50000px;">
                    <div class="pt-5">

                        <!-- Card  Dashboard-->
                        <div class="card">
                            <div class="card-header">
                                Dashboard
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="img/default.jpg" width="200px" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-sm-7">
                                        <form>
                                            <fieldset disabled>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" id="nama" class="form-control" value="Nama Guru" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Alamat</label>
                                                    <input type="text" id="nama" class="form-control" value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit earum debitis id laudantium et architecto eos! Animi expedita, harum, exercitationem, modi assumenda quae qui vel ut distinctio officia asperiores dolorum." placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Tempat Tanggal Lahir</label>
                                                    <input type="date" id="nama" class="form-control" value="01/16/2029" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nomor Telepon</label>
                                                    <input type="text" id="nama" class="form-control" value="012345678" placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Mata pelajaran yang di ampu</label>
                                                    <input type="text" id="nama" class="form-control" value="Bahasa Inggris" placeholder="Disabled input">
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

        </div>
    </div>



    <!-- Akhir isi -->



    <!-- FOOTER -->
    <div class="container-fluid">
        <div class="row justify-content-center footer">
            <div class="col-lg-1">
                <img src="img/smpn-2-sidoharjo.png" alt="">
            </div>
            <div class="col-lg-2 footer-logo">
                SMP Negeri 2 Sidoharjo
            </div>
            <div class="col-lg-3">
                <h2>Alamat</h2>
                <p>Jl, Pungkruk - Tanon, Km. 04, Sidoharjo, Sragen, Jawa Tengah</p>
            </div>
            <div class="col-lg-5">
                <h2>Kontak</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <h7>No. Telp</h7>
                        <p>(0271) 8822457</p>
                        <h7>website</h7>
                        <p>
                            smpn2sidoharjo.sch.id
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h7>E-mail</h7>
                        <p>smpsid2@smpn2sidoharjo.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Footer -->

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>