
<?php
include('connect.inc.php');

$query="Select * from schoolform ";
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
    <body style="background-color: #e1f5fe";>
        <h1></h1>
        <div class="container">
          <div class="jumbotron">
            <div class="center">
              <p>Congrats! You came to the next page </p>
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

                    echo "<tr>
                     <td>FID</td>
                    <td>".$row[0]."</td>
                      </tr>
                      <tr>
                       <td>School</td>
                      <td>".$row[1]."</td>
                        </tr>
                        <tr>
                         <td>Name</td>
                        <td>".$row[2]."</td>
                          </tr>
                          <tr>
                           <td>Class</td>
                          <td>".$row[3]."</td>
                            </tr>
                            <tr>
                             <td>Section</td>
                            <td>".$row[4]."</td>
                              </tr>
                             <tr>
                               <td>BloodGroup&nbsp</td>
                              <td>".$row[5]."</td>
                                </tr>
                                <tr>
                                 <td>Father</td>
                                <td>".$row[6]."</td>
                                  </tr>
                                  <tr>
                                   <td>City</td>
                                  <td>".$row[7]."</td>
                                    </tr>
                    </table> <br><br><br>";
                }
            ?>
            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form action="check5.php" method="post">
                <!--  <div class="form-group">
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
                  </div> -->
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

				              <button class="btn btn-default btn-lg"> Submit  </button>

                </form>
            </div>
          </div>
         </div>
        </div>
        <?php
        ?>
    </body>
</html>
