<!-- Begin Page Content -->
<?php
$role_id = $_SESSION['role_id'] == 1;
if ($role_id) {

?>
    <div class="container-fluid">


        <!-- Content Row -->
        <div class="row">
            <!-- Begin Page Content -->
            <div class="container">

                <!-- Page Heading -->
                <h3 class="h3 mb-3 text-gray-800">
                    <center><?= $title; ?></center>
                </h3>



                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" colo id="dataTable" width="100%" cellspacing="0">
                                    <?php $id = 1; ?>
                                    <?php foreach ($inputdata as $row) : ?>
                                        <td>
                                            <center><?= $id ?> </center>
                                        </td>
                                        <td>
                                            <center><?= $row["tinggi"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["berat"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["umur"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["aktivitas"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["jk"]; ?></center>
                                        </td>




                                        </tr>

                                        <?php $id++; ?>
                                    <?php endforeach; ?>
                            </div>

                            <thead>
                                <tr>
                                    <th>
                                        <center>No.</center>
                                    </th>
                                    <th>
                                        <center>Tinggi Badan</center>
                                    </th>
                                    <th>
                                        <center>Berat Badan</center>
                                    </th>
                                    <th>
                                        <center>Umur</center>
                                    </th>
                                    <th>
                                        <center>Jenis Aktivitas</center>
                                    </th>
                                    <th>
                                        <center>Jenis Kelamin</center>
                                    </th>



                                </tr>
                            </thead>
                            </tbody>
                            </table>
                        </div>



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

<?php } else { ?>

    <div class="container-fluid">


        <!-- Content Row -->
        <div class="row">
            <!-- Begin Page Content -->
            <div class="container">

                <!-- Page Heading -->
                <h3 class="h3 mb-3 text-gray-800">
                    <center><?= $title; ?></center>
                </h3>



                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" colo id="dataTable" width="100%" cellspacing="0">
                                    <?php $id = 1; ?>
                                    <?php foreach ($inputdata as $row) : ?>
                                        <td>
                                            <center><?= $id ?> </center>
                                        </td>
                                        <td>
                                            <center><?= $row["tinggi"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["berat"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["umur"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["aktivitas"]; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row["jk"]; ?></center>
                                        </td>




                                        </tr>

                                        <?php $id++; ?>
                                    <?php endforeach; ?>
                            </div>

                            <thead>
                                <tr>
                                    <th>
                                        <center>No.</center>
                                    </th>
                                    <th>
                                        <center>Tinggi Badan</center>
                                    </th>
                                    <th>
                                        <center>Berat Badan</center>
                                    </th>
                                    <th>
                                        <center>Umur</center>
                                    </th>
                                    <th>
                                        <center>Jenis Aktivitas</center>
                                    </th>
                                    <th>
                                        <center>Jenis Kelamin</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>



                                </tr>
                            </thead>
                            </tbody>
                            </table>
                        </div>



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



<?php } ?>