<?php
include('connect.inc.php');

$query="Select * from schoolform ";
$result=mysqli_query($conn,$query);
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMOGH</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css">
    </head>
    <body style="background-color: #e1f5fe";>
        <h1></h1>
        <div class="container">
          <div class="jumbotron">
            <div class="center">
              <p>Practice it</p>
            </div>
         </div>
         <div class="row">
            <div class="box">
            <?php
            echo "<table class='table-striped' style='border:2px solid black'>
            <tr>
            <th>    FID</th>
            <th>     School</th>
            <th>     Name</th>
            <th>     Class</th>
            <th>     Section</th>
            <th>     BloodGroup</th>
            <th>     Father</th>
            <th>     City</th>
            </tr>  </table>";
            while ($row=mysqli_fetch_row($result))
                {
                  echo "";
                    // <tr>
                    // // <th>Firstname</th>
                    // // <th>Lastname</th>
                    // // <th>Age</th>
                    // </tr>


echo " <table style='border:2px solid black'>
<tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
    <td>$row[7]</td>
  </tr>
<br/>

                    </table>";
                }
            ?>
            </div>
          </div>
        </div>
        <br>
        <div class="container">
              <div class="box">
                <form action="check.php" method="post">
                  <div class="form-group">
                    <label for="fid">FID</label>
                    <input type="text" class="form-control" name="fid" placeholder="Fid">
                  </div>
                  <div class="form-group">
                    <label for="School">Name of School</label>
                    <input type="text" class="form-control" name="school" placeholder="Name of school">
                  </div>
                  <div class="form-group">
                    <label for="Student">Name of student</label>
                    <input type="text" class="form-control" name="student" placeholder="Name of Student">
                  </div>
                  <div class="form-group">
                    <label for="Class">Class</label>
                    <input type="text" class="form-control" name="class" placeholder="Class">
                  </div>
                  <div class="form-group">
                    <label for="Section">Section</label>
                    <input type="text" class="form-control" Name="section" placeholder="Section">
                  </div>
                  <div class="form-group">
                    <label for="Blood group">Blood group</label>
                    <input type="text" class="form-control" name="blood" placeholder="Blood group">
                  </div>
                  <div class="form-group">
                    <label for="Father's name">Father's Name</label>
                    <input type="text" class="form-control" name="father" placeholder="Name of Student">
                  </div>
                  <div class="form-group">
                    <label for="Address">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Address">
                  </div>
                  <input type="submit" value="submit"></input>
                </form>
            </div>
          </div>
         </div>
        </div>
    </body>
</html>
