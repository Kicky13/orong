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
                <a class="navbar-brand" href="#"> Hitung Nilai Calon Peserta </a>
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
                                <div class="toolbar">
                                    <div class="col-lg-12 col-md-6 col-sm-3">
                                        <div class="col-md-4">
                                            <div class="dropdown">
                                                <select id="angkatan" name="angkatan"
                                                        class="dropdown-toggle btn btn-primary btn-round btn-block">
                                                    <option selected disabled class="dropdown-item">Tampilkan Angkatan
                                                    </option>
                                                    <?php foreach ($angkatan as $value) { ?>
                                                        <option <?php echo ($a == $value['id_angkatan']) ? "selected" : ""; ?>
                                                            value="<?php echo $value['id_angkatan']; ?>"
                                                            class="dropdown-item"><?php echo $value['nama_angkatan']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown">
                                                <select id="posisi" name="posisi"
                                                        class="dropdown-toggle btn btn-primary btn-round btn-block">
                                                    <option selected disabled class="dropdown-item">Tampilkan Posisi
                                                    </option>
                                                    <?php foreach ($posisi as $value) { ?>
                                                        <option <?php echo ($p == $value['id_posisi']) ? "selected" : ""; ?>
                                                            value="<?php echo $value['id_posisi']; ?>"
                                                            class="dropdown-item"><?php echo $value['nama_posisi']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section <?php echo ($p == 'AL') ? "hidden" : ""; ?>>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                               cellspacing="0" width="100%" style="width:100%">
                                            <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Posisi</th>
                                                <?php foreach ($kriteria as $item) { ?>
                                                    <th><?php echo $item['nama_kriteria']; ?></th>
                                                <?php } ?>
                                                <th>Skor</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Posisi</th>
                                                <?php foreach ($kriteria as $item) { ?>
                                                    <th><?php echo $item['nama_kriteria']; ?></th>
                                                <?php } ?>
                                                <th>Skor</th>
                                            </tr>
                                            </tfoot>
                                            <section>
                                                <tbody>
                                                <?php $no = 1;
                                                $x = 1;
                                                foreach ($data as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $item['nama_peserta']; ?></td>
                                                        <td><?php echo $item['nama_posisi']; ?></td>
                                                        <?php foreach ($kriteria as $value) { ?>
                                                            <td><?php echo $item[$value['id_kriteria']]; ?></td>
                                                        <?php } ?>
                                                        <td><?php echo ($item['skor'] == '') ? "" : $item['skor']; ?></td>
                                                    </tr>
                                                    <?php $x++; } ?>
                                                </tbody>
                                            </section>
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
            $('#angkatan').change(function () {
                console.log('angkatan');
                $('#posisi').show();
            });
            $('#posisi').change(function () {
                console.log('posisi');
                var posisi = $(this).val();
                var angkatan = $('#angkatan').val();
                window.location.replace('<?php echo base_url('index.php/record/index/'); ?>'+angkatan+'/'+posisi);
            });
        });
        $(function () {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
