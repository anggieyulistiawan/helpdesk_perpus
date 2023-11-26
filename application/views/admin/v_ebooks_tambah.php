<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800 mb-5">Helpdesk / <strong>Tambah Ebooks</strong></h4>
    </div>
    <p class="text-right text-danger small"><strong>(*)</strong> Harap untuk mengisi semua data</p>

    <form method="POST" action="<?php echo base_url('admin/ebooks/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Tanggal Upload Buku</label>
                        <input type="hidden" name="tanggal_luncur" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                        <input type="text" value="<?php echo format_indo(date('Y-m-d')); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-9">
                        <label>Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku" required>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-2">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-3">
                        <label>Kategori</label>
                        <select class="form-control" name="id_kategori" required>
                            <option value="">--- Pilih Kategori ---</option>
                            <?php
                            foreach ($kategori as $k) { ?>
                                <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-3">
                        <label>Penerbit</label>
                        <select class="form-control" name="id_penerbit" required>
                            <option value="">--- Pilih Penerbit ---</option>
                            <?php
                            foreach ($penerbit as $p) { ?>
                                <option value="<?php echo $p->id_penerbit ?>"><?php echo $p->nama_penerbit ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Edisi</label>
                        <input type="number" name="edisi" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-2">
                        <label>ISBN</label>
                        <input type="number" name="isbn" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Buku</label>
                        <input type="file" name="buku" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-3">
                        <label>Upload Sampul Buku</label>
                        <input type="file" name="foto" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-2">
                        <label>Status Buku</label>
                        <select name="status_buku" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="Free">Free</option>
                            <option value="Premium">Premium</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>

</div>