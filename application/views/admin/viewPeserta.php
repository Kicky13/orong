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
                <a class="navbar-brand" href="#"> Calon Peserta </a>
            </div>
            <?php $this->load->view('part/identitas'); ?>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <a href="<?php echo base_url('index.php/peserta/viewTambah'); ?>" id="tambah" class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">person_add</i>
                                        </span>
                    Tambah Calon Peserta
                </a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="card-title">Data Calon Anggota Marching Band</h4>
                                <div class="toolbar">
                                    <div class="col-lg-4 col-md-6 col-sm-3">
                                        <div class="dropdown">
                                            <select id="sort" name="sort" class="dropdown-toggle btn btn-primary btn-round btn-block">
                                                <option selected disabled class="dropdown-item">Urutkan Berdasarkan</option>
                                                <option value="nama_peserta" class="dropdown-item">Nama</option>
                                                <option value="kelas" class="dropdown-item">Kelas</option>
                                                <option value="nama_posisi" class="dropdown-item">Posisi</option>
                                                <option value="tanggal_lahir" class="dropdown-item">Tanggal Lahir</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="material-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                           cellspacing="0" width="100%" style="width:100%">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Posisi</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Disubmit oleh</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Posisi</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Disubmit oleh</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $value['nama_peserta']; ?></td>
                                                <td><?php echo $value['kelas']; ?></td>
                                                <td><?php echo $value['nama_posisi']; ?></td>
                                                <td><?php echo $value['tanggal_lahir']; ?></td>
                                                <td><?php echo $value['submitter']; ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url('index.php/peserta/viewEdit/'.$value['id_rekrutmen']); ?>" class="btn btn-warning">
                                        <span class="btn-label">
                                            <i class="material-icons">create</i>
                                        </span>
                                                    </a>
                                                    <a href="<?php echo base_url('index.php/peserta/deleteRekrut/'.$value['id_rekrutmen']); ?>" class="btn btn-danger">
                                        <span class="btn-label">
                                            <i class="material-icons">cancel</i>
                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end content-->
                        </div>
                        <!--  end card  -->
                    </div>
                    <!-- end col-md-12 -->
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('part/footer'); ?>
    <script>
        $(document).ready(function () {
            console.log('Masuk');
            $('#sort').change(function () {
                console.log('Ganti');
                var sort = $(this).val();
                window.location.replace('<?php echo base_url('index.php/peserta/table/'); ?>'+sort)
            });
        });
        $(function () {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
