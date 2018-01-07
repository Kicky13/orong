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
            <?php $this->load->view('part/identitas'); ?>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 565px">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Tabel Admin dan Pelatih</h4>
                            <p class="category">Terakhir Update Hari ini</p>
                            <a href="<?php echo base_url('index.php/admin/formAdd'); ?>" class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">group_add</i>
                                        </span>
                                Tambah Admin
                            </a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-success">
                                <th>No</th>
                                <th>Nama Admin</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th class="text-center">Aksi</th>
                                </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($data as $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['nama']; ?></td>
                                        <td><?php echo $value['email']; ?></td>
                                        <td><?php echo $value['alamat']; ?></td>
                                        <td><?php echo $value['akses'].' '.$value['role']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('index.php/admin/formEdit/' . $value['id_user']); ?>" class="btn btn-warning">
                                        <span class="btn-label">
                                            <i class="material-icons">people_outline</i>
                                        </span>
                                                Edit User
                                            </a>
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
    });
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>
</html>