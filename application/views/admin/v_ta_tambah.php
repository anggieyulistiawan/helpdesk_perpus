<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Tambah Tugas Akhir</strong></h4>
    </div>
    <p class="text-right text-danger small">*Untuk upload laporan <strong>(PDF)</strong> dan untuk upload aplikasi di <strong>(RAR)</strong> kan terlebih dahulu</p>
    <form method="POST" action="<?php echo base_url('admin/ta/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal_ta" value="<?= date('Y-m-d') ?>" class="form-control" readonly>

                    </div>

                    <div class="col-6">
                        <label>Mahasiswa</label>
                        <input type="text" name="id_akun" value="<?= $this->session->userdata('id_akun'); ?> - <?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-4">
                        <label>Prodi</label>
                        <input type="text" name="nama_prodi" value="<?= $this->session->userdata('diploma'); ?> - <?= $this->session->userdata('nama_prodi'); ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Judul Tugas Akhir</label>
                        <input type="text" name="judul_ta" class="form-control" placeholder="">
                        <?php echo form_error('judul_ta', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Objek Penelitian</label>
                        <input type="text" name="objek_ta" class="form-control" placeholder="">
                        <?php echo form_error('objek_ta', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-3">
                        <label>Upload Laporan</label>
                        <input type="file" name="laporan_ta" class="form-control" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Aplikasi</label>
                        <input type="file" name="aplikasi_ta" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Dosen Pembimbing 1</label>
                        <select class="form-control" name="dosen_pembimbing1" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Dosen Pembimbing 2</label>
                        <select class="form-control" name="dosen_pembimbing2" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Dosen Penguji 1</label>
                        <select class="form-control" name="dosen_penguji1" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Dosen Penguji 2</label>
                        <select class="form-control" name="dosen_penguji2" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-lg-4" style="width: 100%">Submit</button>
    </form>

</div>