    <title>Helpdesk Perpustakaan</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/politala.png">

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
            text-align: justify;
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

        .border tr td {
            text-align: left;
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
        <div>
            <center>
                <table class="kop">
                    <tr>
                        <td rowspan="6"><img src="<?= base_url() ?>assets/politala.png" height="150" alt="" class="gambar"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</td>
                    </tr>
                    <tr>
                        <td style="font-size: 23px; font-weight: bold;">POLITEKNIK NEGERI TANAH LAUT</td>
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
        </div>

        <hr size="2px" color="black" style="margin-bottom: 1px;">
        <hr size="2px" color="black" style="margin-top: 1px;">

        <br>
        <br>

        <div>
            <center>
                <table class="kop mt-5">
                    <td style="font-size: 18px; font-weight: bold;">SURAT KETERANGAN BEBAS PERPUSTAKAAN</td>

                </table>
                <table class="kop mb-5">
                    <td style="font-size: 18px; font-weight: bold;">Nomor: <?php echo $stop_kuliah->nomor_surat ?>/PL40.14/TU/<?php echo date("Y", strtotime($stop_kuliah->tanggal_surat)); ?></td>
                </table>
            </center>
        </div>

        <br>

        <div style="float: left;">
            <table class="border" border="0" style="width:100%;">
                <tbody>
                    <tr>
                        <p>Saya selaku Kepala Perpustakaan Politeknik Negeri Tanah Laut menerangkan bahwa mahasiswa:</p>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td width="150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                        <td>:</td>
                        <td><?php echo $stop_kuliah->nama_akun ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIM</td>
                        <td>:</td>
                        <td><?php echo $stop_kuliah->idp ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>
                        <td>:</td>
                        <td><?php echo $stop_kuliah->diploma ?> - <?php echo $stop_kuliah->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
                        <td>:</td>
                        <td><?php echo $stop_kuliah->alamat ?></td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <tr>
                <p style="line-height: 1.5;">Yang tersebut diatas dinyatakan <u><strong>bebas dari peminjaman buku ataupun koleksi dari</u></strong> perpustakaan Politeknik Negeri Tanah Laut, yang akan dipergunakan sebagai syarat kelengkapan administrasi pengunduran diri mahasiswa Politeknik Negeri Tanah Laut.</p>
                <br>
                <p style="line-height: 1.5;">Demikian surat keterangan ini dibuat dengan sebenarnya dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</p>
            </tr>
        </div>

        <br>
        <br>

        <div class="ttd" style="display: inline-block;">
            <br>
            <br>
            <p>Tanah Laut, <?php echo print_indo(date('Y-m-d')); ?></p>
            <p style="margin-bottom: 2px;">Kepala UPA Perpustakaan</p>
            <p style="margin-bottom: 2px;">Politeknik Negeri Tanah Laut,</p>
            <br>
            <br>
            <br>
            <br>
            <p>Jaka Permadi, S.Si., M.Cs</p>
            <hr color="black">
            <p>NIP. 198807032019031009</p>
        </div>

        <div style="float: left;">
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br>
            <p style="line-height: 1.5;">Tembusan :</p>
            <p style="line-height: 1.5;">1. Arsip</p>
        </div>

    </div>