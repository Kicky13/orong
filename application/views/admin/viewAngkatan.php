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
                <a class="navbar-brand" href="#"> Angkatan </a>
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
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 565px">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Tabel Angkatan</h4>
                            <p class="category">Terakhir Update Hari ini</p>
                            <button id="tambah" class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">group_add</i>
                                        </span>
                                Tambah Angkatan
                            </button>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-success">
                                <th>No</th>
                                <th>Nama Angkatan</th>
                                <th>Tahun Angkatan</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                                </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($data as $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['nama_angkatan']; ?></td>
                                        <td><?php echo $value['tahun_angkatan']; ?></td>
                                        <td><?php echo $value['status_angkatan']; ?></td>
                                        <td class="text-center">
                                            <a <?php echo ($value['status_angkatan'] == 'Open') ? "" : "hidden"; ?> href="<?php echo base_url('index.php/angkatan/formEdit/' . $value['id_angkatan']); ?>"
                                               class="btn btn-warning">
                                        <span class="btn-label">
                                            <i class="material-icons">people_outline</i>
                                        </span>
                                                Edit Angkatan
                                            </a>
                                            <button type="button" data-id="<?php echo $value['id_angkatan']; ?>" <?php echo ($value['status_angkatan'] == 'Open') ? "" : "hidden"; ?> class="btn btn-danger lock">
                                        <span class="btn-label">
                                            <i class="material-icons">lock</i>
                                        </span>
                                                Lock Angkatan
                                            </button>
                                            <button type="button" data-id="<?php echo $value['id_angkatan']; ?>" <?php echo ($open == 1) ? "hidden" : ""; ?> class="btn btn-info unlock">
                                        <span class="btn-label">
                                            <i class="material-icons">lock</i>
                                        </span>
                                                Unlock Angkatan
                                            </button>
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
</body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->load->view('part/footer'); ?>
<script>
    $(document).ready(function () {
        console.log('ready');
        $('#tambah').click(function () {
           var x = <?php echo $open; ?>;
            console.log(x);
           if (x == 0){
               window.location.replace('<?php echo base_url('index.php/angkatan/formAdd'); ?>');
           } else {
               swal('ERROR!', 'Semua angkatan harus lock terlebih dahulu', 'error');
           }
        });
        $('.unlock').click(function () {
           console.log('unlock');
           var n = $(this).attr('data-id');
            swal({
                    title: "Apa anda yakin?",
                    text: "Angkatan akan dibuka kembali!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ya, Unlock Angkatan ini!",
                    closeOnConfirm: false
                },
                function(){
                    window.location.replace('<?php echo base_url('index.php/angkatan/unlockAngkatan/'); ?>'+n);
                });
        });
        $('.lock').click(function () {
            console.log('lock');
            var id = $(this).attr('data-id');
            swal({
                    title: "Apa anda yakin?",
                    text: "Mengunci angkatan yang anda pilih!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ya, Lock Angkatan ini!",
                    closeOnConfirm: false
                },
                function(){
                    window.location.replace('<?php echo base_url('index.php/angkatan/lockAngkatan/'); ?>'+id);
                });
        });
    });
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>
</html>