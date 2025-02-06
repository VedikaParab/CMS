<?php
include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');
secure();

include('includes/header.php');
?>

<!-- Add Font Awesome CDN for icons (latest version 6.x.x) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Add Google Font (Roboto) -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

<style>
    body {
        /* background-color: #f8f9fa; */
        background: url('assets/images/cms_background.png') repeat;
        background-size: 50%;
        font-family: 'Roboto', sans-serif;
    }

    .display-4 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        text-decoration: none;
    }

    .card-body {
        flex-grow: 1;
        text-align: center;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 500;
        font-family:'Times New Roman', serif;
    }

    .btn-custom {
        background-color: #007bff;
        color: white;
        text-decoration: none;
    }

    .btn-custom:hover {
        background-color: #0056b3;
        color: white;
    }

    .card-text {
        display: none; /* Hide text initially */
        font-family:'Times New Roman', serif;
    }

    .card:hover .card-text {
        display: block; /* Show text on hover */
    }
    
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1 style="font-family:'Times New Roman', serif;" class="display-4 mb-4">Dashboard</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- First row with 3 cards -->
                <div class="col">
                    <a href="users.php" class="card text-decoration-none" aria-label="Manage Users">
                        <div class="card-body bg-primary text-white">
                            <img src="assets/images/user_management.png" class="card-img-top mb-3" alt="User Management Image" style="height: 75%; object-fit: cover;">
                            <h5 class="card-title"><i class="fas fa-users"></i> Users Management</h5>
                            <p class="card-text">Administer user accounts and assign roles</p>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="posts.php" class="card text-decoration-none" aria-label="Announcement Management">
                        <div class="card-body bg-success text-white">
                            <img src="assets/images/announcements.png" class="card-img-top mb-3" alt="Announcement Image" style="height: 75%; object-fit: cover;">
                            <h5 class="card-title"><i class="fas fa-bullhorn"></i> Announcement Management</h5>
                            <p class="card-text">Create and manage announcements</p>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="resources.php" class="card text-decoration-none" aria-label="Resources Management">
                        <div class="card-body bg-warning text-dark">
                            <img src="assets/images/resources.png" class="card-img-top mb-3" alt="Resources Image" style="height: 75%; object-fit: cover;">
                            <h5 class="card-title"><i class="fas fa-book"></i> Resources</h5>
                            <p class="card-text">Manage and share resources</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 g-4 mt-3">
                <!-- Second row with 2 cards -->
                <div class="col">
                    <a href="videos.php" class="card text-decoration-none" aria-label="Video Management">
                        <div class="card-body bg-danger text-white">
                            <h5 class="card-title"><i class="fas fa-video"></i> Videos</h5>
                            <p class="card-text">Upload and manage videos</p>
                        </div>
                    </a>
                </div>

                <!-- Attendance Card with Conditional Link -->
                <div class="col">
                    <?php if ($_SESSION['role'] == 'admin') { ?>
                        <a href="attendance.php" class="card text-decoration-none" aria-label="Attendance Management">
                            <div class="card-body bg-info text-white">
                                <h5 class="card-title"><i class="fas fa-calendar-check"></i> Attendance Management</h5>
                                <p class="card-text">Track and manage attendance</p>
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="view_attendance.php" class="card text-decoration-none" aria-label="View Attendance">
                            <div class="card-body bg-info text-white">
                                <h5 class="card-title"><i class="fas fa-calendar-check"></i> View Attendance</h5>
                                <p class="card-text">View your attendance records</p>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div class="row row-cols-1 g-4 mt-3">
                <!-- Third row with 1 full-width card (only for admin) -->
                <?php if ($_SESSION['role'] == 'admin') { ?>
                    <div class="col-12">
                        <a href="subject_file.php" class="card text-decoration-none" aria-label="Subject Files Management">
                            <div class="card-body bg-dark text-white">
                                <h5 class="card-title"><i class="fas fa-file-alt"></i> Subject Files</h5>
                                <p class="card-text">Manage subject-specific files</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
