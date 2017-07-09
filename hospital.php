<?php
include('connect.inc.php');

$query="Select * from hospitalform ";
$result=mysqli_query($conn,$query);
// $row=mysqli_fetch_row($result);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMOGH</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1></h1>
        <div class="container">
          <div class="jumbotron">
            <div class="center">
              <p>Practice another?</p><br>
                <h3>TRY THE HOSPITAL DATABASE!</h3>
            </div>
         </div>
         <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <?php

              while ($row=mysqli_fetch_row($result))
                  {
                    echo "<h3>Input Set-".$row[0] ."</h3>";
                    echo "<table class='table-striped'>";
                      // <tr>
                      // // <th>Firstname</th>
                      // // <th>Lastname</th>
                      // // <th>Age</th>
                      // </tr>
                      echo "<tr>
                       <td>Patient Id:</td>
                      <td>".$row[0]."</td>
                        </tr>
                        <tr>
                         <td>Patient name:</td>
                        <td>".$row[1]."</td>
                          </tr>
                          <tr>
                           <td>Doctor name:</td>
                          <td>".$row[2]."</td>
                            </tr>
                            <tr>
                             <td>Disease</td>
                            <td>".$row[3]."</td>
                              </tr>
                              <tr>
                               <td>Room</td>
                              <td>".$row[4]."</td>
                                </tr>
                                <tr>
                                 <td>Age</td>
                                <td>".$row[5]."</td>
                                  </tr>
                                  <tr>
                                   <td>Gender</td>
                                  <td>".$row[6]."</td>
                                    </tr>
                                    <tr>
                      </table> <br><br><br>";
                  }
              ?>
            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form action="check3.php" method="post">
                  <div class="form-group">
                    <label for="Patientid">Patient ID</label>
                    <input type="text" class="form-control" name="patientid" placeholder="Patient id">
                  </div>
                  <div class="form-group">
                    <label for="Patient">Patient name</label>
                    <input type="text" class="form-control" name="name" placeholder="Patient name">
                  </div>
                  <div class="form-group">
                    <label for="doc">Doctor name</label>
                    <input type="text" class="form-control" name="doctor" placeholder="Doctor name">
                  </div>
				  <div class="form-group">
                    <label for="docid">Disease</label>
                    <input type="text" class="form-control" name="disease" placeholder="patient Disease">
                  </div>
				  <div class="form-group">
                    <label for="room">Room</label>
                    <input type="text" class="form-control" name="room" placeholder="room">
                  </div>
				   <div class="form-group">
                    <label for="Age">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="age">
                  </div>
            <div class="form-group">
                           <label for="Gender">Gender</label>
                           <input type="text" class="form-control" name="gender" placeholder="Gender">
              </div>

                  <input type="submit" value="submit"></input>
                </form>
            </div>
          </div>
         </div>
        </div>
    </body>
</html>
