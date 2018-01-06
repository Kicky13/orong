<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>base.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>fancy.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/cetak/'; ?>main.css"/>
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
        <div class="row">
            <div class="text-center header-fixed judul">
                <h5><strong>DATA ANGGOTA MARCHING BAND</strong></h5>
                <h2>GITA ORONG ORONG</h2>
                <h3>SDN 1 GUDANG</h3>
                <p>KECAMATAN ASEMBAGUS, KABUPATEN SITUBONDO<br>PROVINSI JAWA TIMUR</p>
            </div>
        </div>
        <div class="row">
            <div class="subhead">
                <div class="col-md-2">
                    <p>Angkatan</p>
                    <p>Pelatih Utama</p>
                    <p>Anggota</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="col-sm-5">
                    <p><?php echo $angkatan; ?></p>
                    <p><?php echo $admin; ?></p>
                    <?php foreach ($pelatih as $value){ ?>
                    <p><?php echo $value['nama']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tabel">
                <table class="table table-responsive">
                    <thead>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Posisi</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Teddy</td>
                        <td>5C</td>
                        <td>02-020-1995</td>
                        <td>Brassline</td>
                    </tr>
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
</html>
