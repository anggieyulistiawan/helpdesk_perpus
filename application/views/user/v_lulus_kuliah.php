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
                                        foreach ($lulus_kuliah as $l) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $l->id_surat ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo format_indo(date($l->tanggal_surat)); ?></td>
                                                <td><?php echo $l->idp ?> - <?php echo $l->nama_akun ?></td>
                                                <td>
                                                    <?php if ($l->status_surat == 'Menunggu Konfirmasi') { ?>
                                                        <span class=" badge bg-gradient-danger text-white"><?php echo $l->status_surat ?></span>
                                                    <?php } else { ?>
                                                        <span class=" badge bg-gradient-success text-white"><?php echo $l->status_surat ?></span>
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


                <!-- Modal Detail -->
                <?php
                foreach ($lulus_kuliah as $l) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $l->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Pengajuan Surat</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table">
                                        <tr>
                                            <th>Tanggal Mengajukan</th>
                                            <td><?php echo format_indo(date($l->tanggal_surat)); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Nomor Induk Mahasiswa</th>
                                            <td><?php echo $l->idp ?></td>
                                        </tr>

                                        <tr>
                                            <th>Nama Mahasiswa</th>
                                            <td><?php echo $l->nama_akun ?></td>
                                        </tr>

                                        <tr>
                                            <th>Program Studi</th>
                                            <td><?php echo $l->diploma ?> - <?php echo $l->nama_prodi ?></td>
                                        </tr>

                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <?php if ($l->status_surat == 'Menunggu Konfirmasi') { ?>
                                                    <span class=" badge bg-gradient-danger text-white"><?php echo $l->status_surat ?></span>
                                                <?php } else { ?>
                                                    <span class=" badge bg-gradient-success text-white"><?php echo $l->status_surat ?></span>
                                                <?php } ?>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Actions</th>
                                            <td>
                                                <?php if ($l->nomor_surat == null) { ?>
                                                    <a class="btn btn-sm btn-primary disabled" title="Print"><i class="fas fa-print"></i> Print</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/lulus_kuliah/delete_data/' . $l->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-sm btn-primary" title="Print" href="<?php echo base_url('user/lulus_kuliah/detail_views/' . $l->id_surat) ?>" target="_blank"><i class="fas fa-print"></i> Print</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/lulus_kuliah/delete_data/' . $l->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
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
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Ajukan Surat Bebas Perpustakaan (Lulus Kuliah)</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('user/lulus_kuliah/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <div class="col-4">
                                            <label>Tanggal Mengajukan</label>
                                            <input type="hidden" name="tanggal_surat" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                                            <input type="text" value="<?php echo format_indo(date('Y-m-d')); ?>" class="form-control" readonly>
                                        </div>

                                        <div class="col-8">
                                            <label>Mahasiswa</label>
                                            <input type="text" name="id_akun" value="<?= $this->session->userdata('idp'); ?> - <?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label>Program Studi</label>
                                        <input type="text" name="id_prodi" value="<?= $this->session->userdata('diploma'); ?> - <?= $this->session->userdata('nama_prodi'); ?>" class="form-control" readonly>
                                    </div>

                                    <div class="mb-2">
                                        <label>Judul Praktek Kerja Lapangan</label>
                                        <?php if ($pkl == null) { ?>
                                            <input type="text" class="form-control" readonly>
                                        <?php } else { ?>
                                            <input type="hidden" name="id_pkl" value="<?= $pkl->id_pkl ?>" class="form-control" readonly>
                                            <input type="text" value="<?= $pkl->judul_pkl ?>" class="form-control" readonly>
                                        <?php } ?>

                                    </div>

                                    <div class="mb-4">
                                        <label>Judul Tugas Akhir</label>
                                        <?php if ($ta == null) { ?>
                                            <input type="text" class="form-control" readonly>
                                        <?php } else { ?>
                                            <input type="hidden" name="id_ta" value="<?= $ta->id_ta ?>" class="form-control" readonly>
                                            <input type="text" value="<?= $ta->judul_ta ?>" class="form-control" readonly>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group text-danger mb-2">
                                        <label><strong>*Perhatian</strong></label>
                                        <select multiple class="form-control" disabled>
                                            <option class=" mb-2">Setelah mengajukan surat bebas perpustakaan diharapkan mengumpulkan :</option>
                                            <option class=" mb-2">1. Hardcopy laporan PKL yang sudah di jilid</option>
                                            <option class=" mb-2">2. Hardcopy laporan TA yang sudah di jilid</option>
                                            <option class=" mb-2">Ke UPT perpustakaan Politeknik Negeri Tanah Laut</option>
                                        </select>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="a" id="cekbox" onclick="run();">
                                        <label class="form-check-label text-black" for="flexCheckDefault">
                                            <strong>Silahkan di centang, jika data tersebut telah benar<span class=" text-danger">*</span></strong>
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <?php if ($pkl == null) { ?>
                                        <a type="" class="btn btn-danger disabled" id="cb">Ajukan Surat</a>
                                    <?php } elseif ($ta == null) { ?>
                                        <a type="" class="btn btn-danger disabled" id="cb">Ajukan Surat</a>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-success" disabled id="cb">Ajukan Surat</button>
                                    <?php } ?>
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