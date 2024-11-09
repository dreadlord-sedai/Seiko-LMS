<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="col-md-3 col-lg-2">
            <h3 class="text-white m-2">Student Name</h3>
            <ul class="nav flex-column">
                <li><a href="#" onclick="showSection('dashboard')"><i class="fas me-2"></i>Dashboard</a></li>
                <li><a href="#" onclick="showSection('profile')"><i class="fas me-2"></i>Profile</a></li>
                <li><a href="#" onclick="showSection('payments')"><i class="fas me-2"></i>Payments</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-3 main-content"> <!-- Added 'main-content' class here -->
            <div class="container-fluid">
                <!-- Header with Toggle Button for Sidebar -->
                <div class="d-flex align-items-center mb-3">
                    <button id="sidebarToggle" class="btn btn-light d-lg-none me-2"><i class="fas fa-bars"></i></button>
                    <h3 class="ms-4">Welcome to SEIKO</h3>
                </div>

                <!-- Header Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Header Card</h5>
                        <p class="card-text">This header card is present on all pages. You can include any important information here.</p>
                    </div>
                </div>

                <!-- Dashboard Section -->
                <div id="dashboard">
                    <h4>Dashboard</h4>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Class 1</h5>
                                    <p class="card-text">Details for Class 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Class 2</h5>
                                    <p class="card-text">Details for Class 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Class 3</h5>
                                    <p class="card-text">Details for Class 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Section -->
                <div id="profile" class="d-none">
                    <h4>Profile</h4>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Header Card</h5>
                            <p class="card-text">This header card is present on all pages. You can include any important information here.</p>
                        </div>
                    </div>
                    <p>This is your profile section.</p>
                </div>

                <!-- Payments Section -->
                <div id="payments" class="d-none">
                    <h4>Payments</h4>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Header Card</h5>
                            <p class="card-text">This header card is present on all pages. You can include any important information here.</p>
                        </div>
                    </div>
                    <p>This is your payments section.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
