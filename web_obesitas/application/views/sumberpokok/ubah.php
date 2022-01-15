<!-- Content Row -->
<div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Form Ubah Data Sumber Pokok
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">


                                <div class="card-body">


                                    <form action="" method="post">
                                        <input type="hidden" name="Id" value="<?= $Sumber_pokok["Id"]; ?>">


                                        <div class=" form-group">
                                            <label for="Nama_Pangan">Nama Pangan</label>
                                            <input type="text" name="nama_pangan" class="form-control" id="nama_pangan" value="<?= $Sumber_pokok["Nama_Pangan"]; ?>"><small class="form-text text-danger"><?= form_error('nama_pangan'); ?></small>
                                        </div>

                                        <div class=" form-group">
                                            <label for="URT">URT</label>
                                            <input type="text" name="urt" class="form-control" id="urt" value="<?= $Sumber_pokok["URT"]; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="gr">Gram</label>
                                            <input class="form-control" name="gr" id="gr" value="<?= $Sumber_pokok["Gr"]; ?>">
                                            <small class="form-text text-danger"><?= form_error('gr'); ?></small>
                                        </div>


                                        <div class="form-group">
                                            <label for="Karbohidrat">Karbohidrat</label>
                                            <input class="form-control" name="karbohidrat" id="Karbohidrat" value="<?= $Sumber_pokok["Karbohidrat"]; ?>"><small class="form-text text-danger"><?= form_error('karbohidrat'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Protein">Protein</label>
                                            <input class="form-control" name="protein" id="Protein" value="<?= $Sumber_pokok["Protein"]; ?>">
                                            <small class="form-text text-danger"><?= form_error('protein'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Lemak">Lemak</label>
                                            <input class="form-control" name="lemak" id="Lemak" value="<?= $Sumber_pokok["Lemak"]; ?>">
                                            <small class="form-text text-danger"><?= form_error('lemak'); ?></small>
                                        </div>

                                        <button type="submit" name="ubah" class="btn float-right text-white" style="background-color: #F4A460">Ubah Data</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>

    </div>
</div>
</div>