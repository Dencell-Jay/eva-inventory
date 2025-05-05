<?php 
    include("files/connections.php");

    $username = $password = $error = "";

    $query = "SELECT password FROM Staff WHERE username = ?";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $error = "Username empty!";
        } else{
            $username = $_POST["username"];
        }

        if (empty($_POST["password"])) {
            $error = "Password empty!";
        } else {
            $password = $_POST["password"];
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVA Inventory</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

<style>
    body{
        background-image: url(images/background.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .blur-bg {
        background-color: rgba(255, 255, 255, 0.6); 
        backdrop-filter: blur(10px);
    }
    
    .separator{
        background-color: rgba(128, 128, 128, 0.5);
        width: 3px;
        height: 400px;
        margin-top: -1%;
    }
</style>
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center gap-5">
        <!-- Information Card -->
        <div class="card rounded shadow-lg p-5 blur-bg">
            <h2 class="text-success fw-bold">Important!</h2><br>
            <p><b>EBA Administrator Access Only.</b> <br>
                This area is specifically for EBA administrators. <br>
                Access is restricted to authorized users only. <br>
                If your not an EBA administrator, <br> 
                please leave this page. Thank you!
            </p>
        </div>
        
        <!-- Separator -->
        <div class="mx-2 separator"></div>

        <!-- Login part -->
        <div style="margin-top: -4%;">
            <!-- Title -->
            <div class="d-flex align-items-center gap-2"> 
                <img src="images/cvsulogo.png" alt="CVSU LOGO" width="110" height="110" style="top: -8px; position: relative;">
                <h1 class="text-success fw-bold ">External & Business <br> Affairs</h1>
            </div>

            <br>

            <!-- Greet & Error -->
            <h2 class="fw-bold">Hi, Welcome Back!</h2>
            <p class="text-secondary">Enter your admin credentials</p>

            <?php if (!empty($error)): ?>
                <div class="card rounded mb-3" id="errorMsg" style="background-color: rgba(210, 80, 80, 0.5);">
                    <p class="m-0 p-2"><?php echo $error?></p>
                </div>
            <?php endif; ?>

            <!-- Login system -->
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $username?>">
                </div>

                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $password?>">
                </div>

                <button type="submit" class="btn btn-warning w-100 fw-bold"><i class="bi bi-door-open-fill"></i> LOGIN</button>

            </form>
            <hr>
            
            <div class="text-center">
                <a href="#" class="text-decoration-none text-danger">Forgot Password</a>
            </div>
            
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
