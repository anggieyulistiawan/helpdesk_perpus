                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Tugas Akhir</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php if ($upload == null) { ?>
                                <a class="btn btn-sm btn-success m-0" href="<?php echo base_url('user/ta/tambah_data') ?>">
                                    <i class="fas fa-plus"></i> Tambah Data</a>
                            <?php } else { ?>
                                <button class="btn btn-sm btn-success m-0 disabled" href="<?php echo base_url('user/ta/tambah_data') ?>">
                                    <i class="fas fa-plus"></i> Tambah Data</button>
                                <p class="text-right text-danger small">*Data hanya bisa satu kali tambah, jika terjadi kesalahan harap <strong>Edit atau Hapus</strong></p>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Tanggal Upload</th>
                                            <th>Judul Tugas Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($ta as $t) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $t->id_ta ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo format_indo(date($t->tanggal_ta)); ?></td>
                                                <td><?php echo $t->judul_ta ?></td>
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
                foreach ($ta as $t) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $t->id_ta ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Tugas Akhir</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table bg-gray-300">
                                        <tr>
                                            <th>Tanggal Upload</th>
                                            <td><?php echo format_indo(date($t->tanggal_ta)); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Mahasiswa</th>
                                            <td><?php echo $t->idp ?> - <?php echo $t->nama_akun ?></td>
                                        </tr>
                                    </table>

                                    <table class="table">
                                        <tr>
                                            <th>Judul Tugas Akhir</th>
                                            <td><?php echo $t->judul_ta ?></td>
                                        </tr>

                                        <tr>
                                            <th>Objek Penelitian</th>
                                            <td><?php echo $t->objek_ta ?></td>
                                        </tr>

                                        <tr>
                                            <th>Dosen Pembimbing 1</th>
                                            <td><?php echo $t->dosen_pembimbing1 ?></td>
                                        </tr>

                                        <tr>
                                            <th>Dosen Pembimbing 2</th>
                                            <td><?php echo $t->dosen_pembimbing2 ?></td>
                                        </tr>

                                        <tr>
                                            <th>Dosen Penguji 1</th>
                                            <td><?php echo $t->dosen_penguji1 ?></td>
                                        </tr>

                                        <tr>
                                            <th>Nilai</th>
                                            <td><strong><?php echo $t->nilai ?></strong></td>
                                        </tr>

                                        <tr>
                                            <th>Laporan</th>
                                            <td><?php echo $t->laporan_ta ?></td>
                                        </tr>

                                        <tr>
                                            <th>Abstrak</th>
                                            <td><?php echo $t->abstrak_ta ?></td>
                                        </tr>

                                        <tr>
                                            <th>Actions</th>
                                            <td>
                                                <a class="btn btn-sm btn-primary" title="Edit" href="<?php echo base_url('user/ta/update_data/' . $t->id_ta) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/ta/delete_data/' . $t->id_ta) ?>"><i class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>