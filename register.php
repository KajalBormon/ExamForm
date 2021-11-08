<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Students</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Md Yaseen Ahmed">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/reg_styles.css">
    <style type="text/css">
        .mh3:hover {
            color: rgb(197, 191, 191);       
        }
        .mnav ul li a:hover {
            color: whitesmoke;
      
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar mnav navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533;padding:20px;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container" style="font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
            <a style="margin-left:0%;padding-left:0px" class="navbar-brand" href="https://jkkniu.edu.bd/">
                <h3 class="mh3">JKKNIU</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registration
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-key" aria-hidden="true"></i> Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="help.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Form-->
    <div class=" mcontainer">
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Registration</h1>
            <?php echo @$err; ?>
            <hr class="mhr" color="black" height="15px" />
            <table width="100%">
                <tr>
                    <td>
                        <label class="label required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label">Gender</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="radio" name="gen" value="M" />&nbsp;&nbsp;&nbsp;&nbsp;Male
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gen" value="F" />&nbsp;&nbsp;&nbsp;&nbsp;Female
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Username</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="username" autocomplete="off" placeholder="Username" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.csejkkniu@gmail.com" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <select name="dept" class="select1" autocomplete="off" placeholder="computer science" required>
                            <option name="s1" selected> Computer Science & Engineering</option>
                            <option name="s2"> Environmental Science and Engineering</option>
                            <option name="s3"> Electrical and Electronic Engineering </option>
                            <option name="s4"> Statistics </option>
                  
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Semester</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <select name="sem" autocomplete="off" class="select12" placeholder="" required>
                            <option name="s1"> 1 </option>
                            <option name="s2"> 2 </option>
                            <option name="s3"> 3 </option>
                            <option name="s4"> 4 </option>
                            <option name="s5"> 5 </option>
                            <option name="s6"> 6 </option>
                            <option name="s7"> 7 </option>
                            <option name="s8"> 8 </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="9998887776" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Upload Your Image</label>

                    </td>
                    <td> </td>
                    <td><input class="form-control" type="file" name="img" id="img" /></td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Password</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1" class="label required">
                        <input type="password" name="psswd" id="pass1" placeholder="Password" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Register" class="login_btn" value="Submit" />
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="reset" onClick="window.location.href=window.location.href" class="reset_btn" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Scripting -->
    <script src="js/jquery_library.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>