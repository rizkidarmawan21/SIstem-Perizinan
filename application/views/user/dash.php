<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<p class="mb-4">Welcome <u><?= $user['name']?></u> to the dashboard page.</p>

    <div class="row">


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Perizinan  <span class="badge badge-pill badge-primary"> Kampus 1</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus1; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Perizinan  <span class="badge badge-pill badge-success"> Kampus 2</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus2; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Perizinan  <span class="badge badge-pill badge-secondary"> Kampus 3</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus3; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Perizinan  <span class="badge badge-pill badge-warning"> Kampus 4</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus4; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="row">


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Masa Izin <span class="badge badge-pill badge-primary"> Kampus 1</span> </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus1Izin; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Masa Izin <span class="badge badge-pill badge-success"> Kampus 2</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus2Izin; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-clock  fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Masa Izin <span class="badge badge-pill badge-secondary"> Kampus 3</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus3Izin; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Masa Izin <span class="badge badge-pill badge-warning"> Kampus 4</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus4Izin; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="row">


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          Sudah Kembali <span class="badge badge-pill badge-primary"> Kampus 1</span></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus1Back; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sudah Kembali <span class="badge badge-pill badge-success"> Kampus 2</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus2Back; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sudah Kembali <span class="badge badge-pill badge-secondary"> Kampus 3</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus3Back; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sudah Kembali <span class="badge badge-pill badge-warning"> Kampus 4</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $getCountKampus4Back; ?></div>
                                    </div>
                                <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
