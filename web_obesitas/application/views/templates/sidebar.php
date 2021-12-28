<!-- Sidebar -->

<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #F4A460">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand  justify-content-center " href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text bg-3 ">Web - Obesitas</div>
    </a>
    <!-- Divider -->



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>





    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('datamakanan'); ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Data Makanan</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Makanan:</h6>
                <a class="collapse-item" href="<?= base_url('datamakanan'); ?>">Sumber Pokok</a>
                <a class="collapse-item" href="<?= base_url('datamakanan/sumberhewani'); ?>">Sumber Hewani</a>
                <a class="collapse-item" href="<?= base_url('datamakanan/sumbernabati'); ?>">Sumber Nabati</a>
                <a class="collapse-item" href="<?= base_url('datamakanan/buah'); ?>">Buah</a>
                <a class="collapse-item" href="<?= base_url('datamakanan/sayur'); ?>">Sayur</a>
            </div>
        </div>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-laptop-medical"></i>
            <span>Input Data</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/lihatdata'); ?>">
            <i class="fas fa-fw fa-notes-medical"></i>
            <span>Lihat Data</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/hasil'); ?>"">
            <i class=" fas fa-fw fa-hand-holding-medical"></i>
            <span>Hasil Rekomendasi</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



</ul>
<!-- End of Sidebar -->