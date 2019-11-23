<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Administrator</title>
    <?php include('components/head.php'); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="login.php">
                                <img width="50px" src="images/icon/logo_bus.png" alt="Cool Admin" />
                            </a>
                            <p style="margin-left:6px ;">PT. Putra Bill Transport</p>
                        </div>
                        <div class="login-form">
                            <form method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="uname" class="au-input au-input--full" type="text" name="Username" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="pass" class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button name="login" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                            </form>
                            <?php
                            $uname    = $_POST['uname'];
                            $pass     = $_POST['pass'];

                            if (isset($_POST['login'])) {
                                $login = $koneksi->query("SELECT * FROM tb_admin WHERE admin_user = '$uname' AND admin_pass='$pass'");
                                $cek = $login->num_rows;
                                if ($cek > 0) {
                                    $_SESSION['admin'] = $login;
                                    echo "<script>alert('Anda berhasil login');location='index.php';</script>";
                                }else{
                                    echo "<script>alert('Anda gagal login');location='login.php';</script>"
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('components/scripts.php'); ?>

</body>

</html>
<!-- end document-->