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
                        <h3>Masukkan Nilai</h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="carikelas">Piliih Kelas</label>
                                <select class="form-select" id="carikelas" aria-label="Default select example">
                                    <option selected value="">...</option>
                                    <?php foreach ($kelass as $kelas) : ?>
                                        <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kelas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="carikelas">Jenis Nilai</label>
                                <select class="form-select" id="jenisnilai" aria-label="Default select example">
                                    <option selected value="pengetahuan">Pengetahuan</option>
                                    <option value="keterampilan">Keterampilan</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary mt-4" id="tombol">Lihat Nilai</button>
                            </div>
                        </div>
                    </div>
                    <!-- akhir kelas -->

                    <!-- Daftar nama -->
                    <div id="daftarnama">
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
    var jenisnilai = documen.getElementById('jenisnilai');
    var tombol = documen.getElementById('tombol');

    tombol.addEventListener('click', function() {
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