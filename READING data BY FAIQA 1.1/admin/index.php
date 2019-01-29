<?php
session_start();
include ('functions/db_connect.php');
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap123.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <title>Students Website Admin Panel</title>
        <title>>Admin Panel</title>
    </head>
    <body>
        <div class="wrapper" style="background: #c6c8ca">
            <nav id="sidebar">
                <div class="sidebar-header" style="background: black"">
                    <h3 style="color: white">Admin Panel</h3>
                </div>
                <ul class="list-unstyled components" style="background: #c82333">
                    <li>
                        <a href="index.php?insert_class">
                            <i class="fas fa-plus-circle"></i> Insert New Class
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_class">
                            <i class="fas fa-eye"></i> View All Classes
                        </a>
                    </li>
                    <li>
                        <a href="index.php?insert_subjects">
                            <i class="fas fa-plus-circle"></i> Insert New Subject
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_subjects">
                            <i class="fas fa-book-open"></i> View All Subjects
                        </a>
                    </li>
                    <li>
                        <a href="index.php?insert_lectures">
                            <i class="fas fa-plus-circle"></i> Insert New Lecture
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_lectures">
                            <i class="fas fa-eye"></i> View All Lectures
                        </a>
                    </li>
                    <li>
                        <a href="index.php?insert_teachers">
                            <i class="fas fa-plus"></i><i class="fas fa-user"></i> Insert New Teacher
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_teachers">
                            <i class="fas fa-chalkboard-teacher"></i> View All Teachers
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="far fa-times-circle"></i> Logout Admin Account</a>
                    </li>
                    <li style="background: #c82333">
                    </li>
                    <li style="background: #c82333">
                    </li>
                    <li style="background: #c82333">
                    </li>
                    <li style="background: #c82333">
                    </li>
                    <li style="background: #c82333">
                    </li>
                </ul>
            </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button  type="button" id="sidebarCollapse" class="btn btn-info">
                            <i style="color: darkred" class="fas fa-angle-double-left"></i>
                        </button>
                    </div>
                </nav>
                <div class="container">
                    <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
                    <?php
                        if(isset($_GET['insert_class'])){
                            include ('insert_class.php');
                        }
                        else if(isset($_GET['view_class'])){
                            include ('view_class.php');
                        }
                        else if(isset($_GET['view_subjects'])){
                            include ('view_subjects.php');
                        }
                        else if(isset($_GET['insert_subjects'])){
                            include ('insert_subjects.php');
                        }
                        else if(isset($_GET['edit_subjects'])){
                            include ('edit_subjects.php');
                        }
                        else if(isset($_GET['del_subjects'])){
                            include ('del_subjects.php');
                        }
                        else if(isset($_GET['view_lectures'])) {
                            include('view_lectures.php');
                        }
                        else if(isset($_GET['insert_lectures'])) {
                            include('insert_lectures.php');
                        }
                        else if(isset($_GET['edit_lectures'])) {
                            include('edit_lectures.php');
                        }
                        else if(isset($_GET['del_lectures'])) {
                            include('del_lectures.php');
                        }
                        else if(isset($_GET['view_teachers'])){
                            include ('view_teachers.php');
                        }
                        else if(isset($_GET['insert_teachers'])){
                            include ('insert_teachers.php');
                        }
                        ?>
                </div>
            </div>
        </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });

            });
        </script>
    </body>
</html>