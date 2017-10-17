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
                <li class="left"><a href="<?php echo base_url('index.php/login/register'); ?>">Daftar</a></li>
            </ul>
        </nav>
        <nav class="nav-m right dropdown">
            <div class="left">
                <a href="" data-toggle="dropdown"><i class="md md-more-vert"></i></a>
                <ul class="dropdown-menu animation-dock clearfix">
                    <li class="left"><a href="">Tentang Gita Orong - Orong</a></li>
                    <li><a href="<?php echo base_url('index.php/login/register'); ?>">Daftar</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div id="main">
    <div class="container clearfix">
        <div id="title">
            <h3>MASUK</h3>
            <p>Halaman log in khusus admin dan pelatih</i></p>
        </div>
        <form action="<?php echo base_url('index.php/login/login') ?>" method="POST" style="margin-bottom: 50px">
            <div class="form-group clearfix">
                <label>Username atau Email</label>
                <input required class="input-area input" id="username" name="username" type="text" placeholder="Masukkan username anda">
                <span class="label label-info" id="msg"></span>
            </div>
            <div class="form-group clearfix">
                <label>Password</label>
                <input required class="input-area" name="password" type="password" placeholder="Masukkan password anda">
            </div>
            <div class="form-group clearfix">
                <button class="btn btn-raised" type="button" id="submit">Masuk</button>
            </div>
        </form>
    </div>
</div>
</body>
<script>
    $(document).ready(function () {
        console.log('ready');
        $('#username').keyup(function () {
            console.log('coba');
            $('#msg').html();
            var username = $(this).val();
            $.ajax({
                type        :   'POST',
                url         :   '<?php echo base_url('index.php/login/cekUsername'); ?>',
                data        : {
                    "username" : username
                }
            }).done(function (data) {
                console.log(data);
                $('#msg').html(data);
                if (data=='Username Tidak Tersedia'){
                    $('#submit').prop('disabled', true);
                } else {
                    $('#submit').prop('disabled', false);
                }
            });
        });
    });
</script>
</html>

