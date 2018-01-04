<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Gita Orong-Orong</title>
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,600,700,400italic,300italic'
          rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,400italic,300italic'
          rel='stylesheet'>
    <link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!-- css -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/'; ?>dashboard/vendors/material.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/wunder.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/'; ?>css/bootstrap.css" rel='stylesheet'>
    <link href="<?php echo base_url() . 'assets/'; ?>css/material-design-iconic-font.css" rel='stylesheet'>
    <link href="<?php echo base_url() . 'assets/'; ?>css/reset.css" rel='stylesheet'>
    <link href="<?php echo base_url() . 'assets/'; ?>css/style.css" rel='stylesheet'>
    <!-- favicon -->
    <link href="<?php echo base_url() . 'assets/'; ?>icon/favicon.png" rel='shortcut icon' type='image/x-icon'>
    <!-- js -->
    <script src="<?php echo base_url() . 'assets/'; ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/init.js"></script>
</head>
<body id="page-login" class="page-logreg">
<header>
    <div class="container clearfix">
        <div class="logo left">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() . 'assets/'; ?>img/logo/logo.png"></a>
        </div>
        <nav class="nav right">
            <ul class="clearfix">
                <li class="left"><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
                <li class="left"><a href="">Tentang Gita Orong - Orong</a></li>
                <li class="left"><a href="<?php echo base_url('index.php/login'); ?>">Login</a></li>
            </ul>
        </nav>
        <nav class="nav-m right dropdown">
            <div class="left">
                <a href="" data-toggle="dropdown"><i class="md md-more-vert"></i></a>
                <ul class="dropdown-menu animation-dock clearfix">
                    <li class="left"><a href="">Tentang Gita Orong - Orong</a></li>
                    <li><a href="<?php echo base_url('index.php/login'); ?>">Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div id="main">
    <div class="container clearfix">
        <div id="title">
            <h3>DAFTAR</h3>
            <p>Daftarkan dirimu sekarang dengan mengisi formulir berikut</i></p>
        </div>
        <form action="<?php echo base_url('index.php/peserta/pesertaTambah/Anonim') ?>" method="POST">
            <div class="form-group clearfix">
                <label>Nama Lengkap</label>
                <input required class="input-area input" name="nama" type="text" placeholder="Masukkan nama">
            </div>
            <div class="form-group clearfix">
                <label>Kelas</label>
                <select required class="input-area input" name="kelas">
                    <option disabled selected>Pilih salah satu kelas</option>
                    <option value="4A">4A</option>
                    <option value="4B">4B</option>
                    <option value="4C">4C</option>
                    <option value="5A">5A</option>
                    <option value="5B">5B</option>
                    <option value="5C">5C</option>
                    <option value="6A">6A</option>
                    <option value="6B">6B</option>
                    <option value="6C">6C</option>
                </select>
            </div>
            <div class="form-group clearfix">
                <label>No Absen</label>
                <input required class="input-area input" name="absen" type="text" placeholder="Masukkan nomor absen">
            </div>
            <div class="form-group clearfix">
                <label>Tanggal Lahir</label>
                <input required class="input-area input datepicker" name="ttl" type="text" placeholder="Pilih Tanggal Lahir">
            </div>
            <div class="form-group clearfix">
                <label>Posisi</label>
                <select required class="input-area input" name="posisi">
                    <option disabled selected>Pilih salah satu posisi</option>
                    <?php foreach ($data as $item){ ?>
                    <option value="<?php echo $item['id_posisi']; ?>"><?php echo $item['nama_posisi']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group clearfix">
                <button class="btn btn-raised" type="submit" id="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/tether.min.js" type="text/javascript"></script>

<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery.select-bootstrap.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/sweetalert/sweetalert2.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/js/wunder.min.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url().'assets/'; ?>dashboard/js/demo.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>dashboard/vendors/dropzone/dropzone.min.js"></script>
<script>
    $(document).ready(function () {
        console.log('ready');
    });
</script>
</html>

