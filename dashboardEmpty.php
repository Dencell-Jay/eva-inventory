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

    @media (min-width: 992px) {
        .sidebar {
            position: fixed !important;
            z-index: 99999;
        }
    
        #main-content{
            margin-left: 16% !important;
            transition: margin-left 0.4s !important;
        }
    
        #main-content.collapsed{
            margin-left: 90px !important;
            transition: margin-left 0.4s !important;
        }
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

    /* inventory Summary solution  */
    @media (min-width: 576px) { 
        #summary {
            width: 100% !important;
        }
    }

    @media (min-width: 768px) {
        #summary {
            width: 100% !important;
        }
    }

    @media (min-width: 992px) { 
        #summary {
            width: 50% !important;
        }
    }

</style>
</head>
<body class="d-lg-flex bg-light">
    <!-- navbar -->
    <div id="sidebar" class="sidebar d-lg-flex flex-column px-3 border-end position-relative min-vh-100 d-none">
        <i id="toggleButton" class="bi bi-chevron-double-left align-self-end position-absolute top-0 end-0 h4" role="button"></i>

        <img src="../images/cvsulogo.png" alt="CVSU LOGO" class="align-self-center mb-2 mt-4 cvsu-logo">
            <h5 class="text-center" style="color: #114011;"><span>External &<br> Business<br> Affairs<br></span></h5>
            <div class="bg-black w-100 mt-2 mb-3 align-self-center" style="height: 2px;"></div>

            <a href="#" class="btn btn-warning w-100 text-start pe-4 mb-2 disabled opacity-100" style="color: #1B651B;">
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

    <div class="offcanvas offcanvas-start position-fixed" tabindex="-1" id="navbarmobile">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">External & Business Affairs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a href="#" class="btn btn-warning w-100 text-start pe-4 mb-2 disabled opacity-100" style="color: #1B651B;">
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
        </div>

        <div class="offcanvas-bottom mx-3 mb-2">
            <a href="../index.php" class="btn w-100 text-start pe-4">
                <i class="bi bi-box-arrow-right me-2"></i><span>Logout</span>
            </a>
        </div>

    </div>
    
    <!-- Content here -->
    <div id="main-content" class="flex-grow-1 mx-3 mb-5 flex-lg-row flex-column">
        <div class="mt-3 mb-2 d-flex justify-content-between">
            <h5 class="fw-normal">Dashboard <span class="text-secondary ms-1">/</span></h5>
        </div>
        
    </div>

    <script>
        // Sidebar state saving
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("toggleButton");
        const main_content = document.getElementById("main-content");

        if (localStorage.getItem("sidebar") === "collapsed") {
            sidebar.classList.add("collapse");
            main_content.classList.add("collapsed");
            toggleBtn.classList.replace("bi-chevron-double-left", "bi-chevron-double-right");
        }

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapse");
            main_content.classList.toggle("collapsed");
            
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