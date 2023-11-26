                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Usulan Buku</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_usulan') ?>">
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
                                            <th>Tanggal</th>
                                            <th>Level</th>
                                            <th>Nama Pengusul</th>
                                            <th>Judul Buku</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($usulan as $u) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $u->id_usulan ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo date('d-m-Y', strtotime($u->tanggal_usulan)); ?></td>
                                                <td>
                                                    <?php if ($u->id_level == 1) { ?>
                                                        <span class=" badge bg-gradient-info text-white">ADMIN</span>
                                                    <?php } else if ($u->id_level == 2) { ?>
                                                        <span class=" badge bg-gradient-success text-white">MAHASISWA</span>
                                                    <?php } else { ?>
                                                        <span class=" badge bg-gradient-warning text-white">DOSEN / STAFF</span>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $u->nama_akun ?></td>
                                                <td><?php echo $u->judul_buku ?></td>
                                                <td>
                                                    <?php if ($u->status_usulan == 'Menunggu Konfirmasi') { ?>
                                                        <span class=" badge bg-gradient-warning text-white"><?php echo $u->status_usulan ?></span>
                                                    <?php } else if ($u->status_usulan == 'Ditolak') { ?>
                                                        <span class=" badge bg-gradient-danger text-white"><?php echo $u->status_usulan ?></span>
                                                    <?php } else { ?>
                                                        <span class=" badge bg-gradient-success text-white"><?php echo $u->status_usulan ?></span>
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
                foreach ($usulan as $u) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $u->id_usulan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Usulan Buku</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table bg-gray-300">
                                        <tr>
                                            <th>Tanggal Mengusulkan</th>
                                            <td><?php echo format_indo(date($u->tanggal_usulan)); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Pengusul</th>
                                            <td><?php echo $u->idp ?> - <?php echo $u->nama_akun ?></td>
                                        </tr>
                                        <tr>
                                            <th>Program Studi</th>
                                            <td><?php echo $u->diploma ?> - <?php echo $u->nama_prodi ?></td>
                                        </tr>
                                    </table>

                                    <table class="table">
                                        <tr>
                                            <th>Judul Buku</th>
                                            <td><?php echo $u->judul_buku ?></td>
                                        </tr>

                                        <tr>
                                            <th>Pengarang</th>
                                            <td><?php echo $u->pengarang ?></td>
                                        </tr>

                                        <tr>
                                            <th>Penerbit</th>
                                            <td><?php echo $u->nama_penerbit ?></td>
                                        </tr>

                                        <tr>
                                            <th>Tahun Terbit</th>
                                            <td><?php echo $u->tahun_terbit ?></td>
                                        </tr>

                                        <tr>
                                            <th>Edisi</th>
                                            <td><?php echo $u->edisi ?></td>
                                        </tr>

                                        <tr>
                                            <th>ISBN</th>
                                            <td><?php echo $u->isbn ?></td>
                                        </tr>

                                        <tr>
                                            <th>Alasan</th>
                                            <td><?php echo $u->alasan ?></td>
                                        </tr>

                                        <tr>
                                            <th>Status</th>
                                            <?php if ($u->status_usulan == 'Menunggu Konfirmasi') { ?>
                                                <td><span class=" badge bg-gradient-warning text-white"><?php echo $u->status_usulan ?></span></td>
                                            <?php } else if ($u->status_usulan == 'Ditolak') { ?>
                                                <td><span class=" badge bg-gradient-danger text-white"><?php echo $u->status_usulan ?></span></td>
                                            <?php } else { ?>
                                                <td><span class=" badge bg-gradient-success text-white"><?php echo $u->status_usulan ?></span></td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <th>Actions</th>
                                            <td>
                                                <a class="btn btn-sm btn-primary" title="Edit" href="<?php echo base_url('admin/usulan/update_data/' . $u->id_usulan) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/usulan/delete_data/' . $u->id_usulan) ?>"><i class="fas fa-trash"></i> Delete</a>
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