<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>
    <div class=" mcontainer">
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Update Your Profile</h1>
            <hr>
            <table width="100%">
                <tr>
                    <td>
                        <label class="required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required value="" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Username</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="USN" autocomplete="off" placeholder="Username" readonly value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.cse19@gmail.com" readonly value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="01722222222" value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="dept" readonly value="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Semester</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="sem" value="" readonly />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Update" class="login_btn" value="Update" />
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

</body>

</html>