                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Ebooks</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class=" btn-group mr-3">
                                <a class="btn btn-sm btn-primary m-0" href="<?php echo base_url('admin/print_ebooks') ?>">
                                    <i class="fas fa-print"></i> Rekap Laporan</a>
                            </div>
                            <div class=" btn-group">
                                <a class="btn btn-sm btn-success m-0" href="<?php echo base_url('admin/ebooks/tambah_data') ?>">
                                    <i class="fas fa-plus"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" table-hover">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Foto</th>
                                            <th>Judul Buku</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($ebooks as $e) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><img class="" src="<?php echo base_url() . 'assets/ebooks/' . $e->foto ?>" width="80px"></td>
                                                <td><?php echo $e->judul_buku ?></td>
                                                <td><?php echo $e->nama_kategori ?></td>
                                                <td>
                                                    <?php if ($e->status_buku == 'Free') { ?>
                                                        <span class=" badge bg-gradient-success text-white"><?php echo $e->status_buku ?></span>
                                                    <?php } else { ?>
                                                        <span class=" badge bg-gradient-primary text-white"><?php echo $e->status_buku ?></span>
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
                foreach ($ebooks as $e) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $e->id_ebooks ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail ebooks</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <tr>
                                                <img class=" mt-lg-5" src="<?php echo base_url() . 'assets/ebooks/' . $e->foto ?>" width="200px" alt="<?php echo $e->foto ?>">
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pembaca :</th>
                                                <td><strong><?php echo $e->views ?></strong></td>
                                            </tr>
                                        </div>
                                        <div class="col-md-8">
                                            <table class="table">
                                                <tr>
                                                    <th>Tanggal Upload</th>
                                                    <td><?php echo format_indo(date($e->tanggal_luncur)); ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Kategori</th>
                                                    <td><?php echo $e->nama_kategori ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Judul Buku</th>
                                                    <td><?php echo $e->judul_buku ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Pengarang</th>
                                                    <td><?php echo $e->pengarang ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Penerbit</th>
                                                    <td><?php echo $e->nama_penerbit ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Tahun Terbit</th>
                                                    <td><?php echo $e->tahun_terbit ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Edisi</th>
                                                    <td><?php echo $e->edisi ?></td>
                                                </tr>

                                                <tr>
                                                    <th>ISBN</th>
                                                    <td><?php echo $e->isbn ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Status Buku</th>
                                                    <?php if ($e->status_buku == 'Free') { ?>
                                                        <td><span class=" badge bg-gradient-success text-white"><?php echo $e->status_buku ?></span></td>
                                                    <?php } else { ?>
                                                        <td><span class=" badge bg-gradient-primary text-white"><?php echo $e->status_buku ?></span></td>
                                                    <?php } ?>
                                                </tr>


                                                <tr>
                                                    <th>Actions</th>
                                                    <td>
                                                        <?php if ($e->buku == null) { ?>
                                                            <a class="btn btn-sm btn-secondary disabled" title="Views"><i class="fas fa-eye"></i> Views</a>
                                                            <a class="btn btn-sm btn-primary" title="Edit" href="<?php echo base_url('admin/ebooks/update_data/' . $e->id_ebooks) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                            <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/ebooks/delete_data/' . $e->id_ebooks) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-sm btn-secondary" title="Views" href="<?php echo base_url('admin/ebooks/detail_views/' . $e->id_ebooks) ?>" target="_blank"><i class="fas fa-eye"></i> Views</a>
                                                            <a class="btn btn-sm btn-primary" title="Edit" href="<?php echo base_url('admin/ebooks/update_data/' . $e->id_ebooks) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                            <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('admin/ebooks/delete_data/' . $e->id_ebooks) ?>"><i class="fas fa-trash"></i> Delete</a>
                                                        <?php } ?>
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