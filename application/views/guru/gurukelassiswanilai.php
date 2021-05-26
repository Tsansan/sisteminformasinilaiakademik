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
                    </div>
                    <!-- akhir kelas -->

                    <!-- Daftar nama -->
                    <div id="daftarnama">
                        <form action="<?php echo site_url('guru/masukkannilaisiswa') ?>" method="post">
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
                                    $nilai = 1;
                                    $predikat = 1;
                                    $deskripsi = 1;
                                    foreach ($kelass as $kelas) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++ ?></th>
                                            <td class="col-sm-3"><?php echo $kelas['nama']; ?></td>
                                            <td class="col-sm-1">
                                                <input type="number" class="form-control col-sm-2" id="nilai[<?php echo $nilai++; ?>]" name="nilai[<?php echo $nilai++; ?>]" placeholder="Nilai">
                                            </td>
                                            <td class="col-sm-1">
                                                <input type="text" class="form-control col-sm-2" id="predikat[<?php echo $predikat++; ?>]" name="predikat[<?php echo $predikat++; ?>]" readonly>
                                            </td>
                                            <td>
                                                <textarea class="form-control col-sm-5" name="deskripsi<?php echo $deskripsi++; ?>" aria-label="With textarea"></textarea>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Masukkan Nilai?</button>
                            </div>
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


    var nilai = document.getElementById(nilai[1])
</script>