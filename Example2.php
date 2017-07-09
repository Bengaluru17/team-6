<?php
include('connect.inc.php');

$query="Select * from bankform ";
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
            </div>
         </div>
         <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <?php
              $i=0;
              while ($row=mysqli_fetch_row($result))
                  {
                    $i=$i+1;
                    echo "<h3>Input Set-".$i ."</h3>";
                    echo "<table class='table-striped'>";
                    echo "<tr>
                    <td>Applicant name-</td>
                      <td>".$row[0]."</td>
                        </tr>
                        <tr>
                      <td>Account no.</td>
                        <td>".$row[1]."</td>
                          </tr>
                          <tr>
                      <td>Account Type</td>
                          <td>".$row[2]."</td>
                            </tr>
                            <tr>
                      <td>Proof</td>
                            <td>".$row[3]."</td>
                              </tr>
                              <tr>
                       <td>Gender</td>
                              <td>".$row[4]."</td>
                                </tr>
                                <tr>
                       <td>Mobile number</td>
                                <td>".$row[5]."</td>
                                  </tr>
                                  <tr>
                                    </table> <br><br><br>";
                  }
              ?>
            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form action="check2.php" method="post">
                  <div class="form-group">
                    <label for="applicant">Name of the applicant</label>
                    <input type="text" class="form-control" name="name" placeholder="Applicant name">
                  </div>
                  <div class="form-group">
                    <label for="Accno">Account number</label>
                    <input type="text" class="form-control" name="account" placeholder="Account number">
                  </div>
                  <div class="form-group">
                    <label for="Acctype">Account type</label>
                    <input type="text" class="form-control" name="type" placeholder="Account type">
                  </div>
                  <div class="form-group">
                    <label for="Proof">Proof</label><br>
                    <label class="checkbox-inline"><input type="checkbox" id="doc" name="doc[]" value="Pancard">Pan Card</label>
                    <label class="checkbox-inline"><input type="checkbox" id="doc" name="doc[]" value="female">Adhar Card</label>
                    <label class="checkbox-inline"><input type="checkbox" id="doc" name="doc[]" value="others">Passport</label>
                  </div>
                  <div class="form-group">
                    <label for="Gender">Gender</label>
                    <div class="radio"><label><input type="radio" name="gender">Male</label></div>
                    <div class="radio"><label><input type="radio" name="gender">Female</label></div>
                    <div class="radio"><label><input type="radio" name="gender">Others</label></div>
                  </div>
                  <div class="form-group">
                    <label for="Phone">Phone number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone number">
                  </div>
                  <input type="submit" value="submit"></input>
                </form>
            </div>
          </div>
         </div>
        </div>
    </body>
</html>
