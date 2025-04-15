<!DOCTYPE html>
<html lang="en">

<head>
    <title>Error | AFRIMETS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="assets/images/user/AFRIMETS.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
        <div class="navbar-wrapper">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link "><span class="pcoded-micon">
                                <i class="feather icon-cloud"></i></span><span class="pcoded-mtext">18th AFRIMETS GA Registration form</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg header-blue navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <img src="assets/images/user/AFRIMETS.png" alt="" style="width: 40px; height: 40px;" class="logo">
                <img src="assets/images/user/AFRIMETS.png" alt="" class="logo-thumb" style="width: 30px; height: 40px;">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="error-animation">
                                            <svg class="crossmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                <circle class="crossmark__circle" cx="26" cy="26" r="25" fill="none" />
                                                <path class="crossmark__cross" fill="none" d="M16 16 36 36 M36 16 16 36" />
                                            </svg>
                                        </div>
                                        <h2 class="mb-4">Registration Error</h2>
                                        <p class="mb-4 text-danger"><?php echo htmlspecialchars($_GET['message'] ?? 'An error occurred during registration.'); ?></p>
                                        <div class="mt-5">
                                            <a href="index.php" class="btn btn-primary">Back to Registration Form</a>
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
    <!-- [ Main Content ] end -->

    <style>
        .error-animation {
            margin: 30px auto;
        }

        .crossmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #ff4444;
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px #ff4444;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
            margin: 0 auto;
        }

        .crossmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #ff4444;
            fill: none;
            animation: stroke .6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .crossmark__cross {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke .3s cubic-bezier(0.65, 0, 0.45, 1) .8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {
            0%, 100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #ff4444;
            }
        }
    </style>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/plugins/prism.js"></script>
    <script src="assets/js/horizontal-menu.js"></script>
    <script src="assets/js/analytics.js"></script>
</body>

</html>