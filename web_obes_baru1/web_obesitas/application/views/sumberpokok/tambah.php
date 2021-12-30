<!-- Content Row -->
<div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Data Sumber Pokok
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
                                            <div class="URT">
                                                <label for="exampleFormControlSelect1">Ukuran Rumah Tangga</label>
                                                <select class="form-control" name="urt" id="URT">
                                                    <option value="1">1/2 Gelas</option>
                                                    <option value="2">4 Buah Besar</option>
                                                    <option value="3">5 1/2 Sendok Besar</option>
                                                    <option value="4">3 Buah Sedang</option>
                                                    <option value="5">2 Buah Sedang</option>
                                                    <option value="6">12 Biji</option>
                                                    <option value="7">10 Sendok Makan</option>
                                                    <option value="8">2 Gelas</option>
                                                    <option value="9">1 Gelas</option>
                                                    <option value="10">3/4 Gelas</option>
                                                    <option value="11">3 Iris</option>
                                                    <option value="12">1 1/2 Potong</option>
                                                    <option value="13">3 Potong Sedang</option>
                                                    <option value="14">1/2 Biji Sedang</option>
                                                    <option value="15">5 Sendok Makan</option>
                                                    <option value="16">1 Potong Sedang</option>
                                                    <option value="17">8 Sendok Makan</option>
                                                    <option value="18">5 Sendok Makan</option>
                                                    <option value="19">1 Biji Sedang</option>
                                                </select>
                                            </div>
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