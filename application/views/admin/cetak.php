<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>base.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>fancy.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>main.css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>mycostum.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/'; ?>bootstrap.css"/>
    <script src="<?php echo base_url() . 'assets/cetak/'; ?>compatibility.min.js"></script>
    <script src="<?php echo base_url() . 'assets/cetak/'; ?>theViewer.min.js"></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {
        }
    </script>
    <title></title>
</head>
<body>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <button class="btn-round btn-danger" id="pdf"> Cetak Dokumen</button>
        <button class="btn-round btn-info" id="back"> Kembali</button>
        <div class="row">
            <div class="judul">
                <p style="font-size: 10px">DATA ANGGOTA MARCHING BAND <br> <strong style="font-size: 19px">GITA ORONG ORONG</strong><br> SDN 1 GUDANG <br> KECAMATAN ASEMBAGUS, KABUPATEN SITUBONDO<br>PROVINSI JAWA TIMUR</p>
            </div>
        </div>
        <div class="row">
            <div class="subhead">
                <div class="identitas page-break">
                    <table>
                        <tr>
                            <td>Angkatan &ensp; </td>
                            <td> :&ensp; </td>
                            <td> <?php echo $angkatan; ?></td>
                        </tr>
                        <tr>
                            <td>Pelatih Utama &ensp; </td>
                            <td> :&ensp; </td>
                            <td> <?php echo $admin; ?></td>
                        </tr>
                        <tr>
                            <td>Anggota &ensp; </td>
                            <td> :&ensp; </td>
                            <td> <?php echo $pelatih[0]['nama']?></td>
                        </tr>
                        <?php for ($i = 1; $i < count($pelatih); $i++){ ?>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> <?php echo $pelatih[$i]['nama']?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row page-break">
            <div class="tabel page-break">
                <table class="table table-responsive">
                    <thead>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Posisi</th>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach ($anggota as $item){ ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $item['nama_peserta']; ?></td>
                        <td><?php echo $item['kelas']; ?></td>
                        <td><?php echo $item['tanggal_lahir']; ?></td>
                        <td><?php echo $item['nama_posisi']; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
</div>
<div class="loading-indicator">
</div>
</body>
<script src="<?php echo base_url() . 'assets/'; ?>dashboard/vendors/jquery-3.1.1.min.js " type="text/javascript "></script>
<script>
    $('#pdf').click(function () {
        console.log('pdf');
       $('#pdf').hide();
       $('#back').hide();
       window.print();
    });
    $('#back').click(function () {
        window.history.back();
    });
    var printEvent = window.matchMedia('print');
    printEvent.addListener(function(printEnd) {
        if (!printEnd.matches) {
            $('#pdf').show();
            $('#back').show();
        };
    });
</script>
</html>
