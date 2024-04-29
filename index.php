<?php
session_start();

// Include the database connection file
include("../include/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor's Dashboard</title>
    <!-- Include any necessary CSS files here -->
    <link rel="stylesheet" href="path/to/your/css/file.css">
</head>
<body>
    <?php
    // Include the header file
    include("../include/header.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="margin-left: -12px;">
                <?php
                // Include the sidebar file
                include("sidenav.php");
                ?>
            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <br>
                    <h5>Doctor's Dashboard</h5>

                    <div class="row">
                        <div class="col-md-3 my-2 mx-2" style="height: 150px; background-color: #3E3D53;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="text-white my-4">My Profile</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-2 mx-2" style="height: 150px; background-color: #594D5B;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php
                                        // Retrieve total appointment count
                                        $pat = mysqli_query($connect,"SELECT * FROM patient");
                                        $patient = mysqli_num_rows($pat);
                                        ?>

                                        <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $patient; ?></h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Patient</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="patient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-2 mx-2" style="height: 150px; background-color: #9897A9;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php
                                        // Retrieve total appointment count
                                        $app = mysqli_query($connect,"SELECT * FROM appointment WHERE status='Pendding'");
                                        $appoint = mysqli_num_rows($app);
                                        ?>

                                        <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $appoint; ?> </h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Appointment</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="appointment.php"><i class="fa fa-calendar fa-3x my-4" style="color: white;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include any necessary JS files here -->
    <script src="path/to/your/js/file.js"></script>
</body>
</html>
