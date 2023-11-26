<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Page Heading -->
        <h4 class="mb-4 text-gray-800"> Dashboard <strong>( Helpdesk Perpustakaan Politeknik Negeri Tanah Laut )</strong></h4>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengguna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $akun ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Ebooks</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ebooks ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah PKL </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pkl ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-code-branch fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah TA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ta ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-primary font-weight-bold mb-4" style="width: 100%">
        Selamat datang, Anda login sebagai Admin
    </div>

    <div class="card" style="margin-bottom: 120px; width: 100%;">
        <div class="card-header font-weight-bold bg-primary text-white">
            Profil Pengguna
        </div>

        <?php foreach ($aakun as $a) : ?>
            <div class="card-body" style="background-color: whitesmoke;">
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 200px" src="<?php echo base_url('assets/foto/' . $a->foto) ?>">
                    </div>
                    <div class="col-md-4">
                        <table class="table">
                            <tr>
                                <td><strong>NIP/NIK</strong></td>
                                <td>:</td>
                                <td><?php echo $a->idp ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td>:</td>
                                <td><?php echo $a->nama_akun ?></td>
                            </tr>
                            <tr>
                                <td><strong>Telepon</strong></td>
                                <td>:</td>
                                <td><?php echo $a->no_telp ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table">
                            <tr>
                                <td><strong>Prodi</strong></td>
                                <td>:</td>
                                <td><?php echo $a->diploma ?> - <?php echo $a->nama_prodi ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>:</td>
                                <td><?php echo $a->email ?></td>
                            </tr>
                            <tr>
                                <td><strong>Level</strong></td>
                                <td>:</td>
                                <td><span class=" badge bg-gradient-primary text-white"><?php echo $a->nama_level ?></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->