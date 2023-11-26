<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Edit Data Ebooks</strong></h4>
    </div>

    <?php foreach ($ebooks as $e) : ?>
        <form method="POST" action="<?php echo base_url('admin/ebooks/update_data_aksi/') ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Tanggal Upload Buku</label>
                            <input type="date" name="tanggal_luncur" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                        </div>

                        <div class="col-9">
                            <label>Judul Buku</label>
                            <input type="hidden" name="id_ebooks" class="form-control" value="<?php echo $e->id_ebooks ?>">
                            <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku" value="<?php echo $e->judul_buku ?>" required>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label>Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" value="<?php echo $e->pengarang ?>" required>
                        </div>

                        <div class="col-2">
                            <label>Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $e->tahun_terbit ?>" required>
                        </div>

                        <div class="col-3">
                            <label>Kategori</label>
                            <select class="form-control" name="id_kategori" required>
                                <option value="">--- Pilih Kategori ---</option>
                                <?php
                                foreach ($kategori as $p) { ?>
                                    <option <?php echo $e->id_kategori == $p->id_kategori ? 'selected' : null ?> value="<?php echo $p->id_kategori ?>"><?php echo $p->nama_kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-3">
                            <label>Penerbit</label>
                            <select class="form-control" name="id_penerbit" required>
                                <option value="">--- Pilih penerbit ---</option>
                                <?php
                                foreach ($penerbit as $p) { ?>
                                    <option <?php echo $e->id_penerbit == $p->id_penerbit ? 'selected' : null ?> value="<?php echo $p->id_penerbit ?>"><?php echo $p->nama_penerbit ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <label>Edisi</label>
                            <input type="number" name="edisi" class="form-control" value="<?php echo $e->edisi ?>" required>
                        </div>

                        <div class="col-2">
                            <label>ISBN</label>
                            <input type="number" name="isbn" class="form-control" value="<?php echo $e->isbn ?>" required>
                        </div>

                        <div class="col-3">
                            <label>Upload Buku</label>
                            <input type="file" name="buku" class="form-control" value="<?php echo $e->buku ?>">
                        </div>

                        <div class="col-3">
                            <label>Upload Sampul Buku</label>
                            <input type="file" name="foto" class="form-control" value="<?php echo $e->foto ?>">
                        </div>

                        <div class="col-2">
                            <label>Status Buku</label>
                            <select name="status_buku" class="form-control" required>
                                <option <?php echo $e->status_buku == 'Free' ? 'selected' : null ?> value="Free">Free</option>
                                <option <?php echo $e->status_buku == 'Premium' ? 'selected' : null ?> value="Premium">Premium</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </form>
    <?php endforeach; ?>

</div>