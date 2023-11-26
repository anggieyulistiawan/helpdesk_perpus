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
                    <td style="font-size: 18px; font-weight: bold;">Nomor: <?php echo $lulus_kuliah->nomor_surat ?>/PL40.14/TU/<?php echo date("Y", strtotime($lulus_kuliah->tanggal_surat)); ?></td>
                </table>
            </center>
        </div>

        <br>

        <div style="float: left;">
            <table class="border" border="0" style="width:100%;">
                <tbody>
                    <tr>
                        <p>Yang bertandatangan dibawah ini menerangkan:</p>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td width="180px">Nama</td>
                        <td>:</td>
                        <td><?php echo $lulus_kuliah->nama_akun ?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?php echo $lulus_kuliah->idp ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><?php echo $lulus_kuliah->diploma ?> - <?php echo $lulus_kuliah->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <td>Judul Tugas Akhir</td>
                        <td>:</td>
                        <td><?php echo $lulus_kuliah->judul_ta ?></td>
                    </tr>
                    <tr>
                        <td>Judul Praktek Kerja Lapangan</td>
                        <td>:</td>
                        <td><?php echo $lulus_kuliah->judul_pkl ?></td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <tr>
                <p style="line-height: 1.5;">Telah menyelesaikan studi dan tidak memiliki tanggungan pada Perpustakaan Politeknik Negeri Tanah Laut, sebagai berikut:</p>
            </tr>
        </div>

        <table class="isi" style="width:100%;">
            <tbody>
                <br>
                <tr>
                    <td style="text-align: center;" rowspan="2">No</td>
                    <td width="190px" style="text-align: center;" rowspan="2">Komponen</td>
                    <td style="text-align: center;" colspan="3">Pemeriksa</td>
                </tr>
                <tr>
                    <td style="text-align: center;">Nama</td>
                    <td style="text-align: center;">Jabatan</td>
                    <td style="text-align: center;">Paraf</td>
                </tr>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Laporan Tugas Akhir (softcopy)</td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_pegawai ?></td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_jabatan ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Laporan Tugas Akhir (hardcopy)</td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_pegawai ?></td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_jabatan ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Laporan PKL (softcopy)</td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_pegawai ?></td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_jabatan ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;">4</td>
                    <td>Laporan PKL (hardcopy)</td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_pegawai ?></td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_jabatan ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;">5</td>
                    <td>Bebas Peminjaman Buku, Majalah, dan Dokumen lainnya</td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_pegawai ?></td>
                    <td style="text-align: center;"><?php echo $lulus_kuliah->nama_jabatan ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <tr>
            <br>
            <p style="line-height: 1.5;"> Demikian surat ini dibuat untuk digunakan sebagai syarat Yudisium dan Wisuda tahun <?php echo date('Y'); ?></p>
        </tr>

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
    </div>