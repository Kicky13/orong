<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="<?php echo base_url('index.php/admin/formEdit/'.$_SESSION['id']); ?>" class="nav-link" data-toggle="dropdown">
                <p>selamat datang <?php echo $_SESSION['name']; ?></p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('index.php/admin/formEdit/'.$_SESSION['id']); ?>">
                <i class="material-icons">home</i>
            </a>
        </li>
</div>