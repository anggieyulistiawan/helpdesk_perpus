                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Pengajuan Surat Bebas Perpustakaan (Lulus Kuliah)</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_lulus_kuliah') ?>">
                                        <i class="fas fa-print"></i> Rekap Laporan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Tanggal Mengajukan</th>
                                            <th>Mahasiswa</th>
                                            <th>Nomor Surat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lulus_kuliah as $s) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $s->id_surat ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo format_indo(date($s->tanggal_surat)); ?></td>
                                                <td><?php echo $s->idp ?> - <?php echo $s->nama_akun ?></td>
                                                <td><?php echo $s->nomor_surat ?></td>
                                                <td>
                                                    <?php if ($s->status_surat == 'Menunggu Konfirmasi') { ?>
                                                        <span class=" badge bg-gradient-danger text-white"><?php echo $s->status_surat ?></span>
                                                    <?php } else { ?>
                                                        <span class=" badge bg-gradient-success text-white"><?php echo $s->status_surat ?></span>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


                <!-- Modal -->
                <?php
                foreach ($lulus_kuliah as $s) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $s->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Pengajuan Surat Bebas Perpustakaan (Lulus Kuliah)</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3 text-right">
                                        <?php if ($s->nomor_surat == null) { ?>
                                            <a class="btn btn-sm btn-primary m-0" data-toggle="modal" data-target="#exampleModalCenternomor<?php echo $s->id_surat ?>">
                                                <i class="fas fa-plus"></i> Tambahkan Nomor Surat</a>
                                        <?php } else { ?>
                                            <button class="btn btn-sm btn-danger m-0 disabled">
                                                <i class="fas fa-exclamation-circle"></i> Sudah Mempunyai Nomor Surat</button>
                                        <?php } ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <tr>
                                                <img src="<?php echo base_url() . 'assets/foto/' . $s->foto ?>" width="200px">
                                            </tr>
                                        </div>
                                        <div class="col-ml-8">
                                            <table class="table">
                                                <tr>
                                                    <th>Tanggal Mengajukan</th>
                                                    <td><?php echo format_indo(date($s->tanggal_surat)); ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Nomor Induk Mahasiswa</th>
                                                    <td><?php echo $s->idp ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Mahasiswa</th>
                                                    <td><?php echo $s->nama_akun ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Program Studi</th>
                                                    <td><?php echo $s->diploma ?> - <?php echo $s->nama_prodi ?></td>
                                                </tr>

                                                <!-- <tr>
                                                    <th>Pemeriksa</th>
                                                    <td><?php echo $s->nama_pegawai ?></td>
                                                </tr> -->

                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        <?php if ($s->status_surat == 'Menunggu Konfirmasi') { ?>
                                                            <span class=" badge bg-gradient-danger text-white"><?php echo $s->status_surat ?></span>
                                                        <?php } else { ?>
                                                            <span class=" badge bg-gradient-success text-white"><?php echo $s->status_surat ?></span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Actions</th>
                                                    <td>
                                                        <?php if ($s->nomor_surat == null) { ?>
                                                            <a class="btn btn-sm btn-primary disabled" title="Print"><i class="fas fa-print"></i> Print</a>
                                                            <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/lulus_kuliah/delete_data/' . $s->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-sm btn-primary" title="Print" href="<?php echo base_url('admin/lulus_kuliah/detail_views/' . $s->id_surat) ?>" target="_blank"><i class="fas fa-print"></i> Print</a>
                                                            <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/lulus_kuliah/delete_data/' . $s->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Modal Edit -->
                <?php foreach ($lulus_kuliah as $s) : ?>
                    <div class="modal fade" id="exampleModalCenternomor<?php echo $s->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Verifikasi Pengajuan</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/lulus_kuliah/update_data_aksi') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <!-- <label>Rangka Surat</label>
                                        <input type="text" name="rangka_lulus" value="<?php echo $s->rangka_lulus ?>" class="form-control mb-4" required> -->

                                        <label>Nomor Surat</label>
                                        <input type="hidden" name="id_surat" value="<?php echo $s->id_surat ?>" class="form-control">
                                        <input type="hidden" name="nomor_surat" value="<?php echo $nomor_surat ?>" class="form-control" readonly>
                                        <input type="text" name="" value="<?php echo $nomor_surat ?>/PL40.14/<?php echo date('Y') ?>" class="form-control" readonly>
                                        <!-- <input type="number" name="nomor_surat" value="<?php echo $s->nomor_surat ?>" class="form-control mb-4" required> -->

                                        <label>Pemeriksa</label>
                                        <select class="form-control mb-4" name="id_pegawai" required>
                                            <option value="">-- Pilih Pegawai Pemeriksa --</option>
                                            <?php
                                            foreach ($pegawai as $p) { ?>
                                                <option <?php echo $s->id_pegawai == $p->nama_pegawai ? 'selected' : null ?> value="<?php echo $p->id_pegawai ?>"><?php echo $p->nama_pegawai ?></option>
                                            <?php } ?>
                                        </select>

                                        <!-- <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label text-black" for="flexCheckDefault">
                                                <strong>Membawa Hardcopy laporan PKL<span class=" text-danger">*</span></strong>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="cekbox" onclick="run()">
                                            <label class="form-check-label text-black" for="flexCheckDefault">
                                                <strong>Membawa Hardcopy laporan Tugas Akhir (TA)<span class=" text-danger">*</span></strong>
                                            </label>
                                        </div> -->

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="cb">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <script>
                    function run() {
                        var cb = document.getElementById("cb");

                        if (document.getElementById("cekbox").checked == false) {
                            cb.disabled = true;
                        } else {
                            cb.disabled = false;
                        }
                    }
                </script>