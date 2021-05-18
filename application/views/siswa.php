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
            <a class="navbar-brand navbar-logo" href="localhost/belajarcss/index.php"><img src="img/smpn-2-sidoharjo.png" alt="SMP NEGERI 2 SIDOHARJO">
                SMP Negeri 2 Sidoharjo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <p class="nav-link">Titus
                            Angga Sandika</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->



    <!-- Isi Laman Biodata -->
    <div class="biodata py-2">

        <!-- identitas -->

        <div class="container">
            <div class="identitas pt-5">
                <h2>Titus Angga Sandika | 1201722002</h2>

                <div class="row py-3">
                    <div class="col-lg-3">
                        <div class="input-group mb-3">
                            <select class="form-select" id="Semester_1" aria-label="Example select with button addon">
                                <option selected value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="3">Semester 4</option>
                                <option value="3">Semester 5</option>
                                <option value="3">Semester 6</option>
                            </select>
                            <a class="btn btn-primary" href="#" role="button">print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akahir Identitas -->

        <!-- Tabel Rapot -->
        <div class="container rapot">

            <!-- SIkap -->
            <div class="sikap">
                <div class="py-2">
                    <h5> A. Sikap</h5>
                </div>
                <div class="table-responsive-lg pt-2">
                    <h6>1. Sikap Spiritual</h6>
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">Predikat</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse accusamus nobis
                                    eius,
                                    tenetur magnam dolorem deleniti iste laudantium, non soluta omnis error quia
                                    odit
                                    laboriosam alias aspernatur incidunt excepturi exercitationem!
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive-lg pt-2">
                    <h6>1. Sikap Spiritual</h6>
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">Predikat</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse accusamus nobis
                                    eius,
                                    tenetur magnam dolorem deleniti iste laudantium, non soluta omnis error quia
                                    odit
                                    laboriosam alias aspernatur incidunt excepturi exercitationem!
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir SIkap -->

            <!-- Pengetahuan -->

            <div class="pengetahuan">
                <div class="py-2">
                    <h5> B. Pengetahuan</h5>
                </div>
                <div class="table-responsive pt-2">
                    <table class="table table-bordered border-primary" width="1000px">
                        <thead>
                            <tr>
                                <th style="width: 20px;" scope="col">No</th>
                                <th style="width: 200pxt;" scope="col">Mata Pelajaran</th>
                                <th style="width: 20px;" scope="col">KKM</th>
                                <th style="width: 20px;" scope="col">Nilai</th>
                                <th style="width: 20px;" scope="col">Predikat</th>
                                <th style="width: 700px;" scope="col">Deskripsi</th>
                            </tr>
                            <tr>
                                <th colspan="2" scope="col">Kelompok A</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Agama</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Indonesia</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Matematika</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Ilmu Pengetahuan Alam</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Ilmu Pengetahuan Sosial</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Inggris</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive pt-2">
                    <table class="table table-bordered border-primary" width="1000px">
                        <thead>
                            <tr>
                                <th style="width: 20px;" scope="col">No</th>
                                <th style="width: 200pxt;" scope="col">Mata Pelajaran</th>
                                <th style="width: 20px;" scope="col">KKM</th>
                                <th style="width: 20px;" scope="col">Nilai</th>
                                <th style="width: 20px;" scope="col">Predikat</th>
                                <th style="width: 700px;" scope="col">Deskripsi</th>
                            </tr>
                            <tr>
                                <th colspan="2" scope="col">Kelompok b</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Seni Budaya</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Indonesia</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Matematika</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir Pengetahuan -->

            <!-- Keterampilan -->

            <div class="Keterampilan">
                <div class="py-2">
                    <h5> C. Keterampilan</h5>
                </div>
                <div class="table-responsive pt-2">
                    <table class="table table-bordered border-primary" width="1000px">
                        <thead>
                            <tr>
                                <th style="width: 20px;" scope="col">No</th>
                                <th style="width: 200pxt;" scope="col">Mata Pelajaran</th>
                                <th style="width: 20px;" scope="col">KKM</th>
                                <th style="width: 20px;" scope="col">Nilai</th>
                                <th style="width: 20px;" scope="col">Predikat</th>
                                <th style="width: 700px;" scope="col">Deskripsi</th>
                            </tr>
                            <tr>
                                <th colspan="2" scope="col">Kelompok A</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Agama</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Indonesia</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Matematika</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Ilmu Pengetahuan Alam</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Ilmu Pengetahuan Sosial</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Inggris</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive pt-2">
                    <table class="table table-bordered border-primary" width="1000px">
                        <thead>
                            <tr>
                                <th style="width: 20px;" scope="col">No</th>
                                <th style="width: 200pxt;" scope="col">Mata Pelajaran</th>
                                <th style="width: 20px;" scope="col">KKM</th>
                                <th style="width: 20px;" scope="col">Nilai</th>
                                <th style="width: 20px;" scope="col">Predikat</th>
                                <th style="width: 700px;" scope="col">Deskripsi</th>
                            </tr>
                            <tr>
                                <th colspan="2" scope="col">Kelompok b</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Seni Budaya</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Bahasa Indonesia</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                            <tr>
                                <td class="nilai" scope="row">1</td>
                                <td>Matematika</td>
                                <td>75</td>
                                <td>75</td>
                                <td class="nilai" scope="row">C</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut qui modi autem
                                    aliquam soluta ad sapiente ab deserunt itaque ea voluptatum vitae at
                                    blanditiis
                                    inventore, impedit ducimus voluptatem maxime! Quae?
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir Keterampilan -->


            <!-- Predikat -->
            <div class="predikat pt-3">
                <div class="table-responsive">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th class="col-1" rowspan="2" scope="row">KKM </th>
                                <th class="col-11" colspan="4" scope="row">Predikat </th>
                            </tr>
                            <tr>
                                <th class="col-2" scope="row">Kurang (D) </th>
                                <th class="col-3" scope="row">Cukup (C) </th>
                                <th class="col-3" scope="row">Baik (B) </th>
                                <th class="col-3" scope="row">Sangat Baik (A) </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>70</td>
                                <td> &lt 70</td>
                                <td>71-80</td>
                                <td>81-90</td>
                                <td>90-100</td>
                            </tr>
                            <tr>
                                <td>75</td>
                                <td> &lt 75</td>
                                <td>75-83</td>
                                <td>84-92</td>
                                <td>93-100</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- Akhir Predikat -->

            <!-- Ekstrakulikuler -->
            <div class="ekstrakulikuler">
                <div class="py-2">
                    <h5>D. Ekstrakulikuler</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="row">No</th>
                                <th class="col-3" scope="row">Ekstrakulikuler</th>
                                <th class="col-1" scope="row">Nilai</th>
                                <th class="col-7" scope="row">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir Ekstrakulikuler -->
            <!-- Prestasi -->
            <div class="Prestasi">
                <div class="py-2">
                    <h5>E. Prestasi</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="row">No</th>
                                <th class="col-3" scope="row">Prestasi</th>
                                <th class="col-8" scope="row">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir Prestasi -->

            <!-- Catatan Walikelas -->
            <div class="catatanwalikelas">
                <div class="py-2">
                    <h5>
                        F. Catatan Wali Kelas
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary">
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis velit eligendi ex!
                                Aperiam similique tempora officiis! Facere reprehenderit distinctio doloremque
                                laboriosam libero, quae animi soluta cum quidem ab, exercitationem veniam.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Akhir catatan Walikelas -->


        </div>
        <!-- Akhir tabel rapot -->

    </div>
    </div>
    <!-- Akhir Isi Laman Biodata -->

    <!-- FOOTER -->
    <div class="container-fluid">
        <div class="row justify-content-center footer pt-2 mt-n2">
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
        <!-- Akhir Footer -->
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>