<style>
    table {
        font-size: 14px;

    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    thead {
        font-size: 16px;
    }

    .judul h3,
    h2,
    p {
        text-align: center;
        margin: 5px 0 5px 0;
    }

    .form-inline img {

        display: inline-block;
    }

    h2 {
        font-size: 30px;
    }

    .kop tr td {
        text-align: center;
        border: 2px solid white;
        border-collapse: collapse;
    }

    .gambar {
        margin-right: 10px;
    }

    .isi tr td {
        padding-left: 5px;
        padding-right: 5px;
    }

    .ttd {
        text-align: left;
        display: inline-block;
        float: right;
    }
</style>

<script>
    window.load = print_d();

    function print_d() {
        window.print();
    }
    window.onfocus = function() {
        window.close();
    }
</script>

<div class="container-fluid">
    <center>
        <table class="kop">
            <tr>
                <td rowspan="6"><img src="<?= base_url() ?>assets/politala.png" height="150" alt="" class="gambar"></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</td>
            </tr>
            <tr>
                <td style="font-size: 25px; font-weight: bold;">POLITEKNIK NEGERI TANAH LAUT</td>
            </tr>
            <tr>
                <td>Jalan Ahmad Yani KM. 06 Desa Panggung, Tanah Laut, Kalimantan Selatan 70815</td>
            </tr>
            <tr>
                <td>Telp. (0512) 2021065; Faksimile: (0512) 2021065;</td>
            </tr>
            <tr>
                <td>Laman https://politala.ac.id/id/, Surel mail @polita.ac.id</td>
            </tr>
        </table>
    </center>


    <hr size="2px" color="black" style="margin-bottom: 1px;">
    <hr size="2px" color="black" style="margin-top: 1px;">
    <center>
        <table class="kop mb-5">
            <td style="font-size: 30px; font-weight: bold;">Laporan Data Ebooks</td>
        </table>
    </center>

    <h6>Periode : <?php echo print_indo(date($tanggal_awal)); ?> - <?php echo print_indo(date($tanggal_akhir)); ?></h6>
    <div>
        <table class="isi" style="width:100%;">
            <thead style="line-height: 40px;">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Judul Buku</th>

                </tr>
            </thead>
            <tbody style="line-height: 30px;">
                <?php $no = 1;
                foreach ($print_ebooks as $e) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo format_indo(date($e->tanggal_luncur)); ?></td>
                        <td><?php echo $e->judul_buku ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="ttd" style="display: inline-block;">
        <h5>Tanah Laut, <?= date('d-m-Y') ?></h5>
        <h5>Kepala UPT Perpustakaan</h5>
        <br>
        <br>
        <br>
        <h5 style="margin-top: 2px;">Ir. Agustian Noor, M.Kom</h5>
        <hr size="" color="black" style="margin-top: 1px;">
        <h5 style="margin-top: px">NIP. 198408022019031005</h5>
    </div>
</div>