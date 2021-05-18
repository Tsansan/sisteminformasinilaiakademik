<!-- jJUMBOTRON -->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">SMP Negeri 2 Sidoharjo</h1>

        <!-- triger Modal Ceknilai -->
        <button type="button" class="btn btn-primary tombol" data-bs-toggle="modal" data-bs-target="#ceknilai">
            Cek Nilai?
        </button>


    </div>

    <!-- Modal cek nilai -->
    <div class="modal fade" id="ceknilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog login">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan masukkan Nomor Induk Anda!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo site_url('rapot') ?>" method="POST">
                    <div class="modal-body">
                        <input class="input-induk form-control form-control-user text-center" type="number" name="induk" id="induk">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="username" class="btn btn-primary">Masuk</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

<!-- AKHIR JUMBOTRON -->