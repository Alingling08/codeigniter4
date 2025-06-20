<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?= isset($pageTitle) ? $pageTitle : 'Scorpio Hub'; ?></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../backend/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../backend/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../backend/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../backend/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../backend/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../backend/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../backend/vendors/simplebar/simplebar.min.js"></script>
    <script src="../backend/assets/js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../backend/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../backend/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../backend/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../backend/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../backend/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="../backend/vendors/toastr/toastr.min.css" type="text/css" rel="stylesheet">
    <?= $this->renderSection('stylesheets') ?>
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php include('inc/left-sidebar.php') ?>
        <?php include('inc/header.php') ?>
        <div class="content">
            <div class=" content-min-h">
                <?= $this->renderSection('content') ?>

            </div>
            <?php include('inc/footer.php') ?>
        </div>
        <?php include('inc/search-modal.php') ?>
        <script>
            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVertical && navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>
        <?php include('inc/chat-support.php') ?>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <?php include('inc/right-sidebar.php') ?>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../backend/vendors/popper/popper.min.js"></script>
    <script src="../backend/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../backend/vendors/anchorjs/anchor.min.js"></script>
    <script src="../backend/vendors/is/is.min.js"></script>
    <script src="../backend/vendors/fontawesome/all.min.js"></script>
    <script src="../backend/vendors/lodash/lodash.min.js"></script>
    <script src="../backend/vendors/list.js/list.min.js"></script>
    <script src="../backend/vendors/feather-icons/feather.min.js"></script>
    <script src="../backend/vendors/dayjs/dayjs.min.js"></script>
    <script src="../backend/assets/js/phoenix.js"></script>
    <script src="../backend/vendors/jquery-3.7.1.min.js"></script>
    <script src="../backend/vendors/toastr/toastr.min.js"></script>

    <?= $this->renderSection('scripts') ?>
</body>

</html>