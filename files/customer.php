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
<body class="d-flex bg-light">
    <!-- navbar -->
    <div id="sidebar" class="sidebar d-flex flex-column px-3 border-end position-relative min-vh-100">
        <i id="toggleButton" class="bi bi-chevron-double-left align-self-end position-absolute top-0 end-0 h4" role="button"></i>

        <img src="../images/cvsulogo.png" alt="CVSU LOGO" class="align-self-center mb-2 mt-4 cvsu-logo">
            <h5 class="text-success text-center"><span>External &<br> Business<br> Affairs<br></span></h5>
            <div class="bg-black w-100 mt-2 mb-3 align-self-center" style="height: 2px;"></div>

            <a href="dashboard.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-grid-1x2 me-2"></i><span>Dashboard</span>
            </a>
        
            <a href="#" class="btn w-100 text-start pe-4 mb-2 disabled opacity-100 btn-warning">
                <i class="bi bi-people-fill me-2"></i><span>Customer</span>
            </a>
        
            <a href="orders.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-cart2 me-2"></i><span>Orders</span>
            </a>
        
            <a href="providers.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-truck-flatbed me-2"></i><span>Providers</span>
            </a>
        
            <a href="sales.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-bag me-2"></i><span>Sales</span>
            </a>
        
            <a href="inventory.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-box-seam me-2"></i><span>Inventory</span>
            </a>
        
            <a href="category.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-grid me-2"></i><span>Category</span>
            </a>

            <a href="settings.php" class="btn w-100 text-start pe-4 mb-2">
                <i class="bi bi-gear me-2"></i><span>Settings</span>
            </a>
            
            <a href="../index.php" class="btn w-100 text-start pe-4 mb-4 mt-auto">
                <i class="bi bi-box-arrow-right me-2"></i><span>Logout</span>
            </a>

    </div>
    
    <!-- Content here -->
    <div class="flex-grow-1 mx-3">
        <h5 class="fw-normal mt-3">Customer <span class="text-secondary ms-1">/</span></h5>        

        <br>

        <!-- Cards -->
        <div class="d-flex gap-3">
            <div class="card rounded px-5 pb-3 pt-2 w-50 position-relative">
                <h6 class="position-absolute top-0 start-0 mx-3 mt-2 fw-bold">Total Customers</h6>
                <i class="bi bi-people align-self-end position-absolute top-0 end-0 h5 mx-3 mt-2 p-1 bg-secondary-subtle rounded"></i> 
                <h1 class="text-success text-center mt-4 pt-3">1280</h1>
                
                <div class="position-absolute bottom-0 start-0 w-100 bg-success" style="height: 8px; border-bottom-left-radius: 0.5rem; border-bottom-right-radius: 0.5rem;"></div>
            </div>

            <div class="card rounded px-5 pt-5 w-100"> 
                <h6 class="position-absolute top-0 start-0 mx-3 mt-2 fw-bold">Customer Summary</h6>
                <div class="d-flex justify-content-between gap-3">
                    <div class="text-center text-secondary">
                        <h3 class="text-black">32</h3>
                        <p>Students</p>
                    </div>
                    <div class="vr h-75" style="width: 2px;"></div>

                    <div class="text-center text-secondary">
                        <h3 class="text-black">32</h3>
                        <p>Faculty</p>
                    </div>

                    <div class="vr h-75" style="width: 2px;"></div>

                    <div class="text-center text-secondary">
                        <h3 class="text-black">70</h3>
                        <p>Others</p>
                    </div>
                </div>
            </div>


            <div class="card rounded px-5 pt-5 w-50 bg-success bg-gradient">
                <div class="text-center text-white">
                    <h3 class="">320</h3>
                    <p>Monthly New Customers</p>
                </div>
            </div>

        </div>

    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("toggleButton");

        // Load collapse state
        if (localStorage.getItem("sidebar") === "collapsed") {
            sidebar.classList.add("collapse");
            toggleBtn.classList.replace("bi-chevron-double-left", "bi-chevron-double-right");
        }

        // Toggle and save state
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
</body>
</html>