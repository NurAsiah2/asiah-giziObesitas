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
                                            <input type="number" class="form-control" placeholder="Berdasarkan Tahun" id="umur" name="umur">
                                        </div>
                                    </div>

                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis aktivitas</legend>
                                            <div class="col-sm-10">
                                                <input type="radio" name="aktivitas" value="aktivitas1">
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


                                                <input type="radio" name="aktivitas" value="aktivitas2">
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

                                                <input type="radio" name="aktivitas" value="aktivitas3">
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
                                                <select class="form-control" id="jk" name="jk">
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>

                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Karbohidrat</legend>
                                            <div class=" col-sm-10">
                                                <select class="form-control" id="karbohidrat" name="karbohidrat">
                                                    <option value="1">0.60</option>
                                                    <option value="2">0.61</option>
                                                    <option value="3">0.62</option>
                                                    <option value="4">0.63</option>
                                                    <option value="5">0.64</option>
                                                    <option value="6">0.65</option>
                                                    <option value="7">0.66</option>
                                                    <option value="8">0.67</option>
                                                    <option value="9">0.68</option>
                                                    <option value="10">0.69</option>
                                                    <option value="11">0.70</option>
                                                    <option value="12">0.71</option>
                                                    <option value="13">0.72</option>
                                                    <option value="14">0.73</option>
                                                    <option value="15">0.74</option>
                                                    <option value="16">0.75</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>



                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Protein</legend>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="protein" name="protein">
                                                    <option value="1">0.10</option>
                                                    <option value="2">0.11</option>
                                                    <option value="3">0.12</option>
                                                    <option value="4">0.13</option>
                                                    <option value="5">0.14</option>
                                                    <option value="6">0.15</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Lemak</legend>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="lemak" name="lemak">
                                                    <option value="1">0.15</option>
                                                    <option value="2">0.16</option>
                                                    <option value="3">0.17</option>
                                                    <option value="4">0.18</option>
                                                    <option value="5">0.19</option>
                                                    <option value="6">0.20</option>
                                                </select>
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