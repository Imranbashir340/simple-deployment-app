<?php

$appName = "PHP Production App";
$currentTime = date("d M Y h:i:s A");
$serverIP = $_SERVER['SERVER_ADDR'] ?? '127.0.0.1';
$serverName = $_SERVER['SERVER_NAME'] ?? 'localhost';
$phpVersion = phpversion();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $appName; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-black text-light">

    <div class="container py-5">

        <!-- HEADER -->

        <div class="text-center mb-5">

            <h1 class="display-3 fw-bold text-success">
                🚀 <?php echo $appName; ?>
            </h1>

            <p class="lead text-secondary">
                Modern PHP Dashboard Interface
            </p>

        </div>

        <!-- MAIN CARD -->

        <div class="card bg-dark border-0 shadow-lg">

            <div class="card-body p-5">

                <div class="row g-4">

                    <!-- SERVER INFO -->

                    <div class="col-lg-4">

                        <div class="card bg-black border border-success h-100">

                            <div class="card-body">

                                <h3 class="text-success mb-4">
                                    Server Information
                                </h3>

                                <div class="mb-3">
                                    <label class="text-secondary">
                                        PHP Version
                                    </label>

                                    <h5>
                                        <?php echo $phpVersion; ?>
                                    </h5>
                                </div>

                                <div class="mb-3">
                                    <label class="text-secondary">
                                        Server Name
                                    </label>

                                    <h5>
                                        <?php echo $serverName; ?>
                                    </h5>
                                </div>

                                <div class="mb-3">
                                    <label class="text-secondary">
                                        Server IP
                                    </label>

                                    <h5>
                                        <?php echo $serverIP; ?>
                                    </h5>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- APPLICATION STATUS -->

                    <div class="col-lg-4">

                        <div class="card bg-black border border-primary h-100">

                            <div class="card-body">

                                <h3 class="text-primary mb-4">
                                    Application Status
                                </h3>

                                <div class="alert alert-success">
                                    ✅ Application Running Successfully
                                </div>

                                <div class="mb-3">

                                    <label class="text-secondary">
                                        Current Time
                                    </label>

                                    <h5>
                                        <?php echo $currentTime; ?>
                                    </h5>

                                </div>

                                <div class="progress mt-4" style="height: 25px;">

                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-100">
                                        100% Active
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- QUICK ACTIONS -->

                    <div class="col-lg-4">

                        <div class="card bg-black border border-warning h-100">

                            <div class="card-body">

                                <h3 class="text-warning mb-4">
                                    Quick Actions
                                </h3>

                                <button class="btn btn-success w-100 mb-3">
                                    Dashboard
                                </button>

                                <button class="btn btn-primary w-100 mb-3">
                                    Settings
                                </button>

                                <button class="btn btn-warning w-100 mb-3">
                                    View Logs
                                </button>

                                <button class="btn btn-danger w-100">
                                    Restart Server
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- EXTRA SECTION -->

                <div class="row mt-5">

                    <div class="col-md-6">

                        <div class="card bg-black border border-info">

                            <div class="card-body">

                                <h4 class="text-info">
                                    System Features
                                </h4>

                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item bg-black text-light">
                                        ✅ Bootstrap 5 UI
                                    </li>

                                    <li class="list-group-item bg-black text-light">
                                        ✅ Responsive Design
                                    </li>

                                    <li class="list-group-item bg-black text-light">
                                        ✅ PHP Dynamic Data
                                    </li>

                                    <li class="list-group-item bg-black text-light">
                                        ✅ Production Ready Layout
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="card bg-black border border-secondary">

                            <div class="card-body">

                                <h4 class="text-secondary">
                                    System Logs
                                </h4>

                                <div class="bg-dark p-3 rounded">

                                    <p class="mb-2 text-success">
                                        [SUCCESS] Server Connected
                                    </p>

                                    <p class="mb-2 text-primary">
                                        [INFO] Database Status OK
                                    </p>

                                    <p class="mb-0 text-warning">
                                        [WARNING] Demo Mode Enabled
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="text-center mt-5">

            <p class="text-secondary">
                Developed with ❤️ using PHP & Bootstrap
            </p>

        </div>

    </div>

</body>

</html>
