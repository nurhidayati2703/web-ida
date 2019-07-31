<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Intelligent Transport System Indonesia 2019</title>

    <!--<link rel="icon" type="image/png" href="./assets/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./assets/img/apple-touch-icon-120x120.png" />-->

    <link rel="stylesheet" href="<?= base_url();?>./assetsadmin/css//bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>./assetsadmin/css/style.css">
</head>

<body>
    <div class="app-login">
        <div class="page-container">
            <div class="container-fluid login-page">
                <div class="row h-100 justify-content-md-end justify-content-center align-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-8">
                        <div class="app-login-box">
                            <div class="logo">
                                <img src="<?= base_url();?>assetsadmin/img/logo-login.png" alt="">
                            </div>
                            <h5 class="text-center">Login</h5>
                            <form action="<?= base_url('Login');?>" method="post" class="form" role="form">
                                <?php 
                                        if($this->session->flashdata('pesan') == TRUE)
                                    { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('pesan'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                <?php } ?>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input required type="text" name="username" id="" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input  required type="password" name="password" id="" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copy text-center">
                            &copy; Intelligent Transport System Indonesia 2019. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= base_url();?>./assetsadmin/js/jquery.min.js"></script>
    <script src="<?= base_url();?>./assetsadmin/js/popper.min.js"></script>
    <script src="<?= base_url();?>./assetsadmin/js/bootstrap.min.js"></script>
</body>

</html>