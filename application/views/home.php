<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Orong Web - </title>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,600,700,400italic,300italic' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,400italic,300italic' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

    <!-- css -->
    <link href="<?php echo base_url().'assets/'; ?>css/bootstrap.css" rel='stylesheet'>
    <link href="<?php echo base_url().'assets/'; ?>css/material-design-iconic-font.css" rel='stylesheet'>
    <link href="<?php echo base_url().'assets/'; ?>css/reset.css" rel='stylesheet'>
    <link href="<?php echo base_url().'assets/'; ?>css/style.css" rel='stylesheet'>

    <!-- favicon -->
    <link href="<?php echo base_url().'assets/'; ?>img/icon/favicon.png" rel='shortcut icon' type='image/x-icon'>

    <!-- js -->
    <script src="<?php echo base_url().'assets/'; ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>js/init.js"></script>
</head>
<body id="page-home" class="page-full">
<header>
    <div class="container clearfix">
        <div class="logo left">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/'; ?>img/logo/logo.png"></a>
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
</header>    <div id="main">
    <section>
        <div class="area">
            <div class="cell">
                <h1>Selamat datang di media informasi Marching Band Gita Orong - Orong</h1>
                <a href="<?php echo base_url('index.php/login/register'); ?>">DAFTAR SEKARANG</a>
            </div>
        </div>
    </section>
</div>
<footer>
    <div class="container clearfix">
        <div class="copyright">
            <p>Copyright &copy; 2017</p>
        </div>
    </div><!-- .container -->
</footer><!-- #footer -->
</body>
</html>