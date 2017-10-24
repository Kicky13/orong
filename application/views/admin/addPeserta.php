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
                            <form method="get" action="/" class="form-horizontal">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Form Elements</h4>
                                </div>
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Nama</label>
                                        <div class="col-md-10">
                                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Kelas</label>
                                        <div class="col-md-10">
                                            <input name="kelas" type="text" class="form-control" placeholder="Masukkan Kelas Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">No Absen</label>
                                        <div class="col-md-10">
                                            <input name="absen" type="text" class="form-control" placeholder="Masukkan Nomor Absen Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Tanggal Lahir</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control datepicker" placeholder="Masukkan Nama Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Checkboxes and radios</label>
                                        <div class="col-md-10 checkbox-radios">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes"> First Checkbox
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes"> Second Checkbox
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" checked id="radio1">
                                                <label for="radio1">First Radio</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" id="radio2">
                                                <label for="radio2">Second Radio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Inline checkboxes</label>
                                        <div class="col-md-10">
                                            <div class="checkbox form-check-inline">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">a
                                                </label>
                                            </div>
                                            <div class="checkbox form-check-inline">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">b
                                                </label>
                                            </div>
                                            <div class="checkbox form-check-inline">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">c
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <form method="get" action="/" class="form-horizontal">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Input Variants</h4>
                                </div>
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Custom Checkboxes &amp; radios</label>
                                        <div class="col-md-4 offset-md-1 checkbox-radios">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes"> Unchecked
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked> Checked
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" disabled> Disabled Unchecked
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked disabled> Disabled Checked
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 checkbox-radios">
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" checked id="radio-on">
                                                <label for="radio-on">Radio is on</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" id="radio-off">
                                                <label for="radio-off">Radio is off</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadiosDisabled" checked disabled id="radio-on-disabled">
                                                <label for="radio-on-disabled">Disabled Radio is on</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadiosDisabled" disabled id="radio-off-disabled">
                                                <label for="radio-off-disabled">Disabled radio is off</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label class="col-md-2 col-form-label text-right">Input with success</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-success" value="Success">
                                        </div>
                                    </div>
                                    <div class="form-group row has-danger">
                                        <label class="col-md-2 col-form-label text-right">Input with error</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-danger" value="Error Input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Column sizing</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" placeholder=".col-md-3">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" placeholder=".col-md-4">
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" placeholder=".col-md-5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Documentation
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Support
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#">Wunder Admin</a>
                </p>
            </div>
        </footer>
    </div>
</div>
<?php $this->load->view('part/footer'); ?>
</html>
