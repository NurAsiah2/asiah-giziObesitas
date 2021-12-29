<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <h3 class="h3 mb-2 text-gray-800">
                <center><?= $title; ?></center>
            </h3>

            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Makanan - Sumber Pokok <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row mb-3 float-right">
                <div class="col mr-2">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data. . ." name="cari">
                            <div class="input-group-append">
                                <button class="btn text-white" type="submit" style="background-color: #F4A460">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <button class="btn btn-sm mb-3" style="background-color: #F4A460">
                <a class="nav-link text-white" href="<?= base_url('sumberpokok/tambah'); ?>">Tambah Data Makanan</a></button>



            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" colo id="dataTable" width="100%" cellspacing="0">
                                <?php $Id = 1; ?>
                                <?php foreach ($sumberpokok as $row) : ?>
                                    <td>
                                        <center><?= $Id ?> </center>
                                    </td>
                                    <td>
                                        <center><?= $row["Nama_Pangan"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["URT"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["Gr"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["Karbohidrat"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["Protein"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["Lemak"]; ?></center>
                                    </td>


                                    <td>

                                        <a href="<?= base_url('sumberpokok/ubah/'); ?><?= $row['Id']; ?>" class="badge text-white float-left" style="background-color: #F4A460">Ubah</a>



                                        <a href="<?= base_url(('sumberpokok/hapus/' . $row['Id'])); ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin ?');">Hapus</a>
                                    </td>
                                    </tr>

                                    <?php $Id++; ?>
                                <?php endforeach; ?>
                        </div>

                        <thead>
                            <tr>
                                <th>
                                    <center>No.</center>
                                </th>
                                <th>
                                    <center>Nama Pangan</center>
                                </th>
                                <th>
                                    <center>Ukuran Rumah Tangga</center>
                                </th>
                                <th>
                                    <center>Gram</center>
                                </th>
                                <th>
                                    <center>Karbohidrat</center>
                                </th>
                                <th>
                                    <center>Protein</center>
                                </th>
                                <th>
                                    <center>Lemak</center>
                                </th>
                                <th>
                                    <center>Aksi</center>
                                </th>

                            </tr>
                        </thead>
                        </tbody>
                        </table>
                    </div>
                    <p>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="<?= base_url('sumberpokok'); ?>">Sumber Pokok</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('sumberhewani'); ?>">Sumber Hewani</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('sumbernabati'); ?>">Sumber Nabati</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('buah'); ?>">Buah</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('sayur'); ?>">Sayur</a></li>
                        </ul>
                    </nav>

                    <!-- /.container-fluid -->
                </div>

            </div>

            <!-- End of Main Content -->
        </div>
    </div>
</div>
</div>
</div>



<!-- Content Row -->