<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Page Heading -->
        <h4 class="text-gray-800">Helpdesk / <strong>Edit Usulan Buku</strong></h4>
    </div>
    <p class="text-right text-danger small">Kolom yang ada simbol <strong>(*)</strong> Wajib diisi</p>

    <form method="POST" action="<?php echo base_url('admin/usulan/update_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal_usulan" value="<?php echo $usulan->tanggal_usulan ?>" class="form-control" readonly>

                    </div>

                    <div class="col-5">
                        <label>Pengusul</label>
                        <input type="text" name="id_akun" value="<?php echo $usulan->idp ?> - <?php echo $usulan->nama_akun ?>" class="form-control" readonly>
                    </div>

                    <div class="col-5">
                        <label>Program Studi</label>
                        <input type="text" name="id_prodi" value="<?php echo $usulan->diploma ?> - <?php echo $usulan->nama_prodi ?>" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <label>Judul Buku<span class="text-danger"><strong>*</strong></span></label>
                        <input type="hidden" name="id_usulan" class="form-control" value="<?php echo $usulan->id_usulan ?>">
                        <input type="text" name="judul_buku" class="form-control" placeholder="Masukan judul buku yang diusulkan" value="<?php echo $usulan->judul_buku ?>" required>
                    </div>

                    <div class="col-2">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $usulan->tahun_terbit ?>">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" value="<?php echo $usulan->pengarang ?>">
                    </div>

                    <div class="col-4">
                        <label>Penerbit<span class="text-danger"><strong>*</strong></span></label>
                        <select class="form-control" name="id_penerbit" required>
                            <option value="">--- Pilih penerbit ---</option>
                            <?php
                            foreach ($penerbit as $p) { ?>
                                <option <?php echo $usulan->id_penerbit == $p->id_penerbit ? 'selected' : null ?> value="<?php echo $p->id_penerbit ?>"><?php echo $p->nama_penerbit ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-2">
                        <label>Edisi</label>
                        <input type="number" name="edisi" class="form-control" value="<?php echo $usulan->edisi ?>">
                    </div>

                    <div class="col-2">
                        <label>ISBN</label>
                        <input type="number" name="isbn" class="form-control" value="<?php echo $usulan->isbn ?>">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label class="">Status Usulan</label>
                        <?php if ($usulan->status_usulan == 'Menunggu Konfirmasi') { ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_usulan" value="Dikonfirmasi" onclick="run();">
                                <label class="form-check-label" for="status_usulan1">Dikonfirmasi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_usulan" id="cekbox" value="Ditolak" onclick="run();">
                                <label class="form-check-label" for="status_usulan2">Ditolak</label>
                            </div>
                        <?php } else { ?>

                            <?php if ($usulan->status_usulan == 'Ditolak') { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_usulan" value="<?php echo $usulan->status_usulan ?>" onclick="run();">
                                    <label class=" form-check-label" for="status_usulan1">
                                        Dikonfirmasi
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_usulan" id="cekbox" value="<?php echo $usulan->status_usulan ?>" checked onclick="run();">
                                    <label class=" form-check-label" for="status_usulan2">
                                        Ditolak
                                    </label>
                                </div>
                            <?php } else { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_usulan" value="<?php echo $usulan->status_usulan ?>" checked onclick="run();">
                                    <label class="form-check-label" for="status_usulan1">
                                        Dikonfirmasi
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_usulan" id="cekbox" value="<?php echo $usulan->status_usulan ?>" onclick="run();">
                                    <label class="form-check-label" for="status_usulan2">
                                        Ditolak
                                    </label>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="a" id="cekbox" onclick="run();">
                            <label class="form-check-label text-black" for="flexCheckDefault">
                                <strong>Silahkan di centang, jika data tersebut telah benar<span class=" text-danger">*</span></strong>
                            </label>
                        </div> -->

                    </div>
                    <div class="col-1">
                    </div>
                    <!-- <div class="col-4">
                        <label>Status</label>
                        <select name="status_usulan" class="form-control">
                            <option <?php echo $usulan->status_usulan == 'Menunggu Konfirmasi' ? 'selected' : null ?> value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                            <option <?php echo $usulan->status_usulan == 'Dikonfirmasi' ? 'selected' : null ?> value="Dikonfirmasi">Dikonfirmasi</option>
                            <option <?php echo $usulan->status_usulan == 'Ditolak' ? 'selected' : null ?> value="Ditolak">Ditolak</option>
                        </select>
                    </div> -->

                    <div class="col-8">
                        <label>Alasan <span class="text-danger"><strong>*</strong></span></label>
                        <input type="text" id=cb name="alasan" disabled class="form-control" value="<?php echo $usulan->alasan ?>">
                    </div>

                    <!-- <?php if ($usulan->status_usulan == 'Ditolak') { ?>
                        <div class="col-8">
                            <label>Alasan</label>
                            <input type="text" name="alasan" class="form-control" value="<?php echo $usulan->isbn ?>">
                        </div>
                    <?php } else { ?>
                        <div class="col-8">
                            <label>Alasan</label>
                            <input type="text" name="alasan" class="form-control" disabled value="<?php echo $usulan->isbn ?>">
                        </div>
                    <?php } ?> -->

                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>
</div>

<script>
    function run() {
        var cb = document.getElementById("cb");

        if (document.getElementById("cekbox").checked == false) {
            cb.disabled = true;
        } else {
            cb.disabled = false;
        }

    }
</script>