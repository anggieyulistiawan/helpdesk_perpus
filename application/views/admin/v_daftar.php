                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Buku Tamu</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_daftar') ?>">
                                        <i class="fas fa-print"></i> Rekap Laporan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal / Jam</th>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($daftar as $d) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo format_indo(date($d->tanggal_registrasi)); ?></td>
                                                <td><?php echo $d->nama ?></td>
                                                <td><?php echo $d->diploma ?> - <?php echo $d->nama_prodi ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#exampleModal1<?php echo $d->id_registrasi ?>"><i class="fas fa-edit"></i></a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/daftar/delete_data/' . $d->id_registrasi) ?>"><i class="fas fa-trash"></i></a>
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

                <!-- Modal Edit -->
                <?php foreach ($daftar as $d) : ?>
                    <div class="modal fade" id="exampleModal1<?php echo $d->id_registrasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Data Registrasi</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/daftar/update_data_aksi/') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label>Tanggal Registrasi</label>
                                        <input type="text" value="<?php echo format_indo(date($d->tanggal_registrasi)); ?>" class="form-control" readonly>

                                        <div class="mb-4">
                                            <label>Nama</label>
                                            <input type="hidden" name="id_registrasi" class="form-control" value="<?php echo $d->id_registrasi ?>">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $d->nama ?>" required>
                                        </div>

                                        <div>
                                            <label>Prodi</label>
                                            <select class="form-control" name="id_prodi" required>
                                                <option value="">--- Pilih Prodi ---</option>
                                                <?php
                                                foreach ($prodi as $p) { ?>
                                                    <option <?php echo $d->id_prodi == $p->id_prodi ? 'selected' : null ?> value="<?php echo $p->id_prodi ?>"><?php echo $p->diploma ?> - <?php echo $p->nama_prodi ?></option>
                                                <?php } ?>
                                            </select>
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