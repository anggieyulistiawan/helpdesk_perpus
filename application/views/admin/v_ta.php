                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Tugas Akhir</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_ta') ?>">
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
                                            <th>Tanggal Upload</th>
                                            <th>Nama Mahasiswa</th>
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
                                                <td>
                                                    <img class="rounded-circle" src="<?php echo base_url() . 'assets/foto/' . $t->foto ?>" width="40px">
                                                    <?php echo $t->idp ?> - <?php echo $t->nama_akun ?>
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
                                    <div class="row">
                                        <div class="col-4">
                                            <tr>
                                                <img class=" mb-lg-3" src="<?php echo base_url() . 'assets/foto/' . $t->foto ?>" width="200px">
                                            </tr>
                                        </div>
                                        <div class="col-ml-8">
                                            <table class="table bg-gray-300">
                                                <tr>
                                                    <th>Tanggal Upload</th>
                                                    <td><?php echo format_indo(date($t->tanggal_ta)); ?></td>
                                                </tr>


                                                <tr>
                                                    <th>Mahasiswa</th>
                                                    <td><?php echo $t->idp ?> - <?php echo $t->nama_akun ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Prodi</th>
                                                    <td><?php echo $t->diploma ?> - <?php echo $t->nama_prodi ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Objek Penelitian</th>
                                                    <td><?php echo $t->objek_ta ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table">
                                                <tr>
                                                    <th>Judul Tugas Akhir</th>
                                                    <td><?php echo $t->judul_ta ?></td>
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
                                                    <td>
                                                        <?php if ($t->laporan_ta == null) { ?>
                                                            <a class="btn btn-sm btn-success disabled" title="Download"><i class="fas fa-cloud-download-alt"></i> Download</a>
                                                            <a class="btn btn-sm btn-secondary disabled" title="Views"><i class="fas fa-eye"></i> Views</a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-sm btn-success" title="Download" href="<?php echo base_url() ?>assets/ta/<?php echo $t->laporan_ta ?>" download><i class="fas fa-cloud-download-alt"></i> Download</a>
                                                            <a class="btn btn-sm btn-secondary" title="Views" href="<?php echo base_url('admin/ta/detail_views_laporan/' . $t->id_ta) ?>" target="_blank"><i class="fas fa-eye"></i> Views</a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Abstrak</th>
                                                    <td>
                                                        <?php if ($t->abstrak_ta == null) { ?>
                                                            <a class="btn btn-sm btn-success disabled" title="Download"><i class="fas fa-cloud-download-alt"></i> Download</a>
                                                            <a class="btn btn-sm btn-secondary disabled" title="Views"><i class="fas fa-eye"></i> Views</a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-sm btn-success" title="Download" href="<?php echo base_url() ?>assets/ta/<?php echo $t->abstrak_ta ?>" download><i class="fas fa-cloud-download-alt"></i> Download</a>
                                                            <a class="btn btn-sm btn-secondary" title="Views" href="<?php echo base_url('admin/ta/detail_views_abstrak/' . $t->id_ta) ?>" target="_blank"><i class="fas fa-eye"></i> Views</a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Actions</th>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/ta/update_data/' . $t->id_ta) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                        <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/ta/delete_data/' . $t->id_ta) ?>"><i class="fas fa-trash"></i> Delete</a>
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