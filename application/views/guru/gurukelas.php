<!-- Isi Utama -->
<div class="col-lg-10 isi-guru">
    <div class="container-fluid">
        <div class="pt-5">

            <!-- Card  Dashboard-->
            <div class="card">
                <div class="card-header">
                    Kelas
                </div>
                <div class="card-body">
                    <!-- kelas -->
                    <div class="mx-3">
                        <h3>Daftar Siswa </h3>
                        <select class="form-select" id="carikelas" aria-label="Default select example">
                            <option selected value=""></option>
                            <?php foreach ($kelass as $kelas) : ?>
                                <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- akhir kelas -->

                    <!-- Daftar nama -->
                    <div id="daftarnama">
                        <label for="inputEmail3" class="col-sm-3 col-form-label-lg ms-3 pt-2">Masukkan NIlai?</label>
                        <a type="button" href="<?php echo site_url('guru/nilaisiswa') . "?kelas=" . $kelas['id_kelas'] . "&nilai=pengetahuan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Pengetahuan</a>
                        <a type="button" href="<?php echo site_url('guru/nilaisiswa') . "?kelas=" . $kelas['id_kelas'] . "&nilai=pengetahuan" ?>" class="col-sm-2 btn btn-primary ms-3 mt-1">Keterampilan</a>

                        <table class="table my-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">NISN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Silahkan Pilih kelas</td>
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

<script>
    // mengambil elemen yang di butuhkan

    var carikelas = document.getElementById('carikelas');
    var daftarnama = document.getElementById('daftarnama');
    var aksi = document.getElementById('aksi');

    carikelas.addEventListener('click', function() {
        console.log(carikelas.value);
        // buat objek ajax
        var xhr = new XMLHttpRequest();

        // cek kesiapan ajax
        xhr.onreadystatechange = function() {

            if (xhr.readyState == 4 && xhr.status == 200) {
                daftarnama.innerHTML = xhr.responseText;

            }
        }

        xhr.open('GET', "<?php echo site_url('guru/ajaxkelassiswa?carikelas=') ?>" + carikelas.value, true);
        xhr.send();
    });
</script>