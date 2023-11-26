                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Master Data / <strong>Kelola Pegawai Perpustakaan</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-success m-0" data-toggle="modal" data-target="#exampleModal">
                                        <i class=" fas fa-plus"></i> Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP/NIK</th>
                                            <th>Nama pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($pegawai as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->nip ?></td>
                                                <td><?php echo $p->nama_pegawai ?></td>
                                                <td><?php echo $p->nama_jabatan ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#exampleModal1<?php echo $p->id_pegawai ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/pegawai/delete_data/' . $p->id_pegawai) ?>"><i class="fas fa-trash"></i> Delete</a>
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
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Pegawai</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('admin/pegawai/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class=" mb-4">
                                        <label>NIP/NIK</label>
                                        <input type="number" name="nip" class="form-control" placeholder="Masukan NIP atau NIK" required>
                                    </div>

                                    <div class=" mb-4">
                                        <label>Nama Pegawai</label>
                                        <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan Nama Lengkap" required>
                                    </div>

                                    <div>
                                        <label>Jabatan</label>
                                        <select class="form-control" name="id_jabatan" required>
                                            <option value="">--- Pilih Jabatan ---</option>
                                            <?php
                                            foreach ($jabatan as $j) { ?>
                                                <option value="<?php echo $j->id_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
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

                <!-- Modal Edit -->
                <?php foreach ($pegawai as $p) : ?>
                    <div class="modal fade" id="exampleModal1<?php echo $p->id_pegawai ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Data Pegawai</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/pegawai/update_data_aksi/') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class=" mb-4">
                                            <label>NIP/NIK</label>
                                            <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai ?>">
                                            <input type="number" name="nip" class="form-control" placeholder="Masukan NIP atau NIK" value="<?php echo $p->nip ?>" required>
                                        </div>

                                        <div class=" mb-4">
                                            <label>Nama Pegawai</label>
                                            <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan Nama Lengkap" value="<?php echo $p->nama_pegawai ?>" required>
                                        </div>

                                        <div>
                                            <label>Jabatan</label>
                                            <select class="form-control" name="id_jabatan" required>
                                                <option value="">--- Pilih Jabatan ---</option>
                                                <?php
                                                foreach ($jabatan as $j) { ?>
                                                    <option <?php echo $p->id_jabatan == $j->id_jabatan ? 'selected' : null ?> value="<?php echo $j->id_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
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