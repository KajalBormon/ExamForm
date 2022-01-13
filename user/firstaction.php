<?php
    require_once('../connection.php');
    $query1 = "SELECT * FROM registration";
    $result = mysqli_query($conn,$query1);
    $sql_row=mysqli_num_rows($result);
    if(!$sql_row){
        echo "<h2 style='color:red;color:#ff0000;font-family:Acme;position:relative;top:35px;left:30%;''>No Students Have Registered For Exams Yet.</h2>";
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <script>
        function DeleteUser(id){
            if(confirm("Are You Sure..? You Want To Delete this User...?"))
            {
                window.location.href="delete_user.php?id="+id;
            }
        }
    </script>
    <style type = "text/css">
        .mcon{
            font-family:'Acme';
        }
        .mtab{
            font-family:'Acme';
            margin-top: 0%;
        }

        .mybtn{
            background-color: rgba(127,0,128,0.2);
            border: 2px solid black;
            border-radius: 5px;
            color: black;
        }

        .mybtn:hover{
            width: 15%;
            background-color: rgba(0,128,128,0.9);
            cursor: pointer;
            border:3px solid black;
            color: white;
        }
        .font_size{
            text-transform: capitalize;
        }
        table th{
            text-align: center;
        }
        </style>
    </head>
<body>
    <img id="head" width="150px" style = "font-family:'PT Serif';" left:10 align='left' src = "../css/images/logo.png">
    <br /><br /><br /><br /><br /><br />
    <h2 style="color:#ff0000;font-family:'Acme';" class = "page-header"><u>Students Registered For Semester Examination :</u></h2>
    
    <div class = "col-lg-12 mcon text-center">
        <table id="mytab1" width = "100%" class="mtab table table-bordered table-hover table-responsive" style = "margin-top:0;">
    	    <tr align = 'center' class = "text-center" style = "background-color:rgba(0,128,128,0.3);color:black;font-size:25px;text-align:center;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>SL.No</th>
                <th style='border:2px solid black'>Name</th>
                <th style='border:2px solid black'>Username</th>
                <th style='border:2px solid black'>Batch</th>
                <th style='border:2px solid black'>Mail - Id</th>
                <th style='border:2px solid black'>Phone</th>
                <th style='border:2px solid black'>Delete</th>
		    </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)){ ?>
                <tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;       border-top:2px solid black;border-left:2px solid black;'>
                    <td style='border:2px solid black' align = 'center'><?php echo $i; ?></td>
                    <td class="font_size" style='border:2px solid black' align = 'center'><?php echo $row['fname'].' '.$row['lname']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['username']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['continue_batch']; ?></td> 
                    <td style='border:2px solid black' align = 'center'><?php echo $row['mail']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['phone']; ?></td>
          
                
                    <td align = 'center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class = "fa fa-trash"></i></a> </td>
           
                </tr>
               <?php
                $i++;
                
                    }
                }
            ?>  
        </table>
        <button id = "mbtn-a" class = "mybtn" style = "padding:5px;font-size:20px;">Create Excel</button>
        <a href="dashboard.php?page=register"><i class="fas fa-pen"></i>Register For Exam</a>
    </div>
</body>
</html>