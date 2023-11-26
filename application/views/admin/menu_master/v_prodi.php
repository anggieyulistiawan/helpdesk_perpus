                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Master Data / <strong>Kelola Program Studi</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-success m-0" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-plus"></i> Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Diploma</th>
                                            <th>Program Studi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($prodi as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->diploma ?></td>
                                                <td><?php echo $p->nama_prodi ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#exampleModal1<?php echo $p->id_prodi ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/prodi/delete_data/' . $p->id_prodi) ?>"><i class="fas fa-trash"></i> Delete</a>
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
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Program Studi</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('admin/prodi/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class=" mb-4">
                                        <label>Diploma</label>
                                        <select name="diploma" class="form-control" required>
                                            <option value="">--- Pilih Diploma ---</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>Program Studi</label>
                                        <input type="text" name="nama_prodi" class="form-control" placeholder="Masukan Nama Program Studi" required>
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
                <?php foreach ($prodi as $p) : ?>
                    <div class="modal fade" id="exampleModal1<?php echo $p->id_prodi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Data Program Studi</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/prodi/update_data_aksi/') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class=" mb-4">
                                            <label>Diploma</label>
                                            <select name="diploma" class="form-control" required>
                                                <option <?php echo $p->diploma == 'D3' ? 'selected' : null ?> value="D3">D3</option>
                                                <option <?php echo $p->diploma == 'D4' ? 'selected' : null ?> value="D4">D4</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label>Program Studi</label>
                                            <input type="hidden" name="id_prodi" class="form-control" value="<?php echo $p->id_prodi ?>">
                                            <input type="text" name="nama_prodi" class="form-control" placeholder="Masukan Nama Program Studi" value="<?php echo $p->nama_prodi ?>" required>
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