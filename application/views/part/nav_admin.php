<nav class="sidebar" data-background-color="white">
    <div class="logo">
        <a href="#" class="simple-text">
            Orong - Orong Web
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="simple-text">
            OR
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/dashboard'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>
                        Halaman Utama
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/angkatan'); ?>">
                    <i class="material-icons">group</i>
                    <p>
                        Angkatan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/peserta/table/id_rekrutmen'); ?>">
                    <i class="material-icons">person_outline</i>
                    <p>
                        Calon Peserta
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/penilaian/tabelNilai/AL'); ?>">
                    <i class="material-icons">create</i>
                    <p>
                        Penilaian
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('index.php/perhitungan/tabelNilai/AL'); ?>">
                    <i class="material-icons">playlist_add_check</i>
                    <p>
                        Perhitungan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('index.php/admin'); ?>">
                    <i class="material-icons">school</i>
                    <p>
                        Admin
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/login/logout'); ?>">
                    <i class="material-icons">cancel</i>
                    <p>
                        Keluar
                    </p>
                </a>
            </li>
        </ul>
    </div>
</nav>