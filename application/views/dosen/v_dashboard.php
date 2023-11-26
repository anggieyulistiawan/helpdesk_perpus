<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Page Heading -->
        <h4 class="mb-4 text-gray-800"> Dashboard <strong>( Helpdesk Perpustakaan Politeknik Negeri Tanah Laut )</strong></h4>

    </div>

    <div class="alert alert-warning font-weight-bold mb-4" style="width: 100%">
        Selamat datang, Anda login sebagai Dosen
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
                                <td><span class=" badge bg-gradient-warning text-white"><?php echo $a->nama_level ?></span></td>
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