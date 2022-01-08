<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
  <style type="text/css">
    .mylink a:hover {
      text-decoration: none;
      color: white;
    }
    .forms {
      width: fit-content;
      height: fit-content;
      margin-left: auto;
      margin-right: auto;
      display: block;
      box-shadow: -2px -2px 9px rgba(0, 0, 0, 0.5),
        5px 5px 9px rgba(0, 0, 0, 0.5);
      padding: 0;
      border: 1px solid silver;
      border-radius: 3px;
      background-color: rgb(82, 66, 85, 0.2);
      justify-content: flex-start;
    }

    .myform {
      padding: 20px;
      border-radius: 8px;

    }
    table th {
      text-align: center;
      padding: 8px;
      color: rgb(4, 71, 32);
      font-family: 'Bitter';
      text-transform: capitalize;
      text-shadow: rgb(240, 240, 12);
      font-size: 26px;
    }
    table td:nth-child(1){
      text-align: left;
      padding: 5px;
      font-size: 22px;
      color: black;
      font-family: 'Bitter';
    }
    table td{
      text-align: center;
      padding: 5px;
      font-size: 22px;
      color: black;
      font-family: 'Bitter';
    }

    .myh1 {
      text-align: center;
      font-size: 30px;
      text-decoration: none;
      padding-bottom: 15px;
      text-shadow: rgba(0, 0, 0, 0.1);
      font-family: 'PT Serif';
      font-weight: bold;
    }

    .geekmark {
      height: 20px;
      width: 20px;
      background-color: green;
    }

    body {
      background-color: whitesmoke;
    }
  </style>
  <title>CSE | 1st Sem</title>
</head>

<body>
  <h1 class="myh1">1st Year 1st Semester Computer Science & Engineering Subjects</h1>
  <div class="forms">

    <form class="myform" method="POST" action="firstaction.php">
      <table width="100%">
        <tr>
          <th>Select</th>
          <th> Subject name</th>
          <th> Subject Code</th>
          <th> Credits </th>
        </tr>
        <?php
          include '../connection.php';
          $select = "SELECT * FROM add_s1";
          $sql = mysqli_query($conn,$select);
          if(mysqli_num_rows($sql)>0){
            while ($row = mysqli_fetch_array($sql)){
        ?>
          <tr style='color:black;font-size:18px;'>
            <td><input type='checkbox' class='geekmark' value=""/></td>
            <td><?php echo $row['sub_name'];?></td>
            <td align = 'center'><?php echo $row['sub_code'];?> </td>
            <td align = 'center'><?php echo $row['credit']; ?></td>
          </tr>
         <?php 
         } 
        } 
        ?>
        <tr>
        
          <td colspan="2"> <input class="btn login_btn" type="submit" name="Submit" value="Submit" /> </td>
          <td colspan="2"> <input class="btn reset_btn" type="reset" value="Reset"></td>
        </tr>
      </table>
    </form>

  </div>
</body>

</html>