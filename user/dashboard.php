<?php
    include 'count_subject.php';
    include "../connection.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:http://localhost/exam_form/");
    }

?>
<!-- Student DASHBOARD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kajal Bormon">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css//fontawesome/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .label1 {
            color: black;
            font-weight: bold;
            width: 100%;
            color: darkred;
            font-size: 35px;
            font-family: 'Della Respira';
        }
        .hov a:hover {
            color: red;
        }
        body {
            background-color: #f3f5f9;
        }
        .wrapper {
            display: flex;
            margin-top: 3%;
            position: relative;
        }
        .wrapper .sidebar {
            width: 200px;
            height: 100%;
            background: #5a0533;
            padding: 30px 0px;
            border: 2px solid black;
            position: fixed;
            overflow-x: scroll;
            font-family: 'Acme';
            font-size: 18px;
            margin-bottom: 5%;
        }
        .wrapper .sidebar h2 {
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }
        .wrapper .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        .wrapper .sidebar img {
            border-radius: 50%;
            justify-content: center;
            margin-left: 15%;
            margin-top: auto;
            margin-bottom: 5%;
            ;
            border: 1px dashed #000000;
            background-color: white;
        }
        .wrapper .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .wrapper .sidebar ul li a .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background-color: #ad1457;
            text-decoration: none;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }

        .wrapper .main_content {
            width: 100%;
            margin-left: 2%;
            margin-bottom: 3%;
        }

        .wrapper .main_content .header {
            padding: 20px;
            font-size: 25px;
            background: #5a0533;
            border-bottom: 1px solid #e0e4e8;
            color: #fff;
            border: 2px solid black;
        }

        .wrapper .main_content .info {
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div {
            margin-bottom: 20px;
        }


        .wrapper .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
        }

        .dropdown-btn {
            padding-left: 0;
            text-decoration: none;
            color: #fff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }
        .dropdown-btn:hover {
            color: #f1f1f1;
        }
        .main {
            margin-left: 200px;
            font-size: 20px;
            padding: 0px 10px;
        }
        .active {
            background-color: #ad1457;
            color: white;
        }
        .dropdown-container {
            display: none;
            background-color: #5a0533;
            padding-left: 8px;
        }
        .fa-caret-down {
            float: right;
            padding-right: 8px;
            padding-top: auto;
        }
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
        .dropdown-btn .fas {
            width: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="position:fixed;top:0;left:0;padding:8px;border:none;background-color:#5a0533;border-bottom:1px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand text-white" style="font-family:'Acme';font-size:30px;color: white;padding-right: 750px;" href="#">Welcome, <?php echo $_SESSION['username']; ?> </a>

            </div>
            <ul class="nav navbar-nav navbar-right collapsed text-white" id="navbar">
                <li>
                    <a class="mnav11" style="color:white;font-family:'Acme';font-size:25px;" href="../logout.php?logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
    </nav>

    <div class="wrapper">
        <div class="sidebar col -l2 -s4">
            <ul>
                <div>
                    <img src="../css/images/person.jpg" width="100" height="100" alt="not found" />
                </div>
                <li><a href="dashboard.php"><i class="fas fa-clipboard"></i>Dashboard</a></li>
                <li><a href="dashboard.php?page=update_profile"><i class="fas fa-user-edit"></i> Update Profile</a></li>
                <li><a href="dashboard.php?page=register"><i class="fas fa-pen"></i>Register For Exam</a></li>
                <li><a href="dashboard.php?page=subjects_reg"><i class="far fa-file"></i> Registered Subjects</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-2 main">
            <?php
                @$page = $_GET['page'];
                if($page!=""){
                    if($page=='register'){
                        include 'register.php';
                    }
                    if($page=="update_profile"){
                        include 'update_profile.php';
                    }
                    if($page=='subjects_reg'){
                        include 'subjects_reg.php';
                    }
                    //View Subjects for students
                    if($page=="disp_s1"){
                        include 'sub_view/1st_sem.php';
                    }
                    if($page=="disp_s2"){
                        include 'sub_view/2nd_sem.php';
                    }
                    if($page=="disp_s3"){
                        include 'sub_view/3rd_sem.php';
                    }
                    if($page=="disp_s4"){
                        include 'sub_view/4th_sem.php';
                    }
                    if($page=="disp_s5"){
                        include 'sub_view/5th_sem.php';
                    }
                    if($page=="disp_s6"){
                        include 'sub_view/6th_sem.php';
                    }
                    if($page=="disp_s7"){
                        include 'sub_view/7th_sem.php';
                    }
                    if($page=="disp_s8"){
                        include 'sub_view/8th_sem.php';
                    }
                   
                }else{
            ?>
            <!-- Main Content For Dashboard -->
            <div class="main_content">
                <div>
                    <h1 class="page-header label1" style="font-family: 'Bree serif', serif;">Dashboard</h1>
                    <section class="section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <a class="dashboard-stat11" href="dashboard.php?page=disp_s1">
                                        <span class="number"><?php echo $count_first_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 1th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat" href="dashboard.php?page=disp_s2">
                                        <span class="number"><?php echo $count_second_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 2nd sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat11" href="dashboard.php?page=disp_s3">
                                        <span class="number"><?php echo $count_third_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 3rd sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat" href="dashboard.php?page=disp_s4">
                                        <span class="number"><?php echo $count_fourth_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 4th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->



                            </div>
                            <!-- /.row -->
                            <div class="row" style="margin-top:3%;">

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat" href="dashboard.php?page=disp_s5">
                                        <span class="number"><?php echo $count_fifth_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 5th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat11" href="dashboard.php?page=disp_s6">
                                        <span class="number"><?php echo $count_six_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 6th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                    <a class="dashboard-stat" href="dashboard.php?page=disp_s7">
                                        <span class="number"><?php echo $count_seven_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 7th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat11" href="dashboard.php?page=disp_s8">
                                        <span class="number"><?php echo $count_eight_sem; ?></span>
                                        <span class="name">Subjects Listed<br />For 8th sem</span>
                                        <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                            </div>

                            <!-- /.container-fluid -->

                            <div class="row" style="margin-top:3%;">

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat1" href="">
                                        <span class="number counter">3</span>
                                        <span class="name">Students Registered<br />For Improvement</span>
                                        <span class="bg-icon"><i class="fa fa-users"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            <!-- container-->
              <!-- Scripting -->
      <script src="../js/jquery_library.js"></script>
      <script src="../js/bootstrap.min.js"></script>
</body>
</html>