<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMOGH</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css">
        <script language="JavaScript" type="text/JavaScript">


    function ischar()

    {
    a=event.keyCode
    if(a>=65 && a<=90||a>=97 && a<=122||a==8||a==32||a==44||a==46||a==45){}
    else

    {	event.keyCode=0;
    	alert("Enter only the characters");
    }
    }

    function isnumber()

    {
    a=event.keyCode
    if(a>=48 && a<=57){}

    else

    {
    	event.keyCode=0;
    	alert("Enter only the Numbers");
    }

    }

    function check()

    {
         if(document.f1.T1.value=="")
    {
         alert("Item name cannot be empty");
         document.f1.T1.focus();
          return false;
    }
    else  if(document.f1.T2.value=="")
    {
         alert("Item No cannot be empty");
         document.f1.T2.focus();
          return false;
    }
    else  if(document.f1.T3.value=="")
    {
         alert("Purchased field cannot be empty");
         document.f1.T3.focus();
          return false;
    }
    else  if(document.f1.T4.value=="")
    {
         alert("Date cannot be empty");
         document.f1.T4.focus();
          return false;
    }
    else  if(document.f1.T5.value=="")
    {
         alert("Invoice No cannot be empty");
         document.f1.T5.focus();
          return false;
    }
    else  if(document.f1.T6.value=="")
    {
         alert(" Lab selection cannot be empty");
         document.f1.T6.focus();
          return false;
    }
    else
    {
    document.f1.submit();

    }
    }
    </script>
    </head>
    <body>
        <h1></h1>
        <div class="container">
          <div class="jumbotron">
            <div class="center">
              <p>Practice it</p>
            </div>
         </div>
         <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <p>Name of school:Delhi public school</p>
              <p>Name of student:Rihav kumar</p>
              <p>class:3 section:b</p>
              <p>Blood group: O+ve</p>
              <p>Fathers name:Rajiv sharma</p>
              <p>Address:#621,21st cross,kumarswamylayout,bangalore 560078.</p>
            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form name="f1" method="POST" action="" >

            	      <table  class='table table-hover'  cellpadding="3" cellspacing="3" style="border-collapse: collapse"  width="40%" id="AutoNumber1">
                  <tr class='active'>
            	   <td width="70%"><font size="4">First Name</td></font>
                    <td width="30%"><font size="4"><input type="text" name="T1" size="20"onKeyPress="isnumber()"></font></td>
            		</tr>

            		 <tr class='active'>
            	   <td width="70%"><font size="4">Last Name</td></font>
                    <td width="30%"><font size="4"><input type="text" name="T2" size="20"onKeyPress="isnumber()"></font></td>
            		</tr>

            		 <tr class='active'>
            	   <td width="70%"><font size="4">Age</td></font>
                    <td width="30%"><font size="4"><input type="text" name="T3" size="20"onKeyPress="isnumber()"></font></td>
            		</tr><tr>
            		<td width="70%"><font size="4">Select one</td></font>
            		<td width="30%"><font size="4"><select name="T7">
            		                <option value=""></option>
            						<option value="lab1">1</option>
              						<option value="lab2">2</option>

              						<option value="lab3">3</option></select></font></td>
                  </tr>

                </table>
                </center>
              </div>
              <p align="center">
              <input type="submit" name="L" class="btn btn-default" value="Submit" name="submit" onClick="check()">
              <input type="reset" class="btn btn-default" value="Reset" name="reset"></p>
            </form>
            </div>
          </div>
         </div>
        </div>
        <?php
        ?>
    </body>
</html>
