<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Edit Usulan Buku</strong></h4>
    </div>
    <p class="text-right text-danger small">Kolom yang ada simbol <strong>(*)</strong> Wajib diisi</p>

    <?php foreach ($usulan as $u) : ?>
        <form method="POST" action="<?php echo base_url('dosen/usulan/update_data_aksi/') ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Tanggal Mengusulkan</label>
                            <input type="date" name="tanggal_usulan" value="<?php echo $u->tanggal_usulan ?>" class="form-control" readonly>

                        </div>

                        <div class="col-4">
                            <label>NIP/NIK</label>
                            <input type="number" name="id_akun" value="<?= $this->session->userdata('idp'); ?>" class="form-control" readonly>
                        </div>

                        <div class="col-5">
                            <label>Nama Pengusul</label>
                            <input type="text" name="nama_akun" value="<?php echo $this->session->userdata('nama_akun') ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <label>Judul Buku<span class="text-danger"><strong>*</strong></span></label>
                            <input type="hidden" name="id_usulan" class="form-control" value="<?php echo $u->id_usulan ?>">
                            <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku yang diusulkan" value="<?php echo $u->judul_buku ?>" required>
                        </div>

                        <div class="col-2">
                            <label>Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $u->tahun_terbit ?>">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" value="<?php echo $u->pengarang ?>">
                        </div>

                        <div class="col-6">
                            <label>Penerbit<span class="text-danger"><strong>*</strong></span></label>
                            <select class="form-control" name="id_penerbit" required>
                                <option value="">--- Pilih Penerbit ---</option>
                                <?php
                                foreach ($penerbit as $p) { ?>
                                    <option <?php echo $u->id_penerbit == $p->id_penerbit ? 'selected' : null ?> value="<?php echo $p->id_penerbit ?>"><?php echo $p->nama_penerbit ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Edisi</label>
                            <input type="number" name="edisi" class="form-control" value="<?php echo $u->edisi ?>">
                        </div>

                        <div class="col-6">
                            <label>ISBN</label>
                            <input type="number" name="isbn" class="form-control" value="<?php echo $u->isbn ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </form>
    <?php endforeach; ?>

</div>