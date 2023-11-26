<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Tambah Usulan Buku</strong></h4>
    </div>
    <p class="text-right text-danger small">Kolom yang ada simbol <strong>(*)</strong> Wajib diisi</p>
    <form method="POST" action="<?php echo base_url('admin/usulan/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Tanggal Mengusulkan</label>
                        <input type="date" name="tanggal_usulan" value="<?= date('Y-m-d') ?>" class="form-control" readonly>

                    </div>

                    <div class="col-4">
                        <label>ID</label>
                        <input type="number" name="id_akun" value="<?= $this->session->userdata('id_akun'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-5">
                        <label>Nama</label>
                        <input type="text" name="nama_akun" value="<?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <label>Judul Buku<span class="text-danger"><strong>*</strong></span></label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="">
                        <?php echo form_error('judul_buku', '<div class="text-small text-danger"></div>') ?>
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
                        <input type="text" name="penerbit" class="form-control" placeholder="">
                        <?php echo form_error('penerbit', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Edisi</label>
                        <input type="text" name="edisi" class="form-control" placeholder="">
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
</div>

</div>