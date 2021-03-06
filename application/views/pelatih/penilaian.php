<!doctype html>
<html lang="en">
<?php $this->load->view('part/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('part/nav_pelatih'); ?>
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
                <a class="navbar-brand" href="#"> Penilaian Calon Peserta </a>
            </div>
            <?php $this->load->view('part/identitas'); ?>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="card-title">Data Penilaian Calon Anggota Marching Band</h4>
                                <section <?php echo ($id == 'AL') ? "hidden" : ""; ?>>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                               cellspacing="0" width="100%" style="width:100%">
                                            <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Posisi</th>
                                                <th class="text-center">Status</th>
                                                <th class="disabled-sorting text-center">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Posisi</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php $no = 1;
                                            foreach ($data as $item){ ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $item['nama_peserta']; ?></td>
                                                    <td><?php echo $item['kelas']; ?></td>
                                                    <td><?php echo $item['nama_posisi']; ?></td>
                                                    <td class="text-center"><?php echo ($item['status_nilai'] == 1) ? "Belum Diverifikasi" : "Terverifikasi"; ?></td>
                                                    <td class="text-center">
                                                        <a <?php echo ($item['status_nilai'] == 2) ? "hidden" : ""; ?> href="<?php echo base_url('index.php/penilaian/inputNilai/'.$item['id_rekrutmen']); ?>" class="btn btn-<?php echo ($item['status'] == 'cek') ? "success" : "info"; ?>">
                                        <span class="btn-label">
                                            <i class="material-icons">create</i>
                                        </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
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
            console.log('ready');
            $('#show').change(function () {
                console.log('ganti');
                var id = $(this).val();
                window.location.replace('<?php echo base_url('index.php/penilaian/tabelNilai/')?>'+id);
            });
        });
        $(function () {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
