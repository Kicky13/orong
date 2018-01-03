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
                <a class="navbar-brand" href="#"> Dashboard </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="dropdown">
                            <p>selamat datang Pelatih</p>
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
                            <div class="col-lg-4 pr-lg-5 dashboard-demo-graph">
                                <h4 class="card-title">Product-wise Sales</h4>
                                <p class="category mb-3">
                                    Your top performing products.
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Product A</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product B</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product C</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product D</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product E</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-5 pl-lg-5 pr-lg-5 dashboard-demo-graph">
                                <h4 class="card-title">Weekly Sales Trend</h4>
                                <p class="category mb-3">
                                    See how you performed in the past week.
                                </p>
                                <div class="chart-edge">
                                    <div id="area-chart" class="demo-placeholder"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 pl-lg-5 pr-lg-3">
                                <div class="statistic-box">
                                    <h4 class="card-title">
                                        Sales - Region-wise
                                    </h4>
                                    <p class="category mb-3">
                                        Compare sales by region.
                                    </p>
                                    <div class="row text-center">
                                        <div class="col-xl-12">
                                            <div id="dash1-sales-chart" class="chart mb-4">
                                                <canvas id="doughnutChart" height="500" width="498"
                                                        style="display: block; width: 498px; height: 500px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card" style="min-height: 465px">
                            <div class="card-header card-header-icon">
                                <i class="material-icons">timeline</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title ">Sales Trend
                                </h4>
                                <div class="table-tasks table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>Domain</th>
                                            <th>Status</th>
                                            <th>Auto Renewal</th>
                                            <th>Expiry Date</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>abcd.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                </label>
                                            </td>
                                            <td>Mar 7, 2018</td>
                                            <td>
                                                <button class="btn btn-info btn-fill btn-sm">Manage</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>abcd.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                </label>
                                            </td>
                                            <td>Mar 7, 2018</td>
                                            <td>
                                                <button class="btn btn-info btn-fill btn-sm">Manage</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>abcd.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                </label>
                                            </td>
                                            <td>Mar 7, 2018</td>
                                            <td>
                                                <button class="btn btn-info btn-fill btn-sm">Manage</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>abcd.com</td>
                                            <td><span class="badge badge-danger">Expired</span></td>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                </label>
                                            </td>
                                            <td>Mar 7, 2018</td>
                                            <td>
                                                <button class="btn btn-info btn-fill btn-sm">Manage</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>abcd.com</td>
                                            <td><span class="badge badge-danger">Expired</span></td>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                </label>
                                            </td>
                                            <td>Mar 7, 2018</td>
                                            <td>
                                                <button class="btn btn-info btn-fill btn-sm">Manage</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="min-height: 465px">
                            <div class="card-header">
                                <h4 class="card-title float-left">Task List</h4>
                                <div class="dropdown float-right">
                                    <button type="button " class="btn btn-round btn-info dropdown-toggle mt-1"
                                            data-toggle="dropdown">
                                        <i class="material-icons ">build</i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#action" class="dropdown-item">Action</a>
                                        <a href="#action" class="dropdown-item">Another action</a>
                                        <a href="#here" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#link" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <table class="table table-top-aligned">
                                    <tbody>
                                    <tr>
                                        <td class="p-l-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Create Annual Training Plan. Get it reviewed by Mike</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task"
                                                    class="btn btn-primary btn-simple btn-xs ">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove "
                                                    class="btn btn-danger btn-simple btn-xs ">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-l-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes ">
                                                </label>
                                            </div>
                                        </td>
                                        <td>Create Tutorials for Induction Training</td>
                                        <td class="td-actions text-right ">
                                            <button type="button" rel="tooltip " title="Edit Task "
                                                    class="btn btn-primary btn-simple btn-xs ">
                                                <i class="material-icons ">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip " title="Remove "
                                                    class="btn btn-danger btn-simple btn-xs ">
                                                <i class="material-icons ">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-l-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes ">
                                                </label>
                                            </div>
                                        </td>
                                        <td>Complete wireframe for HR Portal by end of December
                                        </td>
                                        <td class="td-actions text-right ">
                                            <button type="button" rel="tooltip " title="Edit Task "
                                                    class="btn btn-primary btn-simple btn-xs ">
                                                <i class="material-icons ">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip " title="Remove "
                                                    class="btn btn-danger btn-simple btn-xs ">
                                                <i class="material-icons ">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-l-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes " checked>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Recruit five developers and get them trained on the new project</td>
                                        <td class="td-actions text-right ">
                                            <button type="button" rel="tooltip " title="Edit Task "
                                                    class="btn btn-primary btn-simple btn-xs ">
                                                <i class="material-icons ">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip " title="Remove "
                                                    class="btn btn-danger btn-simple btn-xs ">
                                                <i class="material-icons ">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-8 col-md-12 ">
                        <div class="card " style="min-height: 495px">
                            <div class="card-header card-header-text ">
                                <h4 class="card-title ">Employees Stats</h4>
                                <p class="category ">New employees on 15th December, 2016</p>
                            </div>
                            <div class="card-content table-responsive ">
                                <table class="table table-hover ">
                                    <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Country</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bob Williams</td>
                                        <td>$23,566</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mike Tyson</td>
                                        <td>$10,200</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tim Sebastian</td>
                                        <td>$32,190</td>
                                        <td>Netherlands</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Philip Morris</td>
                                        <td>$31,123</td>
                                        <td>Korea, South</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Minerva Hooper</td>
                                        <td>$23,789</td>
                                        <td>South Africa</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Hulk Hogan</td>
                                        <td>$43,120</td>
                                        <td>Netherlands</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Angelina Jolie</td>
                                        <td>$12,140</td>
                                        <td>Australia</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 ">
                        <div class="card " style="min-height: 495px ">
                            <div class="card-header ">
                                <h4 class="card-title ">Activities</h4>
                            </div>
                            <div class="card-content ">
                                <div class="streamline ">
                                    <div class="sl-item sl-primary ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">5 mins ago</small>
                                            <p>Williams has just joined Project X</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-danger ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">25 mins ago</small>
                                            <p>Jane has sent a request for access to the project folder</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-success ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">40 mins ago</small>
                                            <p>Kate added you to her team</p>
                                        </div>
                                    </div>
                                    <div class="sl-item ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">45 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-warning ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">55 mins ago</small>
                                            <p>Jim shared a folder with you</p>
                                        </div>
                                    </div>
                                    <div class="sl-item ">
                                        <div class="sl-content ">
                                            <small class="text-muted ">60 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="card ">
                            <div class="card-header card-header-icon ">
                                <i class="material-icons ">language</i>
                            </div>
                            <div class="card-content ">
                                <h4 class="card-title ">Global Sales by Top Locations</h4>
                                <div class="row ">
                                    <div class="col-lg-5 ">
                                        <div class="table-responsive">
                                            <table class="table ">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/US.png ">
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right ">
                                                        2.920
                                                    </td>
                                                    <td class="text-right ">
                                                        53.23%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/DE.png ">
                                                        </div>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td class="text-right ">
                                                        1.300
                                                    </td>
                                                    <td class="text-right ">
                                                        20.43%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/AU.png ">
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right ">
                                                        760
                                                    </td>
                                                    <td class="text-right ">
                                                        10.35%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/GB.png ">
                                                        </div>
                                                    </td>
                                                    <td>United Kingdom</td>
                                                    <td class="text-right ">
                                                        690
                                                    </td>
                                                    <td class="text-right ">
                                                        7.87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/RO.png ">
                                                        </div>
                                                    </td>
                                                    <td>Romania</td>
                                                    <td class="text-right ">
                                                        600
                                                    </td>
                                                    <td class="text-right ">
                                                        5.94%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag ">
                                                            <img src="../assets/img/flags/BR.png ">
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right ">
                                                        550
                                                    </td>
                                                    <td class="text-right ">
                                                        4.34%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1 ">
                                        <div id="worldMap" class="map"></div>
                                    </div>
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
