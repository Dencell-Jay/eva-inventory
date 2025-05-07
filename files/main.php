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
    
</style>
</head>
<body class="d-flex">
    <!-- navbar -->
    <div id="sidebar" class="sidebar d-flex flex-column px-3 border-end position-relative min-vh-100">
        <i id="toggleButton" class="bi bi-chevron-double-left align-self-end position-absolute top-0 end-0 h4" role="button"></i>

        <img src="../images/cvsulogo.png" alt="CVSU LOGO" width="110" height="110" class="align-self-center mb-2 mt-4">
            <h5 class="text-success text-center">External &<br> Business<br> Affairs<br></h5>
            <div class="bg-black w-100 mt-2 mb-3 align-self-center" style="height: 2px;"></div>

            <a href="#" class="btn btn-warning w-100 text-start pe-5 mb-2">
                <i class="bi bi-grid-1x2-fill me-2"></i>Dashboard
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-people me-2"></i>Customer
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-cart2 me-2"></i>Orders
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-truck me-2"></i>Providers
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-bag me-2"></i>Sales
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-box-seam me-2"></i>Inventory
            </a>
        
            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-grid me-2"></i>Category
            </a>

            <a href="#" class="btn w-100 text-start pe-5 mb-2">
                <i class="bi bi-gear me-2"></i>Setting
            </a>
            
            <a href="#" class="btn w-100 text-start pe-5 mb-4 mt-auto">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
            </a>


    </div>
    
    <div class="flex-grow-1">

    </div>

    <script>
        document.getElementById("toggleButton").addEventListener("click", function(){
            
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>