<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

<style>
    .sidebar.collapse{
        width: 75px;
    }

    .sidebar {
        width: 15%;
        transition: width 0.3s;
    }
    
    .sidebar .cvsu-logo{
        display: block;
        width: 110px;
        height: 110px;
        transition: all 0.3s;
    }

    .sidebar.collapse .cvsu-logo {
        width: 40px;
        height: 40px;
    }

    .sidebar .btn span, .sidebar h5{
        transition: display 0.3s;
    }

    .sidebar.collapse .btn span, .sidebar.collapse h5 {
        display: none;
        pointer-events: none;
        height: 0;
        overflow: hidden;
    }

</style>
</head>
<body class="d-lg-flex bg-light">
    <!-- navbar -->
    <div id="sidebar" class="sidebar d-lg-flex flex-column px-3 border-end position-relative min-vh-100 d-none">
        <i id="toggleButton" class="bi bi-chevron-double-left align-self-end position-absolute top-0 end-0 h4" role="button"></i>

        <img src="../images/cvsulogo.png" alt="CVSU LOGO" class="align-self-center mb-2 mt-4 cvsu-logo">
            <h5 class="text-success text-center"><span>External &<br> Business<br> Affairs<br></span></h5>
            <div class="bg-black w-100 mt-2 mb-3 align-self-center" style="height: 2px;"></div>

            <a href="#" class="btn btn-warning w-100 text-start pe-4 mb-2 disabled opacity-100">
                <i class="bi bi-grid-1x2-fill me-2"></i><span>Dashboard</span>
            </a>

            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-briefcase me-2"></i><span>Staffs</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-bag me-2"></i><span>Sales</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-box-seam me-2"></i><span>Inventory</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-grid me-2"></i><span>Category</span>
            </a>

            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-gear me-2"></i><span>Settings</span>
            </a>
            
            <a href="../index.php" class="btn w-100 text-start pe-4 mb-4 mt-auto">
                <i class="bi bi-box-arrow-right me-2"></i><span>Logout</span>
            </a>

    </div>

    <!-- navbar for mobile -->
    <nav class="navbar bg-warning d-lg-none">
        <div class="container-fluid">
            <a href="#navbarmobile" data-bs-toggle="offcanvas"><i class="bi bi-list navbar-brand"></i></a>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarmobile">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">External & Business Affairs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a href="#" class="btn btn-warning w-100 text-start pe-4 mb-2 disabled opacity-100">
                <i class="bi bi-grid-1x2-fill me-2"></i><span>Dashboard</span>
            </a>

            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-briefcase me-2"></i><span>Staffs</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-bag me-2"></i><span>Sales</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-box-seam me-2"></i><span>Inventory</span>
            </a>
        
            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-grid me-2"></i><span>Category</span>
            </a>

            <a href="" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-gear me-2"></i><span>Settings</span>
            </a>
            
            <a href="../index.php" class="btn w-100 text-start pe-4">
                <i class="bi bi-box-arrow-right me-2"></i><span>Logout</span>
            </a>
        </div>
    </div>
    
    <!-- Content here -->
    <div class="flex-grow-1 mx-3 flex-lg-row flex-column">
        <div class="mt-3 mb-2 d-flex justify-content-between flex-column flex-lg-row">
            <h5 class="fw-normal">Dashboard <span class="text-secondary ms-1">/</span></h5>
            <div class="card rounded small bg-black text-white px-3 py-2 text-center"><span>May 8, 2025 | <b>1:44PM</b></span></div>
        </div>

        <h1 class="fw-bold">WELCOME <span class="text-success">ADMIN</span>!</h1>
        <h5 class="text-secondary">Truth • Excellence • Service</h5>
        <div class="d-flex justify-content-between flex-lg-row flex-column">
            <p>Daily Updates</p>
            <p class="text-secondary">Refresh Data: <i class="bi bi-arrow-repeat btn" role="button"></i></p>
        </div>
        
        <!-- Cards -->
        <div class="d-flex gap-3 flex-lg-row flex-column">
            <div class="card rounded px-5 pt-5 w-100 position-relative">
                <i class="bi bi-bag align-self-end position-absolute top-0 end-0 h5 mx-3 mt-2 p-1 bg-secondary-subtle rounded"></i> 
                <div class="text-center text-secondary">
                    <h3>₱ <span class="text-success">800</span><span class="h6">.00</span></h3>
                    <p>Total Daily sales</p>
                </div>
            </div>

            <div class="card rounded px-5 pt-5 w-100">
                <i class="bi bi-people align-self-end position-absolute top-0 end-0 h5 mx-3 mt-2 p-1 bg-secondary-subtle rounded"></i> 
                <div class="text-center text-secondary">
                    <h3 class="text-success">32</h3>
                    <p>Total Daily sales</p>
                </div>
            </div>


            <div class="card rounded px-5 pt-5 w-100">
                <i class="bi bi-cart align-self-end position-absolute top-0 end-0 h5 mx-3 mt-2 p-1 bg-secondary-subtle rounded"></i> 
                <div class="text-center text-secondary">
                    <h3 class="text-success">5</h3>
                    <p>Incoming Orders</p>
                </div>
            </div>


            <div class="card rounded px-5 pt-5 w-100">
                <i class="bi bi-box-seam align-self-end position-absolute top-0 end-0 h5 mx-3 mt-2 p-1 bg-secondary-subtle rounded"></i> 
                <div class="text-center text-secondary">
                    <h3 class="text-danger">32</h3>
                    <p>Product/s Low on Stock</p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Graph -->

    </div>

    <script>
        // Sidebar state saving
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("toggleButton");

        if (localStorage.getItem("sidebar") === "collapsed") {
            sidebar.classList.add("collapse");
            toggleBtn.classList.replace("bi-chevron-double-left", "bi-chevron-double-right");
        }

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapse");
            toggleBtn.classList.toggle("bi-chevron-double-left");
            toggleBtn.classList.toggle("bi-chevron-double-right");

            if (sidebar.classList.contains("collapse")) {
            localStorage.setItem("sidebar", "collapsed");
            } else {
            localStorage.removeItem("sidebar");
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <!-- Chartjs -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
</body>
</html>