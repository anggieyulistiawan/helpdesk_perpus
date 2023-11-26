<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Page Heading -->
        <h4 class="mb-3 text-gray-800">Kelola Pengguna / <strong>Edit Data Pengguna</strong></h4>
    </div>
    <?php foreach ($akun as $a) : ?>
        <form method="POST" action="<?php echo base_url('admin/akun/update_data_aksi/') ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-4">
                            <label>ID Pengguna</label>
                            <input type="hidden" name="id_akun" class="form-control" value="<?php echo $a->id_akun ?>">
                            <input type="number" name="idp" class="form-control" value="<?php echo $a->idp ?>">
                            <?php echo form_error('id_akun', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-4">
                            <label>Nama Pengguna</label>
                            <input type="text" name="nama_akun" class="form-control" value="<?php echo $a->nama_akun ?>">
                            <?php echo form_error('nama_akun', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-4">
                            <label>Prodi</label>
                            <select class="form-control" name="id_prodi" required>
                                <option value="">--- Pilih Prodi ---</option>
                                <?php
                                foreach ($prodi as $p) { ?>
                                    <option <?php echo $a->id_prodi == $p->id_prodi ? 'selected' : null ?> value="<?php echo $p->id_prodi ?>"><?php echo $p->diploma ?> - <?php echo $p->nama_prodi ?></option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('id_prodi', '<div class="text-small text-danger"></div>') ?>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $a->email ?>">
                            <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-4">
                            <label>No Telepon</label>
                            <input type="number" name="no_telp" class="form-control" value="<?php echo $a->no_telp ?>">
                            <?php echo form_error('no_telp', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-4">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" value="<?php echo $a->foto ?>">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $a->username ?>">
                            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="col-4">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="">
                            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="col-4">
                            <label>Level</label>
                            <select class="form-control" name="id_level" required>
                                <option value="">--- Pilih Level ---</option>
                                <?php
                                foreach ($level as $l) { ?>
                                    <option <?php echo $a->id_level == $l->id_level ? 'selected' : null ?> value="<?php echo $l->id_level ?>"><?php echo $l->nama_level ?></option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('id_level', '<div class="text-small text-danger"></div>') ?>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" type="text" placeholder="" value="<?php echo $a->alamat ?>"><?php echo $a->alamat ?></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </form>
    <?php endforeach; ?>
</div>