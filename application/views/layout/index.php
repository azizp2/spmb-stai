<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Container Management</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <?= $_stylesheet ?>



</head>

<body>


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left" style="background-color:aliceblue">
                <a href="<?= base_url() ?>" class="logo">
                    <span class="logo-light">
                        <img src="<?= base_url('assets/images/logo-sambu-group.png') ?>" width="200" alt="">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url('assets/images/ps-small.png') ?>" width="50" alt="">
                    </span>
                </a>
            </div>

            <?= $_navigation ?>

        </div>
        <!-- Top Bar End -->

        <?= $_menu ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title"><?= $_titlePage ?></h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Table</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end page-title -->




                    <?= $_script ?>

                    <?= $_content ?>




                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2023 <b>Sambu Group</b> <span class="d-none d-sm-inline-block"> - Develop By <b>PT Riau Sakti United Plantations</b></span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


   <script src="<?= base_url() ?>assets/pages/form-advanced.js"></script>

</body>

</html>