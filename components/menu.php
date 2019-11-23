<!-- header -->
<?php
$ambil = $koneksi->query("SELECT kontak_wa FROM tb_kontak WHERE kontak_id = 1 ");
$pecah = $ambil->fetch_object();
?>
<header>
    <div class="top-head container">
        <div class="ml-auto text-right right-p">
            <ul>
                <li class="mr-3">
                    <span class="fa fa-phone"></span> <?php echo $pecah->kontak_wa ?></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <!-- nav -->
        <nav class="py-3 d-lg-flex">
            <div id="logo">
                <h1> <a href="index.php"> BIL Transport </a></h1>
            </div>
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            <ul class="menu ml-auto mt-1">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-sub"><a href="index.php">Tentang Kami</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.php?page=page/profil">Profil</a>
                        </li>
                        <li>
                            <a href="index.php?page=page/visi">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="#about">Jadwal Perjalanan</a></li>
                <li class=""><a href="#stats">Paket Wisata</a></li>
                <li class=""><a href="#services">Galleri</a></li>
                <li class=""><a href="#testimonials">Kontak</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->