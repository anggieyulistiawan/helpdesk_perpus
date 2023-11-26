                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="mb-4 text-gray-800">Helpdesk / <strong>Praktek Kerja Lapangan</strong></h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php if ($upload == null) { ?>
                                <a class="btn btn-sm btn-success m-0" href="<?php echo base_url('user/pkl/tambah_data') ?>">
                                    <i class="fas fa-plus"></i> Tambah Data</a>
                            <?php } else { ?>
                                <button class="btn btn-sm btn-success m-0 disabled" href="<?php echo base_url('user/pkl/tambah_data') ?>">
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
                                            <th>Judul Praktek Kerja Lapangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pkl as $p) : ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-circle btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $p->id_pkl ?>"><i class="fas fa-search-plus"></i></a>
                                                    </center>
                                                </td>
                                                <td><?php echo format_indo(date($p->tanggal_pkl)); ?></td>
                                                <td><?php echo $p->judul_pkl ?></td>
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
                foreach ($pkl as $p) : ?>
                    <div class="modal fade" id="exampleModal<?php echo $p->id_pkl ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Praktek Kerja Lapangan</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table bg-gray-300">
                                        <tr>
                                            <th>Tanggal Upload</th>
                                            <td><?php echo format_indo(date($p->tanggal_pkl)); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Mahasiswa</th>
                                            <td><?php echo $p->idp ?> - <?php echo $p->nama_akun ?></td>
                                        </tr>
                                    </table>

                                    <table class="table">
                                        <tr>
                                            <th>Judul PKL</th>
                                            <td><?php echo $p->judul_pkl ?></td>
                                        </tr>

                                        <tr>
                                            <th>Tempat PKL</th>
                                            <td><?php echo $p->tempat_pkl ?></td>
                                        </tr>

                                        <tr>
                                            <th>Dosen Pembimbing</th>
                                            <td><?php echo $p->dosen_pembimbing1 ?></td>
                                        </tr>

                                        <tr>
                                            <th>Dosen Penguji</th>
                                            <td><?php echo $p->dosen_penguji1 ?></td>
                                        </tr>

                                        <tr>
                                            <th>Laporan</th>

                                            <td><?php echo $p->laporan_pkl ?></td>

                                        </tr>

                                        <!-- <tr>
                                            <th>Upload Aplikasi</th>

                                            <td><?php echo $p->aplikasi_pkl ?></td>

                                        </tr> -->

                                        <tr>
                                            <th>Actions</th>
                                            <td>
                                                <a class="btn btn-sm btn-primary" title="Edit" href="<?php echo base_url('user/pkl/update_data/' . $p->id_pkl) ?>"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" title="Delete" href="<?php echo base_url('user/pkl/delete_data/' . $p->id_pkl) ?>"><i class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>