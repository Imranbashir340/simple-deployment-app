<?php
$appName = "My PHP App";
$currentTime = date("d M Y h:i:s A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $appName; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark text-light">

<div class="container py-5">

    <div class="card shadow-lg border-0">
        <div class="card-body bg-black text-light rounded">

            <div class="text-center mb-4">
                <h1 class="display-4 fw-bold text-success">
                    🚀 <?php echo $appName; ?>
                </h1>

                <p class="lead">
                    PHP + Bootstrap Test Application fine
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="p-4 bg-dark rounded border border-success h-100">
                        <h3>Server Info</h3>

                        <hr>

                        <p>
                            <strong>PHP Version:</strong><br>
                            <?php echo phpversion(); ?>
                        </p>

                        <p>
                            <strong>Server:</strong><br>
                            <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 bg-dark rounded border border-primary h-100">
                        <h3>Status</h3>

                        <hr>

                        <div class="alert alert-success">
                            Application Running Successfully
                        </div>

                        <p>
                            <strong>Time:</strong><br>
                            <?php echo $currentTime; ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 bg-dark rounded border border-warning h-100">
                        <h3>Quick Actions</h3>

                        <hr>

                        <button class="btn btn-success w-100 mb-2">
                            Dashboard
                        </button>

                        <button class="btn btn-primary w-100 mb-2">
                            Settings
                        </button>

                        <button class="btn btn-warning w-100">
                            Logs
                        </button>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center">
                <p class="text-secondary">
                    Developed with PHP & Bootstrap
                </p>
            </div>

        </div>
    </div>

</div>

</body>
</html>
