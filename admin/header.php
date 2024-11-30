<!DOCTYPE html>
<html>

<head>
    <title>LAUNDRY AJAH</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0">

    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }

    // Mendapatkan nama file halaman saat ini
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <nav class="navbar" style="border-radius: 0px; background-color: #ffcfef;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">LAUNDRY AJAH</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- Menu Dashboard -->
                    <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <!-- Menu Pelanggan -->
                    <li class="<?php echo ($current_page == 'pelanggan.php') ? 'active' : ''; ?>"><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
                    <!-- Menu Transaksi -->
                    <li class="<?php echo ($current_page == 'transaksi.php') ? 'active' : ''; ?>"><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
                    <!-- Menu Laporan -->
                    <li class="<?php echo ($current_page == 'laporan.php') ? 'active' : ''; ?>"><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
                    <!-- Menu Pengaturan -->
                    <li class="dropdown <?php echo ($current_page == 'harga.php' || $current_page == 'ganti_password.php') ? 'active' : ''; ?>"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="harga.php"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                            <li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
                        </ul>
                    </li>
                    <!-- Menu Logout -->
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
