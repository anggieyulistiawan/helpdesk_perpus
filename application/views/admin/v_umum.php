                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Lainnya / <strong>Kelola Surat Umum</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class=" btn-group mr-3">
                                <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_umum') ?>">
                                    <i class="fas fa-print"></i> Rekap Laporan</a>
                            </div>
                            <div class=" btn-group">
                                <a class="btn btn-sm btn-success m-0" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-plus"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Surat</th>
                                            <th>Keterangan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($umum as $d) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo format_indo(date($d->tanggal_surat)); ?></td>
                                                <td><?php echo $d->nomor_surat ?></td>
                                                <td><?php echo $d->keterangan_surat ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#exampleModal1<?php echo $d->id_surat ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/umum/delete_data/' . $d->id_surat) ?>"><i class="fas fa-trash"></i> Delete</a>
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

                <!-- Modal Tambah -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Surat Umum</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('admin/umum/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6 mb-4">
                                            <label>Tanggal</label>
                                            <input type="hidden" name="tanggal_surat" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                                            <input type="text" value="<?php echo format_indo(date('Y-m-d')); ?>" class="form-control" readonly>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label>Nomor Surat</label>
                                            <input type="hidden" name="nomor_surat" value="<?php echo $nomor_surat ?>" class="form-control" readonly>
                                            <input type="text" name="" value="<?php echo $nomor_surat ?>/PL40.14/<?php echo date('Y') ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class=" mb-4">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan_surat" class="form-control" placeholder="Masukan Keterangan Surat" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <?php foreach ($umum as $d) : ?>
                    <div class="modal fade" id="exampleModal1<?php echo $d->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Data Surat Umum</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/umum/update_data_aksi/') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6 mb-4">
                                                <label>Tanggal</label>
                                                <input type="hidden" name="id_surat" value="<?php echo $d->id_surat ?>" class="form-control">
                                                <input type="date" name="tanggal_surat" value="<?php echo $d->tanggal_surat ?>" class="form-control" readonly>
                                            </div>

                                            <div class="col-6 mb-4">
                                                <label>Nomor Surat</label>
                                                <input type="hidden" name="nomor_surat" value="<?php echo $d->nomor_surat ?>" class="form-control" readonly>
                                                <input type="text" name="" value="<?php echo $d->nomor_surat ?>/PL40.14/<?php echo date("Y", strtotime($d->tanggal_surat)); ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class=" mb-4">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan_surat" class="form-control" value="<?php echo $d->keterangan_surat ?>" placeholder="Masukan Keterangan Surat" required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>