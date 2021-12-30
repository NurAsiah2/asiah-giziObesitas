<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="card">
        <div class="card-body">
            <h6 class="card-title"><?= $user['name']; ?> --- <?= $user['email']; ?>
            </h6>
            <p class="card-text"><small class="text-muted">Menggunakan Website ini sejak <?= date('d F Y', $user['date_created']); ?></small></p>
        </div>
    </div>
    <hr>




    <!-- Content Row -->





    <!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->