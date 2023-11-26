                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Master Data / <strong>Kelola Penerbit</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <!-- <div class="col-6">
                                    <h6 class="m-0 font-weight-bold text-secondary">Data Pengguna</h6>
                                </div> -->
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
                                            <th>ID</th>
                                            <th>Nama Penerbit</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($penerbit as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->nama_penerbit ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#exampleModal1<?php echo $p->id_penerbit ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/penerbit/delete_data/' . $p->id_penerbit) ?>"><i class="fas fa-trash"></i> Delete</a>
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
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Penerbit</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url('admin/penerbit/tambah_data_aksi/') ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class=" mb-4">
                                        <label>Nama penerbit</label>
                                        <input type="text" name="nama_penerbit" class="form-control" placeholder="Masukan nama lengkap" required>
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
                <?php foreach ($penerbit as $p) : ?>
                    <div class="modal fade" id="exampleModal1<?php echo $p->id_penerbit ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Data Penerbit</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo base_url('admin/penerbit/update_data_aksi/') ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class=" mb-4">
                                            <label>Nama penerbit</label>
                                            <input type="hidden" name="id_penerbit" class="form-control" value="<?php echo $p->id_penerbit ?>">
                                            <input type="text" name="nama_penerbit" class="form-control" value="<?php echo $p->nama_penerbit ?>" required>
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