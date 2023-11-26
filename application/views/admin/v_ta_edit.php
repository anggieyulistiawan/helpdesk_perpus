<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Edit Data Tugas Akhir</strong></h4>
    </div>
    <p class="text-right text-danger small">*Untuk upload laporan <strong>(PDF)</strong> dan untuk upload aplikasi di <strong>(RAR)</strong> kan terlebih dahulu</p>

    <form method="POST" class="mb-3" action="<?php echo base_url('admin/ta/update_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tanggal_ta" value="<?php echo $ta->tanggal_ta ?>" class="form-control" readonly>

                    </div>

                    <div class="col-6">
                        <label>Mahasiswa</label>
                        <input type="text" name="id_akun" value="<?php echo $ta->idp ?> - <?php echo $ta->nama_akun ?>" class="form-control" readonly>
                    </div>


                    <div class="col-4">
                        <label>Prodi</label>
                        <input type="text" name="nama_prodi" value="<?php echo $ta->diploma ?> - <?php echo $ta->nama_prodi ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Judul Tugas Akhir</label>
                        <input type="hidden" name="id_ta" class="form-control" value="<?php echo $ta->id_ta ?>">
                        <input type="text" name="judul_ta" class="form-control" placeholder="Masukan Judul Tugas Akhir yang diangkat" value="<?php echo $ta->judul_ta ?>" required>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Objek Penelitian</label>
                        <input type="text" name="objek_ta" class="form-control" value="<?php echo $ta->objek_ta ?>" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Laporan</label>
                        <input type="file" name="laporan_ta" class="form-control" value="<?php echo $ta->laporan_ta ?>">
                    </div>

                    <div class="col-3">
                        <label>Upload Abstrak</label>
                        <input type="file" name="abstrak_ta" class="form-control" value="<?php echo $ta->abstrak_ta ?>">
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
                                <option <?php echo $ta->dosen_pembimbing1 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Dosen Pembimbing 2</label>
                        <select class="form-control" name="dosen_pembimbing2" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option <?php echo $ta->dosen_pembimbing2 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
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
                                <option <?php echo $ta->dosen_penguji1 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Dosen Penguji 2</label>
                        <select class="form-control" name="dosen_penguji2" required>
                            <option value="">--- Pilih Dosen ---</option>
                            <?php
                            foreach ($dosen as $d) { ?>
                                <option <?php echo $ta->dosen_penguji2 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-lg-4 mt-4" style="width: 100%">Submit</button>
            </div>
        </div>
    </form>


    <!-- <div class="row">
            <div class="col-6">
                <form method="POST" class="mb-3" action="<?php echo base_url('admin/ta/update_data_laporan/') ?>" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <label>Upload Laporan</label>
                            <input type="hidden" name="id_ta" class="form-control" value="<?php echo $t->id_ta ?>">
                            <input type="file" name="laporan_ta" class="form-control" value="<?php echo $t->laporan_ta ?>" required>
                            <button type="submit" class="btn btn-success mb-lg-4 mt-4" style="width: 100%">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form method="POST" class="mb-3" action="<?php echo base_url('admin/ta/update_data_aplikasi/') ?>" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <label>Upload Aplikasi</label>
                            <input type="file" name="aplikasi_ta" class="form-control" value="<?php echo $t->aplikasi_ta ?>">
                            <button type="submit" class="btn btn-success mb-lg-4  mt-4" style="width: 100%">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->

</div>