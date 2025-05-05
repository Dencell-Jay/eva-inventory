<?php 
    include("connections.php");

    $username = $password = $error = "";

    $query = "INSERT INTO Staff(username, password) VALUES(?,?)";

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
    <title>Create Account</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

</head>
<style>
    body{
        background-image: url(../images/background.png);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card rounded p-3">
            <!-- Title -->
            <div class="d-flex align-items-center gap-2"> 
                <img src="../images/cvsulogo.png" alt="CVSU LOGO" width="110" height="110" style="top: -8px; position: relative;">
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $username?>">
                </div>

                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $password?>">
                </div>

                <button type="submit" class="btn btn-warning w-100 fw-bold"><i class="bi bi-door-open-fill"></i> CREATE ACC</button>

            </form>

            <?php 
                if ($username && $password) {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
                    $insertTable = mysqli_prepare($connections, $query);
                    mysqli_stmt_bind_param($insertTable, "ss", $username, $hashed_password);
            
                    if (mysqli_stmt_execute($insertTable)) {
                        echo "<script language='javascript'>alert('INSERTED SUCCESSFULLY!');</script>";
                        echo "<script>window.location.href='../index.php';</script>";
                        exit();
                    } else {
                        $error = "Error: " . mysqli_error($connections);
                    }
                    
                    mysqli_stmt_close($insertTable);
                }
            ?>
            
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>