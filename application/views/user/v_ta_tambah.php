<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Tambah Tugas Akhir</strong></h4>
    </div>
    <p class="text-right text-danger small">*Untuk laporan upload dengan format nama <strong>TA_NIM_Nama Lengkap (PDF)</strong></p>
    <form method="POST" action="<?php echo base_url('user/ta/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tanggal_ta" value="<?= date('Y-m-d') ?>" class="form-control" readonly>

                    </div>

                    <div class="col-6">
                        <label>Mahasiswa</label>
                        <input type="text" name="id_akun" value="<?= $this->session->userdata('idp'); ?> - <?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-4">
                        <label>Program Studi</label>
                        <input type="text" name="nama_prodi" value="<?= $this->session->userdata('diploma'); ?> - <?= $this->session->userdata('nama_prodi'); ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Judul Tugas Akhir</label>
                        <input type="text" name="judul_ta" class="form-control" placeholder="Masukan Judul Tugas Akhir yang diangkat" required>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label>Objek Penelitian</label>
                        <input type="text" name="objek_ta" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-2">
                        <label>Nilai</label>
                        <input type="text" name="nilai" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Laporan</label>
                        <input type="file" name="laporan_ta" class="form-control" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Abstrak</label>
                        <input type="file" name="abstrak_ta" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label>Dosen Pembimbing 1</label>
                        <select class="form-control" name="dosen_pembimbing1" required>
                            <option value="">--- Pilih Dosen Pembimbing 1 ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-4">
                        <label>Dosen Pembimbing 2</label>
                        <select class="form-control" name="dosen_pembimbing2" required>
                            <option value="">--- Pilih Dosen Pembimbing 2 ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-4">
                        <label>Dosen Penguji 1</label>
                        <select class="form-control" name="dosen_penguji1" required>
                            <option value="">--- Pilih Dosen Penguji 1 ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Dosen Penguji 1</label>
                        <select class="form-control" name="dosen_penguji1" required>
                            <option value="">--- Pilih Dosen Penguji 1 ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Dosen Penguji 2</label>
                        <select class="form-control" name="dosen_penguji2" required>
                            <option value="">--- Pilih Dosen Penguji 2 ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div> -->
            <button type="submit" class="btn btn-success mb-lg-4" style="width: 100%">Submit</button>
    </form>

</div>