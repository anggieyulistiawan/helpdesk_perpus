<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Edit Data Praktek Kerja Lapangan</strong></h4>
    </div>
    <p class="text-right text-danger small">*Untuk laporan upload dengan format nama <strong>PKL_NIM_Nama Lengkap (PDF)</strong></p>

    <?php foreach ($pkl as $p) : ?>
        <form method="POST" action="<?php echo base_url('user/pkl/update_data_aksi/') ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <label>Tanggal Upload</label>
                            <input type="date" name="tanggal_pkl" value="<?php echo $p->tanggal_pkl ?>" class="form-control" readonly>

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
                        <div class="col-6">
                            <label>Judul Praktek Kerja Lapangan</label>
                            <input type="hidden" name="id_pkl" class="form-control" value="<?php echo $p->id_pkl ?>">
                            <input type="text" name="judul_pkl" class="form-control" placeholder="Masukan Judul yang diangkat" value="<?php echo $p->judul_pkl ?>" required>
                        </div>

                        <div class="col-6">
                            <label>Tempat PKL</label>
                            <input type="text" name="tempat_pkl" class="form-control" value="<?php echo $p->tempat_pkl ?>">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Dosen Pembimbing</label>
                            <select class="form-control" name="dosen_pembimbing1" required>
                                <option value="">--- Pilih Dosen Pembimbing ---</option>
                                <?php
                                foreach ($dosen as $d) { ?>
                                    <option <?php echo $p->dosen_pembimbing1 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-3">
                            <label>Dosen Penguji</label>
                            <select class="form-control" name="dosen_penguji1" required>
                                <option value="">--- Pilih Dosen Penguji ---</option>
                                <?php
                                foreach ($dosen as $d) { ?>
                                    <option <?php echo $p->dosen_penguji1 == $d->nama_dosen ? 'selected' : null ?> value="<?php echo $d->nama_dosen ?>"><?php echo $d->nama_dosen ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Pembimbing Lapangan</label>
                            <input type="text" name="pembimbing_lapangan" class="form-control" value="<?php echo $p->pembimbing_lapangan ?>">
                        </div>

                        <div class="col-2">
                            <label>Upload Laporan</label>
                            <input type="file" name="laporan_pkl" class="form-control" value="<?php echo $p->laporan_pkl ?>">
                        </div>

                        <!-- <div class="col-3">
                            <label>Upload Aplikasi</label>
                            <input type="file" name="aplikasi_pkl" class="form-control" value="<?php echo $p->aplikasi_pkl ?>">
                        </div> -->
                    </div>
                </div>

                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </form>
    <?php endforeach; ?>

</div>