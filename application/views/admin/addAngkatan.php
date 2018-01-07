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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form method="post" action="<?php echo base_url('index.php/angkatan/add'); ?>" class="form-horizontal">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Form Elements</h4>
                                </div>
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Nama Angkatan</label>
                                        <div class="col-md-10">
                                            <input required type="text" name="nama" class="form-control" placeholder="Masukkan Nama Angkatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Tahun Angkatan</label>
                                        <div class="col-md-10">
                                            <select required name="tahun" id="tahun" class="form-control">
                                                <option selected disabled> Pilih Tahun</option>
                                                <?php foreach ($tahun as $value){ ?>
                                                <option value="<?php echo $value['tahun']; ?>"> <?php echo $value['tahun']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <span id="msg" class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                    <?php foreach ($posisi as $value){ ?>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label text-right"> <?php echo $value['nama_posisi']; ?></label>
                                            <div class="col-md-10">
                                                <input required type="text" name="jumlah<?php echo $value['id_posisi']; ?>" class="form-control" placeholder="Masukkan Jumlah <?php echo $value['nama_posisi']; ?> yang Dibutuhkan">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary btn-round">
                                    <i class="material-icons">assignment</i> Submit
                                </button>
                            </form>
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
       $('#tahun').change(function () {
           console.log('berubah');
           $('#msg').html();
           var tahun = $(this).val();
           $.ajax({
               type        :   'POST',
               url         :   '<?php echo base_url('index.php/angkatan/cekTahun'); ?>',
               data        : {
                   "tahun" : tahun
               }
           }).done(function (data) {
               console.log(data);
               $('#msg').html(data);
               if (data=='Tahun telah Digunakan'){
                   $('#submit').prop('disabled', true);
               } else {
                   $('#submit').prop('disabled', false);
               }
           });
       })
    });
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>
</html>