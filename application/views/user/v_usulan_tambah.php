<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Tambah Usulan Buku</strong></h4>
    </div>
    <p class="text-right text-danger small">Kolom yang ada simbol <strong>(*)</strong> Wajib diisi</p>
    <form method="POST" action="<?php echo base_url('user/usulan/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tanggal_usulan" value="<?= date('Y-m-d') ?>" class="form-control" readonly>

                    </div>

                    <div class="col-6">
                        <label>Mahasiswa</label>
                        <input type="text" name="id_akun" value="<?= $this->session->userdata('idp'); ?> - <?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-4">
                        <label>Program Studi</label>
                        <input type="text" name="nama_prodi" value="<?= $this->session->userdata('diploma'); ?> - <?= $this->session->userdata('nama_prodi'); ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <label>Judul Buku<span class="text-danger"><strong>*</strong></span></label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku yang diusulkan" required>
                    </div>

                    <div class="col-2">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" placeholder="">
                    </div>

                    <div class="col-6">
                        <label>Penerbit<span class="text-danger"><strong>*</strong></span></label>
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
                    <div class="col-6">
                        <label>Edisi</label>
                        <input type="number" name="edisi" class="form-control" placeholder="">
                    </div>

                    <div class="col-6">
                        <label>ISBN</label>
                        <input type="number" name="isbn" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>

</div>