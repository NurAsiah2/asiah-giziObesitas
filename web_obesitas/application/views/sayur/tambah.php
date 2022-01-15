<!-- Content Row -->
<div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Data Sayur
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">


                                <div class="card-body">


                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="Nama_Pangan">Nama Pangan</label>
                                            <input type="text" name="nama_pangan" class="form-control" id="nama_pangan">
                                            <small class="form-text text-danger"><?= form_error('nama_pangan'); ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="URT">URT</label>
                                            <input type="text" name="urt" class="form-control" id="urt">
                                        </div>


                                        <div class="form-group">
                                            <label for="Karbohidrat">Gram</label>
                                            <input class="form-control" name="gr" id="gr">
                                            <small class="form-text text-danger"><?= form_error('gr'); ?></small>

                                        </div>
                                        <div class="form-group">
                                            <label for="Karbohidrat">Karbohidrat</label>
                                            <input class="form-control" name="karbohidrat" id="Karbohidrat">
                                            <small class="form-text text-danger"><?= form_error('karbohidrat'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Protein">Protein</label>
                                            <input class="form-control" name="protein" id="Protein">
                                            <small class="form-text text-danger"><?= form_error('protein'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Lemak">Lemak</label>
                                            <input class="form-control" name="lemak" id="Lemak">
                                            <small class="form-text text-danger"><?= form_error('lemak'); ?></small>
                                        </div>
                                        <button type="submit" name="tambah" class="btn float-right text-white" style="background-color: #F4A460">Tambah Data</button>
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