                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Pengajuan Surat Bebas Perpustakaan (Berhenti Kuliah)</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-success m-0" data-toggle="modal" data-target="#exampleModalajukan">
                                        <i class=" fas fa-plus"></i> Ajukan Surat</a>
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($stop_kuliah as $s) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $s->id_surat ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo format_indo(date($s->tanggal_surat)); ?></td>
                                                <td><?php echo $s->idp ?> - <?php echo $s->nama_akun ?></td>
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
                foreach ($stop_kuliah as $s) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $s->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Pengajuan Surat</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <p class=" text-sm-left text-danger mr-3"><strong>*Perhatian :</strong> Silahkan konfirmasi ke petugas perpustakaan</p>
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
                                            <th>Nama Mahasiswa</th>
                                            <td><?php echo $s->nama_akun ?></td>
                                        </tr>

                                        <tr>
                                            <th>Program Studi</th>
                                            <td><?php echo $s->diploma ?> - <?php echo $s->nama_prodi ?></td>
                                        </tr>

                                        <tr>
                                            <th>Alamat</th>
                                            <td><?php echo $s->alamat ?></td>
                                        </tr>

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
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/stop_kuliah/delete_data/' . $s->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                <?php } else { ?>

                                                    <a class="btn btn-sm btn-primary" title="Print" href="<?php echo base_url('user/stop_kuliah/detail_views/' . $s->id_surat) ?>" target="_blank"><i class="fas fa-print"></i> Print</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/stop_kuliah/delete_data/' . $s->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Modal Ajukan -->
                <div class="modal fade" id="exampleModalajukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Ajukan Surat Bebas Perpustakaan (Berhenti Kuliah)</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('user/stop_kuliah/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="mb-2">
                                        <label>Tanggal Mengajukan</label>
                                        <input type="hidden" name="tanggal_surat" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                                        <input type="text" value="<?php echo format_indo(date('Y-m-d')); ?>" class="form-control" readonly>
                                    </div>

                                    <div class="mb-2">
                                        <label>Mahasiswa</label>
                                        <input type="text" name="id_akun" value="<?= $this->session->userdata('idp'); ?> - <?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                                    </div>

                                    <div class="mb-2">
                                        <label>Program Studi</label>
                                        <input type="text" name="id_prodi" value="<?= $this->session->userdata('diploma'); ?> - <?= $this->session->userdata('nama_prodi'); ?>" class="form-control" readonly>
                                    </div>

                                    <div class="mb-4">
                                        <label>Alamat</label>
                                        <textarea type="text" class=" form-control" readonly><?= $this->session->userdata('alamat'); ?></textarea>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="a" id="cekbox" onclick="run();">
                                        <label class="form-check-label text-black" for="flexCheckDefault">
                                            <strong>Silahkan di centang, jika data tersebut telah benar<span class=" text-danger">*</span></strong>
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" id="cb" disabled>Ajukan Surat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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