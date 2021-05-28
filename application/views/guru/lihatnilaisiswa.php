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
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary mt-4" id="edit">Edit</button>
                            </div>
                        </div>
                    </div>
                    <!-- akhir kelas -->

                    <!-- Daftar nama -->
                    <div id="daftarnama">
                        <form action="<?php echo site_url('guru/masukkannilaisiswa') ?>" method="post">
                            <div class="row my-3 ms-3">
                                <label for="kkm" class="col-sm-2 col-form-label col-form-label-sm">KKM</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control form-control-sm" name="kkm" id="kkm">
                                </div>
                            </div>
                            <table class="table my-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th class="col" scope="col">NIlai</th>
                                        <th class="col" scope="col">predikat</th>
                                        <th class="col" scope="col">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;

                                    $nilaimapel = 1;
                                    $id_absen = 1;
                                    $jenisnilai = 1;
                                    $id_mapel = 1;
                                    $nilai = 1;
                                    $deskripsi = 1;
                                    $predikat = 1;
                                    $id_guru = 1;

                                    $jumlah = 1; ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td class="col-sm-3">Silahkan Pilih Kelas</td>
                                        <td class="col-sm-1">
                                            <input type="hidden" name="idnilaimapel[<?php echo $nilaimapel++ ?>]" value="" disabled>
                                            <input type="hidden" name="idabsen[<?php echo $id_absen++ ?>]" value="" disabled>
                                            <input type="hidden" name="jenis[<?php echo $jenisnilai++ ?>]" value="" disabled>
                                            <input type="hidden" name="mapel[<?php echo $id_mapel++ ?>]" value="" disabled>
                                            <input type="hidden" name="idguru[<?php echo $id_guru++ ?>]" value="" disabled>
                                            <input type="number" class="form-control col-sm-2" id="nilai" name="nilai[<?php echo $nilai++; ?>]" disabled>
                                        </td>
                                        <td class="col-sm-1">
                                            <input type="text" class="form-control col-sm-2" name="predikat[<?php echo $predikat++ ?>]" id="predikat" value="" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control col-sm-5" name="deskripsi[<?php echo $deskripsi++; ?>]" aria-label="With textarea" disabled></textarea>
                                            <input type="hidden" name="jumlah" id="jumlah" value="<?php echo $jumlah++ ?>" disabled>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
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
    var jenisnilai = document.getElementById('jenisnilai');
    var tombol = document.getElementById('tombol');
    var editnilai = document.getElementById('edit')




    tombol.addEventListener('click', function() {
        console.log(carikelas.value);
        console.log(jenisnilai.value);
        var page = new XMLHttpRequest();


        page.onreadystatechange = function() {

            if (page.readyState == 4 && page.status == 200) {

                daftarnama.innerHTML = page.responseText;

            }
        }

        page.open('GET', "<?php echo site_url('guru/ajaxlihatnilaisiswa?kelas=') ?>" + carikelas.value + "&jenis=" + jenisnilai.value, true);
        page.send();

    })

    editnilai.addEventListener('click', function() {
        var page = new XMLHttpRequest();

        page.onreadystatechange = function() {
            if (page.readyState == 4 && page.status == 200) {
                daftarnama.innerHTML = page.responseText;
            }
        }

        page.open('GET', "<?php echo site_url('guru/ajaxeditnilaisiswa?kelas=') ?>" + carikelas.value + "&jenis=" + jenisnilai.value, true);
        page.send();
    })
</script>