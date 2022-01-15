<!-- Content Row -->
<div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h3 class="mb-2 text-center">Rekomendasi Makanan untuk Penderita Obesitas</h3>

        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Silahkan Input Data Anda Terlebih Dahulu
                        </div>

                        <div class="card-header py-2">


                            <div class="card-body">


                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>

                                <form action="" method="post">

                                    <div class="form-group row">
                                        <label for="tinggi" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" placeholder="Berdasarkan Cm" id="tinggi" name="tinggi">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="berat" class="col-sm-2 col-form-label">Berat Badan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" placeholder="Berdasarkan Kg" id="berat" name="berat">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                                        <div class="col-sm-10">
                                            <input type="number" min="18" class="form-control" placeholder="Berdasarkan Tahun" id="umur" name="umur">

                                        </div>
                                    </div>

                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis aktivitas</legend>
                                            <div class="col-sm-10">
                                                <input type="radio" name="aktivitas" value="ringan">
                                                Ringan
                                                <p class="text-justify">Berjalan santai di rumah, kantor, atau pusat
                                                    perbelanjaan, Duduk bekerja di depan
                                                    komputer, membaca, menulis, menyetir,
                                                    mengoperasikan mesin dengan posisi duduk
                                                    atau berdiri, Berdiri melakukan pekerjaan
                                                    rumah tangga ringan seperti mencuci piring,
                                                    setrika, memasak, menyapu, mengepel lantai,
                                                    menjahit, Latihan peregangan dan pemanasan
                                                    dengan lambat, Membuat prakarya, bermain
                                                    kartu, bermain video game, menggambar,
                                                    melukis, bermain musik, Bermain billyard,
                                                    memancing, memanah, menembak, golf, naik
                                                    kuda.
                                                </p>


                                                <input type="radio" name="aktivitas" value="sedang">
                                                Sedang
                                                <p class="text-justify">
                                                    cepat (kecepatan 5 km/jam) pada
                                                    di kelas, ke tempat kerja atau ke toko; dan
                                                    jalan santai, jalan sewaktu istirahat kerja,
                                                    Pekerjaan tukang kayu, membawa dan
                                                    menyusun balok kayu, membersihkan rumput
                                                    dengan mesin pemotong rumput
                                                    Memindahkan perabot ringan, berkebun,
                                                    menanam pohon, mencuci mobil,
                                                    Bulutangkis rekreasional, bermain rangkap
                                                    bola, dansa, tenis meja, bowling, bersepeda
                                                    pada lintasan datar, volley non kompetitif,
                                                    bermain skate board, ski air, berlayar.
                                                </p>

                                                <input type="radio" name="aktivitas" value="berat">
                                                Berat
                                                <p class="text-justify">
                                                    Berjalan dengan sangat cepat (kecepatan
                                                    lebih dari 5 km/jam), berjalan mendaki bukit,
                                                    berjalan dengan membawa beban di
                                                    punggung, naik gunung, jogging (kecepatan 8
                                                    km/jam) dan berlari, Pekerjaan seperti
                                                    mengangkut beban berat, menyekop pasir,
                                                    memindahkan batu bata, menggali selokan,
                                                    mencangkul, Pekerjaan rumah seperti
                                                    memindahkan perabot yang berat,
                                                    menggendong anak, bermain aktif dengan
                                                    anak, Bersepeda lebih dari 15 Km per jam
                                                    dengan lintasan mendaki, bermain basket, cross country, badminton kompetitif, volley
                                                    kompetitif, sepak bola, tenis single, tinju.
                                                </p>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                            <div class="col-sm-10">
                                                <input type="radio" name="jk" value="Laki-laki">
                                                Laki-laki
                                                <input type="radio" name="jk" value="Perempuan">
                                                Perempuan
                                            </div>
                                        </div>
                                    </fieldset>




                                    <button type="submit" class="btn float-right text-white" style="background-color: #F4A460">Hitung Data</button>


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



<!-- End of Main Content -->