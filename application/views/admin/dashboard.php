<!doctype html>
<html lang="en">
<?php $this->load->view('part/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('part/nav_admin'); ?>
    <div class="main-panel">
        <nav class="navbar navbar-toggleable-md navbar-default navbar-absolute navbar-inverse" data-topbar-color="blue">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                    <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                </button>
            </div>
            <div class="navbar-header d-flex">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"> Dashboard </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="dropdown">
                            <p>selamat datang Ahmad Ichsanul Karim</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/orong2">
                            <i class="material-icons">home</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-6 pr-lg-5 dashboard-demo-graph">
                                <h4 class="card-title">My Today's Activity</h4>
                                <p class="category mb-3">
                                    Aktivitas Akun Saya Hari Ini.
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <?php foreach ($personal as $item){ ?>
                                        <tr>
                                            <td><?php echo $item['aktivitas']; ?></td>
                                            <td class="text-right">
                                                <?php echo $item['tgl']; ?>
                                            </td>
                                            <td class="text-right">
                                                <?php echo $item['jam']; ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-lg-6 pr-lg-6 dashboard-demo-graph">
                                <h4 class="card-title">Today's Activity</h4>
                                <p class="category mb-3">
                                    AKtivitas semua pengguna hari ini.
                                </p>
                                <div class="chart-edge">
                                    <table class="table">
                                        <tbody>
                                        <?php foreach ($data as $value){ ?>
                                            <tr>
                                                <td><?php echo $value['nama']; ?></td>
                                                <td class="text-left">
                                                    <?php echo $value['aktivitas']; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $value['tgl_aktivitas']; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('part/footer'); ?>
<script>
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>
